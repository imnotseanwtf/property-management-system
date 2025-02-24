<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-2 pt-3">
        @include('layouts.responsive-topbar')
        @admin
            @include('layouts.admin.navigation')
        @endadmin
        
        @tenant
            @include('layouts.tenant.navigation')
        @endtenant
    </div>
</nav>
