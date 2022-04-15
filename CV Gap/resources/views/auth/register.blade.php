@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

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
        <h3 style="text-align: left;margin-bottom: 20px;" class="text-light">عضویت در سی وی گپ</h3>

        @if ($errors->any())
            <div class="alert alert-danger" style="direction: rtl">
                <ul style="list-style: disc;padding: 0 15px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('register') }}" method="POST">@csrf
            <label for="" class="text-light">نام و نام خانوادگی</label>
            <input type="text" class="form-control" name="name" id="">
            <label for="" class="text-light">پست الکترونیک</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="">
            <label for="" class="text-light">شماره تلفن</label>
            <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" id="">
            <label for="" class="text-light">نام کاربری</label>
            <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="">
            <label for="" class="text-light">کلمه عبور</label>
            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="">
            <label for="" class="text-light">تکرار کلمه عبور</label>
            <input type="password" class="form-control" name="password_confirmation" id="">
            <button style="margin: 10px 0 0;" class="btn btn-light">عضویت</button>
        </form>



    </div>
    <br>
    <br>
@endsection
