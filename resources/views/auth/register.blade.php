@extends('layouts.main')

@section('container')

<!-- <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="cardf">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">

                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nohp" class="col-md-4 col-form-label text-md-end">{{ __('No HP') }}</label>

                            <div class="col-md-6">
                                <input id="nohp" type="text" class="form-control @error('email') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="nohp">

                                @error('nohp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div> -->

<section>
    <div class="form-box">
        <div class="form-value">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <!-- <h2>Register</h2> -->
                <!-- kolom nama -->
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>
                    <label for="">Name</label>
                </div>
                <!-- kolom nomor hp -->
                <div class="inputbox">
                    <ion-icon name="call-outline"></ion-icon>
                    <input id="nohp" type="text" name="nohp" value="{{ old('nohp') }}" required autocomplete="off">
                    <label for="">Phone Number</label>
                </div>
                <!-- kolom alamat -->
                <div class="inputbox">
                    <ion-icon name="home-outline"></ion-icon>
                    <input id="alamat" type="text" name="alamat" value="{{ old('alamat') }}" required autocomplete="off">
                    <label for="">Address</label>
                </div>
                <!-- kolom email -->
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="off">
                    <label for="">Email</label>
                </div>
                <!-- kolom password -->
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input id="password" type="password" name="password" required autocomplete="off">
                    <label for="">Password</label>
                </div>
                <!-- kolom konfirmasi password -->
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="off">
                    <label for="">Confirm Password</label>
                </div>
                <button type="submit">Register</button>
                <div class="register">
                    <p>Already have account? <a href="/login">Login Here</a></p>
                </div>
            </form>
        </div>
    </div>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80.6vh;
            width: 100%;
            background: url('assets/img/bg2.png')no-repeat;
            background-position: center;
            background-size: cover;
        }

        .form-box {
            position: relative;
            width: 425px;
            height: 650px;
            background: transparent;
            border: 5px solid rgb(154, 32, 140);
            border-radius: 20px;
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* h2 {
            font-size: 2em;
            color: #9A208C;
            text-align: center;
        } */

        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid #9A208C;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #9A208C;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }

        input:focus~label {
            top: -5px;
        }

        input:valid~label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #9A208C;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #9A208C;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -15px 0 15px;
            font-size: .9em;
            color: #9A208C;
            display: flex;
            justify-content: center;
        }

        .forget label input {
            margin-right: 3px;
        }

        .forget label a {
            color: #9A208C;
            text-decoration: none;
        }

        .forget label a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background-color: #9A208C;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            color: #fff;
        }

        .register {
            font-size: .9em;
            color: #9A208C;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: #9A208C;
            font-weight: 600;
        }

        .register p a:hover {
            text-decoration: underline;
        }
    </style>
</section>

@endsection