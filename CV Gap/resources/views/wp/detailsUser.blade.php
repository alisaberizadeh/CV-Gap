@extends('wp.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>
                        جزئیات کاربر :
                        <strong> {{ $details->name }}</strong>
                    </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">
                    <img src="{{ asset($details->avatar) }}"
                        style="width: 300px;height: 300px;;border-radius: 200px;margin: 10px 10px 30px;border: 8px solid #e1e3e7;padding: 5px;"
                        alt="">
                    <br>

                    @if ($details->id != auth()->user()->id)
                        <form method="POST" id="delete_form" action="{{ route('user.delete', $details->id) }}"><button
                                data-toggle="tooltip" class="btn btn-danger show_confirm"><i
                                    class="material-icons">delete</i></button>@csrf
                            @method('delete')</form>
                    @endif
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

                    <table class="table-bordered table mt-3" style="margin-bottom: 70px">
                        <tr>
                            <td class="bg-light">نام</td>
                            <td class="bg-light"><strong>{{ $details->name }}</strong></td>
                        </tr>


                        <tr>
                            <td class="bg-light">آدرس ایمیل </td>
                            <td class="bg-light"><strong>{{ $details->email }}</strong></td>
                        </tr>



                        <tr>
                            <td class="bg-light">شماره همراه </td>
                            <td class="bg-light"><strong>{{ $details->mobile }}</strong></td>
                        </tr>


                        <tr>
                            <td class="bg-light">نام کاربری </td>
                            <td class="bg-light"><strong>{{ $details->username }}@</strong></td>
                        </tr>


                        <tr>
                            <td class="bg-light"">نوع حساب کاربری </td>
                                                                    <td class="          bg-light">
                                <strong>
                                    @if ($details->is_admin == 0)
                                        کاربر عادی
                                    @else
                                        مدیر
                                    @endif
                                </strong>
                            </td>
                        </tr>

                        <tr>
                            <td class="bg-light">بیوگرافی </td>
                            <td class="bg-light"><strong>{{ $details->bio }}</strong></td>
                        </tr>



                    </table>
                </div>


            </div>
        </div>
    </section>
@endsection
