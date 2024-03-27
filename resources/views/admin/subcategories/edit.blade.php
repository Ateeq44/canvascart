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
                        <label for="name" class="form-label">title</label>
                        <input type='text' name="name" id="title" class="form-control" value="{{@$category->name}}" required="" data-mask="slugify" data-target="#slug" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Slug</label>
                        <input type='text' name="slug" id="slug" class="form-control" required="" value="{{@$category->slug}}" readonly />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Category</label>
                        <select name="cat_id" class="form-control">

                            @foreach($list as $key => $val) 
                            <option value="{{$val['id']}}"  @if(@$category->cat_id == $val['id']) selected @endif>{{$val['title']}}</option>
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
