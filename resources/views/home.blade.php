@extends('layouts.layout')

@section('content')

<hr>
    <h1 align="center" class="text-secondary" id="name">Welcome To Shawpno</h1>
    <h3 align="center" class="text-success">Here you get Best service from Us</h3> 
<hr>
<div id="box" style="width: 100px; height:100px;background-color:rgb(233, 45, 177)"></div>
<button class="btn btn-dark">Click</button>

<script>

    // var button = document.getElementById('button').addEventListener('click',abc);
    var box = document.getElementById('box').addEventListener('mousemove',abc);

    function abc(e){
        // document.getElementById('name').style.backgroundColor = 'black';
        // document.getElementById('name').innerHTML = '<h1>hjsd</h1>';
        

        document.body.style.backgroundColor = "rgb(" + e.offsetX + "," + e.offsetY + ",40)";

    }
    // var newdiv = document.createElement('div');

    // newdiv.className = 'hello';

    // var newdivtext = document.createTextNode('hello world');
    // newdiv.appendChild(newdivtext);

    // var container = document.querySelector('header h1');
    // var con = document.querySelector('header h3');

    // container.insertAfter(newdiv,con);
    // // console.log(newdiv);
</script>

@endsection