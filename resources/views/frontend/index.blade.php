@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<div class="row position-relative">
    <div class="col-sm-4 col-lg-4 col-md-4">
        <img src="{{ asset('img/general/logo-brands.png') }}" alt="" class="position-absolute mt-4">
    </div>
    <div class="col-sm-8 col-lg-8 col-xl-8 text-right mt-5">
        <h1 class="text-bigger futura_std_bold yellow my-0">GRATIS 1 Paket</h1>
        <p class="text-big futura_std_bold yellow my-0">BRAND'S Saripati Ayam</p>
    </div>
</div>

<div class="row">
    <div class="col-sm-auto col-md-6 col-lg-8 col-xl-9">
        <div class="row no-gutters">
            <div class="col-6">
                <img src="{{ asset('img/general/img-3.png') }}" alt="" class="pr-0 w-100 bd-highlight">
            </div>
            <div class="col-6">
                <h2 class="optima_std text-white mb-0">#SiapEnergiAntiDrop</h2>
                <p class="optima_std text-white quotes pr-3 mb-0">Severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) yang lebih dikenal dengan nama virus Corona (COVID19) adalah jenis baru dari coronavirus 
                    yang menular ke manusia. Virus ini bisa menyerang siapa saja, baik bayi, anak-anak, orang dewasa, lansia, ibu hamil, maupun ibu menyusui. <br>
                    Mulailah untuk bisa bergaya hidup sehat dengan makan makanan sehat, tidur yang cukup agar Imun tubuh Anda semakin kuat. <br>            
                    BRAND’S Saripati ayam adalah suplemen kesehatan alami yang mengandung bio amino peptide protein yang terbuat dari saripati ayam murni, dikemas dengan teknologi modern tanpa adanya tambahan bahan kimia dan bahan pengawet sehingga aman di konsumsi siapapun (sampai ke ibu hamil dan menyusui) 
                    yang berguna memberikan energi pada sel imun tubuh kita. <br>
                    Minum BRAND’S 1 botol setiap harinya. <br>
                    <span class="yellow hash">#SiapEnergiAntiDrop</span>
                </p>
                    <a href="https://youtu.be/7KG1PYFtmZw" target="_blank" class="video-button">
                        <img class="" src="{{ asset('img/general/button-1.png') }}">
                    </a>
                </div>
            </div>
        <div class="row">
            <img src="{{ asset('img/general/img-2.png') }}" alt="" class="mt-5">
        </div>
    </div>
    <div class="col-sm-auto col-md-6 col-lg-4 col-xl-3 text-right">
        <p class="futura_std_bold font-weight-normal text-white h6">hanya dengan mengisi lengkap data di bawah ini
            dan klik tombol submit</p>
        <form id="custForm" method="POST" action="{{ route('frontend.customer.store') }}">
            @csrf
            <div class="form-group futura_std_bold font-weight-normal text-white mb-1">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            </div>
            <div class="form-group futura_std_bold font-weight-normal text-white mb-1">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group futura_std_bold font-weight-normal text-white mb-1">
                <label for="nomor">HP</label>
                <input type="text" class="form-control" id="nomor" name="nomor" value="{{ old('nomor') }}">
            </div>
            <div class="form-group futura_std_bold font-weight-normal text-white mb-0">
                <label for="alamat">Alamat Lengkap</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') }}</textarea>
            </div>
            <div class="text-left futura_std_bold text-info-2 heading-term mt-0">Syarat dan ketentuan</div>
            <div class="form-check term_div text-left">
                <input class="form-check-input" type="checkbox" value="" id="term" name="term" onclick="showModal()">
                <label class="form-check-label optima_std text-white term_label ml-2" id="term_modal">
                    Saya telah membaca dan menyetujui syarat dan ketentuan yang berlaku.
                </label>
            </div>
            <input type="hidden" name="recaptcha" id="recaptcha">
            <button class="btn my-btn futura_std_bold green bg-warning mt-2" disabled>
                <span id="send">
                    <i class="fas fa-paper-plane mr-1"></i>
                </span>
                <span class="spinner-border spinner-border-sm" id="spinner" role="status" aria-hidden="true">
                </span>
                Submit
            </button>
        </form>
    </div>
</div>
@endsection
