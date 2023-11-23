<div class="app-menu">

    @include('./partials/logo')

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5 z-50">
        <span class="sr-only">Menu Toggle Button</span>
        <i class="ri-checkbox-blank-circle-line text-xl"></i>
    </button>

    <!--- Menu -->
    <div class="scrollbar" data-simplebar>
        <ul class="menu" data-fc-type="accordion">
            <li class="menu-title">Navigation</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-home-4-line"></i>
                    </span>
                    <span class="menu-text"> Dashboard </span>
                    <span class="badge bg-success rounded-full">2</span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="dashboard-analytics.html" class="menu-link">
                            <span class="menu-text">Analytics</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="index.html" class="menu-link">
                            <span class="menu-text">Ecommerce</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-task-line"></i>
                    </span>
                    <span class="menu-text"> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="apps-tasks-list.html" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="apps-tasks-details.html" class="menu-link">
                            <span class="menu-text">Details</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="apps-kanban.html" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-list-check-3"></i>
                    </span>
                    <span class="menu-text">Kanban Board</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="apps-file-manager.html" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-folder-2-line"></i>
                    </span>
                    <span class="menu-text"> File Manager </span>
                </a>
            </li>

            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                    <span class="menu-icon">
                        <i class="ri-shield-user-line"></i>
                    </span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>

                <ul class="sub-menu hidden">
                    <li class="menu-item">
                        <a href="auth-login.html" class="menu-link">
                            <span class="menu-text">Login</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-login-2.html" class="menu-link">
                            <span class="menu-text">Login 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-register.html" class="menu-link">
                            <span class="menu-text">Register</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-register-2.html" class="menu-link">
                            <span class="menu-text">Register 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-logout.html" class="menu-link">
                            <span class="menu-text">Logout</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-logout-2.html" class="menu-link">
                            <span class="menu-text">Logout 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-recoverpw.html" class="menu-link">
                            <span class="menu-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-recoverpw-2.html" class="menu-link">
                            <span class="menu-text">Recover Password 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-lock-screen.html" class="menu-link">
                            <span class="menu-text">Lock Screen</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-lock-screen-2.html" class="menu-link">
                            <span class="menu-text">Lock Screen 2</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-confirm-mail.html" class="menu-link">
                            <span class="menu-text">Confirm Mail</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="auth-confirm-mail-2.html" class="menu-link">
                            <span class="menu-text">Confirm Mail 2</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
</div>
<!-- Sidenav Menu End  -->