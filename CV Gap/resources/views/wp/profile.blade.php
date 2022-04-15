@extends('wp.layouts.app')

@section('content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6" style="margin: 10px 0;">
          <h1>اطلاعات حساب کاربری</h1>
        </div>
         
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <section class="content" >
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-12">


                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">اطلاعات    </h3>
                          </div>
                        <div class="card-body">

                           <form action="{{route('admin.profile_update',auth()->user()->id)}}" method="post" enctype="multipart/form-data"> @csrf
                            <div class="row">
                                <div class="input-group col-md-6 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="name" placeholder="نام" value="{{auth()->user()->name}}" required>
                                 </div>
    
                                <div class="input-group col-md-6 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="ایمیل" value="{{auth()->user()->email}}" required>
                                </div>
    
                                
                                <div class="input-group col-md-6 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="mobile" placeholder="شماره تلفن" value="{{auth()->user()->mobile}}"  required>
                                </div>
                                <div class="input-group col-md-6 mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control" name="username" placeholder="نام کاربری" value="{{auth()->user()->username}}"  required>
                                </div>
 
                            
                                <div class="input-group col-md-12 mb-4">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id=""><img src="{{auth()->user()->avatar}} " style="width: 22px;" alt=""></span>
                                      </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="avatar" >
                                      <input type="hidden" value="{{auth()->user()->avatar}}" name="hidden_src">
                                      <label class="custom-file-label" for="exampleInputFile">تصویر کاربری  </label>
                                    </div>
                                    
                                  </div>


                                


                            </div>
                            <button class="btn btn-success">بروزرسانی اطلاعات</button>

                           </form>



                        </div>

                    </div>


                </div>


            </div>
        </div>
    </section>
@endsection
