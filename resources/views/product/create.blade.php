@extends('product.layout')

@section('content')

<div class="container"  >
<h2>Add New Book</h2>
</div>

<div class="container"  >
<form  action="{{ route('product.store') }}" method="POST"  >
    @csrf
    <div class="form-group">
      <label for="name">Book Name</label>
      <input type="text" class="form-control" id="product" required name="product" aria-describedby="" >
      <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="price">price</label>
      <input type="num" class="form-control" id="price" required name="price">
    </div>
    
    <div class="form-group">
        <label for="details">Detailes</label>
        <input type="text" class="form-control" id="product"  name="details" required aria-describedby="">
        <small id="" class="form-text text-muted"></small>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>







@endsection

