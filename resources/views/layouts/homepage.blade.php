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
                        src="https://st2.depositphotos.com/1025317/10783/i/600/depositphotos_107838174-stock-photo-attack-of-a-komodo-dragon.jpg" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                    <img class="d-block w-100 image1"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREVUPMEiejA6-FNr3px2QfDLhMYL8iLzzwlA&usqp=CAU" alt="First slide">
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
    <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6">
              <h1 class="display-5 mb-4">
                Know More About
                <span class="text-success">Komodo</span>!
              </h1>
              <p class="mb-4">
                Komodo dragons, or Komodo monitors, are the largest, heaviest lizards in the world —
                and one of the few with a venomous bite. These stealthy, powerful hunters rely on their
                sense of smell to detect food, using their long, forked tongues to sample the air. They
                can spend hours waiting for a sizable meal to wander within range before launching a deadly
                attack with their large, curved and serrated teeth.
              </p>
              <h5 class="mb-3">
                <i class="far fa-check-circle text-success me-3"></i>Komodo dragons are venomous
              </h5>
              <h5 class="mb-3">
                <i class="far fa-check-circle text-success me-3"></i>Have an excellent sense of smell
              </h5>
              <h5 class="mb-3">
                <i class="far fa-check-circle text-success me-3"></i>Carnivores
              </h5>
              <h5 class="mb-3">
                <i class="far fa-check-circle text-success me-3"></i>A vulnerable species
              </h5>
            </div>
            <div class="col-lg-6">
              <div class="img-border">
                <img class="img-thumbnail" src="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="container-xxl bg-success facts my-5 py-5 "
    style="background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)),
    url('https://balidiscovery.com/wp-content/uploads/2022/04/komodo5.jpg')
    center center no-repeat;
     background-size: cover;">
      <div class="container py-5">
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 text-center">

            <i class='fas fa-weight fa-3x' style="color:white"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">155 - 300</h1>
            <p class="text-white mb-0">Weight (Pounds)</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center "
          >
            <i class="fa fa-paw fa-3x" style="color:white"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">1,400</h1>
            <p class="text-white mb-0">Populations</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center"
            data-wow-delay="0.5s"
          >
            <i class="fas fa-ruler fa-3x" style="color:white"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up"> 6  - 10</h1>
            <p class="text-white mb-0">Length (feet)</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center"
          >
            <i class="fa fa-shield-alt fa-3x" style="color:white"></i>
            <h1 class="text-white mb-2" data-toggle="counter-up">30</h1>
            <p class="text-white mb-0">Lifespan (Years)</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
          <div
            class="row g-5 mb-5 align-items-end">
            <div class="col-lg-6">
              <p><span class="text-success me-2">#</span>Gallery</p>
              <h1 class="display-5 mb-0">
                Photos Of <span class="text-success">Komodo</span>
              </h1>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-lg-4 col-md-6">
              <div class="row g-4">
                <div class="col-12">
                  <a href="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg">
                    <div class="position-relative">
                      <img class="img-fluid" src="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg" alt="" />
                    </div>
                  </a>
                </div>

                <div class="col-12">
                    <a
                      href="https://media.istockphoto.com/id/522868190/photo/hello-from-the-dragon.jpg?s=612x612&w=0&k=20&c=Ss0ILw9nVfOfVJimbqeT3XrDnKWGbpSffht09CQDFhw="
                    >
                      <div class="position-relative">
                        <img class="img-fluid" src="https://media.istockphoto.com/id/522868190/photo/hello-from-the-dragon.jpg?s=612x612&w=0&k=20&c=Ss0ILw9nVfOfVJimbqeT3XrDnKWGbpSffht09CQDFhw=" alt="" />
                      </div>
                    </a>
                  </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="row g-4">
                <div class="col-12">
                  <a
                    href="https://hello-indo.com/wp-content/uploads/2020/05/Komodo-Dragon.jpg"
                  >
                    <div class="position-relative">
                      <img class="img-fluid" src="https://hello-indo.com/wp-content/uploads/2020/05/Komodo-Dragon.jpg" alt="" />
                    </div>
                  </a>
                </div>

                <div class="col-12">
                    <a href="https://media.istockphoto.com/id/676518196/photo/komodo-dragon-is-on-the-ground.jpg
                    ?s=612x612&w=0&k=20&c=hZx-vPedfdF0ynrQqpGA8Ds8_RfKn_gHNjkxpaDN6so=">

                      <div class="position-relative">
                        <img class="img-fluid"
                        src="https://media.istockphoto.com/id/676518196/photo/komodo-dragon-is-on-the-ground.jpg
                        ?s=612x612&w=0&k=20&c=hZx-vPedfdF0ynrQqpGA8Ds8_RfKn_gHNjkxpaDN6so=" alt="" />

                      </div>
                    </a>
                  </div>

              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
              <div class="row g-4">
                <div class="col-12">
                  <a
                    class="animal-item"
                    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58OcgrpX1mlLB3lP9LtqwOf1qYyr7DfzKDA&usqp=CAUimg/animal-md-3.jpg"
                    data-lightbox="animal"
                  >
                    <div class="position-relative">
                      <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ58OcgrpX1mlLB3lP9LtqwOf1qYyr7DfzKDA&usqp=CAUimg/animal-md-3.jpg" alt="" />
                    </div>
                  </a>
                </div>
                <div class="col-12">
                  <a
                    class="animal-item"
                    href="https://justkardoman.files.wordpress.com/2012/03/komodo.jpg?w=848"
                    data-lightbox="animal"
                  >
                  <div class="position-relative">
                    <img class="img-fluid" src="https://justkardoman.files.wordpress.com/2012/03/komodo.jpg?w=848" alt="" />
                  </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
