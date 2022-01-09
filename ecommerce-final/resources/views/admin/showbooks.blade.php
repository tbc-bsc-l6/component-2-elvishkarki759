

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

              @foreach($data as $books)
              <tr align="center" style="background-color: black;">
                  <td>{{$books->title}}</td>
                  <td>{{$books->description}}</td>
                  <td>{{$books->quantity}}</td>
                  <td>{{$books->price}}</td>
                  <td>
                      <img height="50" width="100" src="/bookimage/{{$books->image}}">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updatebooks',$books->id)}}">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('deletebooks',$books->id)}}">Delete</a>
                    </td>
              </tr>

              @endforeach
          </table>
 
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