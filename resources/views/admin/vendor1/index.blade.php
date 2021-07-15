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
                        <h3>Manage Vendor Page
                            <small> Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Manage Vendor Page</li>
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
                   </div>
                    <div class="card-header text-center">
                        <h5>Manage Vendor Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                            <div class="text-center">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                            @endif
                            </div>
                        <div class= "card-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Username</th>
                                  <th>Time Created</th>
                                  <th>Email Address</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($vendor1 as $item)
                                <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->Username}}</td>
                                  <td>{{$item->created_at}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>
                                <a href="{{url('role-edit/'.$item->id)}}" class="badge badge-pill btn-primary">edit</a>
                                <a href="{{url('role-deleteVendor/'.$item->id)}}"class="badge badge-pill btn-danger">delete</a>

                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <div class="pull-right">
                            <a href="{{url('role-add')}}"class="badge badge-pill btn-info">Add Vendor</a>
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
