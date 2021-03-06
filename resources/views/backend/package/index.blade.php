@extends('backend.layouts.admin.admin')

@section('title', 'Package')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Package</header>
                    <div class="tools">
                        <a class="btn btn-primary ink-reaction" href="{{ route(substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.')) . '.create') }}">
                            <i class="md md-add"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-hover display">
                        <thead>
                        <tr>
                            <th width="5%">S.No</th>
                            <th width="20%">Image</th>
                            <th width="20%">Name</th>
                            <th width="20%">Category</th>
                            <th width="20%">Price</th>
                            <th width="20%">Departure Date</th>
                            <th width="20%">Trip Duration</th>
                            <th width="20%">Min Group Size</th>
                            <th width="20%">Max Group Size</th>
                            <th width="20%" class="text-center">Featured</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.package.partials.table', $packages, 'package')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@stop

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
