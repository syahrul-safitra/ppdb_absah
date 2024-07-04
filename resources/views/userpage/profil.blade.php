@extends('userpage.layouts.main')

@section('container')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner_content text-center">
                            <h2>Profil Ponpes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="{{ asset('userpage/img/view_ponpes.jpg') }}" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Sejarah</h4>
                        <div class="content">
                            <p> Bermula Dari Pengajian Agama Yang Dipimpin Oleh KH.M.Ali Abdul Wahhab Yang Bertempat Di
                                Rumah
                                Beliau Sejak Tahun 1957 M. Pengajian Tersebut Terus Berjalan, Pada Tahun 1979 KH.M.Ali Abdul
                                Wahhab Mengundang SYEKH MUHAMMAD NAWAWI Yang Bermukim Di Berjan Porworejo Jawa Tengah Untuk
                                Melakukan Bai'at Thoriqah Qadiriyyah Naqsyabandiyyah di antara yang ikut Bai'at Pada Saat
                                Itu
                                Adalah: KH.M.Ali Abdul Wahhab, KH.M.Subli Bin H.Ismail Dan Tuan Guru H.Ahmad Bukhari Dll.
                            </p>

                            <p>Kurang lebih 28 tahun berjalan pengikut pengajian yang dilaksanakan di rumah beliau ini, dari
                                masa kemasa terus bertambah, dan puncaknya pada tahun 1985 rumah beliau yang lumayan luas,
                                tidak
                                tertampung lagi untuk jama'ah pengajian. Dan akhirnya di putuskan untuk pindah ke Mesjid
                                Agung
                                Al Istiqamah yang tempatnya tetap di depan rumah beliau.
                            </p>

                            <p>Bermula Dari Haul Sekh Abdul Qadir Al Jailani Pengikut tariqah qadiriyyah naqsabandiyyah yang
                                telah di bai'at biasanya mengadakan haul hari meninggalnya Syekh Abdu Qadir Al Jailani,
                                yaitu
                                pada tiap-tiap tanggal 11 Rabi'ust Tsani, begitu pula lah yang dilakukan oleh : KH M .Ali
                                Abdul
                                Wahhab bersama sama masyarakat yang terhimpun dalam pengajian beliau. Setiap tahun dihargai
                                haul
                                Syekh Abdul Qadir Al Jailani di Mesjid Agung Al Istiqamah Kuala Tungkal.
                            </p>

                            <p>Tahun demi tahun, para hadirin yang mengikuti Peringatan haul Syekh Abdul Qadir Al Jailani
                                yang
                                dilaksanakan di Mesjid Agung Al Istiqamah ini bertambah banyak, hingga di mesjid Agung pun
                                tak
                                tertampung lagi karena banyaknya hadirin yang mengikuti acara ini. Hingga timbul keinginan
                                untuk
                                membangun tempat khusus untuk peringatan haul ini. Ide ini diajukan kepada dewan pengurus
                                pengajian Majlis Ta'lim Al Hidayah yang telah di bentuk kepengurusannya sejak pengambilan
                                Tariqah Qodiriyah Naqsabandiyyah. Ide itu pun disepakati dengan Lokasi pembangunan gedung di
                                parit Gompong Kelurahan Tungkal Harapan Kuala Tungkal.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--================ End Course Details Area =================-->
@endsection
