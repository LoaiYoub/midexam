@extends('layout.app')
@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Product</h1>
             <div class="btn-group mr-2">
                    <a href="all_products.html" class="btn btn-outline-secondary">All Products</a>
                </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">

            <div class="card-body">
                @foreach ( $products as $product)
                <form action="{{url('update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="product_name">Product Name:</label>
                      <input type="text" class="form-control" name="product_name" value="{{$product->name}}"/>
                    </div>
                    <div class="form-group">
                      <label for="product_category">Product Category :</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="product_category" >

                        @foreach ( $products as $product)
                        <option>${{$products->category}}</option>
                            @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="product_price">Product Price :</label>
                        <input type="text" class="form-control" name="product_price" value="{{$product->price}}" />
                    </div>
                    <div class="form-group">
                        <label for="product_qty">Product Quantity:</label>
                        <input type="text" class="form-control" name="product_qty" value="{{$product->quantity}}" />
                    </div>

                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
                @endforeach
            </div>
        </div>
    </main>
  </div>
</div>


</body></html>
@endsection
