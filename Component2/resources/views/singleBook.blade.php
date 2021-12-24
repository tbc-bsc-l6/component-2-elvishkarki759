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
  background-color: #6495ED;
}
</style>
</head>

<body >
<div class = "container">
<div class="row">
    <h2>Update And delete</h2>
<div class = "col-md-4">
<div class="panel panel-default">
    <div class="panel-body">

@foreach ($id as $products)

 <form action="{{ url('products/update/'.$products -> getId ()) }}" method="POST">

  <b>Product Type : <input type="text" name="" value="{{$products -> getId ()}}"></h2></b>

  <br/>
  <input type = "text" name = "title" placeholder ="Title" value="{{$products -> getTitle ()}}" ><br/>
  <input type = "text" name = "firstname" placeholder ="firstname (optional)"  value="{{$products -> getTitle ()}}" ><br/>
  <input type = "text" name = "surname" placeholder ="surname/band" value="{{$products -> getMainName ()}}"  ><br/>
  <input type = "text" name = "price" placeholder ="price" value="{{$products -> getPrice ()}}"   ><br/>
  <input type = "text" name = "numberofpages" placeholder ="numberofpages" value="{{$products -> getNumberofpages ()}}"  ><br/>

  <button type = "submit" name = "update" class = "btn btn-default" > Update </button> <a href="{{url('delete/'.$products->getId())}}" class="btn btn-default">Delete </a>



</form>



@endforeach
</div>