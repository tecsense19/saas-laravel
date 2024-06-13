<div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                <span class="path1"></span>
                <span class="path2"></span>
                </i>
            </div>
        </div>
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <a href="{{ route('dashboard') }}" class="d-lg-none">
            <img alt="Logo" src="{{ asset_url('app/media/logos/default-small.svg') }}" class="h-30px" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                        <span class="menu-title">Dashboards</span>
                        <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                                <div class="row">
                                    <div class="col-lg-8 mb-3 mb-lg-0 py-3 px-3 py-lg-6 px-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="{{ route('dashboard') }}" class="menu-link active">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-element-11 text-primary fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/ecommerce.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-basket text-danger fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/projects.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-abstract-44 text-info fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/online-courses.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-color-swatch text-success fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                    <span class="path7"></span>
                                                    <span class="path8"></span>
                                                    <span class="path9"></span>
                                                    <span class="path10"></span>
                                                    <span class="path11"></span>
                                                    <span class="path12"></span>
                                                    <span class="path13"></span>
                                                    <span class="path14"></span>
                                                    <span class="path15"></span>
                                                    <span class="path16"></span>
                                                    <span class="path17"></span>
                                                    <span class="path18"></span>
                                                    <span class="path19"></span>
                                                    <span class="path20"></span>
                                                    <span class="path21"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/marketing.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-chart-simple text-dark fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/bidding.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-switch text-warning fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/pos.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-abstract-42 text-danger fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/dashboards/call-center.html" class="menu-link">
                                                    <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-call text-primary fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                    <span class="path6"></span>
                                                    <span class="path7"></span>
                                                    <span class="path8"></span>
                                                    </i>
                                                    </span>
                                                    <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                    </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed mx-5 my-5"></div>
                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="fs-6 fw-bold text-gray-800">Landing Page Template</div>
                                                <div class="fs-7 fw-semibold text-muted">Onpe page landing template with pricing & others</div>
                                            </div>
                                            <a href="../../demo1/dist/landing.html" class="btn btn-sm btn-primary fw-bold">Explore</a>
                                        </div>
                                    </div>
                                    <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/logistics.html" class="menu-link py-2">
                                            <span class="menu-title">Logistics</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/website-analytics.html" class="menu-link py-2">
                                            <span class="menu-title">Website Analytics</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/finance-performance.html" class="menu-link py-2">
                                            <span class="menu-title">Finance Performance</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/store-analytics.html" class="menu-link py-2">
                                            <span class="menu-title">Store Analytics</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/social.html" class="menu-link py-2">
                                            <span class="menu-title">Social</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/delivery.html" class="menu-link py-2">
                                            <span class="menu-title">Delivery</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/crypto.html" class="menu-link py-2">
                                            <span class="menu-title">Crypto</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/school.html" class="menu-link py-2">
                                            <span class="menu-title">School</span>
                                            </a>
                                        </div>
                                        <div class="menu-item p-0 m-0">
                                            <a href="../../demo1/dist/dashboards/podcast.html" class="menu-link py-2">
                                            <span class="menu-title">Podcast</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                        <span class="menu-title">Pages</span>
                        <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                            <div class="menu-active-bg px-4 px-lg-0">
                                <div class="d-flex w-100 overflow-auto">
                                    <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                        </li>
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                        </li>
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                        </li>
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                        </li>
                                        <li class="nav-item mx-lg-1">
                                            <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content py-4 py-lg-8 px-lg-7">
                                    <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/pages/user-profile/overview.html" class="menu-link">
                                                            <span class="menu-title">Overview</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/pages/user-profile/projects.html" class="menu-link">
                                                            <span class="menu-title">Projects</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/pages/user-profile/campaigns.html" class="menu-link">
                                                            <span class="menu-title">Campaigns</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/pages/user-profile/documents.html" class="menu-link">
                                                            <span class="menu-title">Documents</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/pages/user-profile/followers.html" class="menu-link">
                                                            <span class="menu-title">Followers</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/pages/user-profile/activity.html" class="menu-link">
                                                            <span class="menu-title">Activity</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <div class="mb-6">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/about.html" class="menu-link">
                                                                <span class="menu-title">About</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/team.html" class="menu-link">
                                                                <span class="menu-title">Our Team</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/contact.html" class="menu-link">
                                                                <span class="menu-title">Contact Us</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/licenses.html" class="menu-link">
                                                                <span class="menu-title">Licenses</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/sitemap.html" class="menu-link">
                                                                <span class="menu-title">Sitemap</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/careers/list.html" class="menu-link">
                                                                <span class="menu-title">Careers List</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/careers/apply.html" class="menu-link">
                                                                <span class="menu-title">Careers Apply</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <div class="mb-6">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/faq/classic.html" class="menu-link">
                                                                <span class="menu-title">FAQ Classic</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/faq/extended.html" class="menu-link">
                                                                <span class="menu-title">FAQ Extended</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-6">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/blog/home.html" class="menu-link">
                                                                <span class="menu-title">Blog Home</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/blog/post.html" class="menu-link">
                                                                <span class="menu-title">Blog Post</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/pricing/column.html" class="menu-link">
                                                                <span class="menu-title">Column Pricing</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/pricing/table.html" class="menu-link">
                                                                <span class="menu-title">Table Pricing</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                        <div class="mb-0">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/social/feeds.html" class="menu-link">
                                                                <span class="menu-title">Feeds</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/social/activity.html" class="menu-link">
                                                                <span class="menu-title">Activty</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/social/followers.html" class="menu-link">
                                                                <span class="menu-title">Followers</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/pages/social/settings.html" class="menu-link">
                                                                <span class="menu-title">Settings</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="{{ asset_url('app/media/stock/600x600/img-82.jpg') }}" class="rounded mw-100" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane w-lg-600px" id="kt_app_header_menu_pages_account">
                                        <div class="row">
                                            <div class="col-lg-5 mb-6 mb-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/overview.html" class="menu-link">
                                                            <span class="menu-title">Overview</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/settings.html" class="menu-link">
                                                            <span class="menu-title">Settings</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/security.html" class="menu-link">
                                                            <span class="menu-title">Security</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/activity.html" class="menu-link">
                                                            <span class="menu-title">Activity</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/billing.html" class="menu-link">
                                                            <span class="menu-title">Billing</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/statements.html" class="menu-link">
                                                            <span class="menu-title">Statements</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/referrals.html" class="menu-link">
                                                            <span class="menu-title">Referrals</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/api-keys.html" class="menu-link">
                                                            <span class="menu-title">API Keys</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item p-0 m-0">
                                                            <a href="../../demo1/dist/account/logs.html" class="menu-link">
                                                            <span class="menu-title">Logs</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <img src="{{ asset_url('app/media/stock/900x600/46.jpg') }}" class="rounded mw-100" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                                        <div class="row">
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <div class="mb-6">
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html" class="menu-link">
                                                        <span class="menu-title">Sign-In</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="menu-link">
                                                        <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/corporate/two-factor.html" class="menu-link">
                                                        <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/corporate/reset-password.html" class="menu-link">
                                                        <span class="menu-title">Reset Password</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/corporate/new-password.html" class="menu-link">
                                                        <span class="menu-title">New Password</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mb-0">
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/overlay/sign-in.html" class="menu-link">
                                                        <span class="menu-title">Sign-In</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/overlay/sign-up.html" class="menu-link">
                                                        <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/overlay/two-factor.html" class="menu-link">
                                                        <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/overlay/reset-password.html" class="menu-link">
                                                        <span class="menu-title">Reset Password</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/overlay/new-password.html" class="menu-link">
                                                        <span class="menu-title">New Password</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <div class="mb-6">
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/creative/sign-in.html" class="menu-link">
                                                        <span class="menu-title">Sign-in</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/creative/sign-up.html" class="menu-link">
                                                        <span class="menu-title">Sign-up</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/creative/two-factor.html" class="menu-link">
                                                        <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/creative/reset-password.html" class="menu-link">
                                                        <span class="menu-title">Reset Password</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/creative/new-password.html" class="menu-link">
                                                        <span class="menu-title">New Password</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/fancy/sign-in.html" class="menu-link">
                                                        <span class="menu-title">Sign-In</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/fancy/sign-up.html" class="menu-link">
                                                        <span class="menu-title">Sign-Up</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/fancy/two-factor.html" class="menu-link">
                                                        <span class="menu-title">Two-Factor</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/fancy/reset-password.html" class="menu-link">
                                                        <span class="menu-title">Reset Password</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/layouts/fancy/new-password.html" class="menu-link">
                                                        <span class="menu-title">New Password</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <div class="mb-0">
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/extended/multi-steps-sign-up.html" class="menu-link">
                                                        <span class="menu-title">Multi-Steps Sign-Up</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/welcome.html" class="menu-link">
                                                        <span class="menu-title">Welcome Message</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/verify-email.html" class="menu-link">
                                                        <span class="menu-title">Verify Email</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/coming-soon.html" class="menu-link">
                                                        <span class="menu-title">Coming Soon</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/password-confirmation.html" class="menu-link">
                                                        <span class="menu-title">Password Confirmation</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/account-deactivated.html" class="menu-link">
                                                        <span class="menu-title">Account Deactivation</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/error-404.html" class="menu-link">
                                                        <span class="menu-title">Error 404</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/general/error-500.html" class="menu-link">
                                                        <span class="menu-title">Error 500</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                <div class="mb-0">
                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/welcome-message.html" class="menu-link">
                                                        <span class="menu-title">Welcome Message</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/reset-password.html" class="menu-link">
                                                        <span class="menu-title">Reset Password</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/subscription-confirmed.html" class="menu-link">
                                                        <span class="menu-title">Subscription Confirmed</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/card-declined.html" class="menu-link">
                                                        <span class="menu-title">Credit Card Declined</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/promo-1.html" class="menu-link">
                                                        <span class="menu-title">Promo 1</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/promo-2.html" class="menu-link">
                                                        <span class="menu-title">Promo 2</span>
                                                        </a>
                                                    </div>
                                                    <div class="menu-item p-0 m-0">
                                                        <a href="../../demo1/dist/authentication/email/promo-3.html" class="menu-link">
                                                        <span class="menu-title">Promo 3</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <div class="mb-0">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/general/invite-friends.html" class="menu-link">
                                                                <span class="menu-title">Invite Friends</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/general/view-users.html" class="menu-link">
                                                                <span class="menu-title">View Users</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/general/select-users.html" class="menu-link">
                                                                <span class="menu-title">Select Users</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/general/upgrade-plan.html" class="menu-link">
                                                                <span class="menu-title">Upgrade Plan</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/general/share-earn.html" class="menu-link">
                                                                <span class="menu-title">Share & Earn</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/forms/new-target.html" class="menu-link">
                                                                <span class="menu-title">New Target</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/forms/new-card.html" class="menu-link">
                                                                <span class="menu-title">New Card</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/forms/new-address.html" class="menu-link">
                                                                <span class="menu-title">New Address</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/forms/create-api-key.html" class="menu-link">
                                                                <span class="menu-title">Create API Key</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/forms/bidding.html" class="menu-link">
                                                                <span class="menu-title">Bidding</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <div class="mb-6">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/create-app.html" class="menu-link">
                                                                <span class="menu-title">Create App</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/create-campaign.html" class="menu-link">
                                                                <span class="menu-title">Create Campaign</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/create-account.html" class="menu-link">
                                                                <span class="menu-title">Create Business Acc</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/create-project.html" class="menu-link">
                                                                <span class="menu-title">Create Project</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html" class="menu-link">
                                                                <span class="menu-title">Top Up Wallet</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html" class="menu-link">
                                                                <span class="menu-title">Offer a Deal</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html" class="menu-link">
                                                                <span class="menu-title">Two Factor Auth</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="mb-0">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/search/horizontal.html" class="menu-link">
                                                                <span class="menu-title">Horizontal</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/search/vertical.html" class="menu-link">
                                                                <span class="menu-title">Vertical</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/search/users.html" class="menu-link">
                                                                <span class="menu-title">Users</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/search/select-location.html" class="menu-link">
                                                                <span class="menu-title">Select Location</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                        <div class="mb-0">
                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/horizontal.html" class="menu-link">
                                                                <span class="menu-title">Horizontal</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/vertical.html" class="menu-link">
                                                                <span class="menu-title">Vertical</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/two-factor-authentication.html" class="menu-link">
                                                                <span class="menu-title">Two Factor Auth</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/create-app.html" class="menu-link">
                                                                <span class="menu-title">Create App</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/create-campaign.html" class="menu-link">
                                                                <span class="menu-title">Create Campaign</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/create-account.html" class="menu-link">
                                                                <span class="menu-title">Create Account</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/create-project.html" class="menu-link">
                                                                <span class="menu-title">Create Project</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html" class="menu-link">
                                                                <span class="menu-title">Top Up Wallet</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item p-0 m-0">
                                                                <a href="../../demo1/dist/utilities/wizards/offer-a-deal.html" class="menu-link">
                                                                <span class="menu-title">Offer a Deal</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 pe-lg-5">
                                                <img src="{{ asset_url('app/media/stock/600x600/img-84.jpg') }}" class="rounded mw-100" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                        <div class="row">
                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/widgets/lists.html" class="menu-link">
                                                    <span class="menu-title">Lists</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/widgets/statistics.html" class="menu-link">
                                                    <span class="menu-title">Statistics</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/widgets/charts.html" class="menu-link">
                                                    <span class="menu-title">Charts</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/widgets/mixed.html" class="menu-link">
                                                    <span class="menu-title">Mixed</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/widgets/tables.html" class="menu-link">
                                                    <span class="menu-title">Tables</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/widgets/feeds.html" class="menu-link">
                                                    <span class="menu-title">Feeds</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <img src="{{ asset_url('app/media/stock/900x600/44.jpg') }}" class="rounded mw-100" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <span class="menu-link">
                        <span class="menu-title">Apps</span>
                        <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-rocket fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Projects</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">My Projects</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Project</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Targets</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Budget</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Files</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Activity</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Settings</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-handcart fs-2"></i>
                                </span>
                                <span class="menu-title">eCommerce</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Catalog</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Products</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Categories</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add Product</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Edit Product</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add Category</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Edit Category</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Sales</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Orders Listing</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/details.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Order Details</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Add Order</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Edit Order</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customers</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/listing.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customers Listing</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customers Details</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Reports</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/view.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Products Viewed</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/sales.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Sales</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/returns.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Returns</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Customer Orders</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Shipping</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Settings</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-chart fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Support Center</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Overview</span>
                                        </a>
                                    </div>
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tickets</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Ticket List</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Ticket View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Tutorials</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/list.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tutorials List</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/post.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Tutorials Post</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">FAQ</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Licenses</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Contact Us</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-shield-tick fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">User Management</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/user-management/users/list.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users List</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/user-management/users/view.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View User</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/user-management/roles/list.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Roles List</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/user-management/roles/view.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Roles</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/user-management/permissions.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-phone fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Contacts</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/getting-started.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Getting Started</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/add-contact.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add Contact</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/edit-contact.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Edit Contact</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/contacts/view-contact.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Contact</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-basket fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                </i>
                                </span>
                                <span class="menu-title">Subscriptions</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Getting Started</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/list.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Subscription List</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/add.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add Subscription</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/subscriptions/view.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Subscription</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-briefcase fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Customers</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/customers/getting-started.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Getting Started</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Listing</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Customer Details</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-credit-cart fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Invoice Management</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                        <span class="menu-link">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Profile</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-1.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invoice 1</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-2.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invoice 2</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-3.html">
                                                <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Invoice 3</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Create Invoice</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-file-added fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">File Manager</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/folders.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Folders</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/files.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Files</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/blank.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Blank Directory</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/file-manager/settings.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Settings</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-sms fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Inbox</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Messages</span>
                                        <span class="menu-badge">
                                        <span class="badge badge-light-success">3</span>
                                        </span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Compose</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View & Reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                <span class="menu-link">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-message-text-2 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                </i>
                                </span>
                                <span class="menu-title">Chat</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Private Chat</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Group Chat</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
                                        <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Drawer Chat</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-calendar-8 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                </i>
                                </span>
                                <span class="menu-title">Calendar</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                        <span class="menu-title">Layouts</span>
                        <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                            <div class="menu-active-bg pt-1 pb-3 px-3 py-lg-6 px-lg-6" data-kt-menu-dismiss="true">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Layouts</h4>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/layouts/light-sidebar.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Light Sidebar</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/layouts/dark-sidebar.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Dark Sidebar</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/layouts/light-header.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Light Header</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/layouts/dark-header.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Dark Header</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">Toolbars</h4>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/toolbars/classic.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Classic</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/toolbars/saas.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">SaaS</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/toolbars/accounting.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Accounting</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/toolbars/extended.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Extended</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item p-0 m-0">
                                                    <a href="../../demo1/dist/toolbars/reports.html" class="menu-link">
                                                    <span class="menu-bullet">
                                                    <span class="bullet bullet-dot bg-gray-300i h-6px w-6px"></span>
                                                    </span>
                                                    <span class="menu-title">Reports</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed mx-lg-5 mt-2 mb-6"></div>
                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mb-5 mb-lg-0 mx-lg-5">
                                            <div class="d-flex flex-column me-5">
                                                <div class="fs-6 fw-bold text-gray-800">Layout Builder</div>
                                                <div class="fs-7 fw-semibold text-muted">Customize, preview and export</div>
                                            </div>
                                            <a href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html" class="btn btn-sm btn-primary fw-bold">Try Builder</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3 py-lg-3 pe-lg-8 d-flex align-items-center">
                                        <img src="{{ asset_url('app/media/stock/900x600/45.jpg') }}" class="rounded mw-100" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                        <span class="menu-link">
                        <span class="menu-title">Help</span>
                        <span class="menu-arrow d-lg-none"></span>
                        </span>
                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                            <div class="menu-item">
                                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-rocket fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Components</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-abstract-26 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                </span>
                                <span class="menu-title">Documentation</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
                                <span class="menu-icon">
                                <i class="ki-duotone ki-code fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                </i>
                                </span>
                                <span class="menu-title">Changelog v8.1.8</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item align-items-stretch ms-1 ms-md-3">
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                        <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                            <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                <i class="ki-duotone ki-magnifier fs-2 fs-lg-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                            <div data-kt-search-element="wrapper">
                                <form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
                                    <i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                    <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                    <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                    </span>
                                    <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                    <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i>
                                    </span>
                                    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
                                        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
                                            <i class="ki-duotone ki-setting-2 fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            </i>
                                        </div>
                                        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
                                            <i class="ki-duotone ki-down fs-2"></i>
                                        </div>
                                    </div>
                                </form>
                                <div class="separator border-gray-200 mb-6"></div>
                                <div data-kt-search-element="results" class="d-none">
                                    <div class="scroll-y mh-200px mh-lg-350px">
                                        <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{ asset_url('app/media/avatars/300-6.jpg') }}" alt="" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Karina Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{ asset_url('app/media/avatars/300-2.jpg') }}" alt="" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{ asset_url('app/media/avatars/300-9.jpg') }}" alt="" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Ana Clark</span>
                                                <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{ asset_url('app/media/avatars/300-14.jpg') }}" alt="" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <img src="{{ asset_url('app/media/avatars/300-11.jpg') }}" alt="" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                            </div>
                                        </a>
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset_url('app/media/svg/brand-logos/volicity-9.svg') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset_url('app/media/svg/brand-logos/tvit.svg') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset_url('app/media/svg/misc/infography.svg') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                <span class="fs-7 fw-semibold text-muted">Administration</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset_url('app/media/svg/brand-logos/leaf.svg') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset_url('app/media/svg/brand-logos/tower.svg') }}" alt="" />
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column justify-content-start fw-semibold">
                                                <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                            </div>
                                        </a>
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                <span class="fs-7 fw-semibold text-muted">#45670</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-frame fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                <span class="fs-7 fw-semibold text-muted">#45690</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                                <span class="fs-7 fw-semibold text-muted">#21090</span>
                                            </div>
                                        </a>
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                <span class="fs-7 fw-semibold text-muted">#34560</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-5" data-kt-search-element="main">
                                    <div class="d-flex flex-stack fw-semibold mb-4">
                                        <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                    </div>
                                    <div class="scroll-y mh-200px mh-lg-325px">
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                                <span class="fs-7 text-muted fw-semibold">#45789</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-simple fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                                <span class="fs-7 text-muted fw-semibold">#84050</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                                <span class="fs-7 text-muted fw-semibold">#67945</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-sms fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                                <span class="fs-7 text-muted fw-semibold">#84250</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-bank fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                                <span class="fs-7 text-muted fw-semibold">#45690</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-5">
                                            <div class="symbol symbol-40px me-4">
                                                <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                                <span class="fs-7 text-muted fw-semibold">#24005</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <div class="pt-10 pb-10">
                                        <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        </i>
                                    </div>
                                    <div class="pb-15 fw-semibold">
                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                        <div class="text-muted fs-7">Please try again with a different query</div>
                                    </div>
                                </div>
                            </div>
                            <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                <div class="mb-5">
                                    <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                </div>
                                <div class="mb-5">
                                    <div class="nav-group nav-group-fluid">
                                        <label>
                                        <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                        </label>
                                        <label>
                                        <input type="radio" class="btn-check" name="type" value="users" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                        </label>
                                        <label>
                                        <input type="radio" class="btn-check" name="type" value="orders" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                        </label>
                                        <label>
                                        <input type="radio" class="btn-check" name="type" value="projects" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                </div>
                                <div class="mb-5">
                                    <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                </div>
                                <div class="mb-5">
                                    <div class="nav-group nav-group-fluid">
                                        <label>
                                        <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                        </label>
                                        <label>
                                        <input type="radio" class="btn-check" name="attachment" value="any" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                        <option value="next">Within the next</option>
                                        <option value="last">Within the last</option>
                                        <option value="between">Between</option>
                                        <option value="on">On</option>
                                    </select>
                                </div>
                                <div class="row mb-8">
                                    <div class="col-6">
                                        <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                    </div>
                                    <div class="col-6">
                                        <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                            <option value="days">Days</option>
                                            <option value="weeks">Weeks</option>
                                            <option value="months">Months</option>
                                            <option value="years">Years</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                    <a href="../../demo1/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                </div>
                            </form>
                            <form data-kt-search-element="preferences" class="pt-1 d-none">
                                <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                <div class="pb-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <div class="d-flex justify-content-end pt-7">
                                    <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                    <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                        <i class="ki-duotone ki-chart-simple fs-2 fs-lg-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        </i>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                        <i class="ki-duotone ki-abstract-4 fs-2 fs-lg-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{ asset_url('app/media/misc/menu-header-bg.jpg') }}')">
                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
                                <span class="fs-8 opacity-75 ps-3">24 reports</span>
                            </h3>
                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                <li class="nav-item">
                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                <div class="scroll-y mh-325px my-5 px-8">
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-abstract-28 fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                                <div class="text-gray-400 fs-7">Phase 1 development</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">1 hr</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-danger">
                                                <i class="ki-duotone ki-information fs-2 text-danger">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                                <div class="text-gray-400 fs-7">Confidential staff documents</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">2 hrs</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-briefcase fs-2 text-warning">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                                <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">5 hrs</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-success">
                                                <i class="ki-duotone ki-abstract-12 fs-2 text-success">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                                <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">2 days</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-primary">
                                                <i class="ki-duotone ki-colors-square fs-2 text-primary">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                                <div class="text-gray-400 fs-7">Product launch status update</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">21 Jan</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-info">
                                                <i class="ki-duotone ki-picture fs-2 text-info"></i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                                <div class="text-gray-400 fs-7">Collection of banner images</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">21 Jan</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-35px me-4">
                                                <span class="symbol-label bg-light-warning">
                                                <i class="ki-duotone ki-color-swatch fs-2 text-warning">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                                <span class="path11"></span>
                                                <span class="path12"></span>
                                                <span class="path13"></span>
                                                <span class="path14"></span>
                                                <span class="path15"></span>
                                                <span class="path16"></span>
                                                <span class="path17"></span>
                                                <span class="path18"></span>
                                                <span class="path19"></span>
                                                <span class="path20"></span>
                                                <span class="path21"></span>
                                                </i>
                                                </span>
                                            </div>
                                            <div class="mb-0 me-2">
                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                                <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                            </div>
                                        </div>
                                        <span class="badge badge-light fs-8">20 March</span>
                                    </div>
                                </div>
                                <div class="py-3 text-center border-top">
                                    <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <i class="ki-duotone ki-arrow-right fs-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i></a>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                <div class="d-flex flex-column px-9">
                                    <div class="pt-10 pb-0">
                                        <h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
                                        <div class="text-center text-gray-600 fw-semibold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                        <div class="text-center mt-5 mb-9">
                                            <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                        </div>
                                    </div>
                                    <div class="text-center px-4">
                                        <img class="mw-100 mh-200px" alt="image" src="{{ asset_url('app/media/illustrations/sketchy-1/1.png') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                <div class="scroll-y mh-325px my-5 px-8">
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Just now</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                        </div>
                                        <span class="badge badge-light fs-8">2 hrs</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                        </div>
                                        <span class="badge badge-light fs-8">5 hrs</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                        </div>
                                        <span class="badge badge-light fs-8">2 days</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                        </div>
                                        <span class="badge badge-light fs-8">1 week</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Mar 5</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                        </div>
                                        <span class="badge badge-light fs-8">May 15</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Apr 3</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Jun 30</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Jul 10</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Sep 10</span>
                                    </div>
                                    <div class="d-flex flex-stack py-4">
                                        <div class="d-flex align-items-center me-2">
                                            <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                        </div>
                                        <span class="badge badge-light fs-8">Dec 10</span>
                                    </div>
                                </div>
                                <div class="py-3 text-center border-top">
                                    <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                    <i class="ki-duotone ki-arrow-right fs-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
                        <i class="ki-duotone ki-message-text-2 fs-2 fs-lg-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        </i>
                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-element-11 fs-2 fs-lg-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        </i>
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">My Apps</div>
                                <div class="card-toolbar">
                                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-setting-3 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    </i>
                                    </button>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Create Invoice</a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                            <i class="ki-duotone ki-information fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            </i>
                                            </span></a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Generate Bill</a>
                                        </div>
                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                            </a>
                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Plans</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Billing</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">Statements</a>
                                                </div>
                                                <div class="separator my-2"></div>
                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-5">
                                <div class="mh-450px scroll-y me-n5 pe-5">
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/amazon.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">AWS</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/angular-icon-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">AngularJS</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/atica.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Atica</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/beats-electronics.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Music</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/codeigniter.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Codeigniter</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/bootstrap-4.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Bootstrap</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/google-tag-manager.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">GTM</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/disqus.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Disqus</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Dribble</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/google-play-store.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Play Store</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/google-podcasts.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Podcasts</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/figma-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Figma</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/github.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Github</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/gitlab.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Gitlab</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/instagram-2-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Instagram</span>
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                            <img src="{{ asset_url('app/media/svg/brand-logos/pinterest-p.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                            <span class="fw-semibold">Pinterest</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    <span class="path6"></span>
                    <span class="path7"></span>
                    <span class="path8"></span>
                    <span class="path9"></span>
                    <span class="path10"></span>
                    </i>
                    <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-duotone ki-night-day fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                            </i>
                            </span>
                            <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-duotone ki-moon fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            </i>
                            </span>
                            <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                            <i class="ki-duotone ki-screen fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            </i>
                            </span>
                            <span class="menu-title">System</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img src="{{ asset_url('app/media/avatars/300-1.jpg') }}" alt="user" />
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset_url('app/media/avatars/300-1.jpg') }}" />
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
                                        <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5">
                            <a href="{{ route('profile.edit') }}" class="menu-link px-5">My Profile</a>
                        </div>
                        <div class="menu-item px-5">
                            <a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
                            <span class="menu-text">My Projects</span>
                            <span class="menu-badge">
                            <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                            </span>
                            </a>
                        </div>
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                            <span class="menu-title">My Subscription</span>
                            <span class="menu-arrow"></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="../../demo1/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                    <span class="ms-2" data-bs-toggle="tooltip" title="View your statements">
                                    <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    </i>
                                    </span></a>
                                </div>
                                <div class="separator my-2"></div>
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                        <span class="form-check-label text-muted fs-7">Notifications</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-5">
                            <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                            <a href="#" class="menu-link px-5">
                            <span class="menu-title position-relative">Language
                            <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                            <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset_url('app/media/flags/united-states.svg') }}" alt="" /></span></span>
                            </a>
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <div class="menu-item px-3">
                                    <a href="{{ route('set-language', ['locale' => 'en']) }}" class="menu-link d-flex px-5 active">
                                    <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset_url('app/media/flags/united-states.svg') }}" alt="" />
                                    </span>English</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="{{ route('set-language', ['locale' => 'es']) }}" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset_url('app/media/flags/spain.svg') }}" alt="" />
                                    </span>Spanish</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="{{ route('set-language', ['locale' => 'de']) }}" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset_url('app/media/flags/germany.svg') }}" alt="" />
                                    </span>German</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="{{ route('set-language', ['locale' => 'ja']) }}" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset_url('app/media/flags/japan.svg') }}" alt="" />
                                    </span>Japanese</a>
                                </div>
                                <div class="menu-item px-3">
                                    <a href="{{ route('set-language', ['locale' => 'fr']) }}" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset_url('app/media/flags/france.svg') }}" alt="" />
                                    </span>French</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item px-5 my-1">
                            <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                        </div>
                        <div class="menu-item px-5">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Sign Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>