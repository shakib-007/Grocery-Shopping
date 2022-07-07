@extends('layouts.layout')

@section('content')
<hr>
<h2 style="color: rgb(18, 25, 119)">Invoice List</h2>
{{-- {{$sold_items->profit}} --}}
{{-- {{dd($sold_items)}} --}}
<hr>
<table style="width:100%" class="table table-striped" id="invoice">
    <thead class="table-active">
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
            {{-- <td>{{$invoice->payment_method}}</td> --}}
            <td>
                @if ($invoice->payment_method == 'cash')
                     {{$invoice->payment_method}} <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6HWE3NHxEtKYWjZmI3KvHsleZC0kUrqEkDdF4ru2WEsB_shLIxNQ2cWCYUfz6aP8EKp0&usqp=CAU" alt="cash icon" height="30px">
                @elseif ($invoice->payment_method == 'card')
                    {{$invoice->payment_method}} <img src="https://thumbs.dreamstime.com/b/credit-card-icon-flat-style-illustration-vector-web-79711478.jpg" alt="card icon" height="30px">
                @else
                    {{$invoice->payment_method}}<img src="data:image/png;base64,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" alt="bkash icon" height="30px">
                @endif
            </td>
            <td> 
                @foreach ($profits as $profit)
                    @if ($profit->id == $invoice->id )
                        {{$profit->grossprofit}}           
                    @endif           
                @endforeach
            </td>
           
            <td>{{$invoice->date}}</td>
            <td><a href="{{route('view',$invoice->id)}}" class="btn btn-info btn-sm">View</a></td>
            <td><a href="{{route('deleteinvoice',$invoice->id)}}" class="btn btn-danger btn-sm">Delete</a></td>


           
        </tr>
    @endforeach
</tbody>

</table>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript">
        $(document).ready( function () {
            $('#invoice').DataTable({
                scrollY: '400px',
                scrollCollapse: true,
                paging: false,
            });
        } );
    </script>
@endsection