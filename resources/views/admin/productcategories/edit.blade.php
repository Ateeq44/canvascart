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
                        <label for="name" class="form-label">Category title</label>
                        <input type='text' name="title" id="title" class="form-control" value="{{@$category->title}}" required="" data-mask="slugify" data-target="#slug" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Slug</label>
                        <input type='text' name="slug" id="slug" class="form-control" required="" value="{{@$category->slug}}" readonly />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Category description</label>
                        <input type='text' name="category_description" id="category_description" value="{{@$category->category_description}}" class="form-control" required="" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Show as top</label>
                        <input type='checkbox' name="top" id="top" value="1" @if(@$category->top == 1) checked @endif />
                    </div>
                </div>
                <?php $image = json_decode($category->image) ?>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Category image</label>
                        <input type='file' name="image[]" id="detail" class="form-control" />
                        <img style="width: 100px;margin-top: 20px;" src="{{asset('upload/category/'.$image[0])}}" alt="">
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
