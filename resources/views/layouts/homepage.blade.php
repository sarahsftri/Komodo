@extends('layouts.master')

@section('homepage')

    {{-- SLIDER --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="" data-slide-to="0" class="active"></li>
            <li data-target="" data-slide-to="1"></li>
            <li data-target="" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="https://i.pinimg.com/564x/07/75/e7/0775e73e023c40d84bbf30f481bfa14b.jpg" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="{{ url('images\komodo_slide_2.jpg') }}" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="{{ url('images\komodo_slide_4.jpg') }}" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3 d-flex justify-content-center">
                <div class="card border-0" style="margin: 30px">
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="" src="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">What is Komodo Dragon?</h4>
                            <p class="card-text">Komodo dragons, or Komodo monitors, are the largest, heaviest lizards in
                                the world — and one of the few with a venomous bite. These stealthy, powerful hunters rely
                                on their sense of smell to detect food, using their long, forked tongues to sample the air.
                                They can spend hours waiting for a sizable meal to wander within range before launching a
                                deadly attack with their large, curved and serrated teeth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
