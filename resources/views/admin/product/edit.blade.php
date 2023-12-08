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
                        <label for="name" class="form-label">Product Name</label>
                        <input type='text' value="{{@$row['product_name']}}" name="product_name" id="product_name" class="form-control" required="" data-mask="slugify"  data-target="#slug" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Course Slug</label>
                        <input type='text' value="{{@$row['slug']}}" name="slug" id="slug" class="form-control" required=""  />
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

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Price</label>
                        <input type='text' value="{{@$row['price']}}" name="price" id="price" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Short Detail</label>
                        <textarea name="short_detail" id="short_detail" class="form-control">{{@$row['short_detail']}}</textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Long Detail</label>
                        <textarea name="long_detail" id="long_detail" class="form-control" >{{@$row['long_detail']}}</textarea>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Discount Start Date</label>
                        <input type='date' value="{{@$row['discount_start_date']}}" name="discount_start_date" id="discount_start_date" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Discount End Date</label>
                        <input type='date' value="{{@$row['discount_end_date']}}" name="discount_end_date" id="discount_end_date" class="form-control" />
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Size </label>
                        <input type='text'  value="{{@$row['size']}}" name="size[]" id="size" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Color </label>
                        <input type='text' value="{{@$row['color']}}" name="color[]" id="color" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Feature </label>
                        <input type='checkbox'  value="1" name="is_feature" id="is_feature" class="" @if(@$row['is_feature'] == 1) checked @endif/>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Status </label>
                        <input type='checkbox' value="1" name="status"  id="status" class="" @if(@$row['status'] == 1) checked @endif/>
                    </div>
                </div>
                @if(auth()->user()->role == '1')
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Admin Approved </label>
                        <input type='checkbox' value="1"  name="admin_approval" id="admin_approval" class="" @if(@$row['admin_approval'] == 1) checked @endif/>
                    </div>
                </div>
                @endif
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Feature Image</label>
                        <input type='file' name="featured_img" id="featured_img" class="form-control" />
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
