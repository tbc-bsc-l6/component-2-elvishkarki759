<div class="latest-products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Latest Products</h2>
                            <a href="products.html"
                                >view all products
                                <i class="fa fa-angle-right"></i
                            ></a>

                            <form action="{{url('search')}}" method="" class="form-inline" style="float:right;padding:10px;">
                            @csrf
                              <input class="form-control" type="search" name="search" placeholder="search">
                              <input type="submit" value="search" class="btn btn-danger">
                            </form>
                        </div>
                    </div>


                    @foreach($data as $books)


                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="/bookimage/{{$books->image}}" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>{{$books->title}}</h4></a>
                                <h6>${{$books->price}}</h6>
                                <p>
                                    {{$books->description}}
                                </p>
                                <a class="btn btn-danger" href="">Add To Cart</a>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @if(method_exists($data,'links'))
                    <div class="d-flex justify-content-center" style="color:red">
                        {!!$data->links()!!}

                    </div>
                    @endif 

                </div>
            </div>
        </div>