@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Order</h2>

<form action="{{route('placeorder')}}" method="post" onsubmit="return validation()">
    @csrf
    <hr>
    <table align="center" style="width:60%" onclick="total()">
        <tr>
            <td><b>Invoice Number : </b></td>
            <td><input type="number" name="invoice_no" id="invoiceno" class="form-control">
            <td><span id="error1" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Customer Email : </b></td>
            <td><input type="email" name="email" id="email" class="form-control"></td>
            <td><span id="error2" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Payment Method : </b></td>
            <td><input type="text" name="payment_method" id="payment" class="form-control"></td>
            <td><span id="error3" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Date : </b></td>
            <td><input type="date" name="date" id="date" class="form-control"></td>
            <td><span id="error4" style="color: red"></span></td>
        </tr>
        <tr>
            <td><b>Grand Total : </b></td>
            <td><input type="number" name="" id="grandtotal" class="form-control" ></td>
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
    
            
        <tr onchange="firstProduct()">
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
            <td><input type="number" name="" id="total1" class="form-control" ></td>
        </tr>

        <tr onchange="secondProduct()">
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
            <td><input type="number" name="" id="total2" class="form-control" ></td>
        </tr>

        <tr onchange="thirdProduct()">
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
            <td><input type="number" name="" id="total3" class="form-control" ></td>
        </tr>

        <tr onchange="forthProduct()">
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
            <td><input type="number" name="" id="total4" class="form-control" ></td>
        </tr>

        <tr onchange="fifthProduct()">
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
            <td><input type="number" name="" id="total5" class="form-control" ></td>
        </tr>

        <tr onchange="sixthProduct()">
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
            <td><input type="number" id="total6" class="form-control"></td>
        </tr>
        
        <tr>
            <td></td>
            <td align="right">
                <input type="submit" name="submit" value="Confirm" id="submit" class="btn btn-success">
            </td>
            <td></td>
            <td></td>
        </tr>

    </table>
    <hr>
    
</form>

<script>

    var item = [];
    let sum = 0;
   function total()
   {
        for(let i = 0; i < item.length; i++){
           
            sum += item[i];
        }
        document.getElementById('grandtotal').value = sum;
        sum = 0;
   }

    function validation()
    {

        // alert('jhasd');
        let invoiceno = document.getElementById('invoiceno').value;
        let email = document.getElementById('email').value;
        let payment = document.getElementById('payment').value;
        let date = document.getElementById('date').value;
       

        let error1 = document.getElementById('error1');
        let error2 = document.getElementById('error2');
        let error3 = document.getElementById('error3');
        let error4 = document.getElementById('error4');
        

        if(invoiceno == "")
        {
            clear();
            error1.innerHTML = "*Invoice No is required!";
            return false;
        }
        if(email == "")
        {
            clear();
            error2.innerHTML = "*Email is required!";
            return false;
        }
        if(payment == "")
        {
            clear();
            error3.innerHTML = "*Payment Method is required!";
            return false;
        }
        if(date == "")
        {
            clear();
            error4.innerHTML = "*Date is required!";
            return false;
        }
        
        else{
            alert('Are You Sure!');
            return true;
        }
        
    } 

    function clear()
    {
        error1.innerHTML = "";
        error2.innerHTML = "";
        error3.innerHTML = "";
        error4.innerHTML = "";
        
    }
    // function msg()
    // {
    //     // document.getElementById('submit').alert('hj');
    //     alert('Are You Sure!');    
    // }
  
    let i = 0;
    function firstProduct(){
        let input1 = document.getElementById('price1').value;
        let input2 = document.getElementById('quantity1').value;
        let input3 = document.getElementById('total1');

        input3.value = input1*input2;
        item[0]=input1*input2;
        // item.push(input1*input2);
    }
    function secondProduct(){
        let input1 = document.getElementById('price2').value;
        let input2 = document.getElementById('quantity2').value;
        let input3 = document.getElementById('total2');

        input3.value = input1*input2;
        item[1]=input1*input2;
        // item.push(input1*input2);
    }
    function thirdProduct(){
        let input1 = document.getElementById('price3').value;
        let input2 = document.getElementById('quantity3').value;
        let input3 = document.getElementById('total3');

        input3.value = input1*input2;
        item[2]=input1*input2;
    }
    function forthProduct(){
        let input1 = document.getElementById('price4').value;
        let input2 = document.getElementById('quantity4').value;
        let input3 = document.getElementById('total4');

        input3.value = input1*input2;
        item[3]=input1*input2;
    }
    function fifthProduct(){
        let input1 = document.getElementById('price5').value;
        let input2 = document.getElementById('quantity5').value;
        let input3 = document.getElementById('total5');

        input3.value = input1*input2;
        item[4]=input1*input2;
    }
    function sixthProduct(){
        let input1 = document.getElementById('price6').value;
        let input2 = document.getElementById('quantity6').value;
        let input3 = document.getElementById('total6');

        input3.value = input1*input2;
        item[5]=input1*input2;
    }
    
    
    
</script>
@endsection