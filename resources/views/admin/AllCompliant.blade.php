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
                        <h3>Compliant & Enquire Page
                            <small> Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Compliant & Enquire Page</li>
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
                        <h5>Compliant & Enquire Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class= "card-body">

                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>SN</th>
                                  <th>issues</th>
                                  <th>Time Created</th>
                                  <th>Username</th>
                                  <th>Vendorname</th>
                                  <th>status</th>
                                  <th>action</th>
                                </tr>
                              </thead>
                            <tbody>
                              @foreach ($users as $object)
                             <tr>
                              <td>{{$object->id }}</td>
                              <td>{{$object->issue}}</td>
                              <td>{{$object->created_at}}</td>
                              <td>{{$object->Username}}</td>
                              <td>{{$object->Vendorname}}</td>
                              <td>#</td>
                              <td><a href="{{url('Complaints/'.$object->id)}}" class="badge badge-pill btn-primary" >Close Complaint</a></td>
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
