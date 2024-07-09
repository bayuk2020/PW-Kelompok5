
@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="/css/about-me.css">
@endsection

@section('container')


    {{-- <h1 class="mt-5 pt-5">Halaman About</h1> --}}

    {{-- <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>

    <img src="img/{{ $image }}" alt="Bayu Kristianto" width="200px" class="img-thumbnail rounded-circle"> --}}
    
    <div class="row d-flex justify-content-center mt-5 pt-5">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
              <div class="text-center">
                <img src="img/me3.jpg" width="200" class="rounded-circle">
              </div>
              
              <div class="text-center mt-3">
                
                <span class="bg-secondary p-1 px-4 rounded text-white">About Me</span>
                    <h5 class="mt-2 mb-0">Bayu Kristianto</h5>
                    <span>Blogger</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">saya seorang blogger yang berkomitmen untuk berbagi pemahaman dan inspirasi dalam agama Islam melalui tulisan-tulisan yang saya bagikan. Mari kita bersama-sama mengeksplorasi keindahan dan kebijaksanaan Islam untuk menjadikan hidup kita lebih bermakna dan berkah.</p>
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    
                    <div class="buttons mb-3">
                        
                        <button class="btn btn-outline-primary px-4">Message</button>
                        <button class="btn btn-primary px-4 ms-3">Contact</button>
                    </div>
                    <a href="index.html">Back</a>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>

    @endsection