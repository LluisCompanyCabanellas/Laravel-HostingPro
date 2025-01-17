<div class="page-section" id="products">
<div class="products">
    <div class="desktop-two-columns-aside">
        <div class="column-aside">
            <div class="categories">
                <div class="categories-title">
                    <h3>CATEGORIAS</h3>
                </div>

                <div class="categories-elements">
                    <ul>
                        @foreach($product_categories as $category_element)
                        <li class="category-button {{isset($category) && $category->id == $category_element->id ? 'active' : '' }}"
                            data-url="{{route('posts_category', ['category' => $category_element->id])}}">
                            {{$category_element->title}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="column-main">

            <form class="searcherproduct" action="{{route('front_products_search')}}">

                <input class="buscador" type="search" name="buscador" placeholder="..........." value="">
                <button class="searcher">Buscar</button>

            </form>


            <select name="select" class="order-price" value="{{isset($value) ? $active : ''}}">
                <option class="order-content" value="">Ordenar por precio</option>
                <option class="order-content" value="{{route('front_order_price', ['order' => 'price_desc'])}}"
                    {{ isset($order) && $order == 'price_desc' ? 'selected' : ''}}>De mayor a menor</option>
                <option class="order-content" value="{{route('front_order_price', ['order' => 'price_asc'])}}"
                    {{ isset($order) && $order == 'price_desc' ? 'selected' : ''}}>De menor a mayor</option>
            </select>

            @if (isset($products))

            <div class="products-gallery">
                @foreach($products as $product)


                <div class="product">
                    <div class="column">
                        <div class="product-image">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="60" viewBox="0 0 180 60"
                                width="180">
                                <path
                                    d="m51.2967 21.8246c-1.6232-5.9888-4.8415-10.6623-10.9702-12.84512-1.1474-.41978-2.3507-.67164-3.5261-.97948h-5.569c-.112.36381-.4478.25187-.6997.30784-6.8843 1.31529-11.3059 5.40116-13.5447 11.92166-1.6512 4.7854-1.8191 9.7108-1.0915 14.6642 1.4553 9.8507 8.4515 17.8824 20.1213 17.0149 4.4776-.3358 8.4795-1.819 11.8937-4.7855.4197-.3638.8675-.6716.2238-1.3153-1.3153-1.3153-2.5466-2.6865-3.8059-4.0578-.4758-.5317-.8396-.5317-1.3993-.084-.9515.7556-2.0149 1.3433-3.1343 1.7631-4.1138 1.5392-8.1716 1.791-11.8097-1.1754-2.4907-2.0429-3.4981-4.8974-4.1138-7.9477-.2239-1.2034.056-1.3713 1.1754-1.3713 8.4515.028 16.9029-.028 25.3544.056 1.3433 0 1.6512-.4758 1.7071-1.6511.1679-3.2183 0-6.4086-.8115-9.515zm-9.487 4.2538h-8.0877c-2.9104 0-5.8488 0-8.7593 0-.4478 0-.9795.2238-1.0075-.6717-.1119-4.0298 3.2743-8.6754 7.1083-9.6268 6.2686-1.5392 11.5018 1.9589 12.4253 8.3115.2799 1.987.2799 1.987-1.6791 1.987z"
                                    fill="#fe7b00" />
                                <path
                                    d="m72.7612 8c1.791.58769 3.666.69963 5.4571 1.37127 1.959.72763 3.834 1.62313 5.625 2.68653.7276.4478.8116.8116.3638 1.5392-.8955 1.4552-1.7631 2.9384-2.5746 4.4496-.4478.8396-.7836.8676-1.5672.3638-3.5261-2.2667-7.416-3.2742-11.6418-2.9104-2.7985.2519-4.4776 1.819-4.3097 4.0858.112 1.5112 1.1474 2.3788 2.2948 3.1343 2.2668 1.4833 4.8134 2.3788 7.3041 3.3583 2.4627.9514 4.8694 2.0149 7.1362 3.3862 4.2537 2.5466 5.8209 6.4365 5.5131 11.166-.3638 5.1772-3.1624 8.6474-8.0598 10.1866-8.4235 2.6026-16.2873.9235-23.6194-3.7221-.5876-.3638-.5597-.6436-.2238-1.1753.9794-1.5112 1.9309-3.0504 2.7985-4.6176.4197-.7556.7276-.8115 1.4552-.3358 4.1978 2.6306 8.7313 4.0019 13.7407 3.5261.9794-.0839 1.9309-.2798 2.8265-.6436 1.4552-.5877 2.5186-1.5672 2.7425-3.2183.2239-1.7351-.4757-3.0504-1.847-4.0578-1.987-1.4832-4.3097-2.2948-6.6045-3.1903-2.9664-1.1754-5.9328-2.3228-8.6754-4.0019-4.5056-2.7705-5.8209-6.9403-5.0933-11.8377.6997-4.7295 3.89-7.388 8.3396-8.64738 1.0914-.30783 2.2108-.53171 3.3022-.81156 1.7911-.08396 3.5541-.08396 5.3172-.08396z"
                                    fill="#fe7c00" />
                                <path
                                    d="m0 44.6885c.895522-2.7986 2.49067-4.8695 5.51306-5.653 3.66604-.9235 7.52794 1.3153 8.50744 5.0373 1.0075 3.806-1.2313 7.6959-4.95334 8.6474-3.75.9515-7.24813-.8676-8.619399-4.4497-.11194-.2798-.027985-.6716-.4197759-.8115-.0279851-.9235-.0279851-1.847-.0279851-2.7705z"
                                    fill="#dd002c" /></svg>
                        </div>
                        <div class="product-title">
                            <h4>{!! $product->title !!}</h4>
                        </div>
                        <div class="product-price">
                            <div class="howmuch">
                                <span>{{ $product->prices->first()->base_price }}</span>
                            </div>
                            <div class="moneda">

                                <span>€/año</span>
                            </div>
                        </div>
                        <div class="product-description">
                            <h4>{!! $product->description !!}</h4>

                        </div>
                        <div class="product-button">
                            <button class="view-product"
                            
                                data-url="{{route('front_product', ['product' => $product->id])}}">CONTRATAR</button>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

            @endif
        </div>
    </div>
</div>
