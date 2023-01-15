@extends('frontend.main_master')
@section('main')
@section('title')
    About | shr_creation
@endsection

<main>
    @php
        $skills = App\Models\Skills::all();
        $trainings = App\Models\Training::all();
        $educations = App\Models\Education::all();
    @endphp
    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="custom-container container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img src="{{ $aboutpage->about_image }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">{{ $aboutpage->title }}</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
                            </div>
                            <div class="about__exp__content">
                                <p><span>{{ $aboutpage->short_title }}</span> </p>
                            </div>
                        </div>
                        <p class="desc">{{ $aboutpage->short_description }}</p>
                        <a class="btn" href="about.html">Download my resume</a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about__info__wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab"
                                    data-bs-target="#about" type="button" role="tab" aria-controls="about"
                                    aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills"
                                    type="button" role="tab" aria-controls="skills"
                                    aria-selected="false">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards"
                                    type="button" role="tab" aria-controls="awards"
                                    aria-selected="false">Traning</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab"
                                    data-bs-target="#education" type="button" role="tab" aria-controls="education"
                                    aria-selected="false">Education</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                <p class="desc">

                                    {!! $aboutpage->long_description !!}

                                </p>
                                </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div class="about__skill__wrap">
                                    <div class="row">
                                        @foreach ($skills as $skill)
                                            <div class="col-md-6">
                                                <div class="about__skill__item">
                                                    <h5 class="title">{{ $skill->skill_name }}</h5>
                                                    <div class="progress" style="height: 30px;">
                                                        <div class="progress-bar" role="progressbar"
                                                            aria-valuenow="{{ $skill->skill_progress }}"
                                                            aria-valuemin="0" aria-valuemax="100"
                                                            style="width: {{ $skill->skill_progress }};">
                                                            <span
                                                                class="percentage">{{ $skill->skill_progress }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                <div class="about__award__wrap">
                                    <div class="row justify-content-center">
                                        @foreach ($trainings as $training)
                                            <div class="col-md-6 col-sm-9">
                                                <div class="about__award__item">
                                                    <div class="award__content">
                                                        <h5 class="title">{{ $training->title }}</h5>
                                                        <h6>{{ $training->institute }}</h6>
                                                        <p>{{ $training->location }}
                                                            <span>{{ $training->country }}</span>
                                                        </p>
                                                        <em>{{ $training->duration }}</em>
                                                        <br>
                                                        <strong>{{ $training->start_date }}</strong>
                                                        <br>
                                                        <strong>{{ $training->end_date }}</strong>
                                                        <p>{{ $training->topics }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel"
                                aria-labelledby="education-tab">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        @foreach ($educations as $education)
                                            <div class="col-md-6">
                                                <div class="about__education__item">
                                                    <h3 class="title">{{ $education->title }}</h3>
                                                    <p>{{ $education->institute }}</p>
                                                    <em>{{ $education->subject }}</em>
                                                    <em>{{ $education->result }}</em>
                                                    <span class="date">{{ $education->passing_year }}</span>
                                                    <p>{{ $education->duration }}</p>
                                                    <p>{{ $education->achievement }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

</main>
@endsection
