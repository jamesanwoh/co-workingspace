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
                        <h3>Compliant / Enquires Page
                            <small> Vendor panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Compliant / Enquires Page</li>
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
                        <h5>Compliant / Enquires Page


                        </h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class= "card-body">

                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>SN</th>
                                  <th>issues</th>
                                  <th>time created</th>
                                  <th>Client</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                            <tbody>
                              @foreach($users as $items)
                             <tr>
                              <td>{{$items->id}}</td>
                              <td>{{$items->issue}}</td>
                              <td>{{$items->created_at}}</td>
                              <td>{{$items->Username}}</td>
                              <td>{{$items->status}}</td>
                              <td>
                        <a href="{{url('Export_To_Excel/')}}" class="badge badge-pill btn-primary">Export To Excel</a>
                        <a href="{{url('CloseComplaints/'.$items->id)}}"class="badge badge-pill btn-danger">Close Complaints</a>

                              </td>
                             </tr>
                            </tbody>
                            @endforeach
                           </table>
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
