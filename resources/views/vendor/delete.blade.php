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
                        <h3>Delete
                            <small> Vendor panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Delete</li>
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
                        <h5>Delete</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class= "card-body ml-5">


                              <form action="{{url('destroy/'.$user_role->id)}}" method="post">
                                {{csrf_field()}}
                                @method('put')
                              <div class="form-group">
                                  <label for=""> RoomName</label>
                                  <input type="text" class="form-control" name="RoomName" value="{{$user_role->RoomName}}">
                                </div>
                                  <div class="form-group">
                                  <label for=""> RoomSize</label>
                                  <input type="text" class="form-control" name="RoomSize" value="{{$user_role->RoomSize}}">
                                </div>
                                  <div class="form-group">
                                  <label for=""> Username</label>
                                  <input type="text" class="form-control" name="Vendorname" value="{{$user_role-> Vendorname}}" >
                                </div>
                                <div class="form-group">
                                  <label for=""> Status</label>
                                  <input type="text" class="form-control" name="Username" value="{{$user_role->Status}}" >
                                </div>
                                  <div class="form-group">
                                  <label for=""> Price</label>
                                  <input type="text" class="form-control" name="Price" value="{{$user_role->Price}}">
                                </div>
                                <div class = "form-group">
                                <button type="submit" class="btn btn-danger">Delete</button>
                               </div>
                               </form>
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
