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
                        </div>
                    </div>


                    @foreach($data as $books)


                    <div class="col-md-4">
                        <div class="product-item">
                            <a href="#"
                                ><img src="assets/images/cd4.jpg" alt=""
                            /></a>
                            <div class="down-content">
                                <a href="#"><h4>{{$books->title}}</h4></a>
                                <h6>${{$books->price}}</h6>
                                <p>
                                    {{$books->description}}
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="d-flex justify-content-center">
                        {!!$data->links()!!}

                    </div>


                </div>
            </div>
        </div>