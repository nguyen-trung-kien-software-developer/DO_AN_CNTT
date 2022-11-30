<!--**********************************
Nav header start
***********************************-->
<div class="nav-header text-center p-4">
    <a href="{{ route('admin.dashboard.index') }}" class="brand-logo">
        @php
            $logo = $headerData->company['logo'];
        @endphp
        <img class="logo-abbr" src="{{ asset("storage/uploads/$logo") }}"
            alt="{{ $headerData->company['name'] }}">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
                            Nav header end
                        ***********************************-->


<!--**********************************
                            Header start
                        ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                </div>

                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <i class="mdi mdi-account"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('admin.users.privateInformation') }}" class="dropdown-item">
                                <i class="icon-user"></i>
                                <span class="ml-2">Hồ sơ cá nhân </span>
                            </a>
                            <a href="./page-login.html" class="dropdown-item">
                                <form action="{{ route('admin.users.logout') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="logoutBtn"><i class="icon-key"></i><span
                                            class="ml-2">Logout
                                        </span></button>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
                            Header end ti-comment-alt
                        ***********************************-->
