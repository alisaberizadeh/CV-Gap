@extends('wp.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>ویرایش اطلاعات حساب :
                        <strong> {{ $user_data->name }}</strong>
                    </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">


                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">اطلاعات </h3>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('user.update', $user_data->id) }}" method="post"> @csrf @method('put')
                                <div class="row">
                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" placeholder="نام" value="{{ $user_data->name }}" required>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>


                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="ایمیل" value="{{ $user_data->email }}" required>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>


                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                                            name="mobile" placeholder="شماره همراه" value="{{ $user_data->mobile }}"
                                            required>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('mobile')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            name="username" placeholder="نام کاربری" value="{{ $user_data->username }}"
                                            required>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('username')
                                            {{ $message }}
                                        @enderror
                                    </span>



                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-file"></i></span>
                                        </div>
                                        <textarea class="form-control @error('bio') is-invalid @enderror" name="bio" placeholder="درباره من"
                                            required>{{ $user_data->bio }}</textarea>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('bio')
                                            {{ $message }}
                                        @enderror
                                    </span>


                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-asterisk"></i></span>

                                        </div>
                                        <select name="userType" class="form-control @error('userType') is-invalid @enderror"
                                            required>

                                            @switch($user_data->is_admin)
                                                @case('0')
                                                    @if (auth()->user()->is_admin == 2)
                                                        <option value="0">--- کاربر عادی ---</option>
                                                        <option value="1">مدیر</option>
                                                    @else
                                                        <option value="0">--- کاربر عادی ---</option>
                                                    @endif
                                                @break

                                                @case('1')
                                                    @if (auth()->user()->is_admin == 2)
                                                        <option value="1">--- مدیر ---</option>
                                                        <option value="0">کاربر عادی</option>
                                                    @else
                                                        <option value="1">--- مدیر ---</option>
                                                    @endif
                                                @break
                                            @endswitch

                                        </select>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('userType')
                                            {{ $message }}
                                        @enderror
                                    </span>



                                </div>
                                <button class="btn btn-warning mt-4">بروزرسانی اطلاعات</button>

                            </form>



                        </div>

                    </div>


                </div>


            </div>
        </div>
    </section>
@endsection
