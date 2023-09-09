@extends('layout')
@section('content')
   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registraion Form</title>
    <style>
        :root {
  --primary-color: rgb(11,179,53);
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  font-family: Montserrat, "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  display: grid;
  /*place-items: center;*/
  min-height: 100vh;
}
/* Global Stylings */
label {
  display: block;
  margin-bottom: 0.5rem;
  color:orange;
}

input {
  display: block;
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
  background-color: rgb(205, 222, 216);
  
}

.width-50 {
  width: 50%;
}

.ml-auto {
  margin-left: auto;
}

.text-center {
  text-align: center;
}

/* Progressbar */
.progressbar {
  position: relative;
  display: flex;
  justify-content: space-between;
  counter-reset: step;
  margin: 2rem 0 4rem;
}

.progressbar::before,
.progress {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 4px;
  width: 100%;
  background-color: orange;/*#dcdcdc;*/
  z-index: -1;
}

.progress {
  background-color: var(--primary-color);
  width: 0%;
  transition: 0.3s;
}

.progress-step {
  width: 2.1875rem;
  height: 2.1875rem;
  background-color: #dcdcdc;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.progress-step::before {
  counter-increment: step;
  content: counter(step);
}

.progress-step::after {
  content: attr(data-title);
  position: absolute;
  top: calc(100% + 0.5rem);
  font-size: 0.85rem;
  color:orange; /*#666;*/
}

.progress-step-active {
  background-color: var(--primary-color);
  color: #f3f3f3;
}
/*.background-image{
    background:url('img/scheme_images/bg2.jpg') no-repeat center center/cover;
}*/

/* Form */
.form {
  width: clamp(720px, 70%, 830px);
  margin: 0 auto;
  margin-top:20px;
  border: 1px solid orange;/*#ccc;*/
  border-radius: 0.35rem;
  padding: 1.5rem;
}

.form-step {
  display: none;
  transform-origin: top;
  animation: animate 0.5s;
}

.form-step-active {
  display: block;
}

.input-group {
  margin: 2rem 0;
}

@keyframes animate {
  from {
    transform: scale(1, 0);
    opacity: 0;
  }
  to {
    transform: scale(1, 1);
    opacity: 1;
  }
}

/* Button */
.btns-group {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1.5rem;
}

.btn {
  padding: 0.75rem;
  display: block;
  text-decoration: none;
  background-color: var(--primary-color);
  color: #f3f3f3;
  text-align: center;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: 0.3s;
}
.btn:hover {
  box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
}
.dropdown{
    position:relative;
    display:inline-block;
    width:100%;
}
select{
    background-color:rgb(205, 222, 216); /*green;*/
    color:rgb(15, 20, 14);
    padding:16px;
    font-size:16px;
    border:none;
    cursor:pointer;
    width:100%;
}
option{
    background-color: orange;
}
    </style>
  </head>
  <body>
    <marquee text-align:center direction="left" height="40px" width="100%" scrolldelay="200" bgcolor="orange" behavior="scroll" >
      <h5 style="color:white; margin-top:10px;" >दो गज की दूरी मास्क है जरूरी | कोरोना के कहर से बचें, घर में सुरक्षित रहें | कोरोना हारेगा, भारत जीतेगा |</h5>
  </marquee>
  <marquee text-align:center direction="left" height="40px" width="100%" scrolldelay="200" bgcolor="green" behavior="scroll" >
    <h5 style="color:white; margin-top:10px;">स्कीम का लाभ पाने हेतु जल्दी से फॉर्म भरें और लाभ पाएं । ...</h5>
