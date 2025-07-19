<?php

namespace App\Http\Controllers\Admin\FoodItem;


use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class FoodItemRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $commonRules = [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
            'full_price' => 'required|numeric|min:0',
            'half_price' => 'nullable|numeric|min:0',
            'is_featured' => 'nullable|boolean',
            'is_starter' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ];

        if ($this->isMethod('POST')) {
            return $this->store($commonRules);
        } elseif ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            return $this->update($commonRules);
        }

        return [];
    }

    public function messages()
    {
        return [
            // 'staff_type.required' => 'Please Select a Staff Type',
            // 'specialization.required' => 'Please Add a Specialization',
            // 'registration_no.unique' => 'This Registration No Already Associated With Another Staff',
            // 'email.unique' => 'This email is already taken, use another email',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            failureResponse($validator);
        }

        parent::failedValidation($validator);
    }
    public function store($commonRules)
    {
        return array_merge($commonRules, [
            'avatar' => 'nullable|file|mimes:png,jpg|max:2048',


        ]);
    }

    public function update($commonRules)
    {
        $uuid = $this->route('staff');
        return array_merge($commonRules, [

            'avatar' => 'nullable|file|mimes:png,jpg|max:2048',

            // 'email' => ['required', 'email', Rule::unique('admins', 'email')->ignore($uuid, 'uuid'),],
            // 'phone' => ['required', 'numeric', Rule::unique('admins', 'phone')->ignore($uuid, 'uuid'),],
            // 'registration_no' => ['required', Rule::unique('staffs', 'registration_no')->ignore($uuid, 'uuid'),],

        ]);
    }

    public function generateCredentials()
    {
        $uuid = $this->route('staff');
    }
}
