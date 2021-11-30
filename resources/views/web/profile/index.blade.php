@extends('web.layout.main')

@section('content')
    <!-- login box -->
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #f5f5f5">
        <div class="login-box d-flex flex-column align-items-center h-100 flex-lg-row"
            style="font-family: 'Poppins', sans-serif">
            <div class="position-relative d-none d-lg-block h-100 width-left">
                <img class="position-absolute img-fluid centered"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
                    alt="" />
            </div>
            <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
                <div class="right mx-lg-0 mx-auto">
                    <div class="align-items-center justify-content-center d-lg-none d-flex">
                        <img class="img-fluid"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-11.png"
                            alt="" />
                    </div>
                    <h3 class="title-text">Profil</h3>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="cl-grey">Nama Lengkap</label>
                        <p class="text-bold">{{ Auth::guard('user')->user()->name }}</p>
                    </div>
                    <div class="form-group">
                        <label class="cl-grey">NIK (Nomor Induk Kependudukan)</label>
                        <p class="text-bold">{{ Auth::guard('user')->user()->nik }}</p>
                    </div>
                    <div class="form-group">
                        <label class="cl-grey">Alamat</label>
                        <p class="text-bold">{{ Auth::guard('user')->user()->address }}</p>
                    </div>
                    <div class="form-group">
                        <label class="cl-grey">Kodepos</label>
                        <p class="text-bold">{{ Auth::guard('user')->user()->zip_code }}</p>
                    </div>
                    <div class="form-group">
                        <label class="cl-grey">Email</label>
                        <p class="text-bold">{{ Auth::guard('user')->user()->email }} 
                            @if (Auth::guard('user')->user()->email_verified_at)
                            <small class="text-small text-success">
                                <i class="fas fa-check"></i>
                            </small>
                            @else
                            <small class="text-small text-danger">
                                <i class="fas fa-times"></i> Belum terverifikasi 
                                <a href="/sendemail" class="text-decoration-none">Verifikasi Email</a>
                            </small>
                            @endif
                            
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="cl-grey">KTP (Kartu Tanda Pendudukan)</label>
                        <img src="{{ asset('storage/'.Auth::guard('user')->user()->ktp) }}" class="img-fluid mt-1" alt="" style="border-radius: 1rem; width: 90%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end login box -->
@endsection
