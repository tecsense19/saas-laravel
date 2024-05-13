<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-125px">Event Name</th>
            <th class="min-w-125px">Event Location</th>
            <th class="min-w-125px">Event Datetime</th>
            <th class="min-w-125px">Event QRCode</th>
            <th class="text-end min-w-70px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @if(isset($eventList) && count($eventList) > 0)
            @foreach($eventList as $keys => $singleRec)
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
                                    <img src="{{ $singleRec->event_image }}" alt="{{ $singleRec->event_title }}" class="w-100" />
                                </div>
                            </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-800 text-hover-primary mb-1">{{ $singleRec->event_title }}</a>
                            <span>{{ $singleRec->sort_description }}</span>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $singleRec->event_location }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ date('Y-m-d', strtotime($singleRec->event_date)) . ' ' . date('H:i a', strtotime($singleRec->event_time)) }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                        <img src="{{ $singleRec->qr_code }}" alt="QR Code" style="width: 100px;">
                    </td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn btn-light btn-active-light-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton_{{ $keys }}" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton_{{ $keys }}">
                                <!-- <li><a class="dropdown-item" href="#">View</a></li> -->
                                <li><a class="dropdown-item" onclick="editEvent('{{ $singleRec }}', '{{ encrypt($singleRec->id) }}')" href="#">Edit</a></li>
                                <li>
                                    <a class="dropdown-item" onclick="deleteEvent('{{ encrypt($singleRec->id) }}')" href="#">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Events list not found.</td>
            </tr>
        @endif
    </tbody>
</table>
{!! $eventList->links('pagination') !!}