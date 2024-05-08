@extends('product.layout')

@section('content')
    
<div class="jumbotron">
    <h1 class="display-4"> eBook !</h1>
    <p class="lead">This is a simple System for Online Book Store .</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('product.about.us') }}" role=""> About Us</a>
    <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role=""> All Books</a>
    <a class="btn btn-primary btn-lg" href="{{ route('product.create') }}" role="">add Book</a>
    <a class="btn btn-primary btn-lg" href="{{ route('product.trash') }}" role="">trash</a>

  </div>

@endsection
