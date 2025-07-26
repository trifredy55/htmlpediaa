@extends('frontend.layouts.app')
@section('title', 'Course')
@section('content')
    <!--- #COURSE-->
    <section class="section course" id="courses" aria-label="course"
        style="background-image: url('{{ asset('frontend/assets/images/course-bg.jpg') }}')" style="margin-top: 20%;">
        <div class="container">

            <p class="section-subtitle">Kursus Populer</p>

            <h2 class="h2 section-title">Kursus Populer Kami</h2>

 <ul class="grid-list">

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/heading.jpg') }}" width="370"
                                        height="270" loading="lazy" alt="Competitive Strategy law for all students"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Basic</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">1 Pembelajaran</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">4 Menit</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="https://youtu.be/GS9lkbkkOhg" class="card-title" target="_blank">Pembelajaran Heading Pada HTML</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>



                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>

                                            <del class="del"></del>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>


                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course2.jpg') }}" width="370"
                                        height="270" loading="lazy"
                                        alt="Machine Learning A-Z: Hands-On Python and java" class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Intermediate</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">1 Pembelajaran</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">15 Menit</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="https://youtu.be/r3vixSLXY1w" class="card-title" target="_blank">Cara Untuk Menggunakan LINKS pada HTML</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>



                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="course-card">

                                <figure class="card-banner">
                                    <img src="{{ asset('frontend/assets/images/course3.jpg') }}" width="370"
                                        height="270" loading="lazy" alt="Achieving Advanced in Insights with Big"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">Advanced</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">1 Pembelajaran</span>
                                        </li>

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <time datetime="PT18H15M44S" class="card-meta-text">8 Menit</time>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="https://youtu.be/7-QNafrXigs" class="card-title" target="_blank">Cara menggunakan TABLE di HTML</a>
                                    </h3>

                                    <div class="rating-wrapper">

                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>


                                    </div>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">Free</span>


                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>



                <li>
                    <div class="course-card">

                        <figure class="card-banner">
                            <img src="{{ asset('frontend/assets/images/course4.jpg') }}" width="370" height="270"
                                loading="lazy" alt="Education Makes A Person A Responsible Citizen" class="img-cover">
                        </figure>

                        <div class="card-actions">

                            <span class="badge">Basic</span>

                            <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                <ion-icon name="heart"></ion-icon>
                            </button>

                        </div>

                        <div class="card-content">

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                    <span class="card-meta-text">1 Pembelajaran</span>
                                </li>

                                 <li class="card-meta-item">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <time datetime="PT18H15M44S" class="card-meta-text">12 Menit</time>
                                </li>

                            </ul>

                            <h3 class="h3">
                                <a href="https://youtu.be/TUFVEx1JCFc" class="card-title" target="_blank">Penggunaan IMAGES pada HTML</a>
                            </h3>

                            <div class="rating-wrapper">

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>


                            </div>

                            <div class="card-footer">

                                <div class="card-price">
                                    <span class="span">Free</span>

                                </div>

                                <div class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                </div>

                            </div>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card">

                        <figure class="card-banner">
                            <img src="{{ asset('frontend/assets/images/course5.jpg') }}" width="370" height="270"
                                loading="lazy" alt="Building A Better World One Student At A Time" class="img-cover">
                        </figure>

                        <div class="card-actions">

                            <span class="badge">Intermediate</span>

                            <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                <ion-icon name="heart"></ion-icon>
                            </button>

                        </div>

                        <div class="card-content">

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                    <span class="card-meta-text">1 Pembelajaran</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <time datetime="PT18H15M44S" class="card-meta-text">12 Menit</time>
                                </li>

                            </ul>

                            <h3 class="h3">
                                <a href="https://youtu.be/YOdRiuC1F94" class="card-title" target="_blank">Apa itu TEKS FORMATTING dalam HTML</a>
                            </h3>

                            <div class="rating-wrapper">

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>


                            </div>

                            <div class="card-footer">

                                <div class="card-price">
                                    <span class="span">Free</span>

                                </div>

                                <div class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                </div>

                            </div>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card">

                        <figure class="card-banner">
                            <img src="{{ asset('frontend/assets/images/source6.jpg') }}" width="370" height="270"
                                loading="lazy" alt="Education is About Forming Faithful Disciples" class="img-cover">
                        </figure>

                        <div class="card-actions">

                            <span class="badge">Advanced</span>

                            <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                <ion-icon name="heart"></ion-icon>
                            </button>

                        </div>

                        <div class="card-content">

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                    <span class="card-meta-text">1 Pembelajaran</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <time datetime="PT18H15M44S" class="card-meta-text">2 Menit</time>
                                </li>

                            </ul>

                            <h3 class="h3">
                                <a href="https://youtu.be/YOdRiuC1F94" class="card-title" target="_blank">Penggunaan COMMENTS pada HTML</a>
                            </h3>

                            <div class="rating-wrapper">

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>


                            </div>

                            <div class="card-footer">

                                <div class="card-price">
                                    <span class="span">Free</span>

                                </div>

                                <div class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                </div>

                            </div>

                        </div>

                    </div>
                </li>
                   <li>
                    <div class="course-card">

                        <figure class="card-banner">
                            <img src="{{ asset('frontend/assets/images/course7.jpg') }}" width="370" height="270"
                                loading="lazy" alt="Education Makes A Person A Responsible Citizen" class="img-cover">
                        </figure>

                        <div class="card-actions">

                            <span class="badge">Basic</span>

                            <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                <ion-icon name="heart"></ion-icon>
                            </button>

                        </div>

                        <div class="card-content">

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                    <span class="card-meta-text">1 Pembelajaran</span>
                                </li>

                                 <li class="card-meta-item">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <time datetime="PT18H15M44S" class="card-meta-text">14 Menit</time>
                                </li>

                            </ul>

                            <h3 class="h3">
                                <a href="https://youtu.be/qwKm_7GmgBU" class="card-title" target="_blank">Penggunaan PARAGRAPH pada HTML</a>
                            </h3>

                            <div class="rating-wrapper">

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>


                            </div>

                            <div class="card-footer">

                                <div class="card-price">
                                    <span class="span">Free</span>

                                </div>

                                <div class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                </div>

                            </div>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card">

                        <figure class="card-banner">
                            <img src="{{ asset('frontend/assets/images/course8.jpg') }}" width="370" height="270"
                                loading="lazy" alt="Building A Better World One Student At A Time" class="img-cover">
                        </figure>

                        <div class="card-actions">

                            <span class="badge">Intermediate</span>

                            <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                <ion-icon name="heart"></ion-icon>
                            </button>

                        </div>

                        <div class="card-content">

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                    <span class="card-meta-text">1 Pembelajaran</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <time datetime="PT18H15M44S" class="card-meta-text">10 Menit</time>
                                </li>

                            </ul>

                            <h3 class="h3">
                                <a href="https://youtu.be/Y379HgKK-9I" class="card-title" target="_blank"> Penggunaan LISTS pada HTML</a>
                            </h3>

                            <div class="rating-wrapper">

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>


                            </div>

                            <div class="card-footer">

                                <div class="card-price">
                                    <span class="span">Free</span>

                                </div>

                                <div class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                </div>

                            </div>

                        </div>

                    </div>
                </li>

                <li>
                    <div class="course-card">

                        <figure class="card-banner">
                            <img src="{{ asset('frontend/assets/images/course9.jpg') }}" width="370" height="270"
                                loading="lazy" alt="Education is About Forming Faithful Disciples" class="img-cover">
                        </figure>

                        <div class="card-actions">

                            <span class="badge">Advanced</span>

                            <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                <ion-icon name="heart"></ion-icon>
                            </button>

                        </div>

                        <div class="card-content">

                            <ul class="card-meta-list">

                                <li class="card-meta-item">
                                    <ion-icon name="reader-outline" aria-hidden="true"></ion-icon>

                                    <span class="card-meta-text">1 Pembelajaran</span>
                                </li>

                                <li class="card-meta-item">
                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                    <time datetime="PT18H15M44S" class="card-meta-text">11 Menit</time>
                                </li>

                            </ul>

                            <h3 class="h3">
                                <a href="https://youtu.be/VPjWb1M2org" class="card-title" target="_blank"> Belajar Mengenal INLINE & BLOCK pada HTML</a>
                            </h3>

                            <div class="rating-wrapper">

                                <div class="rating">
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                    <ion-icon name="star"></ion-icon>
                                </div>


                            </div>

                            <div class="card-footer">

                                <div class="card-price">
                                    <span class="span">Free</span>

                                </div>

                                <div class="card-meta-item">
                                    <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                </div>

                            </div>

                        </div>

                    </div>
                </li>


            </ul>

        </div>
    </section>

@endsection
