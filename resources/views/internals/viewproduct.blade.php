@extends('layouts.layout')


@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Product Details </h2>
<hr>
<p align="center">
            @if ($product->image)
                    <img src="{{ asset('storage/app/images/'.$product->image) }}" height="300px"  width="300px"alt="{{ $product->name }} Image">
             @endif
</p>
<table style="width:100%" class="table table-striped" id="product">
    <thead class="table-active">
    <tr>

        <th>Name</th>
        <th>Sku</th>
        <th>Description</th>
        <th>Available Quantity</th>
        <th>Purchase Price</th>
    </tr>
 </thead>
   
<tbody>   
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->sku}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->available_quantity}}</td>
            <td>{{$product->purchase_price}}</td>
        </tr>
</tbody>
    
</table>

@endsection