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
						<input type='text' name="product_name" id="product_name" class="form-control" required="" data-mask="slugify"  data-target="#slug" />
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="name" class="form-label">Course Slug</label>
						<input type='text' name="slug" id="slug" class="form-control" required=""  />
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">Category</label>
						<select name="cat_id" id="cat_id" class="form-control">
							@foreach($list as $key => $val) 
							<option value="{{$val['id']}}" >{{$val['title']}}</option>
							@endforeach 
						</select>
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">Price</label>
						<input type='text' name="price" id="price" class="form-control" />
					</div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="mb-3">
						<label for="detail" class="form-label">Short Detail</label>
						<textarea name="short_detail" id="short_detail" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="mb-3">
						<label for="detail" class="form-label">Long Detail</label>
						<textarea name="long_detail" id="long_detail" class="form-control" ></textarea>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">Discount Start Date</label>
						<input type='date' name="discount_start_date" id="discount_start_date" class="form-control" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">Discount End Date</label>
						<input type='date' name="discount_end_date" id="discount_end_date" class="form-control" />
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">	Size </label>
						<input type='text' name="	size[]" id="size" class="form-control" />
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">	Color </label>
						<input type='text' name="	color[]" id="color" class="form-control" />
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Feature </label>
                        <input type='checkbox'  value="1" name="is_feature" id="is_feature" class="" />
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label"> Status </label>
                        <input type='checkbox' value="1" name="status" id="status" class="" />
                    </div>
                </div>

				<div class="col-lg-6 col-md-6">
					<div class="mb-3">
						<label for="detail" class="form-label">Feature Image</label>
						<input type='file' name="featured_img" id="featured_img" class="form-control" />
					</div>
				</div>
				
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-success d-none d-sm-inline-block mr-2">Create</button>
			<a  class="btn btn-secondary" href="{{url($module['action'])}}">Cancel</a>
		</div>
	</form>
</div>
