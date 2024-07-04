@extends('userpage.layouts.main')

@section('container')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <p class="text-uppercase " style="color: black">
                                Pondok Pesantren
                            </p>
                            <h2 class="text-uppercase mt-4 mb-5" style="color: black">
                                Al Baqiyatush Shalihat
                            </h2>
                            <h3 class="text-uppercase mt-4 mb-5" style="color: black">
                                الْبَاقِيَاتُ الصَّالِحَاتُ
                            </h3>
                            {{-- <div>
                                <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                                <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Data Statistik Al-Baqiyatush Shalihat</h2>
                        <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class=""><img style="width: 48px;height:48px"
                                src="{{ asset('userpage/img/image/graduation-cap.png') }}" alt=""></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Alumni</h4>
                            <p><span class="text-primary">5403 </span>Jumlah Alumni Pondok Pesantren Al-Baqiyatush
                                Shalihat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class=""><img style="width: 48px;height:48px"
                                src="{{ asset('userpage/img/image/muslim.png') }}" alt=""></div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Santri</h4>
                            <p><span class="text-primary">1345 </span>Jumlah Santri Pondok Pesantren Al-Baqiyatush
                                Shalihat</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div>
                            <div class=""><img style="width: 48px;height:48px"
                                    src="{{ asset('userpage/img/image/male.png') }}" alt=""></div>
                        </div>
                        <div class="desc">
                            <h4 class="mt-3 mb-2">Guru</h4>
                            <p>
                            <p><span class="text-primary">48 </span>Jumlah Guru Pondok Pesantren Al-Baqiyatush Shalihat
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            <div class="row h_blog_item">
                <div class="col-lg-6">
                    <div class="h_blog_img">
                        <img class="img-fluid" src="{{ asset('userpage/img/gedung.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h_blog_text">
                        <div class="h_blog_text_inner left right">
                            <h4> الْبَاقِيَاتُ الصَّالِحَاتُ</h4>
                            <p>

                                Pondok Pesantren Al-Baqiyatush Shalihat merupakan lembaga pendidikan islam yang mengkaji
                                ilmu agama secara instensif. Mempunyai misi besar yaitu menjadi lembaga pendidikan yang
                                membentuk santri berprestasi dan berakhlakhul karimah, ahli qur'an, kitab kuning, cerdas dan
                                bertaqwa.
                            </p>

                            <a class="primary-btn" href="{{ url('sejarah') }}">
                                Selengkapnya <i class="ti-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trainer_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Unit Pendidikan Pesantren</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="meta-text text-sm-center">
                        <div class="d-flex justify-content-center mb-3"><img class="mx-auto"
                                style="width: 50px; height:50px" src="{{ asset('userpage/img/mosque.png') }}"
                                alt="" /></div>
                        <h4>Madrasah I'idadiyah</h4>
                        <div class="mb-4">
                            <p>
                                Madrasah I'dadiyah adalah program pendidikan untuk santri baru yang akan mendapatkan
                                pendidikan dasar seperti membaca al-qur'an, membaca dan menulis arab melayu, pengantar nahwu
                                & shorof.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="meta-text text-sm-center">
                        <div class="d-flex justify-content-center mb-3"><img class="mx-auto"
                                style="width: 50px; height:50px" src="{{ asset('userpage/img/mosque-2.png') }}"
                                alt="" /></div>
                        <h4>Madrasah Diniyah Wustho</h4>
                        <div class="mb-4">
                            <p>
                                Madrasah Diniyah Wustho adalah program pendidikan pasca I'dadiyah yang mengkaji tentang
                                dasar ilmu alat seperti nahwu & shorof dengan tingkat menengah, dasar ilmu farai'dh, fiqih
                                dsb.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">

                    <div class="meta-text text-sm-center">
                        <div class="d-flex justify-content-center mb-3"><img class="mx-auto"
                                style="width: 50px; height:50px" src="{{ asset('userpage/img/kitab.png') }}"
                                alt="" /></div>

                        <h4>Madrasah Aliyah Salafi</h4>
                        <div class="mb-4">
                            <p>
                                Madrasah Aliyah Salafi adalah program pendidikan pasca Diniyah Wustho yang mengkaji dengan
                                lebih dalam ilmu alat nahwu & shorof, fiqih tingkat lanjut, ilmu balaqhah, mantiq dsb.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="meta-text text-sm-center">
                        <div class="d-flex justify-content-center mb-3"><img class="mx-auto"
                                style="width: 50px; height:50px" src="{{ asset('userpage/img/kitab-2.png') }}"
                                alt="" /></div>

                        <h4>Madrasah Tahfidzil Qur'an & Tahsinul Qiro'ah</h4>
                        <div class="mb-4">
                            <p>
                                Madrasah Tahfidzil Qur'an & Tahsinul Qiro'ah adalah program untuk santri yang ingin
                                menghafal sekaligus memperindah bacaan al'qur'an.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="meta-text text-sm-center">
                        <div class="d-flex justify-content-center mb-3"><img class="mx-auto"
                                style="width: 50px; height:50px" src="{{ asset('userpage/img/kitab-3.png') }}"
                                alt="" /></div>

                        <h4>Pendalaman Ilmu Alat (Nahwu & Shorof)</h4>
                        <div class="mb-4">
                            <p>
                                Pendalaman Ilmu Alat program pendidikan bagi santri untuk mengkaji lebih dalam mengenai ilmu
                                Nahwu & Shorof.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="meta-text text-sm-center">
                        <div class="d-flex justify-content-center mb-3"><img class="mx-auto"
                                style="width: 50px; height:50px" src="{{ asset('userpage/img/arabic.png') }}"
                                alt="" /></div>
                        <h4>Lembaga Bahasa Arab</h4>
                        <div class="mb-4">
                            <p>
                                Lembaga Bahasa Arab adalah program pendidikan bagi santri yang ingin belajar bahasa arab
                                dengan lebih dalam lagi.
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- Start Fasilitas --}}
    <section class="trainer_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Fasilitas</h2>
                        <p>
                            Fasilitas Pondok Pesantren Al-Baqiyatsuh Shalihat
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="{{ asset('userpage/img/fasilitas1.jpg') }}" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Asrama Putra</h4>
                        <div class="mb-4">
                            {{-- <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="{{ asset('userpage/img/fasilitas2.jpg') }}" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Asrama Putri</h4>
                        <div class="mb-4">
                            {{-- <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="{{ asset('userpage/img/fasilitas3.jpg') }}" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Gedung Belajar</h4>
                        <div class="mb-4">
                            {{-- <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" style="height: 200px" src="{{ asset('userpage/img/fasilitas4.jpg') }}"
                            alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Loundry</h4>
                        <div class="mb-4">
                            {{-- <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" style="height: 200px" src="{{ asset('userpage/img/fasilitas5.jpg') }}"
                            alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Toko Kitab</h4>
                        <div class="mb-4">
                            {{-- <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Fasilitas --}}

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Berita</h2>
                        {{-- <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">
                        @foreach ($dataBerita as $item)
                            <div class="single_course">
                                <div class="course_head">
                                    <img class="img-fluid" src="{{ asset('storage/' . $item->file) }}" alt="" />
                                </div>
                                <div class="course_content" style="height: 150px;overflow:hidden">
                                    <p>{{ date('d-m-Y', strtotime($item->tanggal)) }}</p>
                                    <h4 class="mb-3">
                                        <a href="{{ url('informasis/' . $item->id) }}">{{ $item->judul }}</a>
                                    </h4>
                                    @php
                                        $potongKata = preg_replace("'<div>'", '', $item->isi);
                                        $potongKata = preg_replace("'</div>'", '', $potongKata);
                                    @endphp
                                    <p>
                                        {!! $potongKata !!}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    {{-- YT Channel --}}
    <section class="about_area section_gap">
        <div class="container">
            <div class="row h_blog_item">
                <div class="col-lg-8">
                    <div class="h_blog_img ">
                        <iframe class="embed-responsive" width="560" height="315"
                            src="https://www.youtube.com/embed/1ChKCzLcp4M?si=E7IItKhJoe5Mxty2"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="h_blog_text">
                        <div class="h_blog_text_inner left right">

                            <p>Subscribe youtube kami untuk mengetahui lebih banyak kegiatan di Pondok</p>
                            <a class="primary-btn" href="https://www.youtube.com/@PondokAbshah">
                                <i class="fa-brands fa-youtube" style="margin-right: 5px"></i>You Tube
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- End YT Channel --}}
    <!--================ Start Registration Area =================-->
    {{-- <div class="section_gap registration_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row clock_sec clockdiv" id="clockdiv">
                        <div class="col-lg-12">
                            <h1 class="mb-3">Register Now</h1>
                            <p>
                                There is a moment in the life of any aspiring astronomer that
                                it is time to buy that first telescope. It’s exciting to think
                                about setting up your own viewing station.
                            </p>
                        </div>
                        <div class="col clockinner1 clockinner">
                            <h1 class="days">150</h1>
                            <span class="smalltext">Days</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="hours">23</h1>
                            <span class="smalltext">Hours</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="minutes">47</h1>
                            <span class="smalltext">Mins</span>
                        </div>
                        <div class="col clockinner clockinner1">
                            <h1 class="seconds">59</h1>
                            <span class="smalltext">Secs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="register_form">
                        <h3>Courses for Free</h3>
                        <p>It is high time for learning</p>
                        <form class="form_area" id="myForm" action="mail.html" method="post">
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input name="name" placeholder="Your Name" required="" type="text" />
                                    <input name="name" placeholder="Your Phone Number" required=""
                                        type="tel" />
                                    <input name="email" placeholder="Your Email Address"
                                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required=""
                                        type="email" />
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    {{-- <section class="trainer_area section_gap_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">Our Expert Trainers</h2>
                        <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="img/trainer/t1.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Mated Nithan</h4>
                        <p class="designation">Sr. web designer</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="img/trainer/t2.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>David Cameron</h4>
                        <p class="designation">Sr. web designer</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="img/trainer/t3.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Jain Redmel</h4>
                        <p class="designation">Sr. Faculty Data Science</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                    <div class="thumb d-flex justify-content-sm-center">
                        <img class="img-fluid" src="img/trainer/t4.jpg" alt="" />
                    </div>
                    <div class="meta-text text-sm-center">
                        <h4>Nathan Macken</h4>
                        <p class="designation">Sr. web designer</p>
                        <div class="mb-4">
                            <p>
                                If you are looking at blank cassettes on the web, you may be
                                very confused at the.
                            </p>
                        </div>
                        <div class="align-items-center justify-content-center d-flex">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================ End Trainers Area =================-->

    <!--================ Start Events Area =================-->
    {{-- <div class="events_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3 text-white">Upcoming Events</h2>
                        <p>
                            Replenish man have thing gathering lights yielding shall you
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_event position-relative">
                        <div class="event_thumb">
                            <img src="img/event/e1.jpg" alt="" />
                        </div>
                        <div class="event_details">
                            <div class="d-flex mb-4">
                                <div class="date"><span>15</span> Jun</div>

                                <div class="time-location">
                                    <p>
                                        <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                                    </p>
                                    <p>
                                        <span class="ti-location-pin mr-2"></span> Hilton Quebec
                                    </p>
                                </div>
                            </div>
                            <p>
                                One make creepeth man for so bearing their firmament won't
                                fowl meat over seas great
                            </p>
                            <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_event position-relative">
                        <div class="event_thumb">
                            <img src="img/event/e2.jpg" alt="" />
                        </div>
                        <div class="event_details">
                            <div class="d-flex mb-4">
                                <div class="date"><span>15</span> Jun</div>

                                <div class="time-location">
                                    <p>
                                        <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                                    </p>
                                    <p>
                                        <span class="ti-location-pin mr-2"></span> Hilton Quebec
                                    </p>
                                </div>
                            </div>
                            <p>
                                One make creepeth man for so bearing their firmament won't
                                fowl meat over seas great
                            </p>
                            <a href="#" class="primary-btn rounded-0 mt-3">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="text-center pt-lg-5 pt-3">
                        <a href="#" class="event-link">
                            View All Event <img src="{{ asset('userpage/img/next.png') }}" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--================ End Events Area =================-->
@endsection
