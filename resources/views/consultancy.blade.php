@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
</head>
<body>

 <!-- Carousel Start -->
 <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/big-data-in-farming.jpg" alt="Image">
                <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px;">
                       
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/farmer.jpg" alt="Image">
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

<h4 style="color:grey;text-align:center; margin:50px;"><strong>Agricultural Consulting Services, Inc. (ACS) collects data and consults with farmers to help them grow better crops and navigate complex and changing environmental regulations.
    We help farmers optimize soil fertility, identify and control pests, and manage the land to minimize erosion and nutrient losses. ACS believes in farming, science-based decision making, 
    and that each of us makes a difference for farmers today and for future generations.</strong></h4>
    
 
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Our Services</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/agri.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Agri Consulting Services</h4>
                        <p>Excepturi cupiditate vero, officia, quam autem assumenda facilis expedita fugit suscipit minus tenetur nesciunt quasi ipsam? Veniam. </p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/dairy-farm.jpg"  alt="">
                        </div>
                        <h4 class="mb-3">Dairy Farm Consulting</h4>
                        <p> voluptates quod consequatur, odit sint perferendis adipisci quae velit, commodi excepturi? Sapiente exercitationem distinctio .</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/fish.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Fish Farm Consulting</h4>
                        <p>  in dignissimos! Cupiditate alias quasi suscipit quos.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/agricultureofficer.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Organic Farm Consulting</h4>
                        <p>facilis molestias ullam voluptatibus quod! Quis consequuntur dolorum quos explicabo fugiat, esse odit quas mollitia sunt.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/manure.jpg"  alt="">
                        </div>
                        <h4 class="mb-3">Manure And Pesticides consulting</h4>
                        <p> Exercitationem velit ducimus sapiente hic officiis natus maxime sint in, possimus necessitatibus eos. Magni totam esse a?.</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>     
                            
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/soil.jpg" alt="">
                        </div>
                        <h4 class="mb-3">Soil Production Consultings</h4>
                        <p> Id ratione, quo nulla consectetur odit qui vitae similique animi repellat quos magni saepe ut, delectus numquam!</p>
                        <a class="btn-slide mt-2" href=""><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
    
    <!-- Service End -->
       <center> <a href="{{url('form')}}"><button  style="width:300px; height:50px; background-color:#90EE90;">Book For Consultancy</button></a></center>
 
     

  <!-- Testimonial Start -->
  <div class="container-fluid bg-testimonial py-5 my-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                    <h1 class="mb-5">Our Clients Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel p-5">
<div class="testimonial-item text-center text-white">
  
                        <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Raju Upadhyay</h4>
                    </div> 
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Joginder saw</h4>
                    </div>  
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Pankaj Kumar</h4>
                    </div> 
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Niraj Kumar</h4>
                    </div>                    
                    <div class="testimonial-item text-center text-white">
                        <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="img/testimonial-2.jpg" alt="">
                        <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="mx-auto w-25">
                        <h4 class="text-white mb-0">Mohan Ram</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


     
</body>
</html>


@endsection