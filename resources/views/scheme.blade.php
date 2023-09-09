@extends('layout')
@section('content')
<!doctype html>
<html>
    <head>
        <title>myScheme</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <style type="text/css">
        .img_deg{
            float:left;
            width:30%;
            

        }
        .back_col{
           background-color:#009933;
           margin-bottom: 30px;
        }
        .text_align{
            text-align:justify;
            color:white;
            margin-right:20px;
        }
        .search{
            width:50%;
            border:3px solid #009933;
            padding:8px;
            border-radius: 30px;
            margin: 0 0 30px 30px;
        }
        input{
            background: transparent;
            border:0px;
            outline:0px;
            width:600px;
        }
        .icon-search{
            color:#009933;
            font-size:20px;
        }
        #container{
            display:flex;
            background-color: white;/*bisque;*/
            align-content:center;
            justify-content: center;
        }
        #container .div-color{
            background-color: chartreuse;
            align-items: center;
            margin:20px;
            width:100%;
            padding:10px;
        }
        
.layout {
  width: 600px;
  margin: auto;
}
.accordion {
  padding: 10px;
  margin-top: 10px;
  margin-bottom: 10px;
  background: rgb(105, 206, 105);
  border-radius: 10px;
}
.accordion__question p {
  margin: 5px;
  padding: 0;
  font-family: Verdana;
  font-size: 20px;
}
.accordion__answer p {
  margin: 5px;
  padding: 10px;
  font-size: large;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  color: rgb(255, 255, 255);
  background: rgb(82, 170, 122);
  border-radius: 10px;
}
.accordion:hover {
  cursor: pointer;
}
.accordion__answer {
  display: none;
}
.accordion.active .accordion__answer {
  display: block;
}
.easy-apply-div{
    width:100%;
    height:auto;
    background:#007bbf;
    display:flex;
    flex-direction:row;
    justiify-content:space-around;
}
.box{
    width:30%;
    height:300px;
    background:white;
    margin:20px;
    box-sizing: border-box;
    font-size: 50px;
}
.arrow{
    width:8%;
    height:60px;
    background:#007bbf;
    box-sizing: border-box;
    font-size: 50px;
    margin-top:175px;

}
.easy-apply-div .box img{
    height:200px;
    width:100%;
}
i{
    margin-top:10px;
    margin-bottom:10px;
    color:orange;
    
}
.size{
    font-size:100px;
    margin-left:120px;
}
h4{
    justify-content: center;
    color:green;
    margin-left:90px;
    margin-top:20px;
}
.basic-details{
    justify-content: center;
    font-size:20px;
    margin-left:70px;
    margin-top:10px;
}
        </style>
    </head>
    <body>
        <br>
        <marquee text-align:center direction="right" height=30% width="100%" scrolldelay="200" bgcolor="white" behavior="scroll" >
            <h5 style="color:red";>दो गज की दूरी मास्क है जरूरी | कोरोना के कहर से बचें, घर में सुरक्षित रहें | कोरोना हारेगा, भारत जीतेगा |</h5>
        </marquee>    
        
        <marquee text-align:center direction="left" height=30% width="100%" scrolldelay="200" bgcolor="orange" behavior="scroll" >
            <li><a href="{{url('schemeRegister')}}" style="color:white";> <b>This is new  scheme This is new scheme This is new scheme This is new scheme</b></a></li>
        </marquee>    
        <marquee text-align:center direction="right" height=30% width="100%" scrolldelay="200" bgcolor="green" behavior="scroll" >
            <li><a href="{{url('schemeRegister')}}" style="color:white";> <b>This is new  scheme This is new scheme This is new scheme This is new scheme</b></a></li>
        </marquee>

            <!-- Carousel Start -->
 <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" style="height:400px;" src="img/scheme_images/indiafull.png" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/tractor.svg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/pm-full.png" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/3-full.png" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/maxresdefault.jpg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/Hemant-Soren-.webp" alt="Image">
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
<center><h2 style="color:orange;"><u>About</u></h2></center><br>
<div class="back_col">
    <img class="img_deg" src="img/scheme_images/about-text.svg">
    <br>
    
    <div class="text_align" style="margin-left:30px;">
    <p>myScheme is a National Platform that aims to offer one-stop search and discovery of the Government schemes.</p>
    <p>It provides an innovative, technology-based solution to discover scheme information based upon the eligibility of the citizen.</p>
    <p>The platform helps the citizen to find the right Government schemes for them. It also guides on how to apply for different Government schemes. Thus no need to visit multiple Government websites.</p>
    <p>myScheme platform is Developed, Managed, and Operated by National e-Governance Division (NeGD), with the Support of Ministry of Electronics and Information Technology (MeitY), Department of Administrative Reforms and Public Grievance (DARPG) and in partnership with other Central and State Ministries/Departments.</p>
    <br>
