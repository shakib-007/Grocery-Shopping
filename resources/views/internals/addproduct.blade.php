@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Add Product</h2>
<form action="{{route('store')}}" method="post" enctype="multipart/form-data" onsubmit="return validation()">
    @csrf
   <hr>
    <table align="center" >
        {{-- <tr>
            <td><hr></td>
            <td><hr></td>
        </tr> --}}
        <tr>
            <td><b>Name : </b></td>
            <td><input type="text" name="name" id="name" placeholder="Product Name" class="form-control" ></td>
            {{-- <td>{{$errors->first('name')}}</td> --}}
            <td><span id="error1" style="color: red"></span></td>
        </tr>
   
        <tr>
            <td><b>Sku : </b></td>
            <td><input type="text" name="sku" id="sku" placeholder="Product SKU" class="form-control"></td>
            <td><span id="error2" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Description : </b></td>
            <td><input type="text" name="description" id="description" placeholder="Product Description" class="form-control"></td>
            <td><span id="error3" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Available Quantity : </b></td>
            <td><input type="number" name="availablequantity" id="availablequantity" placeholder="Available Qunatity" class="form-control"></td>
            <td><span id="error4" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Purchase Price : </b></td>
            <td><input type="number" name="purchaseprice" id="purchaseprice" placeholder="Purchase Price" class="form-control"></td>
            <td><span id="error5" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Upload Product Image : </b></td>
            <td><input type="file" id="" name="image" class="form-control"></td>
        </tr>
       <tr>
        <td><hr></td>
        <td><hr></td>
       </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" class="btn btn-success" id="submit" value="ADD PRODUCT">
            </td>
           
        </tr>
       
    </table>
    <hr>
    
</form>
<script>    
   
    function validation()
    {
        let name = document.getElementById('name').value;
        let sku = document.getElementById('sku').value;
        let description = document.getElementById('description').value;
        let availablequantity = document.getElementById('availablequantity').value;
        let purchaseprice = document.getElementById('purchaseprice').value;

        let error1 = document.getElementById('error1');
        let error2 = document.getElementById('error2');
        let error3 = document.getElementById('error3');
        let error4 = document.getElementById('error4');
        let error5 = document.getElementById('error5');
        
        if(name == "")
        {
            clear();
            error1.innerHTML = "*Name is required!";
            return false;
        }
        if(sku == "")
        {
            clear();
            error2.innerHTML = "*Sku is required!";
            return false;
        }
        if(description == "")
        {
            clear();
            error3.innerHTML = "*Description is required!";
            return false;
        }
        if(availablequantity == "")
        {
            clear();
            error4.innerHTML = "*Available Quantity is required!";
            return false;
        }
        if(purchaseprice == "")
        {
            clear();
            error5.innerHTML = "*Purchase Price is required!";
            return false;
        }
        else{
            alert('Submitted Successfully!');
            return true;
        }
        
    } 

    function clear()
    {
        error1.innerHTML = "";
        error2.innerHTML = "";
        error3.innerHTML = "";
        error4.innerHTML = "";
        error5.innerHTML = "";
    }
</script>
@endsection