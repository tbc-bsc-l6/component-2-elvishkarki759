<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');

  </head>
  <body>
 @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
       


          <div class="container-fluid page-body-wrapper">
          <div class="container" align="center">

<h1 class="title">Add Games</h1>


<form action="{{url('uploadgames')}}" method="post" enctype="multipart/form-data">
        @csrf

<div class="pdg">
    <label class="lbel">Game Title</label>
    <input class="ipt" type="text" name="title" placeholder="Product title here..." required="">
</div>

<div class="pdg">
    <label class="lbel">Price</label>
    <input class="ipt" type="number" name="price" placeholder="Price here..." required="">
</div>

<div class="pdg">
    <label class="lbel">Description</label>
    <input class="ipt" type="text" name="des" placeholder="Description here..." required="">
</div>

<div class="pdg">
    <label class="lbel">Quantity</label>
    <input class="ipt" type="text" name="quantity" placeholder="Product quantity..." required="">
</div>

<div class="pdg">
    <input class="prgg" type="file" name="file">
</div>

<div class="pdg">
    <input class="btn btn-success" type="submit">
</div>
</form>

          </div>
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