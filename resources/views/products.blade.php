<div class="container products">

    <div class="row">

        @foreach($products as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p><strong>Цена: </strong> {{ $product->price }}$</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->id) }}"
                                                 class="btn btn-warning btn-block text-center" role="button">Добавить в корзину</a></p>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Перейти в корзину</a>

    </div><!-- End row -->

</div>


