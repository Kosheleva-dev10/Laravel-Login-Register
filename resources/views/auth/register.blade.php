@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-6 col-xl-6">
            <div class="mb-4">
                <div class="form-login"><br>
                    <h4 class="text-center">Input your Data!</h4>
                    <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email:</label>
                            <input type="email" name = "email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="frmSignInEmail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Password:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" id="frmSignInPassword" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Adress</label>
                            <input id="address" type="text" class="form-control input-sm chat-input @error('address') is-invalid @enderror" name="address" placeholder="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Adress2</label>
                            <input id="address2" type="text" class="form-control input-sm chat-input @error('address2') is-invalid @enderror" name="address2" placeholder="address2" value="{{ old('address2') }}" required autocomplete="address2" autofocus>
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">City</label>
                            <input id="city" type="text" class="form-control input-sm chat-input @error('city') is-invalid @enderror" name="city" placeholder="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">State</label>
                            <input id="state" type="text" class="form-control input-sm chat-input @error('state') is-invalid @enderror" name="state" placeholder="state" value="{{ old('state') }}" required autocomplete="state" autofocus>
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Zip Code</label>
                            <input id="zip" type="text" class="form-control input-sm chat-input @error('zip') is-invalid @enderror" name="zip" placeholder="zip" value="{{ old('zip') }}" required autocomplete="zip" autofocus>
                        </div>
                        <br>

                        <div class="wrapper text-center">
                            <span class="group-btn">
                                <button type="submit" name="register" class="btn btn-primary btn-md">{{ __('SIGN UP') }} <i class="fa fa-sign-in"></i></button><br><br>
                                <div>
                                    <a href="{{url('login')}}">
                                        Do you have an account?
                                    </a>
                                </div>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
