<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Norte Informativo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <link href="https://vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">

<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
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
      <ul class="nav navbar-nav navbar-right">       <!-- <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
    <div  class="col-sm11">  <iframe id="player" border="0" style="border: 0; box-shadow: 0px 0px 0 #fff;" src="http://www.reproface.com.ar/video/player/norteinformativo"></iframe>     </div>
    <div  class="col-sm12">
    <iframe id="player_movile" width="180" height="55" border="0" style="border: 0; box-shadow: 0px 0px 0 #fff;" src="http://www.reproface.com.ar/video/links/norteinformativo"></iframe> 
    </div>
   </div>
 </div>
 <!--second panel-->
 <div class="container">
  <h2 style="background-color:#263238;color:white;text-align:center"><b>Programacion / Patrocinadores</b></h2>
  <div class="row">
    <div  class="col-md-5">
       <img id="img-tv-programming"  style="background-image: url(https://scontent-mia3-1.xx.fbcdn.net/v/t1.0-9/36583100_1716171561771282_7634071839110594560_o.jpg?_nc_cat=0&oh=3f68f39be70a4f2151e43d7d69c928cd&oe=5BF08B97);background-size: 100% 100%;" alt="">
    </div>  
    <div  class="col-md-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/POx5Bz6i-W4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div> 
 </div>
</div>
</div>
<!--third  panel-->
<div class="container">
  <h2 style="background-color:#263238;color:white;text-align:center"><b>Galeria</b></h2>
  <div class="row">
  @foreach($imagenes as $pict)
    <div class="col-md-4">
      <div class="thumbnail">
      <a href="{{asset('storage/')}}/{{$pict['img']}}" target="_blank">
          <img src="{{asset('storage/')}}/{{$pict['img']}}" alt="Lights" style="width:100%;height:300px;">
          
          <div class="caption">
          <p>
            <br>
           
            @guest
            {{$pict['descripction']}}
           @else
           {{$pict['descripction']}}
           <form action="{{action('GaleriaController@destroy',$pict['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
            <br>
            </p>
            @endguest
          </div>
        </a>
      </div>
    </div>
    @endforeach
   
   </div>
</div>

<!-- cuarto panel-->
<div class="container">
  <h2 style="background-color:#263238;color:white;text-align:center"><b>Videos</b></h2>
  
  <div class="row">
  @foreach($videos as $vid)
    <div class="col-md-4">
      <div class="thumbnail">
      <iframe width="350" height="315" src="https://www.youtube.com/embed/{{$vid['url']}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          <div class="caption">
          <br>
           
            @guest
            <p>{{$vid['descripcion']}}
            @else
           {{$vid['descripcion']}}
            <form action="{{action('VideosController@destroy',$vid['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          <br>
          </p>
           @endguest
          </div>
        </a>
      </div>
    </div>
@endforeach
  
 </div>
</div>

 </div>
</div>
</div>
<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Numeros Importantes</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href=""><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>Derechos Reservados 2018 TCU UTN</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				</hr>
			</div>	
		</div>
	</section>
<script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
    </body>
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
     width:55px;
     height:45px;
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
#player {
     width:1080px;
     height:640px;
    }
@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    #player {
     width:100%;
     height:400px;
    }
}#player_movile{
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
}
    </style>
</html>

