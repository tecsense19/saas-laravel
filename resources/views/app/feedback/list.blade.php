<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Customer Name</th>
            <th class="min-w-125px">Comment</th>
            <th class="min-w-125px">Image</th>
            <th class="min-w-125px">Created At</th>
            <th class="text-end min-w-70px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @if(isset($feedbackList) && count($feedbackList) > 0)
            @foreach($feedbackList as $keys => $singleRec)
                @php
                    $profilePic = $singleRec->userDetails ? $singleRec->userDetails->profile_pic : '';
                    $userName = $singleRec->userDetails ? $singleRec->userDetails->name : '';
                    $userEmail = $singleRec->userDetails ? $singleRec->userDetails->email : '';
                @endphp
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
                                    <img src="{{ $profilePic }}" alt="{{ $userName }}" class="w-100" />
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $userName }}</a>
                            <span>{{ $userEmail }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $singleRec->comment_text }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                            <a href="#">
                                <div class="symbol-label">
                                    @if($singleRec->comment_img)
                                        <img src="{{ $singleRec->comment_img }}" alt="{{ $userName }}" class="w-100" />
                                    @else
                                        -
                                    @endif
                                </div>
                            </a>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ date('Y-m-d', strtotime($singleRec->created_at)) }}</td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton_{{ $keys }}" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton_{{ $keys }}">
                                <!-- <li><a class="dropdown-item" href="#">View</a></li> -->
                                <!-- <li><a class="dropdown-item" onclick="editGallery('{{ encrypt($singleRec->id) }}', '{{ $singleRec }}')" href="javascript:void(0)">Edit</a></li> -->
                                <li>
                                    <a class="dropdown-item" onclick="deleteFeedBack('{{ encrypt($singleRec->id) }}')" href="javascript:void(0)">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Feedback list not found.</td>
            </tr>
        @endif
    </tbody>
</table>
{!! $feedbackList->links('pagination') !!}