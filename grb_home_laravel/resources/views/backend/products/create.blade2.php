@extends('/backend.layouts.app')

@section('content')
  <div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between">
        <div class="nk-block-head-content">
          <h3 class="nk-block-title page-title">New Products</h3>
        </div>
        <!-- .nk-block-head-content -->
      </div>
      <!-- .nk-block -->

    </div>
    <!-- .nk-block-head -->
    <form name="productForm" action="{{ url('/products') }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="nk-block">
        <div class="row g-3">
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="product-title">Product Name</label>
              <div class="form-control-wrap">
                <input type="text" class="form-control" id="product-title" name="product_name" />
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="sale-price">Product Price</label>
              <div class="form-control-wrap">
                <input type="text" class="form-control" id="sale-price" name="product_price" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label" for="stock">Product Stock</label>
              <div class="form-control-wrap">
                <input type="text" class="form-control" id="stock" name="product_stock" />
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="regular-price">Product Details</label>
              <div class="form-control-wrap">
                <textarea name="product_details" id="product_details" class="form-control no-resize"></textarea>

              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="category">Product Category</label>
              <div class="form-control-wrap">
                <input type="text" class="form-control" id="category" name="product_category" />
              </div>
            </div>
          </div>

          <div class="col-12">
            {{-- <div class="upload-zone small bg-lighter my-2"> --}}
            {{-- <div class="dz-message"> --}}
            <input type="file" class="form-control" id="customFile" name="product_image">
            <span class="dz-message-text">Drag and drop file</span>
            {{-- </div> --}}
            {{-- </div> --}}
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary">
              <em class="icon ni ni-plus"></em><span>Add New</span>
            </button>
          </div>
    </form>
  </div>
  </div>

  <!-- .nk-block -->
  </div>
@endsection
