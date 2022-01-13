<div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <div class="row">
                                <div class="col-md-8">
                                <h4 style="position: relative;left: 350px;">
                                        Subscribe to
                                        <em>The Cozy Store</em> Newsletter
                                    </h4>
                                    <!-- @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif -->
                                    <div style="position: relative;left: 190px;top:-10px" class="box">
                                        <form action="{{url('subscribe')}}" method="post">
                                            @csrf
                                            <!-- <input style="width: 500px;height: 37px;border-radius: 6px;" type="text" name="email" placeholder="Enter your email">             -->
                                            <label for="Email"></label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                    <!-- <a href="#" class="filled-button"
                                        >Subscribe</a> -->


                                        

                                        <button type="submit" class="btn btn-danger" style="position:relative;top:10px;left:300px;">Subscribe</button>
                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>