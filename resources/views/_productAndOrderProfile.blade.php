 <div class="card" style="margin-top:30px;">
    <div class="card-header">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" class="btn btn-primary" href="#myProducts">MY PRODUCTS</a></li>
            <li class=""><a data-toggle="pill" class="btn btn-primary" href="#myOrders">MY Orders</a></li>
        </ul>
    </div>
   
</div>

<div class="tab-content">
    <div id="myProducts" class="tab-pane fade in active show"> 
        <div name="product" id="product" class="card-body" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
        @foreach($userProducts as $product)
            <form action="../product/{{$product->id}}" method='get'><input type='submit' value="{{$product->sellable ? $product->name :  "#$product->id VENDIDO"}}" class="btn {{$product->sellable ? 'btn-success' : 'btn-danger'}}" style='text-align:center;border-radius:5px;margin: 5px; padding: 38px 0; width: 100px;'></form>
        @endforeach
        </div>
    </div>

    <div id="myOrders" class="tab-pane fade in" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
        @foreach($myorders as $order)
            <form action="../product/{{$order->product_id}}" method='get'><input type='submit' value="{{$order->product->name}}" class="btn btn-success" style='text-align:center;border-radius:5px;margin: 5px; padding: 38px 0; width: 100px;'></form>
        @endforeach
    </div>
</div>