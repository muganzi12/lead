@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<title>Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h6 {font-family: "Times New Roman", Times, serif;}
body {font-size:18px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

 <div class="w3-main" style="margin-left:100px;margin-right:40px;margin-top:100px">

  <div class="w3-row-padding ">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="{{ route('registrations.create') }}"><img src="url(images/water.jpg)"  alt="Robin" style="width:100%"></a>
        <div class="w3-container">
          <h3>Intermittent Water Supply Conference</h3>
          <!-- <p class="w3-opacity">"Where Intermittent Water Supply Professionals Meet"</p>
          <p>The Intermittent Water Supply Conference aims to advance the knowledge and share experiences on Intermittent Water Supply (IWS) and to frame the problem of IWS within its technical, institutional, financial and social contexts. It will provide an opportunity for water researchers, engineers and experts from academia, industry, governments and water utilities to exchange experiences, and know-how on how to improve conditions under IWS and on how to develop methodologies to improve and transition to continuous supply.</p> -->
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="{{ route('registrations.create') }}"><img src="url(images/water1.jpg)" alt="Robin" style="width:100%"></a>
        <div class="w3-container">
          <h3>Intermittent Water Supply Conference</h3>
          <!-- <p class="w3-opacity">"Where Intermittent Water Supply Professionals Meet"</p>
          <p>The Intermittent Water Supply Conference aims to advance the knowledge and share experiences on Intermittent Water Supply (IWS) and to frame the problem of IWS within its technical, institutional, financial and social contexts. It will provide an opportunity for water researchers, engineers and experts from academia, industry, governments and water utilities to exchange experiences, and know-how on how to improve conditions under IWS and on how to develop methodologies to improve and transition to continuous supply.</p> -->
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="{{ route('registrations.create') }}"><img src="url(images/water2.jpg)"  alt="Robin" style="width:100%"></a>
        <div class="w3-container">
          <h3>Intermittent Water Supply Conference</h3>
          <!-- <p class="w3-opacity">"Where Intermittent Water Supply Professionals Meet"</p>
          <p>The Intermittent Water Supply Conference aims to advance the knowledge and share experiences on Intermittent Water Supply (IWS) and to frame the problem of IWS within its technical, institutional, financial and social contexts. It will provide an opportunity for water researchers, engineers and experts from academia, industry, governments and water utilities to exchange experiences, and know-how on how to improve conditions under IWS and on how to develop methodologies to improve and transition to continuous supply.</p> -->
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="{{ route('registrations.create') }}"><img src="url(images/htb.jpg)"  alt="Robin" style="width:100%"></a>
        <div class="w3-container">
          <h3>The HTB Business Fellowship</h3>
          <!-- <p class="w3-opacity">"Where Intermittent Water Supply Professionals Meet"</p>
          <p>The Intermittent Water Supply Conference aims to advance the knowledge and share experiences on Intermittent Water Supply (IWS) and to frame the problem of IWS within its technical, institutional, financial and social contexts. It will provide an opportunity for water researchers, engineers and experts from academia, industry, governments and water utilities to exchange experiences, and know-how on how to improve conditions under IWS and on how to develop methodologies to improve and transition to continuous supply.</p> -->
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="{{ route('registrations.create') }}"><img src="url(images/htb.jpg)"alt="Robin" style="width:100%"></a>
        <div class="w3-container">
          <h3>The HTB Business Fellowship</h3>
          <!-- <p class="w3-opacity">"Where Intermittent Water Supply Professionals Meet"</p>
          <p>The Intermittent Water Supply Conference aims to advance the knowledge and share experiences on Intermittent Water Supply (IWS) and to frame the problem of IWS within its technical, institutional, financial and social contexts. It will provide an opportunity for water researchers, engineers and experts from academia, industry, governments and water utilities to exchange experiences, and know-how on how to improve conditions under IWS and on how to develop methodologies to improve and transition to continuous supply.</p> -->
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <a href="{{ route('registrations.create') }}"><img src="url(images/htb.jpg)" alt="Robin" style="width:100%"></a>
        <div class="w3-container">
          <h3>The HTB Business Fellowship</h3>
          <!-- <p class="w3-opacity">"Where Intermittent Water Supply Professionals Meet"</p>
          <p>The Intermittent Water Supply Conference aims to advance the knowledge and share experiences on Intermittent Water Supply (IWS) and to frame the problem of IWS within its technical, institutional, financial and social contexts. It will provide an opportunity for water researchers, engineers and experts from academia, industry, governments and water utilities to exchange experiences, and know-how on how to improve conditions under IWS and on how to develop methodologies to improve and transition to continuous supply.</p> -->
        </div>
      </div>
    </div>
  </div>

  
  <!-- Designers -->
  <div class="w3-container" id="designers" style="margin-top:75px">
    <p><b>Our Organizers</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding ">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="url(images/robi.jpg)" class="img-circle"  alt="Robin" width="150px" height="150px">
        <div class="w3-container">
          <h3>Robin Muganzi</h3>
          <p class="w3-opacity">***************</p>
          <p>muganzirobin5@gmail.com. 0789588332/0750588332</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="url(images/robi.jpg)" class="img-circle" alt="Robin" width="150px" height="150px">
        <div class="w3-container">
          <h3>Robin Muganzi</h3>
          <p class="w3-opacity">*************</p>
          <p>muganzirobin5@gmail.com. 0789588332/0750588332.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="url(images/robi.jpg)" class="img-circle"  alt="Robin" width="150px" height="150px">
        <div class="w3-container">
          <h3>Robin Muganzi</h3>
          <p class="w3-opacity">***************</p>
          <p>muganzirobin5@gmail.com. 0789588332/0750588332.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
@endsection
