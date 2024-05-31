<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Type</th>
            <th class="min-w-125px">Total Point</th>
            <th class="min-w-125px">Date</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @if(isset($redeemDataList) && count($redeemDataList) > 0)
            @foreach($redeemDataList as $keys => $singleRec)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td>
                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" />
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> 
                        @if($singleRec->scan_type == 'Credit')
                            <div class="badge badge-light-success" bis_skin_checked="1"> {{ $singleRec->scan_type }} </div>
                        @else
                            <div class="badge badge-light-danger" bis_skin_checked="1"> {{ $singleRec->scan_type }} </div>
                        @endif
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> {{ $singleRec->total_point }} </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white"> {{ date('Y-m-d', strtotime($singleRec->created_at)) }} </td>
                </tr>
            @endforeach
        @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Redeem history list not found.</td>
            </tr>
        @endif
    </tbody>
</table>
{!! $redeemDataList->links('pagination') !!}