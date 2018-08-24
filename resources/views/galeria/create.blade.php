@extends('layouts.app')

@section('content')
    <body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @guest
    <div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <span  style="color:#F8F8F8"class="display-1 d-block">404</span>
                <div style="color:#F8F8F8" class="mb-4 lead">The page you are looking for was not found.</div>
                <a style="color:#F8F8F8" href="{{route('home')}}" class="btn btn-link">Back to Home</a>
            </div>
        </div>
    </div>
</div> 
        @else
        <div class="container">
            <h2 style="color:#F8F8F8">
                Nueva Publicacion
            </h2>
            <br/>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <br/>
            @endif
      @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>
                    {{ \Session::get('success') }}
                </p>
            </div>
            <br/>
            @endif
            <form action="{{url('picture')}}" enctype="multipart/form-data" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                        <label style="color:#F8F8F8" for="name">
                            Descripcion:
                        </label>
                        <input class="form-control" name="descripction" type="text">
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                    </div>
                    <div class="form-group col-md-4 input-group image-preview">
                        <label style="color:#F8F8F8" for="price">
                         
                        </label>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span style="color:#F8F8F8" class="image-preview-input-title">Browse</span>
                        <input class="form-control" type="file" accept="image/png, image/jpeg, image/gif" name="img"/> <!-- rename it -->
                    </div>
                </span>
            </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="form-group col-md-4">
                        <button class="btn btn-success" style="margin-left:38px" type="submit">
                            Agregar IMG
                        </button>
                    </div>
                </div>
            </form>
        </div>

@endguest
</body>
<style>
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>
<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>
@endsection
