<?php

namespace App\Http\Controllers\Admin\Auth;

use Throwable;
use Carbon\Carbon;
use App\Models\Plan;
use App\Models\User;
use App\Models\Admin;
use App\Models\State;
use Ramsey\Uuid\Uuid;
use App\Models\Author;
use App\Classes\Logger;
use App\Models\EntityPlan;
use Illuminate\Support\Str;
use App\Traits\HasIpBlocker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\AuthRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminAuthRepository extends AuthRepository
{

    // All the necessary setup to integrate the authentication via the AuthRepository

    protected $model = Admin::class;
    protected $loginSuccessRedirectUrl = 'admin.dashboard';
    protected $loginUrl = 'admin.login';
    protected $guard = 'admin';

    // ----------------------Authentication Logic----------------------
    public function login($request)
    {
        if ($request->isMethod('GET')) {
            return view('admin.auth.login');
        }

        if ($request->isMethod('POST')) {

            return $this->processLoginRequest($request);
        }
        return redirect(route('home'));
    }



    public function resetPassword($request)
    {
        if ($request->isMethod('get')) {
            $token = $request->token;
            if (!$token) {
                abort(403);
            }
            $isValidToken = DB::table('password_resets')->where(['token' => $token, 'tokenable_type' => 'admin'])->first();
            if (!$isValidToken) {
                abort(403, 'Link Expired');
            }
            return view('admin.auth.forget-password.reset-password', compact('token'));
        }
        if ($request->isMethod('post')) {

            try {
                $password = $request->password;
                $isValidToken = DB::table('password_resets')->where([
                    'token' => $request->token,
                    'tokenable_type' => 'admin'
                ])->first();
                if (!$isValidToken) {
                    return errorResponse('Link Expired Try generating new one');
                }
                $admin = Admin::where('email', $isValidToken->email)->first();
                if (!$admin) {
                    return errorResponse('No Associated user found');
                }
                $admin->password = Hash::make($password);
                $admin->update();
                DB::table('password_resets')->where(['email' => $admin->email, 'tokenable_type' => 'admin'])->delete();
                return successResponse('Password has been reset successfully', route('home'));
            } catch (Throwable $th) {
                return throwException($th);
            }
        }
        abort(405, 'Method now allowed');
    }



    // -----------Chnage Password ------------

    public function changePasswordPage()
    {
        return view('admin.profile.change-password');
    }
    public function changePassword($request)
    {
        $url = route('admin.logout');
        try {
            $admin = authUser('admin');

            if (Hash::check($request->old_password, $admin->password)) {
                $newpw = Hash::make($request->password);
                $updated = $admin->update(['password' => $newpw]);
                if ($updated) {
                    return successResponse('Password Changed Successfully', $url);
                }
                return errorResponse('Something went wrong');
            }
            return errorResponse('Old Password does not match our records');
        } catch (Throwable $th) {
            return throwException($th);
        }
    }
}
