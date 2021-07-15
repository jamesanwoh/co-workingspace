<div class="page-wrapper">
    <!-- Page Body Start-->
      <div class="page-body-wrapper">

          <!-- Page Sidebar Start-->
          <div class="page-sidebar">
              <div class="main-header-left d-none d-lg-block">
                  <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
              </div>
              <div class="sidebar custom-scrollbar">
                  <div class="sidebar-user text-center">
                      <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('uploads/profile/'.Auth::user()->image)}}" alt="#">
                      </div>
                      <h6 class="mt-3 f-14">{{ Auth::user()->Username }}</h6>
                      <p>{{ Auth::user()->role_as }}</p>
                  </div>
                  <ul class="sidebar-menu">
                      <li><a class="sidebar-header" href="{{url('/dashboardUser')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                      <li><a class="sidebar-header" href="{{url('UserProfile')}}"><i data-feather="box"></i> <span>Profile</span></a></li>
                      <li><a class="sidebar-header" href="{{url('User_bookings')}}"><i data-feather="dollar-sign"></i><span>My Bookings</span></a></li>
                      <li><a class="sidebar-header" href="{{url('User_payments')}}"><i data-feather="tag"></i><span>My Payments</span></i></a></li>
                      <li><a class="sidebar-header" href="{{url('User_enquires')}}"><i data-feather="camera"></i><span>Compliant/Enquires</span></a></li>
                      <li><a class="sidebar-header" href="{{url('UserRequest')}}"><i data-feather="align-left"></i><span>Users Request</span></a></li>
                      <li><a class="sidebar-header" href="{{url('User_ChatAdmin')}}"><i data-feather="user-plus"></i><span>Chat with Admin</span></a></li>

                  </ul>
              </div>
          </div>
      </div>
   </div>  <!-- Page Sidebar Ends-->
