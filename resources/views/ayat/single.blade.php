@extends('layouts.master')

@section('description')
	<meta name="description" content="Baca Qur'an {{ $ayat->surat->nama_surat }} Ayat {{ $ayat->nomor_ayat }} online lengkap dengan artinya">
@endsection

@section('title')
	<title>{{ $ayat->surat->nama_surat }} Ayat {{ $ayat->nomor_ayat }} - Baca Qur'an Online Lengkap dan Artinya </title>		
@endsection

@section('content')
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" id="suratDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pindah ke Surat
							<span class="caret"></span>
						</a>
						<div class="dropdown-menu scrollable-menu" aria-labelledby="suratDropdown" role="menu">
								@foreach ($all_surats as $surat_current)              
									<a class="dropdown-item" href="/surat/{{ $surat_current->nomor_surat }}">{{ $surat_current->nama_surat }}</a>
								@endforeach
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="" id="ayatDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pindah ke Ayat<span class="caret"></span>
						</a>
						<div class="dropdown-menu scrollable-menu" aria-labelledby="ayatDropdown" role="menu">
								@foreach ($surat->ayats as $ayat_menu)              
									<a class="dropdown-item" href="/surat/{{ $surat->nomor_surat }}/ayat/{{ $ayat_menu->nomor_ayat }}">{{ $ayat_menu->nomor_ayat }}</a>
								@endforeach
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<div class="row no-gutters body-ayats-container">
      <ul class="body-ayats">
            
        <li id="{{ $ayat->nomor_ayat }}" class="single-ayat">
          <div class="single-ayat-kiri">
            <div class="ayat-nomor-surat">
                {{ $ayat->nomor_ayat }}
            </div>
            {{-- <div class="ayat-putar-suara">
              <button class="ayat-suara-button"></button>
            </div> --}}
            <div class="ayat-share">
              <div class="ayat-share-twitter">
                  <a target="_blank" href="https://twitter.com/share?ref_src=surat/{{ $surat->nomor_surat }}" data-show-count="false"><img src="{{  URL::asset('assets/img/twitter.svg') }}" alt=""></a>
              </div>
              <div class="ayat-share-facebook">
                  <a target="_blank" href="http://www.facebook.com/sharer.php?u=surat/{{ $surat->nomor_surat }}"><img src="{{  URL::asset('assets/img/facebook.svg') }}" alt=""></a>

              </div>
            </div>
          </div>
          <div class="single-ayat-kanan">
            <div class="ayat-teks-arab">
                {{ $ayat->teks_arab }}
            </div>
            <div class="ayat-terjemahan">
              {{ $ayat->terjemahan_idn }}
            </div>
          </div>
        </li>


        <!-- <button type="button" class="btn btn-outline-light" margin="20"><i class="fa fa-arrow-left"></i> Surah Sebelumnya</button>
        <button type="button" class="btn btn-outline-light">Surah Berikutnya <i class="fa fa-arrow-right"></i></button> -->

        </ul>
    </div>

  {{-- keterangan ayat --}}

  <p>{{ $ayat->id }}</p>
  <p>{{ $ayat->nomor_surat }}</p>
  <p>{{ $ayat->nomor_ayat }}</p>
  <p>{{ $ayat->text_arab }}</p>
  <p>{{ $ayat->terjemahan_idn }}</p>

  <div class="body-ayats">
  
  {{-- keterangan surat dari ayat --}}
  <p>{{ $ayat->surat->nomor_surat }}</p>
  <p>{{ $ayat->surat->nama_surat }}</p>
  <p>{{ $ayat->surat->nama_surat_arab }}</p>
  <p>{{ $ayat->surat->arti_nama }}</p>
  <p>{{ $ayat->surat->jumlah_ayat }}</p>
  <p>{{ $ayat->surat->tempat_turun }}</p>
  <p>{{ $ayat->surat->urutan_pewahyuan }}</p>

  </div>  
@endsection