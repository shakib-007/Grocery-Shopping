@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Add Product</h2>
<form action="{{route('store')}}" method="post">
    @csrf
   <hr>
    <table align="center" >
        {{-- <tr>
            <td><hr></td>
            <td><hr></td>
        </tr> --}}
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name" id="" placeholder="Product Name" class="form-control" ></td>
        </tr>
   
        <tr>
            <td>Sku : </td>
            <td><input type="number" name="sku" id="" placeholder="Product SKU" class="form-control"></td>
        </tr>
        <tr>
            <td>Description : </td>
            <td><input type="text" name="description" id="" placeholder="Product Description" class="form-control"></td>
        </tr>
        <tr>
            <td>Available Quantity : </td>
            <td><input type="number" name="availablequantity" id="" placeholder="Available Qunatity" class="form-control"></td>
        </tr>
        <tr>
            <td>Purchase Price : </td>
            <td><input type="number" name="purchaseprice" id=""placeholder="Purchase Price" class="form-control"></td>
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