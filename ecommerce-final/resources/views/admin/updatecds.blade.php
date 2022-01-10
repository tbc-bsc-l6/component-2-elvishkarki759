<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.css');

  </head>
  <body>
 @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
       

      <!-- body -->
      <div class="container-fluid page-body-wrapper">
          <div class="container" align="center">

<h1 class="title">Update CDs</h1>


<form action="{{url('updatecd',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

<div class="pdg">
    <label class="lbel">Book Title</label>
    <input class="ipt" type="text" name="title" value="{{$data->title}}" required="">
</div>

<div class="pdg">
    <label class="lbel">Price</label>
    <input class="ipt" type="number" name="price" value="{{$data->price}}" required="">
</div>

<div class="pdg">
    <label class="lbel">Description</label>
    <input class="ipt" type="text" name="des" value="{{$data->description}}" required="">
</div>

<div class="pdg">
    <label class="lbel">Quantity</label>
    <input class="ipt" type="text" name="quantity" value="{{$data->quantity}}" required="">
</div>

<div class="pdg">
    <label class="lbel lbl">Old Image</label>
    <img class="lbll" height="60" width="120" src="/cdimage/{{$data->image}}" alt="">

</div>

<div class="pdg">
    <input class="prgg" type="file" name="file">
    <!-- <p class="prg">Image</p> -->
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