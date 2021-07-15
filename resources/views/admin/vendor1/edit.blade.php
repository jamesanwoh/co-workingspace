@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
    <div class="right-sidebar" id="right_side_bar"></div>
        <div class="page-body-wrapper">
            <div class="page-body">

            <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Edit Vendor Page
                                        <small> Admin panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item active">Edit Vendor Page</li>
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
                        <div class="card tab2-card">
                            <div class="card-header text-center">
                                <h5> Edit Vendor</h5>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    @if (session('status'))
                                       <div class="alert alert-success" role="alert">
                                           {{ session('status') }}
                                   @endif
                                   </div>
                               </div>
                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form class="needs-validation user-add" action="{{url('role-update/'.$user_role->id)}}" method="post">
                                            {{csrf_field()}}
                                            @method('put')

                                            <h4>Account Details</h4>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> UserName</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text"  name="Username" class="form-control" value="{{$user_role->Username}}">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> First Name</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" name="Firstname" class="form-control" value="{{$user_role->Firstname}}">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Last Name</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom1" type="text" name="Lastname" class="form-control" value="{{$user_role->Lastname}}">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom2" type="text" name="email" class="form-control" readonly value="{{$user_role->email}}">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom3" type="text" name="password" class="form-control" value="{{$user_role->password}}">
                                            </div>
                                            <div class = "form-group row">
                                                <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Select Role</label>
                                                <select name="role_as" class="form-control col-xl-8 col-md-7">
                                                <option value="{{$user_role->role_as}}">--- select here ---</option>
                                                <option value="vendor">vendor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                        <div class = "form-group">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-info">reset</button>
                                    </div></div>
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

</div>
    <!-- Container-fluid Ends-->

</div>
@endsection
