@php
    $current_page = \Route::currentRouteName();
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion {{Session::get('sidebar_toggled')}}" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('supervisor.index')}}">
        <div class="sidebar-brand-icon ">
            {{--            <i class="fas fa-laugh-wink"></i>--}}
            <img src="{{asset('assets/img/system/logo.png')}}" class="img-fluid" alt="logo" width="60PX">
        </div>
        <div class="sidebar-brand-text mx-2">EXTENSY<sup> v2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @role(['agent'])
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('agent.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item @if($current_page == 'supervisor.index' || $current_page == 'supervisor.tickets.index' || $current_page == 'supervisor.socials.index' || $current_page == 'supervisor.chats.index') active @endif">
        <a
            class="nav-link collapsed "
            href="#"
            data-toggle="collapse"
            data-target="#collapseDashboards"
            aria-expanded="true"
            aria-controls="collapseDashboards">
            <i class="fa fa-envelope "></i>
            <span>Mail</span>
        </a>
        <div
            id="collapseDashboards"
            class="collapse @if(($current_page == 'supervisor.index' || $current_page == 'supervisor.tickets.index' || $current_page == 'supervisor.socials.index' || $current_page == 'supervisor.chats.index') && Session::get('sidebar_toggled') != 'toggled') show @endif"
            aria-labelledby="headingDashboards"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($current_page == 'supervisor.index') active @endif" href="{{route('supervisor.index')}}">Inbox</a>
{{--                <a class="collapse-item @if($current_page == 'supervisor.tickets.index') active @endif" href="{{route('supervisor.tickets.index')}}">Started</a>--}}
                <a class="collapse-item @if($current_page == 'supervisor.socials.index') active @endif" href="{{route('supervisor.socials.index')}}">Sent</a>
                <a class="collapse-item @if($current_page == 'supervisor.chats.index') active @endif" href="{{route('supervisor.chats.index')}}">Trash</a>
                <a class="collapse-item @if($current_page == 'supervisor.chats.index') active @endif" href="{{route('supervisor.chats.index')}}">Forward</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    @endrole





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" onclick="sidebarToggled()"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<script>
    function sidebarToggled(){
        $(function(){
            $.ajax({url: "{{route('sidebar')}}", success: function(result){console.log(result)}});
        });
    }
</script>
