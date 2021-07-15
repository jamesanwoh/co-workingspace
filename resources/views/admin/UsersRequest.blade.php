@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="page-body-wrapper">
        <div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>User Request Page
                            <small> Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">User Request Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>User Request Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class= "card-body">

                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>SN</th>
                                  <th>Room name</th>
                                  <th>Room size</th>
                                  <th>Username</th>
                                  <th>Price</th>
                                  <th>Request Details</th>
                                  <th>Schedule</th>
                                  <th>Schedule</th>
                                  <th>Schedule</th>
                                  <th>Schedule</th>
                                </tr>
                              </thead>
                            <tbody>
                              @foreach($users as $item)
                             <tr>
                              <td>{{$item->id}}</td>
                              <td>{{$item->RoomName}}</td>
                              <td>{{$item->RoomSize}}</td>
                              <td>{{$item->Username}}</td>
                              <td>{{$item->Price}}</td>
                              <td>{{$item->Price}}</td>
                              <td>{{$item->FromDate}}</td><td>{{$item->FromTime}}</td><td>{{$item->ToDate}}</td><td>{{$item->ToTime}}</td>
                             </tr>
                            </tbody>
                            @endforeach
                           </table>
                           <div class="pull-right">
                           <a href="#"><button class="btn btn-danger">Export To Excel</button></a>
                           </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    <!-- Container-fluid Ends-->

</div>
@endsection
