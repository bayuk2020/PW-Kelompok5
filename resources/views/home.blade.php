
@extends('layouts.main')

@section('style')
  <link href="css/carousel.css" rel="stylesheet">
@endsection

@section('container')


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner-food1.png" alt="" style="filter: brightness(50%)">

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Mengungkap Kekayaan Rasa Kuliner Nusantara</h1>
          <p>adalah upaya kami untuk menyajikan kelezatan autentik Indonesia, menghadirkan resep tradisional, sejarah, dan cerita budaya di balik setiap hidangan, dari Sabang sampai Merauke, dalam satu platform kuliner yang menyeluruh</p>
          
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner-food2.png" alt=""  style="filter: brightness(50%)">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Nikmati Kelezatan Tradisi Kuliner Indonesia</h1>
          <p>"mengajak Anda menjelajahi ragam hidangan otentik dari berbagai daerah, menelusuri resep turun-temurun dan merasakan kekayaan budaya yang terwujud dalam setiap rasa, di satu platform kuliner yang penuh inspirasi</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner-food3.png" alt=""  style="filter: brightness(50%)">
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Dari Dapur Nusantara ke Meja Anda</h1>
          <p>membawa cita rasa autentik Indonesia langsung ke rumah Anda, dengan resep tradisional, tips memasak, dan kisah budaya di balik setiap hidangan, menghadirkan kekayaan kuliner nusantara dalam setiap sajian..</p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<main class="container">

  

<div class="row mb-2">
    @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col-md-8 p-4 d-flex flex-column position-static">
                <h3 class="mb-0">{{ $post->title }}</h3>
                <div class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</div>
                <p class="card-text mb-auto">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-md-4 d-none d-lg-block">
                {{-- <img src="img/image2.jpg" alt="" width="200" height="250"> --}}
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"  width="auto" height="250">
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
            </div>
            </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">Keutamaan Malam Lailatul Qadar: Momen Paling Berharga di Bulan Ramadan</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">Malam Lailatul Qadar adalah salah satu malam yang paling istimewa dan berharga dalam...</p>
                <a href="blog3.html" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="img/image3.jpg" alt="" width="200" height="250" >
            </div>
            </div>
        </div> --}}
        @endforeach
</div>

<div class="row">
  @foreach ( $categories as $category )
  {{-- @dd($category) --}}
  <div class="col-md-3 pt-4">
    <a href="/posts?category={{ $category->slug }}">
      <div class="card bg-dark text-white">
        <img src="{{ asset('storage/' . $category->image) }}" class="card-img" alt="..." height="300" width="200">
        <div class="card-img-overlay d-flex align-items-center p-0">
          <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>


@endsection
