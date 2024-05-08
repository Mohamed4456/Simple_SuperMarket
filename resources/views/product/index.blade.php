@extends('product.layout')

@section('content')
    
  <div  class="container" >
    
    @if ($message =Session::get('success'))
            <div class="alert alert-dark" role="alert">
      {{$message}}
    </div>
  </div>
    @endif 
    

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Book Name</th>
                <th scope="col">Book price</th>
                <th scope="col">Book detailes</th>
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
                    <td>{{$item->details}} </td>

                    <td>
                      <div class="row" >
                      <div class="col-sm"><a class="btn btn-primary" href="{{ route('product.edit',$item->id)  }}" role="button">Edit</a></div>
                      <div class="col-sm"><a class="btn btn-success" href="{{route('product.show',$item->id)   }}" role="button">show</a></div>
                      <div class="col-sm"><a class="btn btn-warning" href="{{route('product.softDelete',$item->id)   }}" role="button">soft Delete</a></div>

                
                        
                    </td>
                  </tr>
                @endforeach
                
              </tbody>
            </thead>
            
          </table>

          <div class="container">
            <a class="btn btn-primary btn-lg" href="{{ route('product.create') }}" role="">add Book</a>
            <a class="btn btn-primary btn-lg" href="{{ route('product.trash') }}" role="">trash</a>


          </div>
          {{$product->links()}}
    </div>
@endsection