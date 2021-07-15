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
                        <h3>Make payment Page
                            <small> User panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Confirm Payment Page</li>
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
                        <h5>Make payment Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>

                        @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                </div>
                        @endif
                        @if (session('statusf'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('statusf') }}
                                    </div>
                        @endif
                        <form action="{{url('PaymentProceed')}}" method="post">
                            {{csrf_field()}}
                          <div class="form-group">
                              <label for=""> RoomName</label>
                              <input type="text" class="form-control" readonly name="RoomName" value="{{$user_role->RoomName}}">
                            </div>
                              <div class="form-group">
                              <label for=""> RoomSize</label>
                              <input type="text" class="form-control" readonly name="RoomSize" value="{{$user_role->RoomSize}}">
                            </div>
                              <div class="form-group">
                              <label for=""> Vendorname</label>
                              <input type="text" class="form-control" readonly name="Vendorname" value="{{$user_role-> Vendorname}}" >
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" Hidden name="Username" value="{{Auth::user()->Username}}" >
                            </div>
                              <div class="form-group">
                              <label for=""> Price</label>
                              <input type="text" class="form-control" readonly name="Price" value="{{$user_role->Price}}">
                            </div>
                            <div class="form-group">
                              <label for=""> From</label>
                              <input type="date" class="form-control" name="FromDate"> <input type="Time" required class="form-control" name="FromTime">
                              <label for=""> To</label>
                              <input type="date" class="form-control" name="ToDate"> <input type="Time" required class="form-control" name="ToTime">
                            </div>
                            <div class = "form-group">
                            <button type="submit" class="btn btn-primary">click to proceed</button>
                           </div>
                           </form>
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
