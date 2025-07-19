@extends('admin.app.app')

@section('title', 'Food Item')
@section('breadcrumb', 'Food Item')
@section('page-title', 'Food Item')
@section('breadcrumb-button')

    <div class="d-flex align-items-center">
        <button class="btn btn-sm btn-primary btn-label actionHandler" data-url="{{ route('admin.fooditem.create') }}">
            <i class="ri-add-circle-line label-icon me-1"></i>
            Add New Food Item
        </button>
    </div>

@endsection
@section('content')

    <div class="modal" id="AjaxModal" tabindex="-1"></div>
    <div class="card">
        {{-- <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">All Entities</h3>
        </div> --}}
        <div class="card-body" id="Saarni">

            <table class="table-bordered w-100 dt-datatable table">
                <thead>
                    <tr>
                        <th data-sortable="true" data-column="name">Food Item</th>
                        <th data-sortable="true" data-column="name">Category</th>
                        <th>Allergens</th>
                        <th>Status</th>
                        <th>Featured</th>
                        <th>Starter</th>
                        <th>
                            <div class="text-center">Price</div>
                            <div class="d-flex justify-space-between text-center">
                                <div class="mx-3">Full</div>
                                <div >Half</div>
                            </div>
                        </th>
                        <th data-sortable="true" data-column="created_at">Created At</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascripts')
    @php
        // Getting the search param of serviceId from current request if available

        $options = [
            'selector' => 'Saarni',
            'url' => route('admin.fooditem.index'),
            'moduleName' => 'Food Item List',
        ];
    @endphp
    @include('admin.app.includes.saarnijs', ['options' => $options])
@endsection
