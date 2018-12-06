<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Surah lain</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @foreach ($all_surats as $surat)  
            <a class="dropdown-item" href="/surat/{{ $surat->nomor_surat }}">{{ $surat->nama_surat }}</a>
          @endforeach
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menuju ayat ke</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @for ($i = 0; $i <= $surat->jumlah_ayat; $i++)
            <a class="dropdown-item" href="#{{ $i + 1 }}">Ayat {{ $i + 1 }}</a>
          @endfor
        </div>
      </li>

      <li>
        <a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book-open" ></i> Read Mode</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="cari surah, ayat, arti..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">cari</button>
    </form>
  </div>
</nav>