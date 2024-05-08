@extends('product.layout')

@section('content')
    
  <div  class="container" >
    
    @if ($message =Session::get('success'))
            <div class="alert alert-dark" role="alert">
      {{$message}}
    </div>
  </div>
    @endif 
    <div class="alert alert-dark" role="alert">
      <h1> Trash Products</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Book price</th>
                <th scope="col">Actions</th>

                
              </tr>
              <tbody>
                @php
                    $i=1;
                @endphp
                @foreach ($product as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->product }}</td>
                    <td>{{$item->price}} $</td>
                    <td>
                      <div class="row" >
                      
                      <div class="col-sm"><a class="btn btn-warning" href="{{route('product.back.from.soft.delete',$item->id)   }}" role="button"> Back</a></div>
                      <div class="col-sm"><a class="btn btn-danger" href="{{route('product.force.delete',$item->id)   }}" role="button"> Delete</a></div>

                      
                        
                        
                    </td>
                  </tr>
                @endforeach
                
              </tbody>
            </thead>
            
          </table>

          <div class="container">
            <a class="btn btn-primary btn-lg" href="{{ route('product.index') }}" role="">home</a>

          </div>
          {{$product->links()}}
    </div>
@endsection