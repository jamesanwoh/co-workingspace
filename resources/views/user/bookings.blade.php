@extends('layouts.user')

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
                        <h3>Bookings Page
                            <small> User panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Bookings Page</li>
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
                        <h5>Bookings Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class= "card-body">

                            <table id="datatable1"  class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>SN</th>
                                  <th>Room name</th>
                                  <th>Room size</th>
                                  <th>Vendor</th>
                                  <th>Price</th>
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
                              <td id="status">{{$item->Price}}</td>
                              <input type="text" class="form-control" readonly hidden id="status" name="status" value="{{$item->Status}}">
                              <td><a href="{{url('Make_payment_Now/'.$item->id)}}" class="badge badge-pill btn-primary" id ="Book_Now">Make Payment Now</a></td>
                             </tr>
                              @endforeach
                            </tbody>
                           </table>

                             {{-- {{$users->links()}} --}}

                          <br/>
                        <div class="pull-right">
                          <button type="submit" class="btn btn-danger">Export To Excel</button>
                          <a href="{{url('UserRequest')}}"><button type="submit"  class="btn btn-primary">New Request</button></a>
                        </div>
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

@section('script')
<script>
    $(document).ready( function () {
    $('#datatable1').DataTable();
} );
</script>
@endsection

