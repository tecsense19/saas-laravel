<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Customer Name</th>
            <th class="min-w-125px">Role</th>
            <th class="min-w-125px">Total Point</th>
            <th class="min-w-125px">Request Date</th>
            <th class="min-w-70px">Paid Date</th>
            <th class="min-w-125px">Paid Status</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @if(isset($redeemDataList) && count($redeemDataList) > 0)
            @foreach($redeemDataList as $keys => $singleRec)
                @php
                    $profilePic = $singleRec->getUser ? $singleRec->getUser->profile_pic : '';
                    $userName = $singleRec->getUser ? $singleRec->getUser->name : '';
                    $userEmail = $singleRec->getUser ? $singleRec->getUser->email : '';
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
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> 
                        @if(isset($singleRec->getUser))
                            @if(isset($singleRec->getUser->roles))
                                @foreach($singleRec->getUser->roles as $role)
                                    <div class="badge badge-light-success"> {{ $role->name }} </div> {{ $loop->last ? '' : ',' }}
                                @endforeach
                            @endif
                        @else
                            -
                        @endif
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> {{ $singleRec->total_point }} </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> {{ date('Y-m-d', strtotime($singleRec->created_at)) }} </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> {{ $singleRec->paid_date ? date('Y-m-d', strtotime($singleRec->paid_date)) : '-' }} </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> 
                        @if($singleRec->paid_status == 'Pending')
                            <div class="badge badge-light-danger"> {{ $singleRec->paid_status }} </div>
                        @else
                            <div class="badge badge-light-success"> {{ $singleRec->paid_status }} </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Redeem request list not found.</td>
            </tr>
        @endif
    </tbody>
</table>
{!! $redeemDataList->links('pagination') !!}