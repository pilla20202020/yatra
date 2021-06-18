<div class="tab-pane" id="tab3">
    <br/><br/>
    @if(isset($itineraries))
    @foreach($itineraries as $itinerary)
        <div id="additernary" >
            <div class="row">
                <div class="col-md-3">
                    <label for="day">Day</label>
                    <input class="form-control" name="day[]" type="text" placeholder="Day" value="{{ old('day', isset($itinerary->day) ? $itinerary->day : '') }}">
                </div>

                <div class="col-md-4">
                    <label for="title">Itinerary Title</label>
                    <input type="text" name="itinerary_title[]" class="form-control" placeholder="Iternary Title" value="{{ old('day', isset($itinerary->itinerary_title) ? $itinerary->itinerary_title : '') }}">
                </div>

                <div class="col-md-2" style="margin-top: 45px;">
                    <input id="additemrow" type="button" class="btn btn-primary mr-1" value="Add Row">
                </div>

                <div class="col-md-1" style="margin-top: 45px">
                    <a href="javascript:;" class="btn btn-sm btn-danger" onclick="remove_product(this)"><i class="fa fa-trash" ></i></a>
                </div>

                <div class="col-sm-12" style="margin-top: 20px">
                    <p>Description</p>
                    <textarea name="itinerary_description[]" id="ckeditor" class="ckeditor">{{old('itinerary_description',isset($itinerary->itinerary_description)?$itinerary->itinerary_description : '')}}</textarea>
                </div>
            </div>
        </div>
        <input type="hidden" id="temp" value="0" name="temp">
    @endforeach
    @else
    <div id="additernary" >
        <div class="row">
            <div class="col-md-3">
                <input class="form-control" name="day[]" type="text" placeholder="Day" value="{{ old('day', isset($package->itinerary->day) ? $package->itinerary->day : '') }}">
            </div>

            <div class="col-md-4">
                <input type="text" name="itinerary_title[]" class="form-control" placeholder="Iternary Title">
            </div>

            <div class="col-md-2" style="margin-top: 45px;">
                <input id="additemrow" type="button" class="btn btn-primary mr-1" value="Add Row">
            </div>

            <div class="col-sm-12" style="margin-top: 20px">
                <p>Description</p>
                <textarea name="itinerary_description[]" id="ckeditor" class="ckeditor">{{old('itinerary_description',isset($package->itinerary_description)?$package->itinerary_description : '')}}</textarea>
            </div>
        </div>
    </div>
    <input type="hidden" id="temp" value="0" name="temp">
    @endif

</div>
<!--end #tab3 -->
