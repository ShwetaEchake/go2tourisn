@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Package</h1>

    <form action="{{ route('admin.package.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Pakage</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.package.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input type="text" name="p_name" class="form-control" value="{{ old('p_name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Sequence No.</label>
                    <input type="number" name="d_seq" class="form-control" value="{{ old('d_seq') }}" >
                </div>
                <div class="form-group">
                    <label for="">Slug <span style="color: red;">*Special characters are not allowed!(Only use - symbol)</span></label>
                    <input type="text" name="p_slug" id="p_slug" title="" class="form-control" pattern="^\S+$" value="{{ old('p_slug') }}">
                </div>
                <div class="form-group">
                    <label for="">Photo *</label>
                    <div>
                        <input type="file" name="p_photo">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="">Short Description</label>
                    <textarea name="p_description_short" class="form-control h_100" cols="30" rows="10">{{ old('p_description_short') }}</textarea>
                </div>
                 <div class="form-group">
                    <label for="">Itinerary</label>
                    <textarea name="p_itinerary" class="form-control editor" cols="30" rows="10">{{ old('p_itinerary') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="p_description" class="form-control editor" cols="30" rows="10">{{ old('p_description') }}</textarea>
                </div>

               
               
                <div class="form-group">
                    <label for="">Location</label>
                    <textarea name="p_location" class="form-control h_100" cols="30" rows="10">{{ old('p_location') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Minimum</label>
                   <input type="text" name="p_min_pack" class="form-control" value="{{ old('p_min_pack') }}">
                </div>
                <div class="form-group">
                    <label for="">Best time to visit</label>
                   <input type="text" name="p_best_time_to_visit" class="form-control" value="{{ old('p_best_time_to_visit') }}">
                </div>
                <div class="form-group">
                    <label for="">Trip Level</label>
                   <input type="text" name="p_trek_level" class="form-control" value="{{ old('p_trek_level') }}">
                </div>
                <div class="form-group">
            <label for="">Fixed Departure Dates</label>
                   <input type="text" name="p_fix_departure_date" class="form-control" value="{{ old('p_fix_departure_date') }}">
                </div>

                <div class="form-group">
                    <label for="">Start Date</label>
                    <input id="datepicker" type="text" name="p_start_date" class="form-control" value="{{ old('p_start_date') }}">
                </div>
                <div class="form-group">
                    <label for="">End Date</label>
                    <input id="datepicker1" type="text" name="p_end_date" class="form-control" value="{{ old('p_end_date') }}">
                </div>
                <div class="form-group">
                    <label for="">Last Booking Date</label>
                    <input id="datepicker2" type="text" name="p_last_booking_date" class="form-control" value="{{ old('p_last_booking_date') }}">
                </div>
                <div class="form-group">
                    <label for="">Map</label>
                    <textarea name="p_map" class="form-control h_100" cols="30" rows="10">{{ old('p_map') }}</textarea>
                </div>
                

                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="p_price" class="form-control" value="{{ old('p_price') }}">
                </div>

                <div class="form-group">
                    <label for="">Policy</label>
                    <textarea name="p_policy" class="form-control editor" cols="30" rows="10">{{ old('p_policy') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Terms</label>
                    <textarea name="p_terms" class="form-control editor" cols="30" rows="10">{{ old('p_terms') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Is Featured?</label>
                    <select name="p_is_featured" class="form-control">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Destination</label>
                    <select name="destination_id" class="form-control select2">
                        @foreach($destination as $row)
                            <option value="{{ $row->id }}">{{ $row->d_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Services</label>
                    <select name="services_id" class="form-control select2">
                        @foreach($services as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
<script type="text/javascript">
    

     $(function() {
        $('#p_slug').on('keypress', function(e) {
            if (e.which == 32){
                console.log('Space Detected');
                return false;
            }
        });
});
</script>
@endsection
