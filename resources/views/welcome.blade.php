<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
<link href="https://vjs.zencdn.net/7.3.0/video-js.css" rel="stylesheet">
<link href="https://unpkg.com/silvermine-videojs-quality-selector@1.1.2/dist/css/quality-selector.css" rel="stylesheet">
    </head>
    <body>
    <section style="background-color:#e65100; height:90px">
    <nav class="navbar navbar-inverse" style="background-color:#000000;margin-top:3%;">
     <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">NorteInformativo</a>
      <img class="icon-image" src="img/logo.png" alt="icon">
      

    </div>
    @if (Route::has('login'))
    <div class="collapse navbar-collapse" id="myNavbar">
    @auth
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/home') }}">Inicio</a></li>
        <li class="active"><a href="{{ url('/info') }}">Quienes Somos</a></li>
      </ul>
      
      @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
      @endauth
    </div>
    @endif
  </div>
</nav>
</section> 
<!--Fisrt panel-->
<div class="container">
  <div class="row">
    <div class="col-sm11" style="background-color:white;height:100%;">
    <div class="container">
  <h2 style="background-color:#263238;color:white;text-align:center"><b>NorteInformativo Tv</b></h2>
  <div  class="panel panel-default">
    <div id="panel" class="panel-heading" >
    <div  class="col-sm12">
      <video id="videojs" class="video-js vjs-fluid vjs-default-skin vjs-big-play-centered" controls preload="auto">

  <source src="https://videohd.live:19360/8076/8076.m3u8" type="application/x-mpegURL">
  <p class="vjs-no-js">
  To view this video please enable JavaScript, and consider upgrading to a web browser that
  <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
 </p>
</video>
    </div>
   </div>
 </div>
 <!--second panel-->

</div>


 </div>
</div>
</div>
<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class=" text-white">Derechos Reservados 2022 NORTE INFORMATIVO TV</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
    </body>
   <script src="https://vjs.zencdn.net/7.3.0/video.js"></script>
<script src="https://unpkg.com/silvermine-videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>
<script type="text/javascript">
 var player = videojs('videojs');</script>
    <style>
     body{
    background-image: url(https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/39883680_1847027922052249_8597833410519498752_o.jpg?_nc_cat=0&oh=9b7fc60cbe72c92fac9fa07ebf8e89c1&oe=5BF30AB5);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
 }
 .icon-image{
    display:block;
     margin:auto;
     width:50px;
     height:40px;
 }
 .video{
    margin-left: 10%;
     width: 80%;
    height: 50%%;
 }
 #perfil{
    display:block;
     margin-top:9%;
     width:50px;
     height:40px;
     margin-left:110%;
 }
 /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

#footer {
  margin-top:2%;
    background: black !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
#player{
  width:100%;
  height:400px;
}
#player_movile{
          margin-left:45%;
        }
@media only screen and (max-width: 900px) {
         #player_movile{
          margin-left:30%;
        }
        
}
#img-tv-programming{
  width:100%;
  height:300px;
}
#video-tv-programming{
  margin-top:1%;
  align:center;
  width:560;
   height:315;
}
    </style>
</html>
