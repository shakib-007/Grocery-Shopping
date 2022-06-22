@extends('layouts.layout')


@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Product List</h2>
<hr>
<table style="width:100%" class="table table-striped" id="product">
    <thead >
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
 </thead>
    @php
        $serial = 0;
    @endphp
<tbody>
    @foreach ( $products as $product )
        <tr>
            <td>{{++$serial}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->sku}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->available_quantity}}</td>
            <td>{{$product->purchase_price}}</td>
            {{-- <td><a href="/edit/{{$product->id}}" class="btn btn-info">Edit</a></td> --}}
            <td><a href="{{route('edit',$product->id)}}" class="btn btn-info btn-sm">Edit</a></td>
            <td><a href="{{route('delete',$product->id)}}" class="btn btn-danger btn-sm">Delete</a></td>


           
        </tr>
    @endforeach
</tbody>
    
</table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#product').DataTable();
        } );
    </script>


@endsection