

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
  </head>
  <body>
 @include('admin.sidebar');
      <!-- partial -->
      @include('admin.navbar');
       

      <!-- body -->
      <div style="padding-bottom:30px" class="container-fluid page-body-wrapper">
          <div class="container" align="center">
          <table>
              <tr align="center" style="background-color: grey;">
                  <td style="padding:20px">Title</td>
                  <td style="padding:20px">Description</td>
                  <td style="padding:20px">Quantity</td>
                  <td style="padding:20px">Price</td>
                  <td style="padding:20px">Image</td>
                  <td style="padding:20px">Update</td>
                  <td style="padding:20px">Delete</td>

              </tr>

              @foreach($data as $cds)
              <tr align="center" style="background-color: black;">
                  <td>{{$cds->title}}</td>
                  <td>{{$cds->description}}</td>
                  <td>{{$cds->quantity}}</td>
                  <td>{{$cds->price}}</td>
                  <td>
                      <img height="50" width="100" src="/cdimage/{{$cds->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updatecds',$cds->id)}}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('deletecds',$cds->id)}}">Delete</a>
                    </td>
              </tr>

              @endforeach
          </table>
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