</div>
</div>
<div>
    <br><br>
    <center><h2 style="color:orange;"><u>Schemes</u></h2></center><br>
    <div><a href="{{ url('viewAllScheme') }}" class="btn btn-primary" style="float:right; margin-right:50px;">View All Scheme</a></div> 
   
    <!--search bar start-->
    <center>
    <div class="search">
        <input type="search" placeholder="Enter scheme name to search">
        <a href="#"><i class="fa-sharp fa-solid fa-magnifying-glass icon-search"></i></a><br>
    </div>
    
</center>
    <!--search bar end-->
   
     
    <ul>
        <center>
           <marquee text-align:center direction="up" height=30% width="60%" scrolldelay="300" bgcolor="green" behavior="scroll" >
           <center> 
                @foreach ($scheme as $item)    
                      <li><a href="{{url('schemeDescription')}}" style="color:white";> <b>{{$item->scheme_name}}</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$item->scheme_start_date}}&nbsp;&nbsp; to&nbsp;&nbsp; {{$item->scheme_end_date}}</li> 
                @endforeach
            </center>
            </marquee>
        </center>
</div>    
    </ul>
    <div class="mb-20 flex flex-col items-center justify-start w-full">
    <p class="text-xl text-darkIndigo-300 text-center mb-2">How it works</p>
    <h2 class="text-3xl sm:text-4xl text-center px-8 font-extrabold leading-snug" style="color:orange">Easy steps to apply</h2>
    <h2 class="text-3xl sm:text-4xl text-center px-8 font-extrabold leading-snug" style="color:orange">for Government Schemes</h2>
    </div>
    <!--easy steps to apply start-->
    <div class="easy-apply-div" style="width:100%">
        <div class="box"><i class="fa-solid fa-pen-to-square size"></i>
            <h4>Enter Details</h4>
            <p class="basic-details">Start by entering <b>Basic Details</b></p>
        </div>
        <div class="arrow">&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long fa-beat"></i></div>
        <div class="box"><i class="fa-solid fa-pen-to-square size"></i>
            <h4>&nbsp;&nbsp;&nbsp;&nbsp;Search</h4>
            <p class="basic-details">Our search engine will <b>find the relevant schemes!</b></p></div>
        <div class="arrow">&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long fa-beat"></i></div>
        <div class="box"><i class="fa-solid fa-pen-to-square size"></i>
            <h4>Select & Apply</h4>
            <p class="basic-details"><b>Select and apply</b> for the &nbsp; best  suited scheme</p></div></div>
    </div>
    <!--easy steps to apply end-->
    <!--gallary start-->
    <br><center><h2 style="color:orange;"><u>Gallary</u></h2></center><br>
    <div id="container">
        <div class="div-color">
            <!-- Carousel Start -->
 <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" style="height:400px;" src="img/scheme_images/gallary2.webp" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/gallary3.avif" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/gallary1.jpg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/gallary4.jpeg" alt="Image">
            </div>
            <div class="carousel-item">
                <img class="w-100" style="height:400px;" src="img/scheme_images/gallary5.cms" alt="Image">
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
        </div>
        <div class="div-color">
            <!-- Carousel Start -->
 <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <iframe width="610" height="400" src="https://www.youtube.com/embed/3ts1Ortas98" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
                <iframe width="610" height="400" src="https://www.youtube.com/embed/2mygbPUV5Pw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
                <iframe width="610" height="400" src="https://www.youtube.com/embed/TjDfFLMb3HQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="carousel-item">
                <iframe width="610px" height="400px" src="https://www.youtube.com/embed/lXoGvt5bakY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>
            <div class="carousel-item">
                 <iframe width="610" height="400" src="https://www.youtube.com/embed/w2rbiA7yPoI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        </div>
    </div>
     
    <!--gallary end-->

    <center><h2 style="color:orange;"><u>FAQ</u></h2></center><br>
