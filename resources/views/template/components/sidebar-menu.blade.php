<nav class="pc-sidebar {{ ($hide ?? false) ? 'pc-sidebar-hide' : '' }}">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="{{ route('admin.dashboard') }}" class="b-brand text-primary">
                <img src="/images/logo.png" alt="user-image" class="wid-40 rounded-circle">
                <span class="badge bg-light-success rounded-pill ms-2 theme-version">alfasoft</span>
            </a>
        </div>
        <div class="navbar-content">
            @auth
                <div class="card pc-user-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="" style="margin-left: 15px;">
                                <ul class="avatar-list">
                                    <li>
                                        <img src="{{ mix('images/user.png') }}" alt="photo">
                                    </li>
                                </ul>
                            </div>
                            <div class="flex-grow-1 ms-3 me-2">
                                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                                <small>{{ Auth::user()->email }}</small>
                            </div>
                            <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                                href="#pc_sidebar_userlink">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-sort-outline"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                            <div class="pt-3">
                                <a href="" disable>
                                    <i class="ti ti-user"></i>
                                    <span>My Profile (developing)</span>
                                </a>
                                <a href="#!" onclick="logoutSystem()">
                                    <i class="ti ti-power"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="pc-navbar">
                    <li class="pc-item">
                        <a href="{{ route('admin.dashboard') }}" class="pc-link">
                            <span class="pc-micon"><svg class="pc-icon"><use xlink:href="#custom-graph"></use></svg> </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="pc-item">
                        <a href="{{ route('admin.contact.index') }}" class="pc-link">
                            <span class="pc-micon">
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="pc-mtext">Contacts</span>
                        </a>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>