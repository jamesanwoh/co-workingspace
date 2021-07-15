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
                        <h3>Compliant Page
                            <small> User panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Compliant Page</li>
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
                        <h5>Compliant Page</h5>
                    </div>
                    <div class="card-body">
                        <div id="basicScenario" class="product-list digital-product"></div>
                        <div class= "card-body">
                            <form action="{{url('New_CompliantProcess')}}" method="post">
                      {{csrf_field()}}
                      <div class="form-group">
                        <label for=""> Username</label>
                        <input type="text" class="form-control" name="Username" readonly required value="{{Auth::user()->Username}}">
                      </div>
                      <div class="form-group">
                        <label for=""> Enter Vendor Name </label>
                        <input type="text" class="form-control" name="Vendorname" required >
                      </div>
                      <div class="form-group">
                        <label for=""> Issue</label>
                        <textarea class="form-control" name="issue" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                      <input type="text" class="form-control" name="status" id="status" hidden value="send">
                    </div>
                    <br/>
                      <div class="form-group">
                          <button type="submit" onclick="onClick()" class="btn btn-danger">Send</button>
                          <script type="text/javascript">
                                      function onClick(){
                                          document.getElementById('status').value = "sent";
                                      }
                                  </script>
                          <button type="reset" class="btn btn-primary">Reset</button>
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
    <!-- Container-fluid Ends-->

</div>
@endsection
