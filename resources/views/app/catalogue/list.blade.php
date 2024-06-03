<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Catalogue Title</th>
            <th class="min-w-125px">View File</th>
            <th class="min-w-125px">Created At</th>
            <th class="text-end min-w-70px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @if(isset($catalogueList) && count($catalogueList) > 0)
            @foreach($catalogueList as $keys => $singleRec)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $singleRec->catalogue_title }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        @if($singleRec->file_path)
                            <iframe src="{{ $singleRec->file_path }}" style="max-width:200px"></iframe>
                        @else
                            -
                        @endif
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ date('Y-m-d', strtotime($singleRec->created_at)) }}</td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton_{{ $keys }}" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton_{{ $keys }}">
                                <!-- <li><a class="dropdown-item" href="#">View</a></li> -->
                                <li><a class="dropdown-item" onclick="editCatalogue('{{ encrypt($singleRec->id) }}', '{{ $singleRec }}')" href="javascript:void(0)">Edit</a></li>
                                <li>
                                    <a class="dropdown-item" onclick="deleteCatalogue('{{ encrypt($singleRec->id) }}')" href="javascript:void(0)">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Catalogue list not found.</td>
            </tr>
        @endif
    </tbody>
</table>
{!! $catalogueList->links('pagination') !!}