<head>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }
        td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }
        th {
        padding: 8px;
        text-align: left;
        background-color: rgb(204, 202, 202);
        color: black;
        }
        #watermark { 
            position: fixed; 
            bottom: 60%; 
            right: 28%;
            z-index:999; 
            opacity: 0.3;
            font-size: 40px;
          
        }
        #below { 
            bottom: 0px; 
            position: fixed; 
            right:0px;
            font-size: 12px;
            color: red;
        }
        </style>
        <title>shawpno</title>
</head>
<body>
    

<div id="watermark">
    <img src="https://s3.amazonaws.com/freestock-prod/450/freestock_562309219.jpg" alt="" height="300px">
    
</div>
<center>
    <img src="https://prod-media-eng.dhakatribune.com/uploads/2020/10/shwapno-to-sell-potatoes-at-tk30-per-kg-1603177033315.jpg" alt="" height="80px">
    <h3>Shawpno</h3>
    <p>3A, H, R-4 Green Rd, Dhaka 1205</p>
</center>
<hr>
<h2 style="color: rgb(34, 34, 39)">Invoice NO #shawpno{{$invoices->invoice_number}}</h2>
<hr>
<div class="container">
<table style="width:50%">
    <tr>
        <td>Customer Email : </td>
        <td>{{$invoices->customer_email}}</td>
    </tr>
    <tr>
        <td>Payment Method : </td>
        <td>{{$invoices->payment_method}}</td>
    </tr>
    <tr>
        <td>Total : </td>
        <td>{{$invoices->total}} Taka</td>
    </tr>
    <tr>
        <td>Date: </td>
        <td>{{date_format(date_create($invoices->created_at),"d/M/Y H:i:s")}}</td>
    </tr>
</table>
</div>
@php
    $serial = 0;
@endphp
<hr>
<table style="width:100%">
    <tr>
        <th>SL</th>
        <th>Products Name</th>
        <th>Quantity</th>
        <th>Selling Price</th>
        <th>Sub total</th>
       
    </tr>
  
    @foreach ($sold_items as $sold_item)
        @foreach ($products as $product)
        @if ($sold_item->product_id == $product->id)
            <tr>
            
                <td>{{++$serial}}</td>
                <td>{{$product->name}}</td>
                <td>{{$sold_item->quantity}}</td>
                <td>{{$sold_item->selling_price}}</td>
                <td>{{$sold_item->quantity * $sold_item->selling_price}}</td>
                
            
            </tr>
            @endif
        @endforeach
    @endforeach
    <tr style="background-color: rgb(204, 202, 202)">
        
        <td></td>
        <td></td>
        <td></td>
        <td>Grand Total  =  </td>
        <td>{{$invoices->total}}</td>
        
    </tr>
</table>
<hr>
</body>
    



