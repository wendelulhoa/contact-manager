<header class="pc-header">
    <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <svg class="pc-icon">
                            <use xlink:href="#custom-sun-1"></use>
                        </svg>
                    </a>
                </li>
                
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                        aria-expanded="false">
                        <div class="" style="margin-right: 4px;">
                            <ul class="avatar-list">
                                <li>
                                    <img src="{{ mix('images/user.png') }}" alt="photo">
                                </li>
                            </ul>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <div class="d-flex mb-1">
                                    <div class="" style="margin-right: 4px;">
                                        <ul class="avatar-list">
                                            <li>
                                                <img src="{{ mix('images/user.png') }}" alt="photo">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">{{ Auth::user()->name }} 🖖</h6>
                                        <span>{{ Auth::user()->email }}</span> <br>
                                        <span>Access to: 2026-12-12 </span>
                                    </div>
                                </div>
                                <hr class="border-secondary border-opacity-50" />
                                <p class="text-span">Settings</p>
                                <a href="" class="dropdown-item">
                                    <span>
                                        <i class="ti ti-user"></i>
                                        <span>my profile</span>
                                    </span>
                                </a>
                                
                                <hr class="border-secondary border-opacity-50" />
                                <div class="d-grid mb-3">
                                    <button class="btn btn-primary" onclick="logoutSystem()">
                                        <svg class="pc-icon me-2">
                                            <use xlink:href="#custom-logout-1-outline"></use>
                                        </svg> Logout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>