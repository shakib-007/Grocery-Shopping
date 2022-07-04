@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Order</h2>
<form action="{{route('placeorder')}}" method="post">
    @csrf
    <hr>
    <table align="center" style="width:60%">
        <tr>
            <td><b>Invoice Number : </b></td>
            <td><input type="number" name="invoice_no" class="form-control"></td>
        </tr>
        <tr>
            <td><b>Customer Email : </b></td>
            <td><input type="email" name="email" class="form-control"></td>
        </tr>
        <tr>
            <td><b>Payment Method : </b></td>
            <td><input type="text" name="payment_method" class="form-control"></td>
        </tr>
        <tr>
            <td><b>Date : </b></td>
            <td><input type="date" name="date" class="form-control"></td>
        </tr>
    </table>
    <br>
    <hr>
   
    <table align="center" style="width: 60%">
        <tr>
            <td><b>Select Product <b></b></td>
            <td><b>Selling Price </b></td>
            <td><b>Quantity <b></b></td>
            <td><b>Sub Total <b></b></td>
        </tr>
        {{-- @foreach ($products as $product)
            <tr>
                
                <td><input type="checkbox" id="" name="product" value="{{$product->id}}">Name:{{$product->name}} 
                    | Available Quantity:{{$product->available_quantity}} | Purchase Price:{{$product->purchase_price}} Taka
                </td>
                <td></td>
                <td><input type="number" name="quantity"></td>
                <td><input type="number" name="sellingprice"></td>
            </tr>
        @endforeach --}}
        
            
        <tr>
            <td>
                <select name="product1" class="form-select" >
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price1" id="price1" class="form-control"></td>
            <td><input type="number" name="quantity1" id="quantity1" class="form-control"></td>
            <td><input type="number" name="" id="total1" class="form-control" onmouseover="firstProduct()"></td>
        </tr>

        <tr>
            <td>
                <select name="product2" class="form-select">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price2" id="price2" class="form-control"></td>
            <td><input type="number" name="quantity2"  id="quantity2" class="form-control"></td>
            <td><input type="number" name="" id="total2" class="form-control" onmouseover="secondProduct()"></td>
        </tr>

        <tr>
            <td>
                <select name="product3" class="form-select">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price3" id="price3" class="form-control"></td>
            <td><input type="number" name="quantity3"  id="quantity3" class="form-control"></td>
            <td><input type="number" name="" id="total3" class="form-control" onmouseover="thirdProduct()"></td>
        </tr>

        <tr>
            <td>
                <select name="product4" class="form-select">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price4" id="price4" class="form-control"></td>
            <td><input type="number" name="quantity4"  id="quantity4" class="form-control"></td>
            <td><input type="number" name="" id="total4" class="form-control" onmouseover="forthProduct()"></td>
        </tr>

        <tr>
            <td>
                <select name="product5" class="form-select">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price5" id="price5" class="form-control"></td>
            <td><input type="number" name="quantity5" id="quantity5" class="form-control"></td>
            <td><input type="number" name="" id="total5" class="form-control" onmouseover="fifthProduct()"></td>
        </tr>

        <tr>
            <td>
                <select name="product6" class="form-select">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price6" id="price6" class="form-control"></td>
            <td><input type="number" name="quantity6" id="quantity6"  class="form-control"></td>
            <td><input type="number" id="total6" class="form-control" onmouseover="sixthProduct()"></td>
        </tr>
        
        <tr>
            <td></td>
            <td align="right">
                <input type="submit" name="submit" value="Confirm" class="btn btn-success">
            </td>
            <td></td>
            <td></td>
        </tr>

    </table>
<script>
   
    
    
    function firstProduct(){
        let input1 = document.getElementById('price1').value;
        let input2 = document.getElementById('quantity1').value;
        let input3 = document.getElementById('total1');

        input3.value = input1*input2;
    }
    function secondProduct(){
        let input1 = document.getElementById('price2').value;
        let input2 = document.getElementById('quantity2').value;
        let input3 = document.getElementById('total2');
        
        input3.value = input1*input2;
    }
    function thirdProduct(){
        let input1 = document.getElementById('price3').value;
        let input2 = document.getElementById('quantity3').value;
        let input3 = document.getElementById('total3');

        input3.value = input1*input2;
    }
    function forthProduct(){
        let input1 = document.getElementById('price4').value;
        let input2 = document.getElementById('quantity4').value;
        let input3 = document.getElementById('total4');

        input3.value = input1*input2;
    }
    function fifthProduct(){
        let input1 = document.getElementById('price5').value;
        let input2 = document.getElementById('quantity5').value;
        let input3 = document.getElementById('total5');

        input3.value = input1*input2;
    }
    function sixthProduct(){
        let input1 = document.getElementById('price6').value;
        let input2 = document.getElementById('quantity6').value;
        let input3 = document.getElementById('total6');

        input3.value = input1*input2;
    }
</script>
    <hr>
   

    
</form>
@endsection