</marquee>
    
    <div class="background-image">
    <form action="{{url('saveSubmitedSchemeForm')}}" name="saveSubmitedSchemeForm" method="post" class="form">
        @csrf
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div  class="progress-step progress-step-active"  data-title="ID"></div>
        <div class="progress-step" data-title="Intro"></div>
        <div class="progress-step" data-title="Account-Details"></div>
        <div class="progress-step" data-title="Plot Details"></div>
        <div class="progress-step" data-title="Document Upload"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
            <label for="username" class="label-color">Username(ID)</label>
            <input type="text" name="username" id="username" />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
          </div>
          <div class="input-group">
          <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword"/> 
          </div>
            <br>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" />
          </div>
          <div class="input-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" />
          </div>
          <div class="input-group">
            <label for="father's_name">Father's Name</label>
            <input type="text" name="father_name" id="father's_name" />
          </div>
          <div class="input-group">
            <label for="mother's_name">Mother's Name</label>
            <input type="text" name="mother_name" id="mother's_name" />
          </div>
          <div class="input-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="+91" id="phone" />
          </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" name="email"  id="email" />
        </div>
        <div class="input-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" />
        </div>
        <div class="input-group">
            <div class="dropdown">
              <label for="scheme">Gender</label>
              <select name="gender" id="gender">
                <option value="--select_gender">--select_gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="others">Others</option>
            </select>
            </div>
          </div>
        <div class="input-group">
            <label for="annual_income">Annual Income</label>
            <input type="number" name="annual_income" id="annual_income" />
        </div>
        <div class="input-group">
            <label for="street">Street</label>
            <input type="text" name="street" id="street" />
        </div>
        <div class="input-group">
            <label for="city">City</label>
            <input type="text" name="city" id="city" />
        </div>
        <div class="input-group">
            <label for="dist">Distric</label>
            <input type="text" name="dist" id="dist" />
        </div>
        <div class="input-group">
            <label for="state">State</label>
            <input type="text" name="state" id="state" />
        </div>
        <div class="input-group">
            <label for="countary">Countary</label>
            <input type="text" name="countary" id="countary" />
        </div>
        <div class="input-group">
            <label for="zip">Zip</label>
            <input type="text" name="zip" id="zip" />
        </div>
        <div class="input-group">
            <label for="adhar_number">Adhar Number</label>
            <input type="number" name="adhar_number" id="adhar_number" />
        </div> 
        <div class="input-group">
            <div class="dropdown">
              <label for="category">Category</label>
              <select name="category" id="category">
                <option value="--select_category">--select_category</option>
              <option value="general">General</option>
              <option value="OBC">OBC</option>
              <option value="SC/ST">SC/ST</option>
              <option value="BPL/Disabled">BPL/Disabled</option>
            </select>
            </div>
          </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="account_number">Account Number</label>
          <input type="number" name="account_number" id="account_number" />
        </div>
        <div class="input-group">
            <label for="caccount_number">Confirm Account Number</label>
            <input type="number" name="caccount_number" id="caccount_number" />
          </div>
        <div class="input-group">
          <label for="ifsc">IFSC Code</label>
          <input type="text" name="ifsc" id="ifsc" />
        </div>
        <div class="input-group">
            <label for="account_holder_name">Account Holder Name</label>
            <input type="text" name="account_holder_name" id="account_holder_name" />
          </div>
          <div class="input-group">
            <label for="nick_name">Nick Name</label>
            <input type="text" name="nick_name" id="nick_name" placeholder="Optional" />
          </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
            <div class="dropdown">
              <label for="scheme_type">Select Scheme Type</label>
              <select name="scheme_type" id="scheme_type">
                  <option value="Select Scheme">--Select Scheme</option>
              <option value="PMJDY">PMJDY</option>
              <option value="CMY">CMY</option>
              <option value="FASAL BIMA YOJNA">FASAL BIMA YOJNA</option>
              <option value="SUKHAD yojna">SUKHAD yojna</option>
            </select>
            </div>
          </div>
          <div class="input-group">
            <div class="dropdown">
              <label for="institution">Select Institution</label>
              <select name="institution" id="institution">
              <option value="Select intitution">--Select intitution</option>
              <option value="Urban_Improvement_Trust">Urban Improvement Trust</option>
              <option value="Munsiple_corporation">Munsiple Corporation</option>
              <option value="Munciple_Council">Munciple Council</option>
              <option value="Munciple_Board">Munciple Board</option>
            </select>
            </div>
          </div>
          <div class="input-group">
            <label for="district">District</label>
            <input type="text" name="district" id="district" />
          </div>
          <div class="input-group">
            <label for="tahsil">Tahsil</label>
            <input type="text" name="tahsil" id="tahsil" />
          </div>
          <div class="input-group">
            <label for="mohalla">Mohalla/Street</label>
            <input type="text" name="mohalla" id="mohalla" />
          </div>
          <div class="input-group">
            <label for="ward_number">Ward Number</label>
            <input type="text" name="ward_number" id="ward_number" />
          </div>
          <div class="input-group">
            <label for="plot_number">Plot Number</label>
            <input type="text" name="plot_number" id="plot_number" />
          </div>
          <div class="input-group">
            <label for="plot_facing">Plot Facing</label>
            <input type="text" name="plot_facing" id="plot_facing" />
          </div> 
          <div class="input-group">
            <label for="plot_area">Plot Area</label>
            <input type="text" name="plot_area" id="plot_area" />
          </div> 
          <div class="input-group">
            <label for="khatiyan_number">Khatiyan Number</label>
            <input type="number" name="khatiyan_number" id="khatiyan_number" />
        </div> 
          <div class="input-group">
            <label for="latitude">Latitude</label>
            <input type="text" name="latitude" id="latitude" />
          </div> 
          <div class="input-group">
            <label for="longitude">Longitude</label>
            <input type="text" name="longitude" id="longitude" />
          </div> 
          <div class="input-group">
            <div class="dropdown">
              <label for="area_detail">Area Detail</label>
              <select name="area_detail" id="area_detail">
                <option value="--select_area_detail">--select_area_detail</option>
              <option value="Built">Built</option>
              <option value="Vacant">Vacant</option>
            </select>
            </div>
          </div>
           <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
      </div>

      <div class="form-step">
        <div class="input-group">
            <label for="adhar_card">Adhar Card</label>
            <input type="file" name="aadhar_card" id="adhar_card" />
        </div> 
        <div class="input-group">
            <label for="residential">Residential</label>
            <input type="file" name="residential" id="residential" />
        </div> 
        <div class="input-group">
            <label for="cast">Cast</label>
            <input type="file" name="cast" id="cast" />
        </div> 
        <div class="input-group">
            <label for="income">Income</label>
            <input type="file" name="income" id="income" />
        </div> 
        <div class="input-group">
            <label for="voter_id">Voter ID</label>
            <input type="file" name="voter_id" id="voter_id" />
        </div> 
        <div class="input-group">
            <label for="vanshavali">Vanshavali</label>
            <input type="file" name="vanshavali" id="vanshavali" />
        </div> 
        <div class="input-group">
            <label for="khatiyan">Khatiyan</label>
            <input type="file" name="khatiyan" id="khatiyan" />
        </div> 
        <div class="input-group">
            <label for="birth_certificate">Birth Certificate</label>
            <input type="file" name="birth_certificate" id="birth_certificate" />
        </div> 
        <div class="input-group">
            <label for="photo">Passport Size Colorful Photo</label>
            <input type="file" name="photo" id="photo" />
       </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" class="btn" />
        </div>
      </div>

    </form>
</div>
    <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}
    </script>
  </body>
</html>   
@endsection
