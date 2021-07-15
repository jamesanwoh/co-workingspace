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
                                    <h3>Edit profile Page
                                        <small> Vendor panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item active">Edit Profile Page</li>
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
                                    <h5>Edit Profile Page</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-body">
                                    <form action="{{url('UserUpdate')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                        <div class="form-group">
                                            ​<picture>
                                            <input type="file" name="image" class="form-control">
                                                    <img name="image" src="{{asset('uploads/profile/'.Auth::user()->image)}}" class="img-fluid img-thumbnail" alt="image">
                                            </picture>
                                        </div>
                                    <button type="submit" class="btn btn-primary">change profile picture</button>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-xl-8">
                        <div class="card tab2-card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="top-tabContent">
                                    <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                        <h5 class="f-w-600">Profile</h5>
                                        <div class="form-group">
                                            <label for=""> Username</label>
                                                <input type="text" class="form-control" name="Username" readonly value="{{Auth::user()->Username}}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Firstname</label>
                                                <input type="text" class="form-control" name="Firstname" value="{{Auth::user()->Firstname}}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Lastname</label>
                                                <input type="text" class="form-control" name="Lastname" value="{{Auth::user()->Lastname}}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Email</label>
                                                <input type="email" class="form-control" name="email" readonly value="{{Auth::user()->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Phone</label>
                                                <input type="text" class="form-control" name="phone_number" value="{{Auth::user()->phone_number}}">
                                        </div>
                                        <div class="form-group">
                                            <label for=""> Address</label>
                                                <input type="text" class="form-control" name="Address" value="{{Auth::user()->Address}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
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
</div>
    <!-- Container-fluid Ends-->
@endsection
