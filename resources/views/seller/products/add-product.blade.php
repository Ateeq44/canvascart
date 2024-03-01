@extends('layouts.authorization')
@section('title') 
Dashboard
@endsection 
@section('content')
<style>
  .card-header{
    display: block !important;
  }
</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css'>
<form   action="" method="post">
  <div class="row row-cards" style="margin-top: 35px;">
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product Images</h3>
          <small>Upload between 3 to 8 images</small>
        </div>
        <div class="card-body">
          <div class="drop-zone">
            <div class="msg">Just drag and drop files here</div>
            <input type="file" multiple="multiple" class="receiver"/>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h3 class="card-title">Product Information</h3>
          <small>Having accurate product information raises discoverability.</small>
        </div>
        <div class="card-body row">
          <div class="mb-3 col-md-12 col-lg-12">
            <label class="form-label">Product Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
          </div>
          <div class="mb-3 col-md-12 col-lg-6">
            <label class="form-label">Category <span class="text-danger">*</span></label>
            <select class="form-control" name="category" id="category">
              @foreach($category as $cat)
              <option value="{{ $cat->id }}">{{ $cat->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3 col-md-12 col-lg-6">
            <label class="form-label">Sub Category <span class="text-danger">*</span></label>
            <select class="form-control colorselector" name="subcategory" id="subcategory">
              <!-- Options will be dynamically added here using JavaScript -->
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header d-block">
          <h3 class="card-title">Product Attributes</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <label class="form-label">Brand <span class="text-danger">*</span></label>
              <select class="form-control" name="product_name">
                @foreach( $brand as $key => $val )
                <option value="{{ $val->id }}">{{ $val->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-12 col-lg-6">
              <label class="form-label">weight <span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Home Address" name="product_name" value="Melbourne, Australia">
            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach($sub_category as $key => $val)
   <div class="col-md-12 col-lg-12 colors" style="display: none;" id="{{ $val->id }}">
    <div class="card">
      <div class="card-body">
        {{ $val->name }}
      </div>
    </div>
  </div>
  @endforeach
  
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="card-body">
        <button type="submit">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
@endsection 
@section('script')
<script>
  $(function() {
    $('.colorselector').change(function(){
      $('.colors').hide();
      $('#' + $(this).val()).show();
    });
  });
</script>
<script>
  var categoryDropdown = document.getElementById('category');
  var subcategoryDropdown = document.getElementById('subcategory');

  categoryDropdown.addEventListener('change', function() {
    subcategoryDropdown.innerHTML = '';
    var categoryId = this.value;
    var filteredSubcategories = @json($sub_category->groupBy('cat_id')->toArray())[categoryId];

    filteredSubcategories.forEach(function(subcategory) {
      var option = document.createElement('option');
      option.value = subcategory.id;
      option.text = subcategory.name;
        // option.classList.add('colors'); // Add class attribute
        // option.classList.add(subcategory.id); // Add color-specific class
        subcategoryDropdown.add(option);
      });
  });
</script>
@endsection 
