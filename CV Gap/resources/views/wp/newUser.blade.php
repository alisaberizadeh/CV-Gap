@extends('wp.layouts.app')

@section('content')


<section class="content-header">
    <div class="container-fluid">
      <div class="row mt-2">
        <div class="col-sm-6" style="margin: 10px 0;">
          <h1>افزودن کاربر جدید</h1>
        </div>
         
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <section class="content" >

      

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">


                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">اطلاعات کاربر</h3>
                          </div>
                        <div class="card-body">

                           <form action="{{route('user.new')}}" method="post"> @csrf 
                            <div class="row">
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="نام" required>
                                 </div>
                                <span style="color: red;margin-top: 7px">@error('name') {{$message}} @enderror</span>

    
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="ایمیل" required>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('email') {{$message}} @enderror</span>
    
                                
                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="شماره همراه" required>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('mobile') {{$message}} @enderror</span>

                                <div class="input-group col-md-12 mt-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="نام کاربری"  required>
                                </div>
                                <span style="color: red;margin-top: 7px">@error('username') {{$message}} @enderror</span>

                                <div class="input-group col-md-12 mt-4">
                                  <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fa fa-asterisk"></i></span>

                                  </div>
                                  <select name="userType" class="form-control @error('userType') is-invalid @enderror" required>
                                    <option value="0"> --- نوع حساب کاربری ---</option>
                                    <option value="0">کاربر عادی</option>
                                    <option value="1">مدیر</option>

                                  </select>
                              </div>
                              <span style="color: red;margin-top: 7px">@error('userType') {{$message}} @enderror</span>




                                <div class="toast bg-warning mt-4" data-autohide="false">
                                    <div class="toast-header  bg-warning">
                                      <button type="button" class="close" data-dismiss="toast">&times;</button>

                                      <strong class="mr-auto text-light" style="font-size: 19px"><i class="fa fa-exclamation-triangle"></i></strong>
                                    </div>
                                    <div class="toast-body">
                                      <p>کلمه عبور پیشفرض کاربر : <strong>نام کاربری + شماره تلفن </strong>  </p>
                                      <p>مثال : <strong>09121234567Example</strong> </p>
                                    </div>
                                  </div>
                                  <script>
                                    $(document).ready(function(){
                                      $('.toast').toast('show');
                                    });
                                    </script>
 
                            

                                


                            </div>
                            <button class="btn btn-info mt-4">افزودن کاربر</button>

                           </form>



                        </div>

                    </div>


                </div>


            </div>
        </div>
    </section>
@endsection
