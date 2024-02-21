<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Laravel</title>
  
  <!-- Styles -->
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      min-height: 100vh;
      background: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), url('4.png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    h1 {
      font-size: 2em; /* Adjust the font size as needed */
      color: white; /* Set text color to contrast with the background */
      text-align: center; /* Center align the heading */
    }

    .about-me-button {
      background-color: #6d28d9; /* You can choose your preferred color */
      margin-top: 20px; /* Adjust as needed */
      color: white; /* Set text color to contrast with the background */
      display: block; /* Make the button a block element */
      margin-left: auto; /* Center the button horizontally */
      margin-right: auto; /* Center the button horizontally */
    }

    .about-me-button:hover {
      background-color: #9333ea; /* Change color on hover if you like */
    }
  </style>
</head>
<body class="antialiased">
  <div class="img-container">
    <h1>Hello world</h1>
    <button class="about-me-button button" onclick="window.location.href='/aboutme';">About Me</button>
  </div>
</body>
</html>
