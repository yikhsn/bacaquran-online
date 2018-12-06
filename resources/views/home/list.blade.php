@extends('layouts.master')

@section('description')
  <meta name="description" content="Daftar Semua Surat Al-Qur'an Lengkap 30 Juz">    
@endsection

@section('title')
    <title>Daftar Semua Surat - Baca Qur'an Online Lengkap dan Artinya</title>
@endsection

@section('content')
  <div class="search">
    <div class="search--box">
      <div class="search--box__logo">
          <h1><img class="logo-quran" src="{{ asset('assets/img/logo-white.png') }}" alt="Daftar Semua Surat Al-Qur'an Lengkap 30 Juz"></h1>
      </div>
      <form class="search-form" action="/surat" method="POST">
        {{ csrf_field() }}

        <input class="search--box__input" name="query" type="text" placeholder="Cari berdasarkan nama atau arti surat..." autocomplete="off">
        <button type="submit" class="search--box__button">
          Cari
        </button>
      </form>
    </div>
  </div>

  <div class="surats">
    <div class="surats--title">
      <h2>Daftar Surat Al-Qur'an</h2>
    </div>
    
    <ul class="row no-gutters surats--box">
      @foreach ($surats as $surat)
        <a href="/surat/{{ $surat->nomor_surat }}" class="col-md-6 col-12 surats--box__single">
          <li class="row surat">
            <div class="col-1 surat--nomor">
              {{ $surat->nomor_surat }}
            </div>
            <div class="col-5">
              <h3 class="surat--nama">{{ $surat->nama_surat }}</h3>
              <h4 class="surat--nama-arti">{{ $surat->arti_nama }}</h4>
            </div>
            <div class="col-5">
              <div class="surat--nama-arab">{{ $surat->nama_surat_arab }}</div>
            </div>
          </li>
        </a>
      @endforeach
    </ul>

  </div>
@endsection