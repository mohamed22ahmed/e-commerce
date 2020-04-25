@include('user._header')
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(images/cart.jpg); background-position: left; background-attachment: fixed;">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
    </section>

	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Image</th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>
                        @foreach($products as $product)
                            <tr class="table-row">
                                <td class="column-1">
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="{{ asset('storage/imgs/'.$product->image) }}" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-2">{{ $product->name }}</td>
                                <td class="column-3" id="pr">{{ $product->price }}</td>
                                <td class="column-4">
                                    <div class="flex-w bo5 of-hidden w-size17">
                                        <button class="btn-num-product-down btn-danger flex-c-m size7 eff2" onclick="document.getElementById('total').innerHTML=parseInt(document.getElementById('v').value-1)*parseInt(document.getElementById('pr').innerHTML)">
                                            <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                        </button>

                                        <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1" id="v" >

                                        <button class="btn-num-product-up btn-success flex-c-m size7 eff2" onclick="document.getElementById('total').innerHTML=(parseInt(document.getElementById('v').value)+1)*parseInt(document.getElementById('pr').innerHTML)">
                                            <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="column-5" id="total">{{ $product->price }}</td>
                            </tr>
                        @endforeach
					</table>
				</div>
			</div>
		</div>
    </section>
    <script>
        function updateTotal(v){
            var r=parseInt(document.getElementById('pr').innerHTML);

            document.getElementById('total').innerHTML=x*r;
        }
    </script>
@include('user._footer')
