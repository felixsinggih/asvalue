<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('asv-admin') ? 'active' : '' }}" aria-current="page" href="/asv-admin">
                    <span class="fas fa-tachometer-alt"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('asv-admin/submission') ? 'active' : '' }}" href="/asv-admin/submission">
                    <span class="fas fa-clipboard-list"></span>
                    Orders
                </a>
            </li>
        </ul>
    </div>
</nav>
