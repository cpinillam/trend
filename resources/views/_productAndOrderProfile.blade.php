<hr>
<ul class="card-header nav nav-pills">
    <li class="active"><a data-toggle="pill" class="likit-border-button" href="#myProducts">MY PRODUCTS</a></li>

    @can('edit',$profileDetails)
        <li class=""><a data-toggle="pill" class="likit-border-button" href="#myOrders">MY Orders</a></li>
    @endcan
</ul>
<div class="card-header tab-content">
    <div id="myProducts" class="card-header tab-pane fade in active show"> 
        <div name="product" id="product" class="" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
        @foreach($userProducts as $product)
            <form action="../product/{{$product->id}}" method='get'><input type='submit' value="{{$product->sellable ? $product->name :  "#$product->id VENDIDO"}}" class="btn {{$product->sellable ? 'btn-success' : 'btn-danger'}}" style='text-align:center;border-radius:5px;margin: 5px; padding: 38px 0; width: 100px;'></form>
        @endforeach
        </div>
    </div>

    

    <div id="myOrders" class="card-header tab-pane fade in">
        <div name="order" id="order" class="" style="display: flex; flex-wrap:wrap;justify-content:flex-start;">
        @if($myorders->count() >= 1)
            @can('isOwnerOfProduct', $myorders[0])
                @foreach($myorders as $order)
                    <form action="../product/{{$order->product_id}}" method='get'><input type='submit' value="{{$order->product->name}}" class="btn btn-success" style='text-align:center;border-radius:5px;margin: 5px; padding: 38px 0; width: 100px;'></form>
                @endforeach
            @endcan
        @endif
        </div>
    </div>

    
</div>