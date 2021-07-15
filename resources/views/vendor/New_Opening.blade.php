@extends('layouts.vendor')

@section('content')
<style>

    .thumb{

        margin: 10px 5px 0 0;

        width: 100px;

        border: 2px solid silver;

    }

</style>
<section class="section-b-space typography_section">
    <div class="container">
        <div class="text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
            @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="typography-box">
                    <div class="headings">
                        <h3>Input Data</h3>
                        <span>kindly fill-in all necessary details</span>
                    </div>
                    <div class="typo-content">
                        <form action="{{url('store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-row">
                                <div class="col-12 mb-3">
                                    <label for="name">Room Name</label>
                                    <input type="text" class="form-control" name="RoomName" placeholder="Enter Room name"
                                        required="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email">Room Size</label>
                                    <input type="text" class="form-control"  name="RoomSize" placeholder="Enter Room size"
                                        required="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email">Vendor Name</label>
                                    <input type="text" class="form-control" readonly name="Vendorname" value="{{Auth::user()->Username}}"
                                        required="">
                                </div>
                                <div class="col-sm-6">
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
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="email">Price</label>
                                    <input type="text" class="form-control"  name="Price" placeholder="Enter Price"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for=""> UPLOAD IMAGES</label><br>
                                    <input type="file" id="file-input" onchange="loadPreview(this)" name="image"  required  multiple/>
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                    <div id="thumb-output"></div>
                                  </div>
                                <div class="col-12 mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control" placeholder="Write Description of office"
                                    name="description" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="typography-box">
                    <div class="headings">
                        <h3>Category</h3>
                        <span>Select a category for upload.</span>
                    </div>
                    <div class="typo-content input_button">
                        <div class="row">
                            <div class="col-sm-8">
                                    <div>
                                        <input type="radio" name="category" value="conventional/ open conventional" id="one" value="conventional/ open conventional">
                                        <label for="one">conventional/ open conventional</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="category" value="high-end/ full service" id="two" value="high-end/ full service">
                                        <label for="two">high-end/ full service</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="category" value="cooperate/ professional" id="three" value="cooperate/ professional">
                                        <label for="three">cooperate/ professional</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="category" value="private work space" id="four" value="private work space">
                                        <label for="four">private work space</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="category" value="minimal/ bare bone" id="five" value="minimal/ bare bone">
                                        <label for="five">minimal/ bare bone</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="category" value="shared space/ subline" id="five" value="shared space/ subline">
                                        <label for="five">shared space/ subline</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="category" value="Industrial specific/ specializied" id="five" value="Industrial specific/ specializied">
                                        <label for="five">Industrial specific/ specializied</label>
                                    </div>
                                </div>
                            {{-- <div class="col-sm-6">
                                <form>
                                    <div>
                                        <input type="checkbox" name="gender" id="six" value="male">
                                        <label for="six">checkbox button1</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="gender" id="seven" value="male">
                                        <label for="seven">checkbox button2</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="gender" id="eight" value="male">
                                        <label for="eight">checkbox button3</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="gender" id="nine" value="male">
                                        <label for="nine">checkbox button4</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="gender" id="ten" value="male">
                                        <label for="ten">checkbox button5</label>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="typography-box">
                    <div class="typo-content">
                            <div class="form-row">
                                <div class="col-12 mb-3">
                                    <label for="name">Location</label>
                                    <input type="text" class="form-control" name="location"  placeholder="Enter the location"
                                        required="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label>Office Details</label>
                                    <textarea class="form-control" placeholder="Full Office Details"
                                       name="details" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="typo-content typo-buttons">
                                <button type="submit"class="btn btn-solid black-btn mr-3" >Add</button>
                                <button type="reset" class="btn btn-danger">reset</button>
                                <a href="#" class="btn btn-solid black-btn mr-3">Add</a>
                                <a href="#" class="btn btn-solid black-btn mr-3">Add</a>
                            </div>
                        </form>
                        <script>
                            function loadPreview(input){
                                var data = $(input)[0].files; //this file data
                                $.each(data, function(index, file){
                                    if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                                        var fRead = new FileReader();
                                        fRead.onload = (function(file){
                                            return function(e) {
                                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image thumb element
                                                $('#thumb-output').append(img);
                                            };
                                        })(file);
                                        fRead.readAsDataURL(file);
                                    }
                                });
                            }
                         </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
