@extends('product.layout')

@section('content')

<div class="container"   >
    <h2>The data for Book : {{$product->product}} </h2>
    
 </div>

<div class="container"  >
        
        <div class="form-group">
          <label for="name">Book Name : {{$product->product}}</label>
          
        </div>
        <div class="form-group">
          <label for="price">price  : {{$product->price}}</label>
        </div>
        
        <div class="form-group">
            <label for="details">Detailes :  {{$product->details}}</label>
    
       <div>
        <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role=""> Back To Products</a>

       </div>
    
    
    </div>
    



@endsection
