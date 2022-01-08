<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');

    <style type="text/css">
        .title{
            color:white;padding-top:25px;font-size:25px; 
        }

        label{
            display: inline-block;width:200px;
        }

    
        

    </style>
  </head>
  <body>
 @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
       
      <div class="container-fluid page-body-wrapper">
          <div class="container" align="center">

<h1 class="title">Add Books</h1>


<form action="{{url('uploadbooks')}}" method="post" enctype="multipart/form-data">
        @csrf

<div style="padding:15px;">
    <label>Book Title</label>
    <input style="color:black;" type="text" name="title" placeholder="Product title here..." required="">
</div>

<div style="padding:15px;">
    <label>Price</label>
    <input style="color:black;" type="number" name="price" placeholder="Price here..." required="">
</div>

<div style="padding:15px;">
    <label>Description</label>
    <input style="color:black;" type="text" name="des" placeholder="Description here..." required="">
</div>

<div style="padding:15px;">
    <label>Quantity</label>
    <input style="color:black;" type="text" name="quantity" placeholder="Product quantity..." required="">
</div>

<div style="padding:15px;">
    <input type="file" name="file">
</div>

<div style="padding:15px;">
    <input class="btn btn-success" type="submit">
</div>
</form>

          </div>
    <!-- plugins:js -->
    @include('admin.script');
    <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
  </body>
</html>