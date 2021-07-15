<div class="page-wrapper">
    <!-- Page Body Start-->
      <div class="page-body-wrapper">

          <!-- Page Sidebar Start-->
          <div class="page-sidebar">
              <div class="main-header-left d-none d-lg-block">
                  <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png"  alt=""></a></div>
              </div>
              <div class="sidebar custom-scrollbar">
                  <div class="sidebar-user text-center">
                      <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('uploads/profile/'.Auth::user()->image)}}" alt="#">
                      </div>
                      <h6 class="mt-3 f-14">{{ Auth::user()->Username }}</h6>
                      <p>{{ Auth::user()->role_as }}</p>
                  </div>
                  <ul class="sidebar-menu">
                      <li><a class="sidebar-header" href="{{url('/dashboardVendor')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                      <li><a class="sidebar-header" href="{{url('VendorProfile')}}"><i data-feather="box"></i> <span>Profile</span></a></li>
                      <li><a class="sidebar-header" href="{{url('Manage_bookings')}}"><i data-feather="dollar-sign"></i><span>Manage Bookings</span></a></li>
                      <li><a class="sidebar-header" href="{{url('Payments')}}"><i data-feather="tag"></i><span> Payments</span></i></a></li>
                      <li><a class="sidebar-header" href="{{url('Reports')}}"><i data-feather="clipboard"></i><span>Report</span></i></a></li>
                      <li><a class="sidebar-header" href="{{url('Compliant/Enquires')}}"><i data-feather="camera"></i><span> Compliant/Enquires</span></a></li>
                      <li><a class="sidebar-header" href="{{url('Users_Request')}}"><i data-feather="align-left"></i><span>Users Request</span></a></li>
                      <li><a class="sidebar-header" href="{{url('Chat_with_AdminbyVendor')}}"><i data-feather="users"></i><span>Chat with Admin</span></a></li>
                  </ul>
              </div>
          </div>
      </div>
   </div>  <!-- Page Sidebar Ends-->
