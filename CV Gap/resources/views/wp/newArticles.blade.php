@extends('wp.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6" style="margin: 10px 0;">
                    <h1>افزودن مقاله جدید</h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">



        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>
                        </div>
                    @endif

                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">مقاله</h3>
                        </div>
                        <div class="card-body">


                            <form action="{{ route('articles.create') }}" method="post" enctype="multipart/form-data"> @csrf
                                <div class="row">


                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" placeholder="عنوان" required>
                                    </div>


                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-photo"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                name="image">
                                            <label class="custom-file-label" for="exampleInputFile">تصویر شاخص </label>
                                        </div>
                                    </div>

                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                        <select name="category"
                                            class="form-control @error('category') is-invalid @enderror">
                                            <option value="null">--- دسته بندی --- </option>
                                            @foreach ($category_data as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="input-group col-md-12 mt-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-asterisk"></i></span>
                                        </div>
                                        <input type="text" class="form-control @error('tags') is-invalid @enderror"
                                            name="tags"
                                            placeholder="برچسپ ها ( با - از هم جدا کنید ، مثلا : کرونا - واکسن )" required>
                                    </div>

                                    <div class="form-group col-md-12  mt-4">
                                        <textarea class="form-control" name="txt"></textarea>
                                    </div>

                                    <script>
                                        CKEDITOR.replace('txt', {
                                            language: 'fa',
                                            content: 'fa',
                                        });
                                    </script>





                                </div>
                                <button class="btn btn-danger mt-4">ارسال مقاله </button>

                            </form>



                        </div>

                    </div>


                </div>


            </div>
        </div>
    </section>

@endsection
