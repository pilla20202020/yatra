@extends('backend.layouts.admin.admin')

@section('title', 'Team')

@section('content')
    {{-- For New backend menu bar --}}

    <section>
        <div class="section-body">
            <div class="card">
                <div class="card-head">
                    <header class="text-capitalize">Teams</header>
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
                            <th width="5%">#</th>
                            <th width="30%">Image</th>
                            <th width="20%">Title</th>
                            <th width="20%">Content</th>
                            <th width="20%" class="text-center">Featured</th>
                            <th width="15%" class="text-right">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @each('backend.team.partials.table', $teams, 'team')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



    {{-- <section>
        <div class="section-body">
            <div class="row">
                <div class="tab-content">
                    <div class="tab-pane active" id="first2">
                        {{ Form::open(['route' => 'team.update.order', 'class' => 'form','method' => 'put',]) }}
                        <div class="card">
                            <div class="card-head">
                                <ul class="nav nav-tabs pull-left" data-toggle="tabs">
                                    <li class="active"><a href="#management-team">Management Team</a></li>
                                    <li><a href="#bod">Board of Directors</a></li>
                                </ul>
                                <div class="tools pull-right">
                                    <a class="btn btn-primary ink-reaction" href="{{ route('team.create') }}">
                                        <i class="md md-add"></i>
                                        Add
                                    </a>
                                    <button class="btn btn-primary ink-reaction" type="submit">
                                        <i class="md md-save"></i>
                                        Save
                                    </button>
                                </div>
                            </div>

                            <div class="card-body tab-content">
                                <div class="tab-pane active" id="management-team">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="panel-group" id="menu-accordion" data-sortable="true">
                                            @foreach($management as $key => $team)
                                                <div class="card panel {{ session('collapse_in') == $team->slug ? 'expanded' : '' }}"
                                                     id="{{ $team->id }}">
                                                    <input type="hidden" name="order[]" value="{{ $team->id }}">
                                                    <div class="card-head">
                                                        <header>{{ $team->title }}</header>
                                                        <div class="tools">
                                                            <a href="{{route('team.edit', $team->slug)}}" class="btn btn-flat btn-primary btn-xs">
                                                                <i class="glyphicon glyphicon-edit"></i>
                                                            </a>
                                                            @unless($team->is_primary)
                                                            <a href="{{ route('team.destroy', $team->id) }}">
                                                                <button type="button"
                                                                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                                                                    <i class="glyphicon glyphicon-trash"></i>
                                                                </button>
                                                            @endunless
                                                        </div>
                                                    </div>
                                                </div><!--end .panel -->
                                            @endforeach
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                </div>
                                <div class="tab-pane" id="bod">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="panel-group" id="menu-accordion" data-sortable="true">
                                            @foreach($bod as $key => $team)
                                                <div class="card panel {{ session('collapse_in') == $team->slug ? 'expanded' : '' }}"
                                                     id="{{ $team->id }}">
                                                    <input type="hidden" name="order[]" value="{{ $team->id }}">
                                                    <div class="card-head">
                                                        <header>{{ $team->title }}</header>
                                                        <div class="tools">
                                                            <a href="{{route('team.edit', $team->slug)}}" class="btn btn-flat btn-primary btn-xs">
                                                                <i class="glyphicon glyphicon-edit"></i>
                                                            </a>
                                                            @unless($team->is_primary)
                                                            <a href="{{ route('team.destroy', $team->id) }}">
                                                                <button type="button"
                                                                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                                                                    <i class="glyphicon glyphicon-trash"></i>
                                                                </button>
                                                            @endunless
                                                        </div>
                                                    </div>
                                                </div><!--end .panel -->
                                            @endforeach
                                        </div><!--end .panel-group -->
                                    </div><!--end .col -->
                                </div>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@stop

@push('scripts')
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script src="{{ asset('backend/js/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
