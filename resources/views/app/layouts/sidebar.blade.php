<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="../../demo1/dist/index.html">
        <img alt="Logo" src="{{ asset_url('app/media/logos/default-dark.svg') }}" class="h-25px app-sidebar-logo-default" />
        <img alt="Logo" src="{{ asset_url('app/media/logos/default-small.svg') }}" class="h-20px app-sidebar-logo-minimize" />
        </a>
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
            <span class="path1"></span>
            <span class="path2"></span>
            </i>
        </div>
    </div>
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <!-- <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-element-11 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    </i>
                    </span>
                    <span class="menu-title">Dashboards</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo1/dist/index.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Default</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/dashboards/ecommerce.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">eCommerce</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/dashboards/projects.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Projects</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/dashboards/online-courses.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Online Courses</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/dashboards/marketing.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Marketing</span>
                            </a>
                        </div>
                        <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/bidding.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Bidding</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/pos.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">POS System</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/call-center.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Call Center</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/logistics.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Logistics</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/website-analytics.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Website Analytics</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/finance-performance.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Finance Performance</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/store-analytics.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Store Analytics</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/social.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Social</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/delivery.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Delivery</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/crypto.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Crypto</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/school.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">School</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/dashboards/podcast.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Podcast</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="../../demo1/dist/landing.html">
                                <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Landing</span>
                                </a>
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
                                <span data-kt-toggle-text-target="true">Show 12 More</span>
                                <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                </i>
                                <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="menu-item">
                    <a class="menu-link @if(request()->is('dashboard')) active @endif" href="{{ route('dashboard') }}">
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
                    <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                    </div>
                </div>
                @role('Admin')
                <div data-kt-menu-trigger="click" class="menu-item @if(request()->is('users') || request()->is('users/create')) here show @endif menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-map fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">Users</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <!-- <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                            </a>
                        </div> -->
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('users')) active @endif" href="{{ route('users.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">User List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('users/create')) active @endif" href="{{ route('users.create') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Add User</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if(request()->is('categories') || request()->is('variant') || request()->is('hsnsac') || request()->is('product') || request()->is('product/create') || request()->is('product/edit/*')) here show @endif menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-map fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">Product Management</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <!-- <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                            </a>
                        </div> -->
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('categories')) active @endif" href="{{ route('categories.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Categories</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('variant')) active @endif" href="{{ route('variant.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Variants</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('hsnsac')) active @endif" href="{{ route('hsnsac.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">HSN/SAC Management</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('product') || request()->is('product/create') || request()->is('product/edit/*')) active @endif" href="{{ route('product.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Products</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if(request()->is('qrpoint') || request()->is('qrcode')) here show @endif menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-map fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">QR Management</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <!-- <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Getting Started</span>
                            </a>
                        </div> -->
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('qrpoint')) active @endif" href="{{ route('qrpoint.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">QR Point</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('qrcode')) active @endif" href="{{ route('qrcode.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">QR Code Generation</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->is('events')) active @endif" href="{{ url('events') }}">
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
                    <span class="menu-title">Event Management</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->is('video')) active @endif" href="{{ url('video') }}">
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
                    <span class="menu-title">Video Management</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->is('gallery')) active @endif" href="{{ url('gallery') }}">
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
                    <span class="menu-title">Gallery Management</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->is('feedback')) active @endif" href="{{ url('feedback') }}">
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
                    <span class="menu-title">Feedback Management</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if(request()->is('redeem') || request()->is('redeem/view/*') || request()->is('redeem/request')) here show @endif menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-map fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">Account Management</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('redeem') || request()->is('redeem/view/*')) active @endif" href="{{ route('redeem.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Redeem Data</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('redeem/request')) active @endif" href="{{ route('redeem.request') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Import/Export Redeem Data</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link @if(request()->is('catalogue')) active @endif" href="{{ url('catalogue') }}">
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
                    <span class="menu-title">Our Catalogue</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item @if(request()->is('user/report') || request()->is('event/report')) here show @endif menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-map fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">Reports</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('user/report')) active @endif" href="{{ route('user.report.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">User Reports</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link @if(request()->is('event/report')) active @endif" href="{{ route('event.report.index') }}">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Event Reports</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endrole
                <!-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-address-book fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">User Profile</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/overview.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/projects.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Projects</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/campaigns.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Campaigns</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/documents.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Documents</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/followers.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Followers</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/user-profile/activity.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Activity</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-element-plus fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    </i>
                    </span>
                    <span class="menu-title">Account</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/overview.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/settings.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/security.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Security</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/activity.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Activity</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/billing.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Billing</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/statements.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Statements</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/referrals.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Referrals</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/api-keys.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">API Keys</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/account/logs.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Logs</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-user fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Authentication</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Corporate Layout</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/sign-in.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-in</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/sign-up.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/two-factor.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Two-Factor</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/reset-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Reset Password</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/new-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">New Password</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overlay Layout</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/sign-in.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-in</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/sign-up.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/two-factor.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Two-Factor</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/reset-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Reset Password</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/new-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">New Password</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Creative Layout</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/sign-in.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-in</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/sign-up.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/two-factor.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Two-Factor</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/reset-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Reset Password</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/new-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">New Password</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Fancy Layout</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/sign-in.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-in</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/sign-up.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Sign-up</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/two-factor.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Two-Factor</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/reset-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Reset Password</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/new-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">New Password</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Email Templates</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/welcome-message.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Welcome Message</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/reset-password.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Reset Password</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/subscription-confirmed.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Subscription Confirmed</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/card-declined.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Credit Card Declined</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/promo-1.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Promo 1</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/promo-2.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Promo 2</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/authentication/email/promo-3.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Promo 3</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/extended/multi-steps-sign-up.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Multi-steps Sign-up</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/welcome.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Welcome Message</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/verify-email.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Verify Email</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/coming-soon.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Coming Soon</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/password-confirmation.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Password Confirmation</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/account-deactivated.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Account Deactivation</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/error-404.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Error 404</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/authentication/general/error-500.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Error 500</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-file fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Corporate</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/about.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">About</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/team.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Our Team</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/contact.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Contact Us</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/licenses.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Licenses</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/sitemap.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Sitemap</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-abstract-39 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Social</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/social/feeds.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Feeds</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/social/activity.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Activty</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/social/followers.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Followers</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/social/settings.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Settings</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-bank fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Blog</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/blog/home.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Blog Home</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/blog/post.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Blog Post</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-chart-pie-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">FAQ</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/faq/classic.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">FAQ Classic</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/faq/extended.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">FAQ Extended</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-bucket fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    </i>
                    </span>
                    <span class="menu-title">Pricing</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/pricing/column.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Column Pricing</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/pricing/table.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Table Pricing</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-call fs-2">
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
                    <span class="menu-title">Careers</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/careers/list.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Careers List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/pages/careers/apply.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Careers Apply</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-color-swatch fs-2">
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
                    <span class="menu-title">Utilities</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Modals</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">General</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/general/invite-friends.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Invite Friends</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/general/view-users.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">View Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/general/select-users.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Select Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Upgrade Plan</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/general/share-earn.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Share & Earn</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Forms</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-target.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Target</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-card.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Card</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-address.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">New Address</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/create-api-key.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create API Key</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/bidding.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Bidding</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Wizards</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-app.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create App</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create Campaign</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-account.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create Business Acc</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-project.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Create Project</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Top Up Wallet</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Offer a Deal</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/two-factor-authentication.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Two Factor Auth</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Search</span>
                                    <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/search/users.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo1/dist/utilities/modals/search/select-location.html">
                                            <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Select Location</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Search</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/search/horizontal.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Horizontal</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/search/vertical.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Vertical</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/search/users.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Users</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/search/select-location.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Location</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Wizards</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/horizontal.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Horizontal</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/vertical.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Vertical</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/two-factor-authentication.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Two Factor Auth</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-app.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Create App</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-campaign.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Create Campaign</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-account.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Create Account</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-project.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Create Project</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Top Up Wallet</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/utilities/wizards/offer-a-deal.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Offer a Deal</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-element-7 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Widgets</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/widgets/lists.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Lists</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/widgets/statistics.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Statistics</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/widgets/charts.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Charts</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/widgets/mixed.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Mixed</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/widgets/tables.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tables</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/widgets/feeds.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Feeds</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-abstract-41 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Projects</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-basket fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    </i>
                    </span>
                    <span class="menu-title">eCommerce</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Catalog</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
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
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
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
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
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
                                    <span class="menu-title">Customer Listing</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Customer Details</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-abstract-25 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Contacts</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
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
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Overview</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tickets</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Tickets List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
                                    <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">View Ticket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Tutorials</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
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
                                    <span class="menu-title">Tutorial Post</span>
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-abstract-28 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">User Management</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Users</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
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
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Roles</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
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
                                    <span class="menu-title">View Role</span>
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-abstract-38 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Customers</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-map fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    </i>
                    </span>
                    <span class="menu-title">Subscription</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-credit-cart fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Invoice Manager</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">View Invoices</span>
                            <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-switch fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">File Manager</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
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
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Messages</span>
                            <span class="menu-badge">
                            <span class="badge badge-success">3</span>
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
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
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
                    <div class="menu-sub menu-sub-accordion">
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
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Layouts</span>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-element-7 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Layout Options</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/layouts/light-sidebar.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Light Sidebar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/layouts/dark-sidebar.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Dark Sidebar</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/layouts/light-header.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Light Header</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/layouts/dark-header.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Dark Header</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-text-align-center fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    </i>
                    </span>
                    <span class="menu-title">Toolbars</span>
                    <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/toolbars/classic.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Classic</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/toolbars/saas.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">SaaS</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/toolbars/accounting.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Accounting</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/toolbars/extended.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Extended</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo1/dist/toolbars/reports.html">
                            <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Reports</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">
                    <span class="menu-icon">
                    <i class="ki-duotone ki-abstract-13 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    </i>
                    </span>
                    <span class="menu-title">Layout Builder</span>
                    </a>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
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
                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
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
                </div> -->
            </div>
        </div>
    </div>
    <!-- <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
        <span class="btn-label">Docs & Components</span>
        <i class="ki-duotone ki-document btn-icon fs-2 m-0">
        <span class="path1"></span>
        <span class="path2"></span>
        </i>
        </a>
    </div> -->
</div>