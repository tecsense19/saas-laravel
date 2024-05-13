<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Product Name</th>
            <th class="min-w-125px">Variant & Options</th>
            <th class="min-w-125px">Product Price</th>
            <th class="min-w-125px">Distributor Price</th>
            <th class="min-w-125px">Created Date</th>
            <th class="text-end min-w-70px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @if(isset($productList) && count($productList) > 0)
            @foreach($productList as $keys => $ten)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="d-flex align-items-center">
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="#">
                                <div class="symbol-label">
                                    <img src="{{ $ten->product_image }}" alt="{{ $ten->name }}" class="w-100" />
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $ten->product_name }}</a>
                            <span><b>Category:</b> {{ isset($ten->getCategory) ? $ten->getCategory->category_name : '' }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        @if(isset($ten->variant))
                            @foreach($ten->variant as $var)
                                <span class="ms-1 tooltip-container">
                                    <div class="badge badge-light-success">{{ $var->variant_name }} </div> {{ $loop->last ? '' : ',' }}
                                    <i class="ki-duotone ki-information fs-7"></i>
                                    <span class="tooltip-text">
                                        @if(isset($var->variant_opt_name))
                                            @foreach($var->variant_opt_name as $opt)
                                                {{ $opt }} {{ $loop->last ? '' : ',' }}
                                            @endforeach
                                        @endif
                                    </span>
                                </span>
                            @endforeach
                        @endif
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $ten->product_price }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $ten->distributor_price }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ date('Y-m-d', strtotime($ten->created_at)) }}</td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton_{{ $keys }}" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton_{{ $keys }}">
                                <!-- <li><a class="dropdown-item" href="#">View</a></li> -->
                                <li><a class="dropdown-item" href="{{ url('product/edit', encrypt($ten->id)) }}">Edit</a></li>
                                <li>
                                    <a class="dropdown-item" onclick="deleteProduct('{{ encrypt($ten->id) }}')" href="#">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Products list not found.</td>
            </tr>
        @endif
    </tbody>
</table>
{!! $productList->links('pagination') !!}