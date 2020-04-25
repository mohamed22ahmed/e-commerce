@include('user._header')
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>
                <div class="slick3">
                    <div class="item-slick3" data-thumb="{{ asset('storage/imgs/'.$product->image) }}">
                        <div class="wrap-pic-w">
                            <img src="{{ asset('storage/imgs/'.$product->image) }}" alt="IMG-PRODUCT">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                {{ $product->name }}
            </h4>

            <span class="m-text17">
               {{ $product->price }}
            </span>

            <div class="p-t-33 p-b-60">
                <div class="flex-r-m flex-w p-t-10">
                        <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                            <form action="/addToCart/{{ $product->id }}" method="POST">
                                <button type="submit"class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('user._footer')
