@extends('layouts.admin')

@section('content')
	<!--Main layout-->
<main style="margin-top: 58px">
  <div class="container pt-2">
    <!-- Section: Main chart -->
    <section class="mb-5">
      <div class="card">
        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>update Bookings Record</strong></h5>
        </div>
        <div class="row">
                  <div class="card-body">
          <div class="row">
            <div class="col-sm-4">
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

                    </div>
                    <div class="col-sm-4">
          <!--@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            </div>
                    @endif-->

      </div>
          <div class="col-sm-4">


        </div>
          <div class="col-sm-4">
            <div class= "card-body ml-5">


              <form action="{{url('saveUpdate/'.$user_role->id)}}" method="post">
                {{csrf_field()}}

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
                  <input type="text" class="form-control" readonly name="Vendorname" value="{{$user_role-> Vendorname}}" >
                </div>
                 <div class="form-group">
                  <label for="">Status</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Status" id="Available" value="Available" {{$user_role->Status == 'Available' ? 'checked' : ''
                        }}
                      >
                      <label class="form-check-label" for="inlineRadio1">Available</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Status" id="Not_Available" value="Not Available" {{($user_role->Status == 'Not_Available') ? 'checked' : ''
                        }}
                       >
                      <label class="form-check-label" for="inlineRadio2">Not Available</label>
                    </div>
                </div>
                  <div class="form-group">
                  <label for=""> Price</label>
                  <input type="text" class="form-control" name="Price" value="{{$user_role->Price}}">
                </div>
                <div class = "form-group">
                <button type="submit" class="btn btn-primary">Update</button>
               </div>
               </form>
            </div>
        </div>
            <div class="col-sm-4">

        </div>
      </div>
    </div>
    </section>
