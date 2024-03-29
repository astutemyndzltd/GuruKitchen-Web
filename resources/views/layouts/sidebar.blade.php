<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-{{setting('theme_contrast')}}-{{setting('theme_color')}} elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link {{ setting('logo_bg_color','bg-white') }}">
        <img src="{{url('images/logo2.png')}}" alt="{{ setting('app_name') }}" class="image-brand">
        {{-- <span class="brand-text font-weight-light">{{setting('app_name')}}</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu', [ 'icons' => true ])
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
