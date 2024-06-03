<div class="main-sidebar">
    <div class="main-menu">
        <ul class="sidebar-menu scrollable">
            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Dashboard</a>
                <ul class="sidebar-link-group">
                    <li class="sidebar-dropdown-item">
                        <a href="{{ route('index') }}" class="sidebar-link"><span class="nav-icon"><i
                                    class="far fa-home"></i></span>
                            <span class="sidebar-txt">Home</span></a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a role="button" class="sidebar-link-group-title has-sub">Product Info</a>
                <ul class="sidebar-link-group">
                    <x-li-sub icon="far fa-box" title="Product">
                        <li class="dropdown-item"><a href="{{ route('product.index') }}" class="sidebar-link">List
                                Product</a></li>
                        <li class="dropdown-item"><a href="{{ route('product.create') }}" class="sidebar-link">Create
                                Product</a></li>
                    </x-li-sub>
                    <x-li-sub icon="far fa-tags" title="Category">
                        <li class="dropdown-item"><a href="{{ route('category.index') }}" class="sidebar-link">List
                                Category </a></li>
                        {{-- <li class="dropdown-item"><a href="{{ route('product.create') }}"
                                class="sidebar-link">Create
                                Category</a></li> --}}
                    </x-li-sub>
                </ul>
            </li>

        </ul>

    </div>
</div>