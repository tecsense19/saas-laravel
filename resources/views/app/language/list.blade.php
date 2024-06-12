<form method="POST" class="form" action="{{ url('language/store') }}" id="langForm" enctype='multipart/form-data'>
    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
        <thead>
            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1" />
                    </div>
                </th>
                <th class="min-w-125px">Native</th>
                @if(isset($getSelectedLang) > 0)
                    @foreach(json_decode($getSelectedLang->lang_value) as $lang)
                        <th class="min-w-125px">{{ $lang->label }}</th>
                    @endforeach
                @endif
                <!-- <th class="min-w-125px">Action</th> -->
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            @csrf
            @php
                $selectedLang = json_decode($getSelectedLang->lang_value);
            @endphp
            @if(isset($languageData) && count($languageData) > 0)
                @foreach($languageData as $keys => $singleRec)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                            {{ $singleRec->lang_key ? $singleRec->lang_key : '-' }}
                            <input type="hidden" name="lang_key[]" value="{{ $singleRec->lang_key }}" />
                        </td>
                        @if(isset($singleRec->lang_key) && $singleRec->lang_key != '')
                            @php
                                $langVal = json_decode($singleRec->lang_value);
                            @endphp
                            @foreach($langVal as $val)
                                @php
                                    $filteredArray = array_filter($selectedLang, function ($object) use ($val) {
                                        return $object->value === $val->label;
                                    });
                                    if (!empty($filteredArray)) {
                                @endphp
                                <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                    <textarea class="form-control" name="lang[{{ $singleRec->lang_key }}][{{ $val->label }}]">{{ $val->value }}</textarea>
                                </td>  
                                @php 
                                    } else {
                                @endphp
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        <textarea class="form-control" name="lang[{{ $singleRec->lang_key }}][{{ $val->label }}]">{{ $val->value }}</textarea>
                                    </td>
                                @php 
                                    }
                                @endphp
                            @endforeach()                        
                        @endif
                        <!-- <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">-</td> -->
                    </tr>
                @endforeach
                @else
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 text-center">
                <td colspan="10">Event report list not found.</td>
            </tr>
            @endif
        </tbody>
    </table>
    <button type="submit" id="langSubmit" class="btn btn-primary mt-6">
        <span class="indicator-label">Save</span>
        <span class="indicator-progress">Please wait...
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    </button>
</form>
@if(isset($languageData) && count($languageData) > 0)
{!! $languageData->links('pagination') !!}
@endif