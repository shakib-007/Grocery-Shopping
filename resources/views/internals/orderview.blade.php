@extends('layouts.layout')

@section('content')
<hr>
<h2>Order</h2>
<form action="/placeorder" method="post">
    @csrf
    <hr>
    <table align="center">
        <tr>
            <td><b>Invoice Number : </b></td>
            <td><input type="number" name="invoice_no"></td>
        </tr>
        <tr>
            <td><b>Customer Email : </b></td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td><b>Payment Method : </b></td>
            <td><input type="text" name="payment_method"></td>
        </tr>
        <tr>
            <td><b>Date : </b></td>
            <td><input type="date" name="date"></td>
        </tr>
    </table>
    <br>
    <hr>
    <table align="center">
        <tr>
            <td><b>Select Product <b></b></td>
            <td><b>Selling Price </b></td>
            <td><b>Quantity <b></b></td>
            
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
                <select name="product1" style="height: 30px;">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price1"></td>
            <td><input type="number" name="quantity1"></td>

        </tr>

        <tr>
            <td>
                <select name="product2" style="height: 30px;">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price2"></td>
            <td><input type="number" name="quantity2"></td>
        </tr>

        <tr>
            <td>
                <select name="product3" style="height: 30px;">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price3"></td>
            <td><input type="number" name="quantity3"></td>
        </tr>

        <tr>
            <td>
                <select name="product4" style="height: 30px;">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price4"></td>
            <td><input type="number" name="quantity4"></td>
        </tr>

        <tr>
            <td>
                <select name="product5" style="height: 30px;">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price5"></td>
            <td><input type="number" name="quantity5"></td>
        </tr>

        <tr>
            <td>
                <select name="product6" style="height: 30px;">
                    <option value="none">Choose Product</option>

                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Purchase Price: {{ $product->purchase_price }})
                            (Available Quantity: {{ $product->available_quantity }})
                        </option>
                    @endforeach

                </select>
            </td>
            <td><input type="number" name="price6"></td>
            <td><input type="number" name="quantity6"></td>
        </tr>

        <tr>
            
            <td align="right" >
                <input type="submit" name="submit" value="Confirm" class="btn btn-success">
            </td>
            <td></td>
            <td></td>
        </tr>

    </table>
    <hr>
    
</form>
@endsection