<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="h4 demo menu-text fw-bolder ms-2">UKMI POLMED</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item active">
            <a href="{{route('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                Dashboard
            </a>
        </li>
        {{-- ikhwan --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data Ikhwan</span>
        </li>

        <li class="menu-item">
            <a href="{{route('data-pendaftar')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
                Data Pendaftar
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                Anggota Ikhwan
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        Data Mentoring
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        Data Anggota
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        Data Murabbi
                    </a>
                </li>
            </ul>
        </li>

        {{-- akhwat --}}
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Data Ahkwat</span>
        </li>

        <li class="menu-item">
            <a href="/data-pendaftar" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-rectangle"></i>
                Data Pendaftar
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                Anggota Ikhwan
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        Data Mentoring
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        Data Anggota
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        Data Murabbi
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
