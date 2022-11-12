
@extends('layouts.app')

@section('hero')
        <!-- hero sec start -->
        <section class="hero-sec login"  style="background-image: url({{asset('public/assets/images/banner/group.png')}});">
           <div class="hero-slider-wrap">
              <div class="hero-slider-item overflow-hidden">
                 <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h2>Profile</h2>
                        </div>

                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- hero sec start -->
@endsection


@section('content')

<section class="profile-section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                       <p> Name : {{ Auth::user()->name }}</p><hr>
                       <p> Email : {{ Auth::user()->email }}</p><hr>                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
