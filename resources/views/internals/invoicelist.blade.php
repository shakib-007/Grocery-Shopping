@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Invoice List</h2>
<hr>
<table style="width:100%" class="table table-striped" >
    <tr>
        <th>SL</th>
        <th>Invoice Number</th>
        <th>Customer Email</th>
        <th>Total</th>
        <th>Payment Method</th>
        <th>Date</th>  
        <th>Operation</th>
        <th></th>
    </tr>

    @php
        $serial = 0;
    @endphp

    @foreach ( $invoices as $invoice )
        <tr>
            <td>{{++$serial}}</td>
            <td>{{$invoice->invoice_number}}</td>
            <td>{{$invoice->customer_email}}</td>
            <td>{{$invoice->total}}</td>
            <td>{{$invoice->payment_method}}</td>
            <td>{{$invoice->date}}</td>
            <td><a href="/view/{{$invoice->id}}" class="btn btn-info">View</a></td>
            <td><a href="/deleteinvoice/{{$invoice->id}}" class="btn btn-danger">Delete</a></td>


           
        </tr>
    @endforeach
    
</table>
@endsection