<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Multipurpose</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Dashboards</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-fluid">
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('{{ asset_url('app/media/patterns/vector-1.png') }}')">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Companies</span>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                        <span>43 Pending</span>
                                        <span>72%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Deactive Companies</span>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                        <img alt="Pic" src="{{ asset_url('app/media/avatars/300-11.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                        <img alt="Pic" src="{{ asset_url('app/media/avatars/300-2.jpg') }}" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                        <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                        <img alt="Pic" src="{{ asset_url('app/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                        <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        </i>2.2%</span>
                                    </div>
                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                                </div>
                            </div>
                            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-center me-5 pt-2">
                                    <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
                                </div>
                                <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                    <div class="d-flex fw-semibold align-items-center">
                                        <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                        <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                    </div>
                                    <div class="d-flex fw-semibold align-items-center my-3">
                                        <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                        <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                    </div>
                                    <div class="d-flex fw-semibold align-items-center">
                                        <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                        <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                        <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush h-lg-50">
                            <div class="card-header pt-5">
                                <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                                <div class="card-toolbar">
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    </i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <div class="separator mt-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-5">
                                <div class="d-flex flex-stack">
                                    <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    </button>
                                </div>
                                <div class="separator separator-dashed my-3"></div>
                                <div class="d-flex flex-stack">
                                    <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    </button>
                                </div>
                                <div class="separator separator-dashed my-3"></div>
                                <div class="d-flex flex-stack">
                                    <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
                                    <button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                    <i class="ki-duotone ki-exit-right-corner fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card card-flush h-md-100">
                            <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('{{ asset_url('app/media/stock/900x600/42.png') }}')">
                                <div class="mb-10">
                                    <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                        <span class="me-2">Try our all new Enviroment with
                                        <br />
                                        <span class="position-relative d-inline-block text-danger">
                                        <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-danger opacity-75-hover">Pro Plan</a>
                                        <span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                        </span></span>for Free
                                    </div>
                                    <div class="text-center">
                                        <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                    </div>
                                </div>
                                <img class="mx-auto h-150px h-lg-200px theme-light-show" src="{{ asset_url('app/media/illustrations/misc/upgrade.svg') }}" alt="" />
                                <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="{{ asset_url('app/media/illustrations/misc/upgrade-dark.svg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gx-xl-10">
                    <div class="col-xxl-6 mb-5 mb-xl-10">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Performance Overview</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                                </h3>
                                <div class="card-toolbar">
                                    <ul class="nav" id="kt_chart_widget_8_tabs">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1" data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">Month</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active" data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle" href="#kt_chart_widget_8_month_tab">Week</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-6">
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>4,8%</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                        </div>
                                        <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                                        <div class="d-flex flex-wrap pt-5">
                                            <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                    <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                    <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pt-sm-3 pt-6">
                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                    <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                                <span class="badge badge-light-success fs-base">
                                                <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>2.2%</span>
                                            </div>
                                            <span class="fs-6 fw-semibold text-gray-400">Avarage cost per interaction</span>
                                        </div>
                                        <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                                        <div class="d-flex flex-wrap pt-5">
                                            <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                    <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                    <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column pt-sm-3 pt-6">
                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                    <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                    <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-5 mb-xl-10">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Authors Achievements</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    </i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <div class="separator mt-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-6">
                                <ul class="nav nav-pills nav-pills-custom mb-3">
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1">
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-car fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                </i>
                                            </div>
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2">
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-bitcoin fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                            </div>
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3">
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-like fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                            </div>
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4">
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-tablet fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                            </div>
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5">
                                            <div class="nav-icon mb-3">
                                                <i class="ki-duotone ki-send fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                            </div>
                                            <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
                                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-3.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-2.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-9.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-7.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody Fishers</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-25.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-24.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-20.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-17.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-11.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">New York</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-23.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald Richards</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-4.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie Alexander</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-1.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney Henry</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-12.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene McCoy</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-21.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinneyr</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-30.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-14.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
                                        <div class="table-responsive">
                                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                <thead>
                                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                        <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                        <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                        <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                        <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-6.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane Cooper</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-10.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-9.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob Jones</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-50px me-3">
                                                                    <img src="{{ asset_url('app/media/avatars/300-3.jpg') }}" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph Edwards</a>
                                                                    <span class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-13">
                                                            <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <div class="col-xxl-6">
                        <div class="card card-flush h-xl-100">
                            <div class="card-body py-9">
                                <div class="row gx-9 h-100">
                                    <div class="col-sm-6 mb-10 mb-sm-0">
                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('{{ asset_url('app/media/stock/600x600/img-65.jpg') }}')"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex flex-column h-100">
                                            <div class="mb-7">
                                                <div class="d-flex flex-stack mb-6">
                                                    <div class="flex-shrink-0 me-5">
                                                        <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                                        <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                                    </div>
                                                    <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
                                                </div>
                                                <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                    <div class="d-flex align-items-center me-5 me-xl-13">
                                                        <div class="symbol symbol-30px symbol-circle me-3">
                                                            <img src="{{ asset_url('app/media/avatars/300-3.jpg') }}" class="" alt="" />
                                                        </div>
                                                        <div class="m-0">
                                                            <span class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
                                                            <a href="../../demo1/dist/pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-30px symbol-circle me-3">
                                                            <span class="symbol-label bg-success">
                                                            <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            </i>
                                                            </span>
                                                        </div>
                                                        <div class="m-0">
                                                            <span class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
                                                            <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
                                                <div class="d-flex">
                                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                        <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                                        <div class="fw-semibold text-gray-400">Due Date</div>
                                                    </div>
                                                    <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                        <span class="fs-6 text-gray-700 fw-bold">$
                                                        <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                                        <div class="fw-semibold text-gray-400">Budget</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-stack mt-auto bd-highlight">
                                                <div class="symbol-group symbol-hover flex-nowrap">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                        <img alt="Pic" src="{{ asset_url('app/media/avatars/300-2.jpg') }}" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                        <img alt="Pic" src="{{ asset_url('app/media/avatars/300-3.jpg') }}" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                </div>
                                                <a href="../../demo1/dist/apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                                <i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-flush overflow-hidden h-lg-100">
                            <div class="card-header pt-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Performance</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                                </h3>
                                <div class="card-toolbar">
                                    <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
                                        <div class="text-gray-600 fw-bold">Loading date range...</div>
                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end p-0">
                                <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                    <div class="col-xl-4">
                        <div class="card card-flush h-md-100">
                            <div class="card-header pt-5 mb-6">
                                <h3 class="card-title align-items-start flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                        <span class="badge badge-light-success fs-base">
                                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        </i>9.2%</span>
                                    </div>
                                    <span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    </i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <div class="separator mt-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-0 px-0">
                                <ul class="nav d-flex justify-content-between mb-3 mx-9">
                                    <li class="nav-item mb-3">
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-n6">
                                    <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                                        <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                        <div class="table-responsive mx-9 mt-n6">
                                            <table class="table align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px text-end pe-0"></th>
                                                        <th class="text-end min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">3:10 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">+576.24</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">3:55 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">+124.03</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                                        <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                        <div class="table-responsive mx-9 mt-n6">
                                            <table class="table align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px text-end pe-0"></th>
                                                        <th class="text-end min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">+134.02</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">11:35 AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">3:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-danger">+144.04</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                                        <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                        <div class="table-responsive mx-9 mt-n6">
                                            <table class="table align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px text-end pe-0"></th>
                                                        <th class="text-end min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">3:20 AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">+185.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">12:30 AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-success">-154.03</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                                        <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                        <div class="table-responsive mx-9 mt-n6">
                                            <table class="table align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px text-end pe-0"></th>
                                                        <th class="text-end min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-warning">+124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">5:30 AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-info">+144.65</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">4:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">+154.06</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                                        <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary" class="min-h-auto h-200px ps-3 pe-6"></div>
                                        <div class="table-responsive mx-9 mt-n6">
                                            <table class="table align-middle gs-0 gy-4">
                                                <thead>
                                                    <tr>
                                                        <th class="min-w-100px"></th>
                                                        <th class="min-w-100px text-end pe-0"></th>
                                                        <th class="text-end min-w-50px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">2:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-warning">+114.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">3:30 AM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="text-gray-600 fw-bold fs-6">10:30 PM</a>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <span class="fw-bold fs-6 text-info">+165.86</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-flush h-md-100">
                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">History</a>
                                </div>
                            </div>
                            <div class="card-body pt-6">
                                <div class="table-responsive">
                                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                                <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                                <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                                <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                                <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="{{ asset_url('app/media/stock/600x600/img-49.jpg') }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy App</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Jane Cooper</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>9.2%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="{{ asset_url('app/media/stock/600x600/img-40.jpg') }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Esther Howard</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>0.4%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="{{ asset_url('app/media/stock/600x600/img-39.jpg') }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto CRM</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Jenny Wilson</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>9.2%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="{{ asset_url('app/media/stock/600x600/img-47.jpg') }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower Hill</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Cody Fisher</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>9.2%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-50px me-3">
                                                            <img src="{{ asset_url('app/media/stock/600x600/img-48.jpg') }}" class="" alt="" />
                                                        </div>
                                                        <div class="d-flex justify-content-start flex-column">
                                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9 Degree</a>
                                                            <span class="text-gray-400 fw-semibold d-block fs-7">Savannah Nguyen</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>0.4%</span>
                                                </td>
                                                <td class="text-end pe-12">
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                                </td>
                                                <td class="text-end pe-0">
                                                    <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger"></div>
                                                </td>
                                                <td class="text-end">
                                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                    <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5 gx-xl-10">
                    <div class="col-xl-4">
                        <div class="card card-flush h-xl-100">
                            <div class="card-header pt-7 mb-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                                </h3>
                                <div class="card-toolbar">
                                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-sm btn-light">PDF Report</a>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-flush overflow-hidden h-xl-100">
                            <div class="card-header py-5">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-dark">Human Resources</span>
                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
                                </h3>
                                <div class="card-toolbar">
                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    </i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                        </div>
                                        <div class="separator mb-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Customer</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                            <a href="#" class="menu-link px-3">
                                            <span class="menu-title">New Group</span>
                                            <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">New Contact</a>
                                        </div>
                                        <div class="separator mt-3 opacity-75"></div>
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3 py-3">
                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
