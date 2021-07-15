<div class="page-wrapper">
  <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="/assets/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('uploads/profile/'.Auth::user()->image)}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{ Auth::user()->Username }}</h6>
                    <p>{{ Auth::user()->role_as }}</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{url('/dashboardAdmin')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="{{url('AdminProfile')}}"><i data-feather="box"></i> <span>Profile</span></a></li>
                    <li><a class="sidebar-header" href="{{url('ManageBookings')}}"><i data-feather="dollar-sign"></i><span>Manage Bookings</span></a></li>
                    <li><a class="sidebar-header" href="{{url('AllPayments')}}"><i data-feather="tag"></i><span>All Payments</span></i></a></li>
                    <li><a class="sidebar-header" href="{{url('AllReports')}}"><i data-feather="clipboard"></i><span>All Report</span></i></a></li>
                    <li><a class="sidebar-header" href="{{url('AllCompliant')}}"><i data-feather="camera"></i><span>All Compliant/Enquires</span></a></li>
                    <li><a class="sidebar-header" href="{{url('UsersRequest')}}"><i data-feather="align-left"></i><span>Users Request</span></a></li>
                    <li><a class="sidebar-header" href="{{url('ManageUsers1')}}"><i data-feather="user-plus"></i><span>Manage Users</span></a></li>
                    <li><a class="sidebar-header" href="{{url('ManageVendors')}}"><i data-feather="users"></i><span>Manage Vendors</span></a></li>
                    <li><a class="sidebar-header" href="{{url('ChatWithVendor')}}"><i data-feather="chrome"></i><span>Chat with Vendors</span></a></li>
                    <li><a class="sidebar-header" href="{{url('ChatWithUsers')}}"><i data-feather="bar-chart"></i><span>Chat with Users</span></a></li>

                </ul>
            </div>
        </div>
    </div>
 </div>  <!-- Page Sidebar Ends-->
