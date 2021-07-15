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
                        <h3>User User Page
                            <small> User panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">User Payment Page</li>
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
                        <h5>User Payment Page</h5>
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
                                  <th>Vendor</th>
                                  <th>price</th>
                                  <th>Status</th>
                                </tr>
                              </thead>
                            <tbody>
                              @foreach ($user_role as $object)
                             <tr>
                              <td>{{$object->id}}</td>
                              <td>{{$object->RoomName}}</td>
                              <td>{{$object->RoomSize}}</td>
                              <td>{{$object->Vendorname}}</td>
                              <td>{{$object->Price}}</td>
                              <td>
                                <a href="{{url('#')}}" class="badge badge-pill btn-success">Paid</a>
                              </td>
                             </tr>
                            </tbody>
                            @endforeach
                           </table>
                          <br/>
                          <div class="pull-right">
                          <button type="submit" class="btn btn-danger">Export To Excel</button>
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
