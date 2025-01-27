<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <!-- Toggle Button -->
        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <!-- Right Side Content -->
        <div class="d-flex align-items-center">
            <!-- User Profile -->
            <div class="dropdown d-inline-block">
                @auth
                <button type="button" class="btn header-item" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->name }}</span>
                    <i class="fas fa-chevron-down d-none d-xl-inline-block"></i>
                </button>
                @endauth                <div class="dropdown-menu dropdown-menu-end">
                    <!-- Profile -->
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user-circle font-size-16 align-middle me-1"></i>
                        Profile
                    </a>
                    <!-- Settings -->
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cog font-size-16 align-middle me-1"></i>
                        Settings
                    </a>
                    <!-- Logout -->
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt font-size-16 align-middle me-1"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
