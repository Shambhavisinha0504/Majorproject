@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .options {
  display: none;
}
.button,.button2 {
      background-color: #4CAF50; /* Green */
      border: none;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;

    } 
    .button2 {background-color:lightgreen; border:5px solid darkgreen;}
    .button {background-color: lightgreen; border:5px solid darkgreen;} 
     
.enabled-button {
  display: block;
}
.head{
    text-align:center;
    font-size:20px;
    color:black;
}
    .container {
        margin-top:70px;
        margin-left:60px;
  align-items: center;
  justify-content: center;
  height: 100px;
  font-size:20px;
  color:black;
  .popup{
      width:400px;
      background:#fff;
      border-radius:6px;
      position:absolute;
      top:0 ;
      left:50%;
      transform:translate(-50%,-50%) scale(0.1);
      text-align:center;
      padding:0 30px 30px;
      color:#333;
       visibility:hidden;
       transition:transform 0.4s, top 0.4s;
    }
    .open-popup{
      visibility:visible;
      top:50%;
      transform:translate(-50%,-50%) scale(1);
    }
    .popup img{
      width:100px;
      margin-top:-50px;
      border_radius:50%;
      box-shadow:0 2px 5px rgba(0,0,0,0.2);
    }
    .popup h2{
      font-size:38px;
      font-weight:500;
      margin:30px 0 10px;
    }
    .popup button{
      width:100%;
      margin-top:50px;
      padding:10px 0;
      background:#6fd649;
      color:#fff;
      border:0;
      outline:none;
      font-size:18px;
      border-radius:4px;
      cursor:pointer;
      box-shadow:0 5px 5px rgba(0,0,0,0.2);
    }
}
    
    </style>
</head>
<body>
  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">
              Payment Mode</h2>
              
         <div class="container">
                <h4>CONSULTING MODE</h4>
                <input type="radio" class="head" name="status" id="online" value="online" >Online
                
                
                <input type="radio" class="head" name="status" id="offline" value="offline">Offline
                  </div>  
               
                <div id="options" class="options">
                    <div class="d-flex justify-content-center">
                        <a href="{{url('payment')}}"> <button id="online-button" class="button">Pay Online</button></a>
                    </div>   
                    <div class="d-flex justify-content-center">
                 <button id="offline-button" class="button2" onclick="openPopup()" >Pay After Services</button>
                    </div>
                </div>
                <div class="popup" id="popup">
                <h2>Thank you!</h2>
    <p>Your details has been successfully submitted.Your reference id: <span id="random-number"></span>. Our Expert will reach you.</p>
    <button type="button" onclick="closePopup()">OK</button>
                </div>
               
                <script src="script.js"></script>
</div>
</div>
</div>
</div>
</div>
</section>
<script>
    const onlineRadioButton = document.getElementById("online");
const offlineRadioButton = document.getElementById("offline");
const options = document.getElementById("options");
const onlineButton = document.getElementById("online-button");
const offlineButton = document.getElementById("offline-button");

onlineRadioButton.addEventListener("change", function () {
  options.style.display = "block";
  offlineButton.style.display = "none";
  onlineButton.style.display = "block";
});

offlineRadioButton.addEventListener("change", function () {
  options.style.display = "block";
  onlineButton.style.display = "block";
  offlineButton.style.display = "block";
  
});

let popup=document.getElementById("popup");
  function openPopup(){
        popup.classList.add("open-popup");
  }
  function closePopup(){
        popup.classList.remove("open-popup");
  }

// Generate a random number between a given range
function generateRandomNumber(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Update the content of the HTML element with a random number
function updateRandomNumber() {
  const randomNumberElement = document.getElementById("random-number");
  const randomNumber = generateRandomNumber(1, 100); // Change the range as needed
  randomNumberElement.textContent = randomNumber;
}

// Call the updateRandomNumber function when the page loads
window.onload = updateRandomNumber;

</script>
</body>
</html>
@endsection