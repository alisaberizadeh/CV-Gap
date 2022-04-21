@extends('wp.layouts.app')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">









                    <div class="card card-widget widget-user mt-4">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header text-white"
                            style="background: url('{{ asset($details->banner) }}') center center;height: 300px;">
                            <div class="widget-user-cover text-center">
                                <h1 class="widget-user-username">{{ $details->name }}</h1>
                                <h5 class="widget-user-desc">{{ $details->username }}@</h5>
                            </div>
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle" src="{{ asset($details->avatar) }}" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-left">
                                    <div class="description-block">
                                        <h3 class="description-header">3454</h3>
                                        <span class="description-text">امتیاز</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-left">
                                    <div class="description-block">
                                        <h5 class="description-header">54653</h5>
                                        <span class="description-text">راه حل ها</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header"> @switch($details->is_admin)
                                            @case(0)
                                                کاربر عادی
                                            @break

                                            @case(1)
                                                مدیر
                                            @break

                                            @case(2)
                                                مدیر کل
                                            @break

                                            @default
                                        @endswitch</h5>
                                        <span class="description-text">سِمَت</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>









                    <a href="" class="btn btn-sm btn-dark float-right ml-2 mb-3"><i
                            class="material-icons">remove_red_eye</i></a>

                    @if ($details->id != auth()->user()->id)
                        @if (auth()->user()->is_admin == 2)
                            <a href="{{ route('user.edit', $details->id) }}"
                                class="btn btn-sm btn-success float-right ml-2"><i class="material-icons">edit</i></a>

                            <form method="POST" id="delete_form" action="{{ route('user.delete', $details->id) }}"><button
                                    data-toggle="tooltip" class="btn btn-sm btn-danger show_confirm"><i
                                        class="material-icons">delete</i></button>@csrf
                                @method('delete')</form>
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script type="text/javascript">
                                $('.show_confirm').click(function(event) {
                                    var form = $('#delete_form');
                                    event.preventDefault();
                                    Swal.fire({
                                        title: 'از حذف این کاربر اطمینان دارید ؟!',
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#f54141',
                                        cancelButtonColor: '#cdcdcd',
                                        confirmButtonText: 'بله ، حذف کن',
                                        cancelButtonText: `لغو`,
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            form.submit()
                                        }
                                    })

                                });
                            </script>
                        @else
                            @if ($details->is_admin != 2 && $details->is_admin != 1)
                                <a href="{{ route('user.edit', $details->id) }}"
                                    class="btn btn-sm btn-success float-right ml-2"><i class="material-icons">edit</i></a>

                                <form method="POST" id="delete_form" action="{{ route('user.delete', $details->id) }}">
                                    <button data-toggle="tooltip" class="btn btn-sm btn-danger show_confirm"><i
                                            class="material-icons">delete</i></button>@csrf
                                    @method('delete')</form>
                                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                <script type="text/javascript">
                                    $('.show_confirm').click(function(event) {
                                        var form = $('#delete_form');
                                        event.preventDefault();
                                        Swal.fire({
                                            title: 'از حذف این کاربر اطمینان دارید ؟!',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#f54141',
                                            cancelButtonColor: '#cdcdcd',
                                            confirmButtonText: 'بله ، حذف کن',
                                            cancelButtonText: `لغو`,
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                form.submit()
                                            }
                                        })

                                    });
                                </script>
                            @endif
                        @endif
                    @else
                        <a href="{{ route('admin.profile') }}" class="btn btn-sm btn-success float-right mb-3"><i
                                class="material-icons">edit</i></a>
                    @endif



                    
                    <div class="card float-right col-md-12">
                        <div class="card-body">
                            <table class="table " >
                                <tr>
                                    <td>نام</td>
                                    <td><strong>{{ $details->name }}</strong></td>
                                </tr>


                                <tr>
                                    <td>آدرس ایمیل </td>
                                    <td><strong>{{ $details->email }}</strong></td>
                                </tr>



                                <tr>
                                    <td>شماره همراه </td>
                                    <td><strong>{{ $details->mobile }}</strong></td>
                                </tr>


                                <tr>
                                    <td>نام کاربری </td>
                                    <td><strong>{{ $details->username }}@</strong></td>
                                </tr>


                                <tr>
                                    <td>نوع حساب کاربری </td>
                                    <td>
                                        <strong>
                                            @switch($details->is_admin)
                                                @case(0)
                                                    کاربر عادی
                                                @break

                                                @case(1)
                                                    مدیر
                                                @break

                                                @case(2)
                                                    مدیر کل
                                                @break

                                                @default
                                            @endswitch
                                        </strong>
                                    </td>
                                </tr>

                                <tr>
                                    <td>بیوگرافی </td>
                                    <td><strong>{{ $details->bio }}</strong></td>
                                </tr>



                            </table>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
@endsection
