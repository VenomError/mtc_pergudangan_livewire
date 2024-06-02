@props([ 'icon' => '' , 'title' =>'' ])

<li class="sidebar-dropdown-item">
    <a role="button" class="sidebar-link has-sub" data-dropdown="crmDropdown"><span class="nav-icon"><i
                class="{{ $icon }}"></i></span> <span class="sidebar-txt">{{ $title }}</span></a>
    <ul class="sidebar-dropdown-menu" id="crmDropdown">
        {{ $slot }}
    </ul>
</li>