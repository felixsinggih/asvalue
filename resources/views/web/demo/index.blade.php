@extends('web.layout.main')

@section('content')
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="benefit-landscape container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text mt-5" >
                <h1 class="text-title">Ajukan Demo</h1>
                <p class="text-caption mt-5" style="margin-left: 3rem; margin-right: 3rem">
                    Kami akan melakukan konfirmasi sebelum anda dapat menikmati demo aplikasi Asvalue's Point Of sales.<br class="d-none d-lg-block" />
                    Klik tombol di bawah ini untuk mengajukan demo.
                </p>
            </div>

            <div class="grid-padding text-center mb-5">
                <a href="/trynow" class="btn btn-big btn-red">Ajukan Demo</a>
            </div>
        </div>
    </section>
@endsection
