@extends('layouts.vendor')

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
                        <h3>Manage Bookings
                            <small> Vendor panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Manage Bookings Page</li>
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
                        <h5>Manage Bookings</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class= "card-body">

                            <table id="datatable2" class="table table-bordered text-center">
                              <thead>
                                <tr>
                                  <th>SN</th>
                                  <th>Room name</th>
                                  <th>Room size</th>
                                  <th>Vendor</th>
                                  <th>Images</th>
                                  <th>Status</th>
                                  <th>category</th>
                                  <th>Description</th>
                                  <th>location</th>
                                  <th>Details</th>
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
                              <td><img name="image" src="{{asset('uploads/files')}}/{{$item->image}}" width="50px" height="50px"/></td>
                              <td>{{$item->Status}}</td>
                              <td>{{$item->category}}</td>
                              <td>{{$item->description}}</td>
                              <td>{{$item->location}}</td>
                              <td>{{$item->details}}</td>
                              <td>
                        <a href="{{url('Export/'.$item->id)}}" class="badge badge-pill btn-primary">Export To Excel</a>
                        <a href="{{url('New_Openings')}}"class="badge badge-pill btn-danger">New Openings</a>
                        <a href="{{url('Delete_Bookings/'.$item->id)}}"class="badge badge-pill btn-info">Delete Booking</a>
                        <a href="{{url('edit_Booking/'.$item->id)}}"class="badge badge-pill btn-danger">Update Booking</a>
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
</div>
</div>
@endsection

@section('script')
<script>
    $(document).ready( function () {
    $('#datatable2').DataTable();
} );
</script>
@endsection
