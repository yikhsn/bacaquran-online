@extends('layouts.master')

@section('description')
    <meta name="description" content="Baca Qur'an Online Lengkap 30 Juz Beserta Artinya">
@endsection

@section('title')
    <title>Baca Qur'an Online Lengkap 30 Juz Beserta Artinya</title>
@endsection

@section('content')
    <header>
        <div class="header-box">
            <div class="header-box__logo">
                <h1><img src="assets/img/logo.png" alt="Baca Qur'an Online Lengkap 30 Juz Beserta Artinya" class="logo"></h1>
            </div>

            <div class="header-box__button">
                <a href="/surat" class="button button-animated button-animated-left header-button__read">
                    Baca Qur'an
                </a>
                <a href="/surat" class="button button-animated button-animated-right header-button__read">
                    Cari Surat
                </a>
                
                {{-- @if ( ! Auth::check() ) --}}
                    {{-- <a href="/hafalan" class="button button-animated button-animated-left header-button__read">
                        Mode Hafalan
                    </a> --}}
                {{-- @endif --}}
            </div>
        </div>
    </header>
@endsection