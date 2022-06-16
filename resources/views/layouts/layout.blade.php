<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    
    <title>SHAWPNO</title>
</head>
<body>
    <ul class="nav" style="background-color:rgb(10, 41, 87);">
        {{-- <li class="nav-item" >
          <a class="nav-link active"  href="{{route('in')}}">Home</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link text-white" href="/"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/show"><b>Product List</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/create"><b>Add Product</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/orderview"><b>Order</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="/invoicelist"><b>Invoice List</b></a>
        </li>
      </ul>
    <div class="container">
        @include('layouts.message')
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
</body>

</html>