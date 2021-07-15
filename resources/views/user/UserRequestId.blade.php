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
                        <h3>User Request Page
                            <small> User panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">User Request Page</li>
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
                        <h5>Request Confirmation Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                              <!--Main layout-->
          <!--  @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                              </div>
                      @endif-->
                      </div>

                      <div class="col-sm-4">
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
                      </div>
                      <div class="col-sm-4">
            <!--@if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                              </div>
                      @endif-->

        </div>
          <div class="row">
            <div class="col-sm-2">
              <div class="card">

                <div class="card-header">
                  <h5><strong>Profile Picture</strong></h5>
                </div>
              </div>
            </div>
                  <div class="col-sm-6">
                    <div class="card">
                      <div class= "card-body">
                      <form action="{{url('ClickHereToProceed/')}}" method="post">
                        {{csrf_field()}}
                            <input type="text" class="form-control" readonly name="id" value="{{$user_role->id}}" >

                            <input type="text" class="form-control" readonly name="RoomName" value="{{$user_role->RoomName}}">

                            <input type="text" class="form-control" hidden readonly name="Username" value="{{Auth::User()->Username}}">

                            <input type="text" class="form-control" readonly name="RoomSize" value="{{$user_role->RoomSize}}">

                            <input type="text" class="form-control" readonly name="Vendorname" value="{{$user_role->Vendorname}}">

                            <input type="text" class="form-control" readonly name="Price" value="{{$user_role->Price}}">
                            <!--<a href= class="badge badge-pill btn-primary">Click Here To Proceed</a>-->
                      <br/>
                      <!--<button type="submit" class="btn btn-danger">Export To Excel</button>-->
                      <button type="submit" class="btn btn-info">Proceed</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      </section>
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
