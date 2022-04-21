@extends('layouts.app')

@section('content')
    <br><br><br><br><br><br><br><br>


    <style>
        body {
            background-image: linear-gradient(127deg, #0073d1 0%, #14c8ffe7 91%);
        }

        footer {
            background-image: none
        }

        input {
            margin-bottom: 10px;
        }

    </style>
    <div class="container col-md-5" style="direction: rtl;text-align: right;">
        <h3 style="text-align: left;margin-bottom: 20px;" class="text-light">ورود به حساب</h3>
        @if ($errors->any())
            <div class="alert alert-danger" style="direction: rtl">
                <ul style="list-style: disc;padding: 0 15px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST"> @csrf
            <label for="" class="text-light"> نام کاربری</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">

            <label for="" class="text-light">کلمه عبور</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
            <div class="custom-control custom-checkbox text-light" style="    font-size: 12px;display: flex;align-items: center;">
                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                <label class="custom-control-label" for="remember" style="margin-right: 5px;">مرا به یاد داشته باش</label>
            </div>
            <button style="margin: 10px 0 0;" class="btn btn-light">ورود</button>
        </form>



    </div>
    <br>
    <br>
@endsection
