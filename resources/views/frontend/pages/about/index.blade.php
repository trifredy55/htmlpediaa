@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')
    <!-- #ABOUT-->
    <section class="section about" id="about" aria-label="about" style="margin-top: 10%;">
        <div class="container">

            <figure class="about-banner">

                <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" width="350" height="490" loading="lazy"
                    alt="about banner" class="w-100 about-img">

                <img src="{{ asset('frontend/assets/images/about-abs-1.jpg') }}" width="328" height="352"
                    loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                <img src="{{ asset('frontend/assets/images/about-abs-2.jpg') }}" width="190" height="170"
                    loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

            </figure>

            <div class="about-content">

                        <p class="section-subtitle">Siapa Kami?</p>

                        <h2 class="h2 section-title">Kami Menyediakan Pengalaman Terbaik Anda Untuk Berkembang</h2>

                        <ul class="about-list">

                            <li class="about-item">

                                <div class="item-icon item-icon-1">
                                    <img src="{{ asset('frontend/assets/images/lulus.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Kursus dari para ahli</h3>

                                    <p class="item-text">
                                       Untuk bisa berkembang kita membutuhkan pakar dibidang nya dan HTMLPedia datang membawa
                                       para pakar dan senior di bidang programmer dan dunia Coding
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="{{ asset('frontend/assets/images/course.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Konten Kursus Terbaru</h3>

                                    <p class="item-text">
                                       Teknologi terus berkembang pesat dan HTMLPedia selalu memberi kursus Terbaru
                                       agar kamu bisa terus berkembang
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-3">
                                    <img src="{{ asset('frontend/assets/images/online.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Kursus Pembelajaran Online</h3>

                                    <p class="item-text">
                                        Tempat dan waktu bukan lagi halangan untuk yang ingin berkembang.
                                        HTMLPedia ada untuk anda bisa berkembang kapanpun dan dimana pun
                                </div>

                            </li>

                        </ul>

                        <a href="{{url('/')}}" class="btn btn-primary mt-2" style="margin-top: 20px;">Kembali Ke Beranda</a>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

        </div>
    </section>
@endsection
