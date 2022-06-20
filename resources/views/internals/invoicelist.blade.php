@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Invoice List</h2>
{{-- {{$sold_items->profit}} --}}
{{-- {{dd($sold_items)}} --}}
<hr>
<table style="width:100%" class="table table-striped" id="invoice">
    <thead>
    <tr>
        <th>SL</th>
        <th>Invoice Number</th>
        <th>Customer Email</th>
        <th>Total</th>
        <th>Payment Method</th>
        <th>Gross Profit</th>
        <th>Date</th>  
        <th>Operation</th>
        <th></th>
    </tr>
 </thead>
   
    @php
        $serial = 0;
    @endphp
<tbody>
    @foreach ( $invoices as $invoice )
        <tr>
            <td>{{++$serial}}</td>
            <td>{{$invoice->invoice_number}}</td>
            <td>{{$invoice->customer_email}}</td>
            <td>{{$invoice->total}}</td>
            <td>{{$invoice->payment_method}}</td>
            <td> 
                @foreach ($profits as $profit)
                    @if ($profit->id == $invoice->id)
                    {{$profit->grossprofit}}
                    @endif
                @endforeach
            </td>
           
            <td>{{$invoice->date}}</td>
            <td><a href="/view/{{$invoice->id}}" class="btn btn-info btn-sm">View</a></td>
            <td><a href="/deleteinvoice/{{$invoice->id}}" class="btn btn-danger btn-sm">Delete</a></td>


           
        </tr>
    @endforeach
</tbody>

</table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#invoice').DataTable();
        } );
    </script>
@endsection