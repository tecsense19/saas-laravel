@php
    $productImage = isset($productDetails) ? $productDetails->product_image : '';
    $productCouponImage = isset($productDetails) ? $productDetails->product_coupon_image : '';
    $product_name = isset($productDetails) ? $productDetails->product_name : old('product_name');
    $product_price = isset($productDetails) ? $productDetails->product_price : old('product_price');
    $distributor_price = isset($productDetails) ? $productDetails->distributor_price : old('distributor_price');
    $product_description = isset($productDetails) ? $productDetails->product_description : old('product_description');

    $category_id = isset($productDetails) ? $productDetails->category_id : old('category_id');
    $qr_id = isset($productDetails) ? $productDetails->qr_id : old('qr_id');
    $hsnsac_id = isset($productDetails) ? $productDetails->hsnsac_id : old('hsnsac_id');

    $allOptions = [];
    if(isset($productDetails)) {
        $allOptions = array_reduce($productDetails->variant, function ($carry, $variant) {
            return array_merge($carry, $variant->variant_opt_name);
        }, []);
    }
@endphp
<x-tenant-app-layout>
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Edit Product</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ url('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Product Management</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="row g-7">
                    <div class="col-xl-12">
                        <div class="card card-flush h-lg-100" id="kt_contacts_main">
                            <!-- <div class="card-header pt-7" id="kt_chat_contacts_header">
                                <div class="card-title">
                                    <i class="ki-duotone ki-badge fs-1 me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    </i>
                                    <h2>Add New Contact</h2>
                                </div>
                            </div> -->
                            <div class="card-body pt-5">
                                <form method="POST" class="form" action="{{ url('product/store') }}" id="productForm" enctype='multipart/form-data'>
                                    @csrf
                                    <input type="hidden" name="product_id" id="product_id" value="{{ $productId }}" />
                                    <h3 class="mb-5">Product Details</h3>
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col-md-6 col-xl-6">
                                            <div class="mb-7">
                                                <label class="fs-6 fw-semibold mb-3">
                                                    <span>Product Image</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <div class="mt-1">
                                                    <style>.image-input-placeholder { background-image: url('{{ $productImage }}' ) } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset("app/media/svg/files/blank-image-dark.svg") }}'); }</style>
                                                    <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                                        <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        </i>
                                                        <input type="file" name="product_image" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="product_remove" />
                                                        </label>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        </i>
                                                        </span>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        </i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-6">
                                            <div class="mb-7">
                                                <label class="fs-6 fw-semibold mb-3">
                                                    <span>Product Coupons</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <div class="mt-1">
                                                    <style>.image-input-placeholder { background-image: url('{{ $productCouponImage }}' ) } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('{{ asset("app/media/svg/files/blank-image-dark.svg") }}'); }</style>
                                                    <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                                        <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                        <i class="ki-duotone ki-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        </i>
                                                        <input type="file" name="product_coupon_image" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="coupon_remove" />
                                                        </label>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        </i>
                                                        </span>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                        <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        </i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                        <div class="col-md-4 col-xl-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Product Name</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the product name.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="product_name" class="block mt-1 w-full" type="text" name="product_name" :value="$product_name" placeholder="Product Name" required />
                                                <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Product Category</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select product category.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <select class="form-control mt-1" id="category_id" name="category_id">
                                                    <option value="">Select Product Category</option>
                                                    @if(count($categoryList) > 0)
                                                        @foreach($categoryList as $single)
                                                            <option value="{{ $single->id }}" @if ($single->id == $category_id) selected @endif>{{ $single->category_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <label id="category_id-error" class="error" for="category_id"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">QR Point</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select qr point.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <select class="form-control mt-1" id="qr_id" name="qr_id">
                                                    <option value="">Select QR Point</option>
                                                    @if(count($qrPointList) > 0)
                                                        @foreach($qrPointList as $single)
                                                                <option value="{{ $single->id }}" @if ($single->id == $qr_id) selected @endif>{{ $single->qr_amount }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <label id="qr_id-error" class="error" for="qr_id"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Product Price</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the product price.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="product_price" class="block mt-1 w-full" type="text" name="product_price" :value="$product_price" placeholder="Product Price" required />
                                                <x-input-error :messages="$errors->get('product_price')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Distributor Price</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the distributor price.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <x-text-input id="distributor_price" class="block mt-1 w-full" type="text" name="distributor_price" :value="$distributor_price" placeholder="Distributor Price" required />
                                                <x-input-error :messages="$errors->get('distributor_price')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xl-4">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">HSN/SAC</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select HSN/SAC.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <select class="form-control mt-1" id="hsnsac_id" name="hsnsac_id">
                                                    <option value="">Select HSN/SAC</option>
                                                    @if(count($hsnSacList) > 0)
                                                        @foreach($hsnSacList as $single)
                                                            <option value="{{ $single->id }}" @if ($single->id == $hsnsac_id) selected @endif>{{ $single->hsnsac_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <label id="hsnsac_id-error" class="error" for="hsnsac_id"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12">
                                            <div class="fv-row mb-7">
                                                <label class="fs-6 fw-semibold form-label mt-3">
                                                    <span class="required">Product Descpriction</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip" title="Enter the product description.">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <textarea class="form-control" name="product_description" id="product_description">{{ $product_description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mb-5">Product Attribute</h3>
                                    <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 mb-10">
                                        @if(count($variantList) > 0)
                                            @foreach($variantList as $varKey => $single)
                                                <div class="col-sm-12 col-xl-12" bis_skin_checked="1">
                                                    <h5 class="d-flex align-items-center">
                                                        <b class="me-2">{{ $single->variant_name }}</b> 
                                                        <i class="ki-duotone ki-tag-cross fs-2x cursor-pointer reset-selection" data-id="{{ $varKey }}" title="Clear Selection">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </h5>
                                                    <input class="form-check-input" type="hidden" value="{{ $single->id }}" name="product_variant[{{$varKey}}][]" id="flexCheckboxLg_{{$varKey}}" checked />
                                                </div>
                                                <div class="col-sm-12 col-xl-12 mb-5 d-flex flex-wrap" bis_skin_checked="1">
                                                    @if(count($single->variantOptions) > 0)
                                                        @foreach($single->variantOptions as $keys => $singleOpt)
                                                            @if(strtolower($single->variant_name) != 'colors')
                                                                <div class="col-sm-3 col-xl-3 p-2">
                                                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                                                        <input class="form-check-input" type="radio" value="{{ $singleOpt->id }}" name="product_variant_options[{{$varKey}}][]" id="flexCheckboxLg_{{$varKey}}_{{ $keys }}" @if (in_array($singleOpt->id, $allOptions)) checked @endif />
                                                                        <label class="form-check-label" for="flexCheckboxLg_{{$varKey}}_{{ $keys }}">
                                                                            {{ $singleOpt->name }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="col-sm-3 col-xl-3 p-2">
                                                                    <div class="form-check form-check-custom form-check-success form-check-solid">
                                                                        <input class="form-check-input" type="checkbox" value="{{ $singleOpt->id }}" name="product_variant_options[{{$varKey}}][]" id="flexCheckboxLg_{{$varKey}}_{{ $keys }}" @if (in_array($singleOpt->id, $allOptions)) checked @endif />
                                                                        <label class="form-check-label" for="flexCheckboxLg_{{$varKey}}_{{ $keys }}">
                                                                            {{ $singleOpt->name }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <a type="reset" href="{{ url('product') }}" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</a>
                                        <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Save</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('script')
        <script type="text/javascript">
            $( document ).ready(function() {
                $("#productForm").validate({
                    rules: {
                        product_name: {
                            required: true,
                            remote: {
                                url: '{{ url("check/product/name") }}',
                                type: 'get',
                                async: false,
                                dataType:'json',
                                data: {
                                    product_id: function() {
                                        // Return the ID value you want to pass
                                        return $('#product_id').val();
                                    },
                                    product_name: function() {
                                        return $('#product_name').val();
                                    }
                                }
                            }
                        },
                        category_id: {
                            required: true,
                        },
                        qr_id: {
                            required: true,
                        },
                        product_price: {
                            required: true,
                        },
                        distributor_price: {
                            required: true,
                        },
                        hsnsac_id: {
                            required: true,
                        },
                        product_description: {
                            required: true,
                        }
                    },
                    messages: {
                        product_name: {
                            required: "Product name is required!",
                            remote: "Product name already exist!",
                        },
                        category_id : {
                            required: 'Category is required!',
                        },
                        qr_id: {
                            required: "QR point is required!",
                        },
                        product_price: {
                            required: 'Product price is required!'
                        },
                        distributor_price: {
                            required: "Distributor price is required!",
                        },
                        hsnsac_id: {
                            required: "HSN/SAC is required!",
                        },
                        product_description: {
                            required: "Product description is required!",
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });

                $('#category_id, #qr_id, #hsnsac_id').select2();

                $('#category_id').on('change', function() {
                    var selectedValue = $(this).val();
                    if(selectedValue)
                    {
                        $('#category_id-error').text('');
                    }
                });

                $('#qr_id').on('change', function() {
                    var selectedValue = $(this).val();
                    if(selectedValue)
                    {
                        $('#qr_id-error').text('');
                    }
                });
                
                $('#hsnsac_id').on('change', function() {
                    var selectedValue = $(this).val();
                    if(selectedValue)
                    {
                        $('#hsnsac_id-error').text('');
                    }
                });

                $('.reset-selection').click(function() {
                    var selected = $(this).data('id');
                    // Uncheck all radio buttons with name "option"
                    $('input[name="product_variant_options['+selected+'][]"]').prop('checked', false);
                });
            });
        </script>
    @endsection
</x-tenant-app-layout>
