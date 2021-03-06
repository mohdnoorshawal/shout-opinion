@extends('layouts.app')

@section('header')
	@include('layouts.partials.header')
@endsection

@section('nav')
	@include('layouts.partials.nav')
@endsection

@section('content')

<div class="row">
    <div class="col-sm text-center mb-4">
        <div class="card border-light" style="width: 18rem;">
            <img alt="Card image cap" class="card-img-top" src="img/image1.jpeg">
                <div class="card-body">
                    <a class="text-dark" href="#">
                        <h4 class="card-title">
                            Post Title
                        </h4>
                    </a>
                    <p class="card-text text-left">
                        Some quick example text to build on the Post Title and make up the bulk of the card's content.
                    </p>
                </div>
            </img>
        </div>
    </div>
    <div class="col-sm text-center mb-1">
        <div class="card border-light" style="width: 18rem;">
            <img alt="Card image cap" class="card-img-top" src="img/image2.jpeg">
                <div class="card-body">
                    <a class="text-dark" href="#">
                        <h4 class="card-title">
                            Post Title
                        </h4>
                    </a>
                    <p class="card-text text-left">
                        Some quick example text to build on the Post Title and make up the bulk of the card's content.
                    </p>
                </div>
            </img>
        </div>
    </div>
    <div class="col-sm text-center mb-1">
        <div class="card border-light" style="width: 18rem;">
            <img alt="Card image cap" class="card-img-top" src="img/image3.jpeg">
                <div class="card-body">
                    <a class="text-dark" href="#">
                        <h4 class="card-title">
                            Post Title
                        </h4>
                    </a>
                    <p class="card-text card-text text-left">
                        Some quick example text to build on the Post Title and make up the bulk of the card's content.
                    </p>
                </div>
            </img>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm text-center mb-1">
        <div class="card border-light" style="width: 18rem;">
            <img alt="Card image cap" class="card-img-top" src="img/image2.jpeg">
                <div class="card-body">
                    <a class="text-dark" href="#">
                        <h4 class="card-title">
                            Post Title
                        </h4>
                    </a>
                    <p class="card-text text-left">
                        Some quick example text to build on the Post Title and make up the bulk of the card's content.
                    </p>
                </div>
            </img>
        </div>
    </div>
    <div class="col-sm text-center mb-1">
        <div class="card border-light" style="width: 18rem;">
            <img alt="Card image cap" class="card-img-top" src="img/image3.jpeg">
                <div class="card-body">
                    <a class="text-dark" href="#">
                        <h4 class="card-title">
                            Post Title
                        </h4>
                    </a>
                    <p class="card-text text-left">
                        Some quick example text to build on the Post Title and make up the bulk of the card's content.
                    </p>
                </div>
            </img>
        </div>
    </div>
    <div class="col-sm text-center mb-1">
        <div class="card border-light" style="width: 18rem;">
            <img alt="Card image cap" class="card-img-top" src="img/image1.jpeg">
                <div class="card-body">
                    <a class="text-dark" href="#">
                        <h4 class="card-title">
                            Post Title
                        </h4>
                    </a>
                    <p class="card-text text-left">
                        Some quick example text to build on the Post Title and make up the bulk of the card's content.
                    </p>
                </div>
            </img>
        </div>
    </div>
</div>
</div>
<!-- jumbotron -->
<div class="jumbotron mt-5">
<h1 class="display-4">
    Welcome to Summer Blog
</h1>
<p class="lead">
    Express yourself by writing
</p>
<hr class="my-4">
    <p>
        Write your story and share to everyone around the world.
    </p>
    <p class="lead">
        <a class="btn btn-outline-info btn-lg" href="#" role="button">
            Learn more
        </a>
    </p>
</hr>
</div>
<!-- /jumbotron -->
<div class="row mb-3">
<diw class="col-sm-12 col-md-8">
    <h3>
        Posts Newest
    </h3>
    <hr>
        <div class="row mb-2">
            <div class="col-8">
                <a class="text-dark" href="#">
                    <h4 class="card-title">
                        Post Title
                    </h4>
                </a>
                <p class="card-text text-left ">
                    Some quick example text to build on the Post Title and make up the bulk of the card's content.
                </p>
                <h6 class="blockquote-footer">
                    Nuzulul Huda, Jul 10 2018
                </h6>
            </div>
            <div class="col-4">
          <img alt="Card image cap" class="card-img-top" src="img/image1.jpeg">
         
        </div>
        
      </div>
    </hr>
</div>
</div>

@endsection
