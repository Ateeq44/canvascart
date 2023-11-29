<div class="modal-header">
    <h5 class="modal-title">{{@$page_title}}</h5>
    <a href="{{url($module['action'])}}" class="btn-close" aria-label="Close"></a>
</div>
<div class="modal-body">
    <form class="" method="post" action="{{$action}}" enctype="multipart/form-data" data-action="make_ajax_file" data-action-after="reload">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Course Name</label>
                        <input type='text' value="{{@$row['course_name']}}" name="course_name" id="course_name" class="form-control" required="" data-mask="slugify"  data-target="#slug" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Course Slug</label>
                        <input type='text' name="slug" id="slug" class="form-control" required="" value="{{@$row['slug']}}"   />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Accredition</label>
                        <input type='text' value="{{@$row['accredition']}}" name="accredition" id="accredition" class="form-control" required="" />
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Short Detail</label>
                        <textarea  name="short_detail" id="short_detail" class="form-control" />{{@$row['short_detail']}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Long Detail</label>
                        <textarea name="long_detail" id="long_detail" class="form-control" />{{@$row['long_detail']}}</textarea>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Course Duration</label>
                        <input type='text' value="{{@$row['course_duration']}}" name="course_duration" id="course_duration" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Price</label>
                        <input type='text' value="{{@$row['price']}}" name="price" id="price" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Discount</label>
                        <input type='text' value="{{@$row['discount']}}" name="discount" id="discount" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Discount End Date</label>
                        <input type='text' value="{{@$row['discount_end_date']}}" name="discount_end_date" id="discount_end_date" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Start Date</label>
                        <input type='date' value="{{@$row['start_date']}}" name="start_date" id="start_date" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">End Date</label>
                        <input type='date' value="{{@$row['end_date']}}" name="end_date" id="end_date" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Dificulty Level</label>
                        <select name="dificulty_level" id="dificulty_level" class="form-control">
                            @foreach(config('constants.course_difficulity') as $key => $val)
                            <option value="{{++$key}}" @if(++$key == $row['dificulty_level']) selected @endif>{{$val}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Feature Image</label>
                        <input type='file' name="featured_img" id="featured_img" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Course Type</label>
                        <select name="is_feature" id="is_feature" class="form-control">
                            <option>Medical rep training</option>
                            <option>Leader training</option>
                            <option>Featured training</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Vedio Url</label>
                        <input type='text' value="{{@$row['video_url']}}" name="video_url" id="video_url" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Category</label>
                        <select name="cat_id" id="cat_id" class="form-control">
                         @foreach($list as $key => $val)
                         <option value="{{$val['id']}}" @if($val['id']== $row['cat_id']) selected @endif>{{$val['title']}}</option>
                         @endforeach
                     </select>
                 </div>
             </div>
         </div>
     </div>

     <div class="card-footer">
        <button type="submit" class="btn btn-success d-none d-sm-inline-block mr-2">Update</button>
        <a  class="btn btn-secondary" href="{{url($module['action'])}}">Cancel</a>
    </div>
</form>
</div>
{{-- <div class="modal-footer">
    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
        Cancel
    </a>
    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
        Create new report
    </a>
</div> --}}