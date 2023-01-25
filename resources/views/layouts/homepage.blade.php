@extends('layouts.master')

@section('homepage')


    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
          <div class="col-lg-6 p-0" data-wow-delay="0.1s">
            <div
              class="header-bg h-100 d-flex flex-column justify-content-center align-items-center p-5"
              style="background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)),
                url('https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297__480.jpg')
                center center no-repeat;
                background-size: cover;"
            >
              <h1 class="display-4 text-light mb-5">
                <span class="text-monospace">Komodo</span> <br>Dragon
              </h1>
              <div class="d-flex d-flex justify-content-center align-items-center pt-4">

                <a href="https://www.youtube.com/watch?v=jiXk21Oh9f4"
                  ><i class="fa fa-play center" style="font-size:48px;color:red"></i>
                  </a

                >
              </div>


            </div>
          </div>
          <div class="col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="" data-slide-to="0" class="active"></li>
                    <li data-target="" data-slide-to="1"></li>
                    <li data-target="" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                            <img class="d-block w-100 h-200 image1"
                                src="https://i.pinimg.com/564x/07/75/e7/0775e73e023c40d84bbf30f481bfa14b.jpg" alt="First slide"
                                style="height:500px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                            <img class="d-block w-100 image1"
                                src="https://st2.depositphotos.com/1025317/10783/i/600/depositphotos_107838174-stock-photo-attack-of-a-komodo-dragon.jpg" alt="First slide"
                                style="height:500px;">
                            </div>
                    </div>
                    <div class="carousel-item">
                        <div class="pickgradient w-100" style="height:80vh; overflow: hidden;">
                            <img class="d-block w-100 image1"
                                src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1603952153/j35afqsolhzt7wakdhik.jpg" alt="First slide">
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
          </div>
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
              <p class="mb-4" style="text-align: justify;">
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
                <img class="img-thumbnail rounded-circle" src="https://i.pinimg.com/564x/70/cf/97/70cf975db4b639d867d476e876cb08ca.jpg" alt="" />
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
            <div class="col-lg-4 col-md-6">
              <div class="row g-4">
                <div class="col-12">
                    <a
                      class="animal-item"
                      href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Komodo_dragon_%28Varanus_komodoensis%29.jpg/2560px-Komodo_dragon_%28Varanus_komodoensis%29.jpg"
                      data-lightbox="animal"
                    >
                    <div class="position-relative">
                      <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Komodo_dragon_%28Varanus_komodoensis%29.jpg/2560px-Komodo_dragon_%28Varanus_komodoensis%29.jpg"
                      alt="" /> </div>
                   </a>
                  </div>
                <div class="col-12">
                  <a
                    class="animal-item"
                    href="https://www.trailsofindochina.com/wp-content/uploads/2018/04/Komodo_Gallery3-720x347.jpg"
                    data-lightbox="animal"
                  >
                    <div class="position-relative">
                      <img class="img-fluid" src="https://www.trailsofindochina.com/wp-content/uploads/2018/04/Komodo_Gallery3-720x347.jpg" alt="" />
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
<br>
<br>
      </div>

      <br>
      <div class="container" data-aos="fade-up">
        <div class="col-lg-6">
            <p><span class="text-success me-2">#</span>Goals</p>
            <h1 class="display-5 mb-0">
              Our<span class="text-success"> Goals</span>
            </h1>
          </div>
          <br>
        <div class="row">
          <div class="col-md-6 col-lg-3 text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <i class="bi bi-droplet fa-3x"></i>
                  <h5 class="card-title">Clean Water</h5>
                  <p class="card-text">Ad libitum access to clean water is essential to maintain feed intake. </p>
                </div>
              </div>
          </div>


          <div class="col-md-6 col-lg-3 text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <i class="fa fa-leaf fa-3x"></i>
                  <h5 class="card-title">Clean Air</h5>
                  <p class="card-text">The effects of air quality on animals principally can be divided in health damage.</p>
                </div>
              </div>
          </div>


          <div class="col-md-6 col-lg-3 text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <i class='fas fa-drumstick-bite fa-3x'></i>
                  <h5 class="card-title">Healty Feed</h5>
                  <p class="card-text">The basic nutrients that animals require for maintenance, growth, reproduction, and good health.</p>
                </div>
              </div>
          </div>

          <div class="col-md-6 col-lg-3 text-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <i class="fa fa-heart fa-3x"></i>
                  <h5 class="card-title">Regular Health Check</h5>
                  <p class="card-text">Regular health check for treating any possible illnesses, both immediately and in the future.</p>
                </div>
              </div>
          </div>
        </div>
      </div>

      <br><br><br><br><br>
      <hr style="width:30%;text-align:left;margin-left:0; color:green">
      <br>
      <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6">
                <div class="img-border">
                    <img class="img-thumbnail rounded-9" src="https://arc-anglerfish-arc2-prod-pmn.s3.amazonaws.com/public/D2LTRFIHZZEXTAJ55QIZBWGJEU.jpg" alt="" />
                </div>

            </div>
            <div class="col-lg-6">
                <h1 class="display-5 mb-4">
                    Donation Collected <br>
                    <span class="text-success">This Month</span>!
                  </h1>
                  <br><br><br><br>
                  <h5 class="mb-3">
                    <span class="text-success">50M</span>  Out of 100M
                  </h5>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
          </div>
        </div>
      </div>

@endsection