<div class="back_col">
    <img class="img_deg" src="img/scheme_images/questions.svg">
    <br>
    <div class="text_align" style="margin-left:30px;">
    <!--faq start-->

    <!--<h2 style="color:green; text-align:center">
        GeeksforGeeks
      </h2>-->
      <div class="layout">
        <div class="accordion">
          <div class="accordion__question">
            <p>What is Myscheme?</p>
      
          </div>
          <div class="accordion__answer">
            <p>myScheme is an e-Marketplace for Govt. schemes and services. Using myScheme you can find various government schemes, check your eligibility, and apply for the schemes.</p>
          </div>
        </div>
      
        <div class="accordion">
          <div class="accordion__question">
            <p>How myScheme will help common citizens?</p>
          </div>
      
          <div class="accordion__answer">
            <p>
                myScheme will reduce the time and effort of citizens in searching for appropriate government schemes.The easy user interface of myScheme helps common people a lot in discovering and applying for schemes.
            </p>
          </div>
        </div>

        <div class="accordion">
            <div class="accordion__question">
              <p>Can I apply for the schemes through myScheme?</p>
            </div>
        
            <div class="accordion__answer">
              <p>
                For now, the platform shall direct you to the application page of the scheme of your choice.It is envisaged that in the upcoming phases, myScheme shall have the feature to apply for schemes / services from within the platform/ app.
              </p>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion__question">
              <p>How does myScheme work? How do I check for my eligibility through myScheme ?</p>
            </div>
        
            <div class="accordion__answer">
              <p>
                myScheme offers a convenient three - step process for the citizens to discover the government schemes for which they are eligible: Step 1 - The user enters his / her attributes such as demographic, income, social details, etc.Step 2 - The myScheme findsthe relevant schemes from hundreds of schemes for the user.Step 3 - The user can select from the list of eligible schemes and get more information from the dedicated scheme page with detailed knowledge, FAQs, and application process and traverse to the application URL to apply.
              </p>
            </div>
          </div>
          <div class="accordion">
            <div class="accordion__question">
              <p>What all information about a particular scheme can I find on myScheme ?</p>
            </div>
        
            <div class="accordion__answer">
              <p>
                myScheme provides details on the eligibility criteria, application process, and benefits being offered under that scheme. myScheme also answers the Frequently Asked Questions(FAQs) about the scheme.
              </p>
            </div>
          </div>
          <!--view all start-->
          <br>
          <a class="undefined  block   normal-case " href="/faqs">
             <button aria-label="Green Button" class=" flex items-center  px-5 py-2.5 text-base  rounded-md   undefined undefined border border-solid !bg-transparent text-secondary hover:text-primary border-primary hover:border-primary  green   transition ease-in-out font-medium leading-none mt-6 
            undefined " title="">View More
                 <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="ml-2 inline-block   w-6 h-6 " height="3em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                 </svg>
              </button>
           </a>
          <!--view all end-->
      </div>
    <!--faq end-->
    <br>
</div>
</div>
<!--FAQ js start-->
<script>
    
let answers = document.querySelectorAll(".accordion");
answers.forEach((event) => {
  event.addEventListener("click", () => {
    if (event.classList.contains("active")) {
      event.classList.remove("active");
    } else {
      event.classList.add("active");
    }
  });
});

</script>
<!--FAQ js end-->
    </body>
</html>

@endsection