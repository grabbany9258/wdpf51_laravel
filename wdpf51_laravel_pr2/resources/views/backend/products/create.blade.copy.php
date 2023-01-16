@extends('backend.layouts.app')

@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Products</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li>
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-right">
                                            <em class="icon ni ni-search"></em>
                                        </div>
                                        <input type="text" class="form-control" id="default-04"
                                            placeholder="Quick search by id">
                                    </div>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#"
                                            class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white"
                                            data-bs-toggle="dropdown">Status</a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>New Items</span></a></li>
                                                <li><a href="#"><span>Featured</span></a></li>
                                                <li><a href="#"><span>Out of Stock</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nk-block-tools-opt">
                                    <a href="#" data-target="addProduct"
                                        class="toggle btn btn-icon btn-primary d-md-none"><em
                                            class="icon ni ni-plus"></em></a>
                                    <a href="#" data-target="addProduct"
                                        class="toggle btn btn-primary d-none d-md-inline-flex"><em
                                            class="icon ni ni-plus"></em><span>Add Product</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="card">
                <div class="card-inner-group">
                    <div class="card-inner p-0">
                        <div class="nk-tb-list">

                            <div class="nk-tb-item nk-tb-head">
                                <div class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="pid">
                                        <label class="custom-control-label" for="pid"></label>
                                    </div>
                                </div>
                                <div class="nk-tb-col tb-col-sm"><span>Name</span></div>
                                <div class="nk-tb-col"><span>Details</span></div>
                                <div class="nk-tb-col"><span>Price</span></div>

                                <div class="nk-tb-col tb-col-md"><span>Category</span></div>
                                <div class="nk-tb-col tb-col-md"><span>Stock</span></div>
                                <div class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></div>
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1 my-n1">
                                        <li class="me-n1">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit
                                                                    Selected</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove
                                                                    Selected</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update
                                                                    Stock</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-invest"></em><span>Update
                                                                    Price</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-tb-item -->
                            @foreach ($products as $product)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid1">
                                            <label class="custom-control-label" for="pid1"></label>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col tb-col-sm">
                                        <span class="tb-product">
                                            <img src="./images/product/a.png" alt="" class="thumb">
                                            <span class="title">{{ $product->product_name }}

                                            </span>
                                        </span>
                                    </div>
                                    <div class="nk-tb-col">
                                        <span class="tb-sub">

                                            {{ Str::limit($product->product_details, 50, '....') }}
                                        </span>
                                    </div>

                                    <div class="nk-tb-col">
                                        <span class="tb-sub">{{ $product->product_price }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">{{ $product->product_category }}</span>
                                    </div>

                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">{{ $product->product_stock }}</span>
                                    </div>
                                    <div class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em
                                                    class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </div>
                                    <div class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="me-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                        data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-edit"></em><span>Edit
                                                                        Product</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-eye"></em><span>View
                                                                        Product</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-activity-round"></em><span>Product
                                                                        Orders</span></a></li>
                                                            <li><a href="#"><em
                                                                        class="icon ni ni-trash"></em><span>Remove
                                                                        Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .nk-tb-item -->
                            @endforeach

                        </div>



                        {{-- {{ $products->links() }} --}}

                        {{-- <div class="d-flex justify-content-center">
              {!! $products->links() !!}
            </div> --}}

                        <!-- .nk-tb-list -->
                    </div>
                    <div class="card-inner">
                        {{ $products->links('vendor.pagination.dashlite') }}

                    </div>
                </div>
            </div>
        </div><!-- .nk-block -->

    </div>
@endsection
