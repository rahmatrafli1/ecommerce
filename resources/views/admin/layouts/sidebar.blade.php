<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Ecommerce</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{ url('admin/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Category</span>
        </li>

        <li class="menu-item {{ request()->is('admin/category/add') ? 'active' : '' }}">
            <a href="{{ url('admin/category/add') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus-medical"></i>
                <div data-i18n="Analytics">Add Category</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/category') ? 'active' : '' }}">
            <a href="{{ url('admin/category') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Analytics">All Category</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Sub Category</span>
        </li>

        <li class="menu-item {{ request()->is('admin/subcategory/add') ? 'active' : '' }}">
            <a href="{{ url('admin/subcategory/add') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus-medical"></i>
                <div data-i18n="Analytics">Add Sub Category</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/subcategory') ? 'active' : '' }}">
            <a href="{{ url('admin/subcategory') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Analytics">All Sub Category</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Product</span>
        </li>

        <li class="menu-item {{ request()->is('admin/product/add') ? 'active' : '' }}">
            <a href="{{ url('admin/product/add') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus-medical"></i>
                <div data-i18n="Analytics">Add Product</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/product') ? 'active' : '' }}">
            <a href="{{ url('admin/product') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Analytics">All Product</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Orders</span>
        </li>

        <li class="menu-item {{ request()->is('admin/pendingorder') ? 'active' : '' }}">
            <a href="{{ url('admin/pendingorder') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-rounded-dots"></i>
                <div data-i18n="Analytics">Pending Orders</div>
            </a>
        </li>
    </ul>
</aside>
