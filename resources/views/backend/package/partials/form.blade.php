@csrf

@push('styles')
    <link href="{{ asset('backend/assets/css/theme-default/libs/wizard/wizard.css?1425466601') }}" rel="stylesheet">
@endpush


    <div class="section-body contain-lg">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body ">
                        <div id="rootwizard1" class="form-wizard form-wizard-horizontal">
                                <div class="form-wizard-nav">
                                    <div class="progress"><div class="progress-bar progress-bar-primary"></div></div>
                                    <ul class="nav nav-justified">
                                        <li class="active"><a href="#tab1" data-toggle="tab"><span class="step">1</span> <span class="title">Tour Description</span></a></li>
                                        <li><a href="#tab2" data-toggle="tab"><span class="step">2</span> <span class="title">Gallery</span></a></li>
                                        <li><a href="#tab3" data-toggle="tab"><span class="step">3</span> <span class="title">Iternery</span></a></li>
                                        <li><a href="#tab4" data-toggle="tab"><span class="step">4</span> <span class="title">Cost Includes</span></a></li>
                                        <li><a href="#tab5" data-toggle="tab"><span class="step">5</span> <span class="title">Map</span></a></li>
                                    </ul>
                                </div><!--end .form-wizard-nav -->
                                <div class="tab-content clearfix">


                                    <div class="tab-pane active" id="tab1">
                                        <br/><br/>
                                        <div class="form-group">
                                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', isset($package->title) ? $package->title : '') }}">
                                            <label for="title" class="control-label">Title</label>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <select name="category_id" class="form-control category_id">
                                                    <option value="">Select category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if(isset($category_search)) @if($category_search->id == $category->id) selected @endif @endif>{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                                <span id="textarea1-error" class="text-danger">{{ $errors->first('$package->category_id') }}</span>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="subcategory_id" class="form-control subcategory_class">
                                                    <option value="">Select Sub Category</option>
                                                    @if(isset($category_search))
                                                    @foreach($subcategories as $subcategory)
                                                        <option value="{{$subcategory->id}}" @if(isset($subcategory_search)) @if($subcategory_search->id == $subcategory->id) selected @endif @endif>{{$subcategory->title}}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                <span id="textarea1-error" class="text-danger">{{ $errors->first('$package->subcategory_id') }}</span>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <strong>Description</strong>
                                                    <textarea name="description" id="" class="ckeditor">{{old('description',isset($package->description)?$package->description : '')}}</textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="number" name="rank" class="form-control" required value="{{ old('rank', isset($package->rank) ? $package->rank : '') }}"/>
                                                    <label for="rank" class="control-label">Rank</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="number" name="trip_duration" class="form-control" required value="{{ old('trip_duration', isset($package->trip_duration) ? $package->trip_duration : '') }}"/>
                                                    <label for="trip_duration" class="control-label">Trip Duration</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="number" name="price" class="form-control" required value="{{ old('price', isset($package->price) ? $package->price : '') }}"/>
                                                    <label for="price" class="control-label">Price</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="number" name="max_altitude" class="form-control" required value="{{ old('max_altitude', isset($package->max_altitude) ? $package->max_altitude : '') }}"/>
                                                    <label for="max_altitude" class="control-label">Max Altitude</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="date" name="departure" class="form-control" required value="{{ old('departure', isset($package->departure) ? $package->departure : '') }}"/>
                                                    <label for="departure" class="control-label">Departure</label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="time" name="departure_time" class="form-control" required value="{{ old('departure_time', isset($package->departure_time) ? $package->departure_time : '') }}"/>
                                                    <label for="departure" class="control-label">Departure Time</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" name="max_group_size" class="form-control" value="{{ old('max_group_size', isset($package->max_group_size) ? $package->max_group_size : '') }}"/>
                                                    <label for="max_group_size" class="control-label">Max Group Size</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="number" name="min_group_size" class="form-control" value="{{ old('min_group_size', isset($package->min_group_size) ? $package->min_group_size : '') }}"/>
                                                    <label for="min_group_size" class="control-label">Min Group Size</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="is_featured" class="control-label">Featured</label>
                                                <div class="form-group">
                                                    <input type="checkbox" id="switch_demo_1" name="is_featured"
                                                        {{ old('is_featured', isset($package->is_featured) ? $package->is_featured : '')=='1' ? 'checked':'' }} data-switchery/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end #tab1 -->



                                    @include('backend.package.partials.gallery-tab')
                                    <!--end #tab2 -->

                                    @include('backend.package.partials.iternery-tab')
                                    <!--end #tab3 -->

                                    <div class="tab-pane" id="tab4">
                                        <br/><br/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">

                                                    <p>Cost Includes</p>
                                                    <textarea name="cost_includes" id="ckeditor" class="ckeditor">{{old('cost_includes',isset($package->cost_includes)?$package->cost_includes : '')}}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <p>Cost Excludes</p>
                                                    <textarea name="cost_excludes" id="ckeditor" class="ckeditor">{{old('cost_excludes',isset($package->cost_excludes)?$package->cost_excludes : '')}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end #tab4 -->

                                    <div class="tab-pane" id="tab5">
                                        <br/><br/>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="location_map" class="form-control" value="{{ old('map', isset($package->location_map) ? $package->location_map : '') }}"/>
                                                <label for="location_map" class="control-label">Location Map</label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success" style="margin-top: 30px;position: relative;left: 50%;transform: translateX(-50%)">Submit</button>
                                    </div>



                                </div><!--end .tab-content -->
                                <ul class="pager wizard">
                                    <li class="previous first"><a class="btn-raised" href="javascript:void(0);">First</a></li>
                                    <li class="previous"><a class="btn-raised" href="javascript:void(0);">Previous</a></li>
                                    <li class="next last"><a class="btn-raised" href="javascript:void(0);">Last</a></li>
                                    <li class="next"><a class="btn-raised" href="javascript:void(0);">Next</a></li>
                                </ul>
                        </div><!--end #rootwizard -->
                    </div><!--end .card-body -->
                </div><!--end .card -->
                <em class="text-caption">Form wizard</em>
            </div><!--end .col -->
        </div>
    </div>


@push('scripts')
    <script src="{{ asset('backend/assets/js/libs/wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/core/demo/DemoFormWizard.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropify').dropify();
        });

        $('.category_id').change(function(e){
            e.preventDefault();
            var category_id = $(this).val();
            var body;
            $.ajax({
                type: 'POST',
                url: '{{route('package.packagecategoryajax')}}',
                data: {
                    _token: $("meta[name='csrf-token']").attr('content'),
                    category_id: category_id,
                },
                success:function(response){
                    if(typeof(response) != "object"){
                        response = JSON.parse(response);
                    }
                    console.log(response.data);
                    if(response.data){
                        $.each(response.data, function(key, subcategory){
                            console.log(subcategory);
                            body += "<option value='"+subcategory['id']+"'>"+subcategory['title']+"</option>";
                        });
                        $('.subcategory_class').html(body);
                    }
                }
            })

        })

            $(document).on('click', '#additemrow', function () {
                var b=parseFloat($("#temp").val());
                b=b+1;
                $("#temp").val(b);
                var temp=$("#temp").val();
                var tst=$('<div class="row">' +
                    '<div class="col-md-4">' +
                    '<input class="form-control" name="day[]" type="text" placeholder="Day">' +
                    '</div>' +
                    '<div class="col-md-4">' +
                    '<input class="form-control" name="itinerary_title[]" type="text" placeholder="Itinerary Title">' +
                    '</div>' +
                    '<div class="col-md-1" style="margin-top: 45px">' +
                    '<input id="additemrow" type="button" class="btn btn-primary mr-1" value="Add Row">' +
                    '</div>' +
                    '<div class="col-md-1" style="margin-top: 45px">' +
                    '<a href="javascript:;" class="btn btn-sm btn-danger" onclick="remove_product(this)"><i class="fa fa-trash" ></i></a>' +
                    '</div>' +
                    '<div class="col-md-12" style="margin-top: 20px">' +
                    '<p>Description</p>' +
                    '<textarea name="itinerary_description[]" id="ckeditor" class="ckeditor form-control">{{old("itinerary_description",isset($package->itinerary_description)?$package->itinerary_description : "")}}</textarea>' +
                    '</div>' +
                    '</div>'
                );
                $('#additernary').append(tst);
                selectRefresh();
            });


            function remove_product(o) {
                var p = o.parentNode.parentNode;
                p.parentNode.removeChild(p);
            }
            function remove_productforedit(o) {
                var p = o.parentNode.parentNode;
                p.parentNode.removeChild(p);
            }
    </script>
@endpush
