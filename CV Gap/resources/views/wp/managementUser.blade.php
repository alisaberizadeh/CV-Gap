@extends('wp.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>مدیریت کاربران</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12">

                    <form action="{{ route('user.management') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="جستوجو کنید...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="material-icons">search</i></button>
                            </div>
                        </div>
                    </form>

                    @if (isset($_GET['search']))
                        <p>
                            جستوجو کردید برای :
                            {{ $_GET['search'] }}
                        </p>
                    @endif


                    <table class="table table-striped table-bordered">
                        <thead class="bg-secondary">
                            <tr>
                                <th>تصویر پروفایل</th>
                                <th>نام</th>
                                <th>نام کاربری</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item)
                                <tr>
                                    <td><img src="{{ asset($item->avatar) }}"
                                            style="width: 50px;height: 50px;border-radius: 100px" alt=""></td>
                                    <td><a href="{{ route('user.details', $item->id) }}" class="text-black"
                                            style="text-decoration: underline">{{ $item->name }}</a></td>
                                    <td> {{ $item->username }}@</td>
                                    <td>
                                        @if (auth()->user()->id != $item->id)
                                            <a href="{{route('user.edit',$item->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
                                            <a href="{{ route('user.delete', $item->id) }}" class="btn btn-danger show_confirm"><i class="material-icons">delete</i></a>
                                            <a href="" class="btn btn-dark float-left"><i class="material-icons">remove_red_eye</i></a>

                                            <form method="POST" id="delete_form" action="{{ route('user.delete', $item->id) }}"> @csrf @method('delete')</form>
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
                                            <a href="" class="btn btn-dark float-left"><i
                                                    class="material-icons">remove_red_eye</i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    @if (count($data) < 1)
                        <h4 class="text-center" style="margin-top: 30px"><strong>نتیجه ای یافت نشد !!!</strong></h4>
                    @endif

                </div>


            </div>
        </div>
    </section>
@endsection
