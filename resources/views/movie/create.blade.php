@extends('layouts.app')

@section('content')
<body>
  @guest
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span class="display-1 d-block">404</span>
                <div class="mb-4 lead">The page you are looking for was not found.</div>
                <a href="{{route('home')}}" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div>

   @else
<div class="container">
      <h2 style="color:#F8F8F8">Crear un nuevo video</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
      <form enctype="multipart/form-data" method="post" action="{{url('video')}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label style="color:#F8F8F8" for="name">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label style="color:#F8F8F8" for="price">URl:</label>
              <input type="text" class="form-control" name="url" id="url">
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 </div>
          </div>
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Agregar URL del video</button>
          </div>
        </div>
      </form>
    </div>
    @endguest
  </body>
  @endsection
  
