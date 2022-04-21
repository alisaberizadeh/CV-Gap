@extends('wp.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1> دسته بندی مقالات </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">



        <div class="container-fluid">
            <div class="row">

                <div class="col-md-5">
                    <div class="card card-primary ">
                        <div class="card-header">
                            <h3 class="card-title"> دسته بندی جدید</h3>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('categories.create') }}" method="post"> @csrf
                                <div class="row">

                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-asterisk "></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror "
                                            name="name" placeholder="نام" required>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-asterisk "></i></span>
                                        </div>
                                        <input type="text"
                                            class="form-control @error('slug') is-invalid @enderror @if (session('status')) is-invalid @endif"
                                            name="slug" placeholder="نامک" required>
                                    </div>
                                    <span style="color: red;margin-top: 7px">
                                        @error('slug')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    @if (session('status'))
                                        <span style="color: red;margin-top: 7px"> {{ session('status') }} </span>
                                    @endif
                                </div>
                                <button class="btn  btn-sm btn-primary mt-4">ذخیره دسته بندی</button>

                            </form>



                        </div>

                    </div>
                </div>

                <div class="col-md-7">
                    

                    <div class="card">
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> نام دسته بندی </th>
                                        <th> نامک </th>
                                        <th>عملیات</th>
        
                                    </tr>
                                </thead>
                                <tbody>
        
                                    @foreach ($data_Category as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->slug }}</td>
                                            <td>
                                                <form action="{{route('categories.delete',$item->id)}}" method="POST" id="form_dlete_category">@csrf @method('delete')</form>
                                                <a href="/categories/delete/" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('form_dlete_category').submit();"><i class="material-icons">delete</i></a>
                                                <a href="" class="btn btn-sm btn-dark"><i class="material-icons">remove_red_eye</i></a>
                                            </td>
        
        
                                        </tr>
                                    @endforeach
        
        
        
        
        
        
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
