@extends('layouts.frontend')

@section('content')
<section style="padding-top: 84px;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                @if (session('successMsg'))
                    <div class="alert alert-success" role="alert">
                    {{session('successMsg')}}
                    </div>
                    @endif
                    <form name="register1" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="Username" type="text" class="form-control @error('Username') is-invalid @enderror" name="Username" value="{{ old('Username') }}" required autocomplete="Username" autofocus>

                                @error('Username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="Firstname" type="text" class="form-control @error('Firstname') is-invalid @enderror" name="Firstname" value="{{ old('Firstname') }}" required autocomplete="Firstname" autofocus>

                                @error('Firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="Lastname" type="text" class="form-control @error('name') is-invalid @enderror" name="Lastname" value="{{ old('Lastname') }}" required autocomplete="Lastname" autofocus>

                                @error('Lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                 <div class="col-md-6 offset-md-4">
                                    <div class="form-check form-check-inline">
                                    <input
                                        class="form-check-input" type="radio" name="gender" id="Male" value="Male" checked/>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>

                                <div class="form-check form-check-inline">
                                     <input
                                            class="form-check-input" type="radio" name="gender" id="Female" value="Female" checked/>
                                     <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone_number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control @error('name') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="Address" type="text" class="form-control @error('name') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required autocomplete="Address" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="role_as" type="hidden" class="form-control" name="role_as" value="user">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" id="vendrop">For Vendors &nbsp <span class="glyphicon glyphicon-align-justify"></span></button>

                                <div id="demo" class="collapse">
                                <div class="input-group mb-1">
                                <div class="input-group-prepend"></div>

                                <input id="vendor_name" type="text" class="form-control @error('vendor_name') is-invalid @enderror" name="vendor_name"  autocomplete="vendor_name" autofocus>
                                </div>

                                <div class="input-group mb-1">
                                <div class="input-group-prepend"></div>

                                 <input id="vendor_address" type="text" class="form-control @error('vendor_address') is-invalid @enderror" name="vendor_address"  autocomplete="vendor_address" autofocus>
                                </div>

                                <div class="input-group mb-1">
                                <div class="input-group-prepend"></div>

                                <input id="vendor_number" type="number" class="form-control @error('vendor_name') is-invalid @enderror" name="vendor_number"  autocomplete="vendor_number" autofocus>
                                </div>
                                </div>

                            </div>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger"  name="button" id="user" value="user">
                                    {{ __('Register As User') }}
                                </button>
                                &nbsp
                                <button type="submit" class="btn btn-danger" onclick="onClick()" name="button" id="vendor" value="vendor">
                                    {{ __('Register As Vendor') }}
                                    <script type="text/javascript">
                                function onClick(){
                                    document.getElementById('role_as').value = "vendor";
                                }
                            </script>
                                </button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="Userame" class="col-md-4 col-form-label text-md-right">{{ __('Userame') }}</label>

                            <div class="col-md-6">
                                <input id="Userame" type="text" class="form-control @error('Userame') is-invalid @enderror" name="Userame" value="{{ old('Userame') }}" required autocomplete="Userame" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
