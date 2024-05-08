@extends('product.layout')

@section('content')

<div class="container"   >
    <h2>Edit Book : {{$product->product}} </h2>
    
</div>

<div class="container"  >
    <form  action="{{ route('product.update',$product->id) }}" method="POST"  >
        @csrf

        @method('PUT')
        <div class="form-group">
          <label for="name">Book Name</label>
          <input type="text" value="{{$product->product}}"  class="form-control" id="product" required name="product" aria-describedby="" >
          <small id=""  class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="price">price</label>
          <input type="num"  value="{{$product->price}}" class="form-control" id="price" required name="price">
        </div>
        
        <div class="form-group">
            <label for="details">Detailes</label>
            <input type="text" value="{{$product->details}}"  class="form-control" id="product"  name="details" required aria-describedby="">
            <small id="" class="form-text text-muted"></small>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
    </div>
    



@endsection
