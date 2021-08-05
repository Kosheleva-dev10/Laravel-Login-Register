@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class=" text-center mb-xl-5">
        <span class="text-primary">Inizia ora</span>.
        <br>
        Il tuo software ti aspetta
    </h1>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8 col-xl-6">
                    <div class="mb-4">
                        <h2 class="h1 text-primary text-center">Registrati</h2>
                        <form class="row g-1" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="col-md-12" style="padding: 10px 0;">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" name = "email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="frmSignInEmail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="col-md-12" style="padding: 10px 0;">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" id="frmSignInPassword" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">{{ __('SIGN IN') }}</button><br><br>
                                <div>Don't you have an account? 
                                    <a href="{{url('register')}}">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
