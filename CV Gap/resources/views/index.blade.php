@extends('layouts.app')

@section('content')
    <!-- ***** Header Area End ***** -->
    <div class="cover-welcome-area">
        <!-- ***** Welcome Area Start ***** -->
        <div class="welcome-area" id="welcome">


            <!-- ***** Header Text Start ***** -->
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                            <br>
                            <br>
                            <br>
                            <br>
                            <h1>سی وی گپ ، سیستم پرسش و پاسخ آنلاین</h1>
                            <p>چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود اب
                                بهبود ابزارهای کاربردی می باشد.

                            </p>
                            @guest
                                <a style="margin:  0 10px;" href="{{ route('login') }}" class="main-button-slider">ورود</a>
                                <a style="margin:  0 10px;" href="{{ route('register') }}" class="main-button-slider">عضویت</a>
                            @endguest
                            @auth
                            @if (auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2)
                            <a href="{{ route('admin.panel') }}" class="main-button-slider">داشبورد کاربری</a>

                                @else
                                <a href="{{ route('user.panel') }}" class="main-button-slider">داشبورد کاربری</a>

                                @endif

                            @endauth

                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>

    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h1 class="section-title">سی وی بلاگ</h1>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="images/blog-item-01.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">آخرین نسخه ویندوز 11</a>
                            </h3>
                            <div class="text">
                                چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و اربردی می باشد.

                            </div>
                            <a href="singel-blog.html" class="main-button">خواندن بیشتر</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="images/blog-item-02.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">رشد شدید بیت کوین</a>
                            </h3>
                            <div class="text">
                                چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و اربردی می باشد.

                            </div>
                            <a href="singel-blog.html" class="main-button">خواندن بیشتر</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="images/blog-item-03.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">آینده در 2040</a>
                            </h3>
                            <div class="text">
                                چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و اربردی می باشد.

                            </div>
                            <a href="singel-blog.html" class="main-button">خواندن بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->


    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>کانال ها</h1>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="images/work-process-item-01.png" alt=""></i>
                            <strong>تکنولوژی</strong>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="images/work-process-item-01.png" alt=""></i>
                            <strong>موسیقی</strong>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="images/work-process-item-01.png" alt=""></i>
                            <strong>ورزشی</strong>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="images/work-process-item-01.png" alt=""></i>
                            <strong>مذهبی</strong>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="images/work-process-item-01.png" alt=""></i>
                            <strong>تحصیلی</strong>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <i><img src="images/work-process-item-01.png" alt=""></i>
                            <strong>آشپزی</strong>
                        </a>
                    </div>

                </div>
                <!-- ***** Mini Box End ***** -->
                <div style="display: flex;
                            justify-content: center;margin: 30px 0 0;">
                    <a href="#features" class="main-button-slider">کانال های بیشتر</a>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">نظرات کاربران سی وی گپ</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content" style="text-align: right;">
                            <i><img src="images/testimonial-icon.png" alt=""></i>
                            <p>چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و اربردی می باشد.
                            </p>

                            <div class="team-info" style="text-align: center;">
                                <h3 style="text-align: right;" class="user-name">علی صابری</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->

                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content" style="text-align: right;">
                            <i><img src="images/testimonial-icon.png" alt=""></i>
                            <p>چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و اربردی می باشد.
                            </p>

                            <div class="team-info" style="text-align: center;">
                                <h3 style="text-align: right;" class="user-name">میلاد شمیرانی</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content" style="text-align: right;">
                            <i><img src="images/testimonial-icon.png" alt=""></i>
                            <p>چاپگرها و متون بلکه روزنامه و کاربردهای متنوع با هدف بهبود اب بهبود مجله در ستون و
                                سطرآنچنان که و کاربردهای متنوع با هدف بهبود اب بهبود و کاربردهای متنوع با هدف بهبود اب
                                بهبود لازم است و اربردی می باشد.
                            </p>

                            <div class="team-info" style="text-align: center;">
                                <h3 style="text-align: right;" class="user-name">محمد دولت آبادی</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->


    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>356</strong>
                            <span>کاربران</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>653</strong>
                            <span>مسائل</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong>53</strong>
                            <span>کانال ها</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong>727</strong>
                            <span>پاسخ ها</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->


    <!-- ***** Contact Us Start ***** -->
    <section style="direction: rtl;text-align: center;" class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row " style="direction: rtl;text-align: center;" s>
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">دیدگاه شما درمورد سی وی گپ؟</h2>
                    </div>
                </div>

            </div>
            <!-- ***** Section Title End ***** -->
            <br>
            <div class="row ">

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="نام کامل" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="آدرس ایمیل" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="دیدگاه شما" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">ثبت
                                            دیدگاه</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->

    <!-- ***** Footer Start ***** -->
@endsection
