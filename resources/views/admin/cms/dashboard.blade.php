@extends('admin.app.app')
@section('title', 'Dashboard')
@section('page-title', 'Menu')
@section('css')

@endsection
@section('breadcrumb-button')
    <div class="d-flex align-items-center">
        <button class="btn btn-sm btn-primary btn-label actionHandler" data-url="{{ route('admin.category.create') }}">
            <i class="ri-add-circle-line label-icon me-1"></i>
            Add New
        </button>
    </div>
@endsection
@section('content')
    <div class="modal" id="AjaxModal" tabindex="-1"></div>

    {{-- <div class="container-fluid mt-4">
        <!-- Dashboard Summary Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text fs-4">1,245</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Revenue</h5>
                        <p class="card-text fs-4">₹85,320</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">New Customers</h5>
                        <p class="card-text fs-4">312</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger h-100 shadow">
                    <div class="card-body">
                        <h5 class="card-title">Pending Orders</h5>
                        <p class="card-text fs-4">17</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="mb-0">Recent Orders</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ravi Kumar</td>
                            <td>Paneer Butter Masala, Naan</td>
                            <td>₹450</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td>Jul 8, 2025</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sneha Rani</td>
                            <td>Biryani, Coke</td>
                            <td>₹350</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>Jul 8, 2025</td>
                        </tr>
                        <!-- More rows -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="d-flex justify-content-end gap-2">
            <a href="" class="btn btn-outline-primary">Add Menu Item</a>
            <a href="" class="btn btn-outline-secondary">Manage Categories</a>
        </div>
    </div> --}}

    <div class="container mt-5">


        <div class="row">
            <!-- Menu Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/img/deal/1.jpg') }}" class="card-img-top" alt="Paneer Butter Masala">
                    <div class="card-body">
                        <h5 class="card-title">Paneer Butter Masala</h5>
                        <p class="text-muted mb-1"><strong>Category:</strong> Main Course</p>
                        <p class="mb-2">
                            <strong>Half:</strong> ₹130 <br>
                            <strong>Full:</strong> ₹250
                        </p>
                        <p class="card-text small text-truncate">Creamy tomato-based paneer curry served hot.</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/img/deal/1.jpg') }}" class="card-img-top" alt="Chicken Biryani">
                    <div class="card-body">
                        <h5 class="card-title">Chicken Biryani</h5>
                        <p class="text-muted mb-1"><strong>Category:</strong> Rice & Biryani</p>
                        <p class="mb-2">
                            <strong>Half:</strong> ₹180 <br>
                            <strong>Full:</strong> ₹320
                        </p>
                        <p class="card-text small text-truncate">Spicy, fragrant basmati rice with marinated chicken.</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                </div>
            </div>

            <!-- Menu Item 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/img/deal/1.jpg') }}" class="card-img-top" alt="Gulab Jamun">
                    <div class="card-body">
                        <h5 class="card-title">Gulab Jamun</h5>
                        <p class="text-muted mb-1"><strong>Category:</strong> Dessert</p>
                        <p class="mb-2">
                            <strong>Half:</strong> ₹50 <br>
                            <strong>Full:</strong> ₹80
                        </p>
                        <p class="card-text small text-truncate">Sweet, soft and juicy traditional Indian dessert.</p>
                    </div>
                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('javascripts')

@endsection
