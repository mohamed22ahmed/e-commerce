@include('user._header')
	{{--  <!-- Title Page -->  --}}
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(images/header.jpg); background-position: left; background-attachment: fixed;">
		<h2 class="l-text2 t-center">
			Hello
		</h2>
		<p class="m-text13 t-center">
			New have all Collection 2020
		</p>
		<button class="btn btn-dark mt-3">Shop Now</button>
	</section>

    <section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar shadow1 p-4">
						<h4 class="m-text14 p-b-7">
							Categories
                        </h4>
                        <ul class="p-b-54">
                            <li class="p-t-4">
                                <a href="/" class="s-text13 active1">
                                    All
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li class="p-t-4">
                                    <a href="/category/{{ $category->id }}" class="s-text13">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<div class="row">
                        @foreach ($products as $product)
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{ asset('storage/imgs/'.$product->image) }}" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <form action="/addToCart/{{ $product->id }}" method="POST">
                                                    @csrf
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type="submit">
                                                        Add to Cart
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="block2-txt p-t-20">
                                        <a href="/product" class="block2-name dis-block s-text3 p-b-5">
                                            {{ $product->name }}
                                        </a>
                                        <span class="block2-price m-text6 p-r-5">
                                            {{ $product->price }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

					<div class="pagination flex-m flex-w p-t-26">
						{!! $products->render() !!}
					</div>
				</div>
			</div>
		</div>
	</section>
@include('user._footer')
