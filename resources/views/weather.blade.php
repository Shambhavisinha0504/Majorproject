@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('wether/style1.css')}}">
    <script src="{{asset('jss/script.js')}}" defer></script>
</head>
<body>
    <h1 class="first">Weather Dashboard</h1>
    <div class="container">
        <div class="weather-input">
        <h3>Enter a City Name</h3>
        <input type="text" class="city-input" placeholder="E.g., New York,London,Tokyo">
        <button class="search-btn">Search</button>
  
        <div class="seperator"></div>
         <button class="location-btn">Use Current Location</button>
    </div>
    <div class="weather-data">
        <div class="current-weather">
            <div class="details">
                <h2>_________ (________)</h2>
                <h4>Temp:______°C</h4>
                 <h4>Wind:_____ M/S</h4>
                <h4>Humidity:____%</h4>
            </div>
            
            </div>
            <div class="days-forecast">
                <h2>5-Day Forecast</h2>
                <ul class="weather-cards">
                    <li class="card">
                        <h3>(__________)</h3>
                        <h4>Temp:______°C</h4>
                        <h4>Wind:_____ M/S</h4>
                        <h4>Humidity:____%</h4>
                    </li>
                    <li class="card">
                        <h3>(__________)</h3>
                        <h4>Temp:______°C</h4>
                        <h4>Wind:_____ M/S</h4>
                        <h4>Humidity:____%</h4>
                    </li>
                    <li class="card">
                        <h3>(__________)</h3>
                        <h4>Temp:______°C</h4>
                        <h4>Wind:_____ M/S</h4>
                        <h4>Humidity:____%</h4>
                    </li>
                    <li class="card">
                        <h3>(__________)</h3>
                        <h4>Temp:______°C</h4>
                        <h4>Wind:_____ M/S</h4>
                        <h4>Humidity:____%</h4>
                    </li>
                    <li class="card">
                        <h3>(__________)</h3>
                        <h4>Temp:______°C</h4>
                        <h4>Wind:_____ M/S</h4>
                        <h4>Humidity:____%</h4>
                    </li>
                   
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
@endsection