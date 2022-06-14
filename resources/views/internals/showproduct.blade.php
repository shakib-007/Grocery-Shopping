@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Product List</h2>
<hr>
<table style="width:100%" class="table table-striped" >
    <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Sku</th>
        <th>Description</th>
        <th>Available Quantity</th>
        <th>Purchase Price</th>
        <th>Operation</th>
        <th></th>
    </tr>

    @php
        $serial = 0;
    @endphp

    @foreach ( $products as $product )
        <tr>
            <td>{{++$serial}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->sku}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->available_quantity}}</td>
            <td>{{$product->purchase_price}}</td>
            <td><a href="/edit/{{$product->id}}" class="btn btn-info">Edit</a></td>
            <td><a href="/delete/{{$product->id}}" class="btn btn-danger">Delete</a></td>


           
        </tr>
    @endforeach
    
</table>
@endsection