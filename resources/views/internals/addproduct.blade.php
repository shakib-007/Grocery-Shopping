@extends('layouts.layout')

@section('content')
<hr>
<h2>Add Product</h2>
<form action="/store" method="post">
    @csrf
   <hr>
    <table align="center">
        {{-- <tr>
            <td><hr></td>
            <td><hr></td>
        </tr> --}}
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name" id="" placeholder="Product Name"></td>
        </tr>
   
        <tr>
            <td>Sku : </td>
            <td><input type="number" name="sku" id="" placeholder="Product SKU"></td>
        </tr>
        <tr>
            <td>Description : </td>
            <td><input type="text" name="description" id="" placeholder="Product Description"></td>
        </tr>
        <tr>
            <td>Available Quantity : </td>
            <td><input type="number" name="availablequantity" id="" placeholder="Available Qunatity"></td>
        </tr>
        <tr>
            <td>Purchase Price : </td>
            <td><input type="number" name="purchaseprice" id=""placeholder="Purchase Price"></td>
        </tr>
       <tr>
        <td><hr></td>
        <td><hr></td>
       </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" class="btn btn-success" value="ADD PRODUCT">
            </td>
           
        </tr>
       
    </table>
    <hr>
    
</form>
@endsection