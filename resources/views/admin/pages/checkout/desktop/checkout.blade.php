<div class="p-visible">
    <div class="p-title">
        <h3>Productos</h3>
    </div>
    <div class="productos">
        @foreach($sells->carts->first()->price->product->get() as $product)
            <div class="producto">
                <div class="big-box">
                        <div class="title">
                            <span>Producto</span>
                        </div>
                        <div class="data">
                            <span>{!!$product->name!!}</span>
                        </div>
                    <div class="data">
                        {{$sale->customer->number}}//?¿
                        <div class="title">
                            <span>Descripción</span>
                        </div>
                        <div class="data">
                            <span>{!!$product->description!!}</span>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else 