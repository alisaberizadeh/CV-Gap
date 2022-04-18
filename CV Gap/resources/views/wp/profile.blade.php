@extends('wp.layouts.app')

@section('content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mt-2">
        <div class="col-sm-6" style="margin: 10px 0;">
          <h1>اطلاعات حساب کاربری</h1>
        </div>
         
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <section class="content" >
        <div class="container-fluid">
            <div class="row">
              

                <div class="col-md-12">


                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">اطلاعات    </h3>
                          </div>
                        <div class="card-body">

                           <form action="{{route('admin.update',auth()->user()->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                            <div class="row">
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام" value="{{auth()->user()->name}}" required>
                                 </div>
                                <span style="color: red;margin-top: 7px">@error('name') {{$message}} @enderror</span>

    
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="ایمیل" value="{{auth()->user()->email}}" required>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('email') {{$message}} @enderror</span>
    
                                
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="شماره همراه" value="{{auth()->user()->mobile}}"  required>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('mobile') {{$message}} @enderror</span>

                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="نام کاربری" value="{{auth()->user()->username}}"  required>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('username') {{$message}} @enderror</span>
 
                            
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-append">
                                        <img src="{{asset(auth()->user()->avatar)}} " style="width: 40px;border-radius: 100px;margin-left: 7px;margin-top: -2px;" alt="">
                                      </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input  @error('avatar') is-invalid @enderror" name="avatar" >
                                      <input type="hidden" value="{{auth()->user()->avatar}}" name="hidden_src">
                                      <label class="custom-file-label" for="exampleInputFile">تصویر کاربری  </label>
                                    </div>
                                    
                                  </div>
                                  <span style="color: red;margin-top: 7px">@error('avatar') {{$message}} @enderror</span>

                                  <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-file"></i></span>
                                    </div>
                                    <textarea  class="form-control @error('bio') is-invalid @enderror" name="bio" placeholder="درباره من" required >{{auth()->user()->bio}}</textarea>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('bio') {{$message}} @enderror</span>
 
                                


                            </div>
                            <button class="btn btn-success mt-4">بروزرسانی اطلاعات</button>

                           </form>



                        </div>

                    </div>


                </div>


            </div>
        </div>
    </section>
@endsection
