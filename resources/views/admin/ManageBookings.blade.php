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
                        <h3>Booking List
                            <small> Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Booking List</li>
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
                        <h5>Booking Lists</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>SN</th>
                                        <th>Room name</th>
                                        <th>Room size</th>
                                        <th>Vendor</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                  <tbody>
                                     @foreach ($users as $item)
                                   <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->RoomName}}</td>
                                    <td>{{$item->RoomSize}}</td>
                                    <td>{{$item->Vendorname}}</td>
                                    <td>{{$item->Status}}</td>
                                    <td>
                                      <a href="{{url('Export_To_Excel/'.$item->id)}}" class="badge badge-pill btn-danger" >Export To Excel</a>
                                      <a href="{{url('NewOpeningsBooking')}}" class="badge badge-pill btn-info">New Openings</a>

                                      <a href="{{url('Delete_Booking/'.$item->id)}}" class="badge badge-pill btn-danger" >Delete Booking</a>

                                      <a href="{{url('Update_Bookings/'.$item->id)}}" class="badge badge-pill btn-primary">Update Bookings</a>
                                    </td>
                                   </tr>
                                    @endforeach
                                  </tbody>
                                 </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>
