@extends('layout')
@section('content')
<html>
    <head>
<!-- Begin Page Content -->
<style>
    td{
        color:rgb(75, 64, 78);
    }
    th{
        color:blue;
        background-color: aquamarine;
    }
    /*FAQ CSS start*/
.layout {
  width: 600px;
  margin: auto;
}
.accordion {
  padding: 10px;
  margin-top: 10px;
  margin-bottom: 10px;
  background: rgb(139, 145, 139);
  border-radius: 10px;
}
.accordion__question p {
  margin: 5px;
  padding: 0;
  font-family: Verdana;
  font-size: 20px;
  color:white;
}
.accordion__answer p {
  margin: 5px;
  padding: 10px;
  font-size: large;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  color: rgb(255, 255, 255);
  background: rgb(6, 30, 17);
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
    /*FAQ CSS end*/
</style>
</head>
<body>
<div class="container-fluid">
  <form action="{{url('schemeMultistepform')}}" method="get">
    @csrf
  <!-- Page Heading -->
  <div style="float:right; margin-top:20px;">
    <a href="{{url('scheme')}}" class="mb-4 btn btn-primary">Back To Scheme</a>
  </div>
  <br>
  <h1 class="h3 mb-2 text-gray-800" style="color:orange">Ministry Of Agriculture and Farmers Welfare</h1>
  <p class="mb-4">This is scheme Description. Read Carefully Before Apply !</p>
  
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3" >
          <!--<h5 class="m-0 font-weight-bold text-primary"><button type="button" style="text-decoration: none;color:blue"> Details<button><br><br>Benefits<br><br>Elegibility<br><br>Application Process<br><br>Documents Required<br><br>Frequently Asked Questions<br><br>Feedback</h5>-->
&nbsp;&nbsp;<a href="#details" style="font-size:20px;"><b>Details</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#benefits" style="font-size:20px;"><b>Benefits</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#elegibility" style="font-size:20px;"><b>Elegibility</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#application_process" style="font-size:20px;"><b>Application Process</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#documents_required" style="font-size:20px;"><b>Documents Required</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#FAQ" style="font-size:20px;"><b>Frequently Asked Questions</b></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#feedback" style="font-size:20px;"><b>Feedback</b></a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <div class="details" id="details">
                    <h4> Details</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora nihil odio totam necessitatibus at saepe quibusdam ex quae? Consequatur in officiis accusamus suscipit repudiandae doloribus dicta qui sequi debitis. Temporibus nulla quis aut amet recusandae maiores sed sapiente optio fuga! Nulla, provident eius eos cupiditate a doloribus atque eum suscipit cumque repellendus nam aperiam earum nihil ipsum facere itaque, harum voluptates eveniet labore illo. Quasi iste tenetur est nam, facilis quod repellendus inventore asperiores quae nemo cum sint, voluptatem consectetur.</p>
                    <p><b>Basic Features</b></p>
                    <ol>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                    </ol>
                    <p><b>Funding Patterns</b></p>
                    <ol>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                    </ol>
                 </div>
                 <div class="benefits" id="benefits">
                    <h4> Benefits</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora nihil odio totam necessitatibus at saepe quibusdam ex quae? Consequatur in officiis accusamus suscipit repudiandae doloribus dicta qui sequi debitis. Temporibus nulla quis aut amet recusandae maiores sed sapiente optio fuga! Nulla, provident eius eos cupiditate a doloribus atque eum suscipit cumque repellendus nam aperiam earum nihil ipsum facere itaque, harum voluptates eveniet labore illo. Quasi iste tenetur est nam, facilis quod repellendus inventore asperiores quae nemo cum sint, voluptatem consectetur.</p>
                    <ul>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum. </li>
                        <li> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum aut cum voluptate sint illum molestiae. </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos fuga quae praesentium.</li>
                    </ul>
                 </div>
                 <div class="elegibility" id="elegibility">
                    <h4> Elegibility</h4>
                    <p>The RKVY will be a State Plan Scheme. The eligibility for assistance under the scheme would depend upon the amount provided in State Plan Budgets for Agriculture and allied sectors, over and above the baseline percentage expenditure incurred by the State Governments on Agriculture and allied sectors. </p>
                    <br><p>The list of allied sectors as indicated by the Planning Commission will be the basis for determining the sectoral expenditure:</p>
                    <ol>
                        <li>Crop Husbandry (including Horticulture).</li>                
                        <li>Animal Husbandry and Fisheries, Dairy Development.</li>
                        <li>Agricultural Research and Education.</li>                
                        <li>Forestry and Wildlife.</li>
                        <li>Plantation and Agricultural Marketing</li>
                        <li>Food Storage and Warehousing.</li>
                        <li>Soil and Water Conservation.</li>
                        <li>Agricultural Financial Institutions</li>
                        <li>other Agricultural Programmes and Cooperation.</li>
                    </ol>
                    <br><br>
                 </div>
                    <p>Each state will ensure that the baseline share of agriculture in its total State Plan expenditure (excluding the assistance under the RKVY) is at least maintained, and upon its doing so, it will be able to access the RKVY funds. The baseline would be a moving average and the average of the previous three years will be taken into account for determining the eligibility under the RKVY, after excluding the funds already received.</p>
                    <div class="application_process" id="application_process">
                    <h4>Application Process</h4>
                    <br><p><b>Offline</b></p>
                    <p>Proposals can be either submitted directly to States or to SFAC at the national level. In either case, the NLA or State Government will examine the project proposal from the viewpoint of suitability to the priorities and objectives of the State and the general framework of RKVY-RAFTAAR. If found suitable, the proposal will be forwarded to the SLSC chaired by Chief Secretary for consideration. Based on the approval of the SLSC, the project will be rolled out after an agreement has been signed between the State Government and Project Promoter. </p>
                 </div>
                   <a href="#"> Official Site: rkvy.nic.in</a><br><br>
                   <div class="documents_required" id="documents_required">
                   <h4> Documents Required</h4>
                   <ul>
                    <li>Adhar Card</li>
                    <li>Pancard</li>
                    <li>Vanshavali</li>
                    <li>Khatiyan</li>
                    <li>Residential</li>
                    <li>Cast</li>
                   </ul>
                 </div>
                 <div class="FAQ" id="FAQ">
                   <h4>Frequently Asked Questions </h4>  
                   <!--faq start-->

    
      <div class="background_color" style="background-color:white;">
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
            undefined " title="" style="margin-bottom:30px";>View More
                 <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="ml-2 inline-block   w-6 h-6 " height="3em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                 </svg>
              </button>
           </a>
          <!--view all end-->
      </div>
      </div>
                 </div>
    <!--faq end-->
                <div class="feedback" id="feedback">
                   <h4 style="margin-top: 20px;">Feedback </h4> 
                   <center>
                    <h5>Was this helpful?</h5><br>
                    <input type="radio" id="yes" name="feedback" value="YES" id="feedback">
                    <label for="feedback">YES</label>&nbsp; &nbsp;                
                    <input type="radio" id="no" name="feedback" value="NO" id="feedback">
                    <label for="feedback">NO</label>
                   </center>
                 </div> 
                 <div style="float:right; margin-top:20px;">
                  <a href="#" class="mb-4 btn btn-primary">Back To Top</a>
                </div> 
                <div>
                <center>
                <input type="submit" class="btn btn-primary" value="Apply Now" name="submit" style="margin-top:40px; margin-left:110px">
                </center>
                </div>
              </table>
          </div>
      </div>
  </div>
</div>
  </form>
<!-- /.container-fluid -->
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