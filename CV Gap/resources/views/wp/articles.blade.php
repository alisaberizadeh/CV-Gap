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


                    <form action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="جستوجو کنید...">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary" type="submit"><i
                                        class="material-icons">search</i></button>
                            </div>
                        </div>
                    </form>

                     


                </div>


            </div>
        </div>
    </section>
@endsection
