@extends('web.layout.main')

@section('content')
    <!-- header -->
    <section class="h1-00 w-100 bg-light-blue" style="box-sizing: border-box">
        <div class="header container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="mx-auto d-flex flex-lg-row flex-column hero">
                <!-- Left Column -->
                <div
                    class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                    <p class="text-caption cl-red">FREE TRIAL LIFETIME</p>
                    <h1 class="title-text-big">
                        The best way<br class="d-lg-block d-none" />
                        to organize your business
                    </h1>
                    <div
                        class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                        <button class="btn btn-big btn-blue">
                            Coba Gratis
                        </button>
                        <button class="btn btn-big btn-outline-blue">
                            Lihat Video Demo
                        </button>
                    </div>
                </div>
                <!-- Right Column -->
                <div class="right-column text-center d-flex justify-content-center pe-0">
                    <img id="img-fluid" class="h-auto mw-100" src="/assets/frontend-ui/asvalue.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- end header -->

    <!-- benefit potrait -->
    <section class="h1-00 w-100 bg-white" style="box-sizing: border-box" id="featured">
        <div class="benefit-potrait container-xxl mx-auto  position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <!-- Left Column -->
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" src="/assets/frontend-ui/asvalue.png" alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text">3 Keys Benefit</h2>
                    <ul style="padding: 0; margin: 0">
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span
                                    class="circle circle-blue text-white d-flex align-items-center justify-content-center">
                                    1
                                </span>
                                Trusted Mentor
                            </h4>
                            <p class="text-caption">
                                We have provided highly experienced mentors<br class="d-sm-inline d-none" />
                                for several years.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span
                                    class="circle circle-blue text-white d-flex align-items-center justify-content-center">
                                    2
                                </span>
                                Access Forever
                            </h4>
                            <p class="text-caption">
                                Are you busy at work so it's hard to consult? don't<br class="d-sm-inline d-none" />
                                worry because you can access anytime.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 4rem">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span
                                    class="circle circle-blue text-white d-flex align-items-center justify-content-center">
                                    3
                                </span>
                                Halfpenny
                            </h4>
                            <p class="text-caption">
                                We provide economical packages for those of you<br class="d-sm-inline d-none" />
                                who are still in school or workers.
                            </p>
                        </li>
                    </ul>
                    <button class="btn btn-big btn-blue">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end benefit potrait -->

    <!-- benefit landscape -->
    <section class="h-100 w-100 bg-light-blue" style="box-sizing: border-box">
        <div class="benefit-landscape container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title">3 Keys Benefit</h1>
                <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                    You can easily manage your business with a powerful tools
                </p>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="icon">
                            {{-- <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-2.png"
                                alt="" /> --}}
                            <i class="fas fa-sign-language fa-8x cl-blue"></i>
                        </div>
                        <h3 class="icon-title">Easy to Operate</h3>
                        <p class="icon-caption">
                            This can easily help you to<br />
                            grow up your business fast
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <i class="fas fa-chart-line fa-8x cl-blue"></i>
                        </div>
                        <h3 class="icon-title">Real-Time Analytic</h3>
                        <p class="icon-caption">
                            With real-time analytics, you<br />
                            can check data in real time
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <i class="fas fa-shield-alt fa-8x cl-blue"></i>
                        </div>
                        <h3 class="icon-title">Very Full Secublue</h3>
                        <p class="icon-caption">
                            With real-time analytics, we<br />
                            will guarantee your data
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-block">
                <div class="card-blue">
                    <div class="d-flex flex-lg-row flex-column align-items-center">
                        <div class="me-lg-3">
                            <img src="/assets/frontend-ui/asvalue.png" alt="" style="height: 150px" />
                        </div>
                        <div class="flex-grow-1 text-lg-start text-center card-text">
                            <h3 class="card-title">
                                Fast Business Management in 30 minutes
                            </h3>
                            <p class="card-caption">
                                Our tools for business analysis helps an organization
                                understand<br class="d-none d-lg-block" />
                                market or business development.
                            </p>
                        </div>
                        <div class="card-btn-space">
                            <button class="btn btn-card-blue">Buy Now</button>
                            <button class="btn btn-outline-blue">Demo Version</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end benefit landscape -->

    <!-- pricing -->
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box;" id="price">
        <div class="pricing overflow-hidden container-xxl mx-auto position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="container mx-auto">
                <div class="d-flex flex-column text-center w-100" style="margin-bottom: 2.25rem">
                    <h2 class="title-text">Pricing That Everyone Works</h2>
                    <p class="caption-text mx-auto">
                        Choose one of our friendly pricing that suitable<br />
                        for your business to grow bigger
                    </p>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="mx-auto card-item position-relative">
                        <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100">
                            <h2 class="price-title">Free</h2>
                            <h2 class="price-value d-flex align-items-center">
                                <span>Gratis</span>
                            </h2>
                            <p class="price-caption">
                                Suitable for those of you<br />
                                who are beginners
                            </p>
                            <div class="price-list">
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="/assets/frontend-ui/check.png" alt="" />
                                    </span>Chat Support
                                </p>
                                <p class="d-flex align-items-center check">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="/assets/frontend-ui/check.png" alt="" />
                                    </span>Optimize Projects
                                </p>
                            </div>
                            <button class="btn btn-big btn-fill-green align-items-center w-100">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto card-item position-relative">
                        <div class="card-item-outline d-flex flex-column position-relative overflow-hidden h-auto"
                            style="background-color: #2e3a53">
                            <h2 class="price-title text-white">Pro</h2>
                            <h2 class="price-value d-flex align-items-center text-white">
                                <span>Rp 300k</span>
                                <span class="price-duration" style="color: #8997b5">/bln</span>
                            </h2>
                            <p class="price-caption" style="color: #7987a6">
                                Suitable to make your<br />
                                company grow rapidly
                            </p>
                            <div class="price-list">
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="/assets/frontend-ui/check-dark.png" alt="" />
                                    </span>Chat Support
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="/assets/frontend-ui/check-dark.png" alt="" />
                                    </span>Optimize Projects
                                </p>
                                <p class="d-flex align-items-center check text-white">
                                    <span
                                        class="span-icon d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                        <img class="img-fluid" src="/assets/frontend-ui/check-dark.png" alt="" />
                                    </span>300+ Unique Project
                                </p>
                            </div>
                            <button class="btn btn-big btn-green align-items-center w-100">
                                Choose Plan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->

    <!-- adventages -->
    <section class="adventages">
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script> --}}

        <div class="container">
            <div class="row mx-0 text-center d-block">
                <div class="headline">
                    We Provide the Easiest Way to <br>
                    <span class="cl-blue font-blue-hat-display">Manage Your Finances</span>
                </div>
            </div>
            <div class="value row mx-0 d-flex justify-content-center justify-content-md-between">
                <div class="card">
                    <div class="card-body p-0">
                        <i class="fas fa-money-check fa-5x cl-blue"></i>
                        <div class="card-desc">
                            <h4 class="card-title">Great Trading</h4>
                            <p class="card-text">We believe in the potential to provide groundbreaking solutions
                                across
                                industries.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <i class="fas fa-shield-alt fa-5x cl-blue"></i>
                        <div class="card-desc">
                            <h4 class="card-title">Security First</h4>
                            <p class="card-text">Security has been our top consideration because when choosing an
                                exchange, trust matters.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-0">
                        <i class="fas fa-project-diagram fa-5x cl-blue"></i>
                        <div class="card-desc">
                            <h4 class="card-title">Robust Technology</h4>
                            <p class="card-text">To enhance the safety aspect of our products, our products are
                                developed using the latest robust technology.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- adventages -->
@endsection
