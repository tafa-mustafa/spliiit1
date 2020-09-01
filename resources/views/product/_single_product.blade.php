
 <div class="relative">
            <div class="part1-bloc">
                <div class="flex line-service-dash">
                    @if(!empty($product->cover_img))
                                <img src="{{asset('img/'.$product->cover_img)}}" alt="">
                            @else
                                <img src="/img/subscription/netflix.png" alt="">
                            @endif
                        <div class="tarif-bloc-dash">{{$product->price}}<br>
                        <span>/per month</span></div>
                </div>

                <div class="title-bloc-dash">{{$product->name}}
                        <div class="statut-info">

                            <div class="display-status-28017">
                                    <div class="display-status-private ">
                                        <span>Private</span>
                                        <span class="goto-public" data-id="28017">
                                            | <span class="card btn-modal-open"
                                            data-id="28017"
                                            data-verified="no"
                                            data-vault="0"
                                            data-info='{&quot;total_subscribers&quot;:0,&quot;availabilities&quot;:3,&quot;amount_mkp_com&quot;:1,&quot;service_logo&quot;:&quot;https:\/\/www.spliiit.com\/img\/subscription\/netflix.png&quot;,&quot;service_name&quot;:&quot;Netflix&quot;,&quot;service_password_required&quot;:1,&quot;service_cgu&quot;:&quot;https:\/\/help.netflix.com\/legal\/termsofuse&quot;}'
                                            data-name="Netflix Premium"
                                            data-warning="">Public</span>
                                        </span>
                                    </div>
                                    <div class="display-status-public d-none">
                                        <span>Public</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                            </div>
                    <div class="relative round-block">
                            <div class="big-round round-white-svg"></div>
                    </div>
        </div>

        <div class="part2-bloc">
            <div class="spliiiter-card-dash flex">
                <a class="btn-modal-infos border-owner-dash" style="background-image:url(https://www.spliiit.com/img/man-light.png)"></a>

                    <!-- <a id='show-dialogue-share' class="btn-modal-infos add-spliiiter-card">
                        <div class="share-spliiiter" id="share"
                    data-url="https://www.spliiit.com/5f1ea8a33677c"
                    data-id="5f1ea8a33677c" data-text="Jonathan offers to share the price of his subscription. There is only one place left, don&#039;t waste time ! ">+</div>
                </a> -->
                                <div class="nb-spliiiter-dash">
                                    <span class="blue">1</span>/4<br>
                                    <span class="info-nb-spliiiter">{{$product->description}}</span></div>
            </div>
                        <a href="{{ route('cart.add', $product->id) }}">
                            <div class="btn-detail-offer">Add Cart
                                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 27.3 47.1" xml:space="preserve"><g><g><path d="M1.1,41.2c-1.4,1.4-1.4,3.6,0,4.9c1.3,1.4,3.5,1.4,4.9,0l20-20c1.4-1.4,1.4-3.6,0-4.9l-20-20C4.5-0.2,2.3-0.2,1,1.2c-1.4,1.4-1.4,3.6,0,4.9l17.5,17.6L1.1,41.2z"></path></g></g></svg>
                </div>
            </a>
                    </div>
    </div>
</div>

