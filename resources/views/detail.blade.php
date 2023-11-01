@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6" style="background-image: linear-gradient(to right, #141e30, #243b55); border-radius:10px;">
       <h2 style="color:white;">{{$product['name']}}</h2>
       <h3 style="color:white;">Price : {{$product['price']}}</h3>
       <h4 style="color:white;">Details: {{$product['description']}}</h4>
       <h4 style="color:white;">category: {{$product['category']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <button class="btn btn-success">Buy Now</button>
       <br><br>
    </div>
   </div>
</div>
@endsection