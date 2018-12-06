@extends('layouts.master')

@section('title')
  <title>Mode Hafalan</title>
@endsection

@section('content')
    <div class="row no-gutters body-ayats-container">
      <div class="body-ayats">
        @foreach ($next_hafalan as $ayat)
            
        <div id="{{ $ayat->nomor_ayat }}" class="single-ayat-hafalan">
          <div class="single-ayat-kiri">
            <div class="ayat-nomor-surat">
                {{ $ayat->nomor_ayat }}
            </div>
            {{-- <div class="ayat-putar-suara">
              <button class="ayat-suara-button"></button>
            </div> --}}
          </div>
          <div class="single-ayat-kanan">
            <div class="ayat-teks-arab">
                {{ $ayat->teks_arab }}
            </div>
            {{-- <div class="ayat-terjemahan">
              {{ $ayat->terjemahan_idn }}
            </div> --}}
          </div>
        </div>
          <?php $nomor_ayat = $ayat->id ?>
        @endforeach

        <div class="save-hafalan">
          <form action="/hafalan/simpan" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="ayat_id" value="{{ $nomor_ayat }}">
            <button type="submit" class="btn btn-save-hafalan">Terhafal, Simpan!</button>
          </form>
        </div>

      </div>

    </div>
    

  <script>
    var musik = new Audio();
      
    musik.src = "{{ URL::asset('mp3/1.mp3') }}";
    musik.loop = true;
    // musik.play(); 
    
    function mulaiAudio(){
      var play = document.querySelector(".ayat-suara-button");

      play.addEventListener('click', fplay);

      function fplay() {
        if(musik.paused){
          musik.play();
          play.style.background = "url('../img/pause.svg')";
        }
        else {
          musik.pause();
          play.style.background = "url('../img/play.svg')";
        }
      }
    }

    window.addEventListener('load', mulaiAudio);
  </script>
@endsection