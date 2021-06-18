@extends('backend.layouts.admin.admin')

@section('title', 'Package')

@section('content')
    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">{{$package->title}}</header>
                </div>
                <div class="card-body viewdetail">

                    <h4 class="pl-3 mb-3">Package Name: <span class="pl-3">{{ucfirst($package->title)}}</span></h4>
                    <h4 class="pl-3 mb-3">Category: <span class="pl-3">{{ucfirst($category_search->title)}}</span></h4>
                    <h4 class="pl-3 mb-3">Sub-Category: <span class="pl-3">{{ucfirst($subcategory_search->title)}}</span></h4>
                    <h4 class="pl-3 mb-3">Departure: <span class="pl-3">{{ucfirst(@$package->departure)}}</span></h4>
                    <h4 class="pl-3 mb-3">Departure_Time: <span class="pl-3">{{ucfirst(@$package->departure_time)}}</span></h4>
                    <h4 class="pl-3 mb-3">Total Price: <span class="pl-3">Rs {{@$package->price}}</span></h4>
                    <h4 class="pl-3 mb-3">Package Description: <span class="pl-3">{!! $package->description !!}</span></h4>
                    <h4 class="pl-3 mb-3">Trip duration: <span class="pl-3">{{ucfirst($package->trip_duration)}} Days</span></h4>
                    <h4 class="pl-3 mb-3">Max Altitude: <span class="pl-3">{{ucfirst($package->max_altitude)}} m</span></h4>
                    <h4 class="pl-3 mb-3">Min Group Size : <span class="pl-3">{{ucfirst($package->min_group_size)}} </span></h4>
                    <h4 class="pl-3 mb-3">Max Group Size : <span class="pl-3">{{ucfirst($package->max_group_size)}} </span></h4>
                    <h4 class="pl-3 mb-3">Cost Includes : <span class="pl-3">{!! ucfirst($package->cost_includes)!!} </span></h4>
                    <h4 class="pl-3 mb-3">Cost Excludes : <span class="pl-3">{!! ucfirst($package->cost_excludes) !!} </span></h4>


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
