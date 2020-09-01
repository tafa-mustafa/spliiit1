<div>
    {{-- In work, do what you enjoy. --}}

    <div class="cart-main-area pt-95 pb-100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="cart-heading"></h1>
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>retier</th>
                                    <th>images</th>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($cartItems as $item)
                                <tr>
                                    <td class="product-remove">
                                       <span class="link"> <a class="btn-orange" href="{{ route('cart.destroy', $item['id']) }}">X<i
                                                class="pe-7s-close"></i></a></span>

                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{ $item['name'] }} </a></td>
                                    <td class="product-price-cart line-suscribe"><span
                                            class="amount">${{Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}</span>
                                    </td>
                                    <td class="product-quantity line-suscribe">
                                        <livewire:cart-update-form :item="$item" :key="$item['id']" />
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>totals</h2>
                                <ul>
                                    <li>SubTotal<span>{{\Cart::session(auth()->id())->getSubTotal()}}</span></li>
                                    <li>Total<span>{{\Cart::session(auth()->id())->getTotal()}}</span></li>
                                </ul>
                                <a href="{{route('cart.checkout')}}" class="btn-login" style='margin: 75px;'>Proceder  a la commande</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
