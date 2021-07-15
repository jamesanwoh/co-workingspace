@extends('layouts.admin')

@section('content')
<main style="margin-top: 58px">
  <div class="container pt-4">
    <!-- Section: Main chart -->
    <section class="mb-4">
      <div class="card">

        <div class="card-header py-3">
          <h5 class="mb-0 text-center"><strong>Manage_Bookings Page</strong></h5>
        </div>
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
        <div class="row">
          <div class="col-sm-1">
            <div class="card">

              <div class="card-header">
                <h5><strong>Profile Picture</strong></h5>
              </div>
            </div>
          </div>
                <div class="col-sm-11">
                  <div class="card">
                    <div class= "card-body">
                      <div class="col-sm-6">
          <div class="card">
            <div class="card-body">

              <form action="{{url('store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                  <label for=""> RoomName</label>
                  <input type="text" class="form-control" name="RoomName" required >
                </div>
                <div class="form-group">
                  <label for=""> RoomSize</label>
                  <input type="text" class="form-control" name="RoomSize" required>
                </div>
                <div class="form-group">
                  <label for=""> VendorName</label>
                  <input type="text" class="form-control" required name="Vendorname" >
                </div>
                <br/>
                <div class="form-group">
                  <label for="">Status</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Status" id="Available" value="Available" checked>
                      <label class="form-check-label" for="inlineRadio1">Available</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Status" id="Not_Available" value="Not_Available" >
                      <label class="form-check-label" for="inlineRadio2">Not Available</label>
                    </div>
                </div>
                <div class="form-group">
                  <label for=""> Price</label>
                  <input type="text" class="form-control" name="Price" required>
                </div>
                <br/>
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="reset" class="btn btn-danger">reset</button>
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
      </div>
    </section>
    <!-- Section: Main chart -->
  </div>
</main>
<!--Main layout-->

@endsection
