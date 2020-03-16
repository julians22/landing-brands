@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
        <nav class="navbar navbar-light bg-transparent">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('img/general/logo-brands.png') }}" alt="" class="logo">
            </a>
        </nav>
        <!-- logo navbar  -->

        <div class="row justify-content-end text-right mt-0">
            <div class="col-12 text-right">
                <h1 class="text-bigger futura_std_bold yellow my-0">GRATIS 1 Paket</h1>
                <p class="text-big futura_std_bold yellow my-0">BRAND'S Saripati Ayam</p>
                <p class="futura_std_bold font-weight-normal text-white mt-0">hanya dengan mengisi lengkap data di bawah <br>ini dan klik tombol submit</p>
            </div>
        </div>
        <!-- bigtext section -->

        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5 mr-2">
            <img src="{{ asset('img/general/img-3.png') }}" alt="" class="d-inline-flex p-2 bd-highlight img-1">
          </div>
          <div class="col">
            <div class="quotes mt-2">
              <h4 class="optima_std text-white">#SiapJagaEnergi</h4>
              <p class="optima_std text-white">BRAND’S Saripati Ayam adalah Suplemen Kesehatan yang terbuat dari 100% saripati ayam murni,
                terbukti dalam waktu 15 menit dapat meningkatkan metabolisme tubuh sehingga menghasilkan Energi
                (tidak membuat menjadi lelah) yang bebas dari bahan kimia dan bahan pengawet sehingga aman di konsumsi
                mulai dari anak sampai dewasa</p>
                <div class="video-button futura_std_bold green mt-n2">
                  <a href="//www.youtube.com" target="_blank">
                    <img class="position-absolute" src="{{ asset('img/general/button-1.svg') }}">
                  </a>
                  Science Video
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-md-4 col-xl-4 text-right mb-4">
              <form id="custForm" method="POST" action="{{ route('frontend.customer.store') }}">
                  @csrf
                  <div class="form-group mb-1 futura_std_bold font-weight-normal text-white">
                      <label for="nama" class="mb-0">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                  </div>
                  <div class="form-group mb-1 futura_std_bold font-weight-normal text-white">
                      <label for="email" class="mb-0">Email</label>
                      <input type="text" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group mb-1 futura_std_bold font-weight-normal text-white">
                      <label for="nomor" class="mb-0">HP</label>
                      <input type="text" class="form-control" id="nomor" name="nomor" value="{{ old('nomor') }}">
                  </div>
                  <div class="form-group mb-1 futura_std_bold font-weight-normal text-white">
                      <label for="alamat" class="mb-0">Alamat Lengkap</label>
                      <textarea class="form-control" id="alamat" rows="1" name="alamat">{{ old('alamat') }}</textarea>
                  </div>
                  <div class="text-left futura_std_bold text-info-2 heading-term mt-n2">Syarat dan ketentuan</div>
                  <div class="form-check term_div text-left">
                      <input class="form-check-input" type="checkbox" value="" id="term" name="term" onclick="showModal()">
                      <label class="form-check-label optima_std text-white term_label ml-2" id="term_modal">
                          Saya telah membaca dan menyetujui syarat dan ketentuan yang berlaku.
                      </label>
                  </div>
                  <input type="hidden" name="recaptcha" id="recaptcha">
                  <button class="btn my-btn futura_std_bold green bg-warning" disabled>
                    <span id="send">
                      <i class="fas fa-paper-plane mr-1"></i>
                    </span>
                    <span class="spinner-border spinner-border-sm" id="spinner" role="status" aria-hidden="true">
                    </span>
                  Submit</button>
              </form>
          </div>
        </div>
        <div class="row mt-0">
          <div class="img-2 col-sm-12 col-md-7 col-xl-7">
            <img src="{{ asset('img/general/img-2.png') }}" alt="" class="position-relative">
          </div>
        </div>
@endsection
