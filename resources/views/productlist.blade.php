@extends('layout')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" class="img-fluid" src="img/agri2.jpg" alt="Image">
                <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px;">
                       
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" class="img-fluid" src="img/agripic1.jpg" alt="Image">
                <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px;">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<marquee direction="left" style="padding:30px;color:orange;font-size:25px;">Nurturing the land, reaping the harvest – Farmers, the backbone of our nation's sustenance.</marquee>


<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
           
            <h1 class="mb-5"> Our Products</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img\agri4.jpg" alt="image">
                    </div>
                    <h4 class="mb-3">Seeds</h4>
                    <p style="text-align: center"><a href="seeds" class="card-link btn btn-warning">Explore more items</a></p>
                     <!--button>Explore more items</button-->
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img\agri3.jpg"  alt="image">
                    </div>
                    <h4 class="mb-3">Fertilizers And Pesticides</h4>
                    <p style="text-align: center"><a href="pasticides" class="card-link btn btn-warning">Explore more items</a></p>
                    <!--button>Explore more items</button-->
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/agri5.jpg" alt="image">
                    </div>
                    <h4 class="mb-3">Farming Tools</h4>
                    <p style="text-align: center"><a href="tools" class="card-link btn btn-warning">Explore more items</a></p>
                    <!--button>Explore more items</button-->
                </div>
            </div>

             <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-5">About Our Services</h1>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Low Cost</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                        <p style="text-align: center"><a href="" class="card-link btn btn-warning">Experienced Working Team</a></p>

                            <!--h5 class="mb-3">Experienced Working Team</h5-->
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Modern Equipment</h5>
                            <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         

@endsection