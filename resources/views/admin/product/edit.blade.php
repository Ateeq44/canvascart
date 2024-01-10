<style type="text/css">
  .ck-editor__editable[role="textbox"] {
    min-height: 400px;
  }
  .ck-content .image {
    max-width: 80%;
    margin: 20px auto;
  }
  @media (min-width: 992px){
    .modal-lg, .modal-xl {
    --tblr-modal-width: 1300px !important;
    }
  }
  span.select2-dropdown.select2-dropdown--below {
    top: 416px !important;
  }
</style>


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

                <div class="col-lg-6 col-md-6">
                    <div class="mb-3">
                        <label for="detail" class="form-label">Selling Price</label>
                        <input type='text' value="{{@$row['selling_price']}}" name="selling_price" id="selling_price" class="form-control" />
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
    		          <label for="detail" class="form-label">Color</label>
    			     <select class="js-example-basic-multiple form-control" id="mySelect2" name="color[]" multiple="multiple">
    		          @foreach($lists as $key => $val)
    					<option value="{{$val['color']}}" >{{$val['color']}}</option>
    		          @endforeach
    				</select>
    			</div>
		        
                </div>

				        <div class="col-lg-6 col-md-6">
				          <div class="mb-3">
				                <label for="detail" class="form-label">Size</label>
					           <select class="js-example-basic-multiple form-control" id="mySelect3" name="size[]" multiple="multiple">
				              @foreach($lists as $key => $val)
				                <option value="{{$val['size']}}" >{{$val['size']}}</option>
				              @endforeach
										</select>
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
<script type="text/javascript">
	$('#mySelect2').select2({
        dropdownParent: $('#data_modal')
    });
	$('#mySelect3').select2({
        dropdownParent: $('#data_modal')
    });
        
  CKEDITOR.ClassicEditor.create(document.getElementById("long_detail"), {
      
      toolbar: {
          items: [
              'exportPDF','exportWord', '|',
              'findAndReplace', 'selectAll', '|',
              'heading', '|',
              'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
              'bulletedList', 'numberedList', 'todoList', '|',
              'outdent', 'indent', '|',
              'undo', 'redo',
              '-',
              'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
              'alignment', '|',
              'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
              'specialCharacters', 'horizontalLine', 'pageBreak', '|',
              'textPartLanguage', '|',
              'sourceEditing'
          ],
          shouldNotGroupWhenFull: true
      },
      
      list: {
          properties: {
              styles: true,
              startIndex: true,
              reversed: true
          }
      },
      
      heading: {
          options: [
              { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
              { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
              { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
              { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
              { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
              { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
              { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
          ]
      },
      
      placeholder: 'Welcome to CKEditor 5!',
      fontFamily: {
          options: [
              'default',
              'Arial, Helvetica, sans-serif',
              'Courier New, Courier, monospace',
              'Georgia, serif',
              'Lucida Sans Unicode, Lucida Grande, sans-serif',
              'Tahoma, Geneva, sans-serif',
              'Times New Roman, Times, serif',
              'Trebuchet MS, Helvetica, sans-serif',
              'Verdana, Geneva, sans-serif'
          ],
          supportAllValues: true
      },
      fontSize: {
          options: [ 10, 12, 14, 'default', 18, 20, 22 ],
          supportAllValues: true
      },
      
      htmlSupport: {
          allow: [
              {
                  name: /.*/,
                  attributes: true,
                  classes: true,
                  styles: true
              }
          ]
      },
      htmlEmbed: {
          showPreviews: true
      },
      link: {
          decorators: {
              addTargetToExternalLinks: true,
              defaultProtocol: 'https://',
              toggleDownloadable: {
                  mode: 'manual',
                  label: 'Downloadable',
                  attributes: {
                      download: 'file'
                  }
              }
          }
      },
      mention: {
          feeds: [
              {
                  marker: '@',
                  feed: [
                      '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                      '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                      '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                      '@sugar', '@sweet', '@topping', '@wafer'
                  ],
                  minimumCharacters: 1
              }
          ]
      },
      
      removePlugins: [
          // These two are commercial, but you can try them out without registering to a trial.
          // 'ExportPdf',
          // 'ExportWord',
          'AIAssistant',
          'CKBox',
          'CKFinder',
          'EasyImage',
          // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
          // Storing images as Base64 is usually a very bad idea.
          // Replace it on production website with other solutions:
          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
          // 'Base64UploadAdapter',
          'RealTimeCollaborativeComments',
          'RealTimeCollaborativeTrackChanges',
          'RealTimeCollaborativeRevisionHistory',
          'PresenceList',
          'Comments',
          'TrackChanges',
          'TrackChangesData',
          'RevisionHistory',
          'Pagination',
          'WProofreader',
          'MathType',
          'SlashCommand',
          'Template',
          'DocumentOutline',
          'FormatPainter',
          'TableOfContents',
          'PasteFromOfficeEnhanced'
      ]
  });
</script>