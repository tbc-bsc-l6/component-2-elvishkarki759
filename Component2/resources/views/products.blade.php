@extends('layouts.header')
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.container {
  background-color: #6c9aee;
}
</style>
</head>

<body >
<div class = "container">
<div class="row">
        <div class="col-md-6">
            <br>
        </div>
    <div class="col-md-6">
        <br>
    </div>

    </div>
<!-- <div class="p-3 mb-2 bg-primary text-white"> -->

<div class = "row">
<div class = "col-md-4">
<div class="panel panel-default">
    <div class="panel-body">
<h2> BOOK</h2>
@foreach($books as $product)
<a href="{{url('products/'.$product->getId())}}"></a>


<b>{{$product->getTitle()}}</b></br>


{{$product->getFirstName()}}

{{$product->getMainName()}}</br>
{{$product->getPrice()}}</br>

No. of pages :{{$product->getNumberofPages()}}</br>
</br>

<button><a href="{{url('products/'.$product->getId())}}">Select</a></button>


<!-- <form method="POST" action="/products">
@csrf
@method('select')
<button class="select product" value="{{$product->getId()}}">Select</button>
</form> -->
<br>
<br>
<br>
<br>


@endforeach
</div>
</div>
</div>

<div class = "col-md-4">
<div class="panel panel-default">
    <div class="panel-body">

<h2> CD</h2>
@foreach($cds as $product)
<a href="{{url('products/'.$product->getId())}}"></a>


<strong>{{$product->getTitle()}}</strong></br>

{{$product->getFirstName()}}
{{$product->getMainName()}}</br>

{{$product->getPrice()}}</br>

Playlength:{{$product->getPlayLength()}}</br>
</br>
 
<button><a href="{{url('products/'.$product->getId())}}">Select</a></button>


<!-- <form method="POST" action="/products">
@csrf
@method('select')
<button class="select product" value="{{$product->getId()}}">Select</button>
</form> -->
<br>
<br>
<br>
<br>
@endforeach
</div>
</div>
</div>

<div class = "col-md-4">
<div class="panel panel-default">
    <div class="panel-body">
 <form action="{{ url('products/store') }}" method="POST">
  @csrf
  <b><h2>Product Type : </h2></b>
  <select name ="type">
  <b><option value = "cd" > CD </option></b>
  <b><option value = "book" > Book </option></b>
  </select><br/>
  <input type = "text" name = "title" placeholder ="Title" required ><br/>
  <input type = "text" name = "firstname" placeholder ="firstname (optional)"  ><br/>
  <input type = "text" name = "surname" placeholder ="surname/band"  ><br/>
  <input type = "text" name = "price" placeholder ="price"  ><br/>
  <input type = "text" name = "papl" placeholder ="pages/play length"  ><br/>

  <button type = "submit" name = "save" class = "btn btn-dark" > Add new </button>

  </form>
  
  </div>
</div>
</div>
  </div>
</div>
</div>
  </body>
  </html>