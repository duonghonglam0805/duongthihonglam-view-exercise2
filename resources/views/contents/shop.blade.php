<div class="shop-main-content">
    <div class="content">    
        <div class="content-left bg-white">
            @foreach($menu_items as $key => $menu)
            <button type="button" class="menu-item">{{$menu['item']}}</button><hr>
            @endforeach
        </div>
        <div class="content-center">
            <div class="main-content">
                <div class="content-image">
                    <img src="{{asset('assets/images/chair.png')}}" alt="">
                </div>
                <div>
                    <p><span style="font-size: 20px">Biggest Offer Revealed</span><br>
                    MORE DEAL INSIDE <br>
                    UPTO 50% OFF <br>
                    <span style="font-size: 15px">Wishlist Now >></span>
                    </p>
                </div>
            </div>
            <div class="content-banner">
                <div class="content-banner-image">
                    <img src="{{asset('assets/images/images-bag4.jpg')}}" alt="">
                </div>
                <div class="content-banner-image">
                    <img src="{{asset('assets/images/images-watch.jpg')}}" alt="">
                </div>
                <div class="content-banner-image">
                    <img src="{{asset('assets/images/images-watch.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="content-right">
            <h5>Recently Viewed</h5>
            @php
                $image = asset('assets/images/images-bag.jpg');
                $caption = "See your browsing history";
            @endphp
            <x-product-card :image="$image" :caption="$caption" />
            <h5>Suggesion for you</h5>
            @php
            $image = asset('assets/images/images-bag2.jpg');
            $caption = "Watch more";
            @endphp
            <x-product-card :image="$image" :caption="$caption" />
        </div>
    </div>
    <hr>
    <h4>Deals of the day | <span style="color: red">20:45:12 Left</span></h4>
    <div class="content-bottom d-flex justify-content-between">
        @php
        $image = asset('assets/images/images-bag3.jpg');
        $caption = "See your browsing history";
        $price = "24000 Bdt";
        $price_f = "48000 Bdt";
        @endphp
        <x-product-card :image="$image" :caption="$caption" :price="$price" :price_f="$price_f" />
        @php
        $image = asset('assets/images/images-kem.jpg');
        $caption = "See your browsing history";
        $price = "24000 Bdt";
        $price_f = "48000 Bdt";
        @endphp
        <x-product-card :image="$image" :caption="$caption" :price="$price" :price_f="$price_f" />
        @php
        $image = asset('assets/images/images-bag3.jpg');
        $caption = "See your browsing history";
        $price = "24000 Bdt";
        $price_f = "48000 Bdt";
        @endphp
        <x-product-card :image="$image" :caption="$caption" :price="$price" :price_f="$price_f" />
        @php
        $image = asset('assets/images/images-bag3.jpg');
        $caption = "See your browsing history";
        $price = "24000 Bdt | ";
        $price_f = "48000 Bdt";
        @endphp
        <x-product-card :image="$image" :caption="$caption" :price="$price" :price_f="$price_f" />
        @php
        $image = asset('assets/images/images-bag3.jpg');
        $caption = "See your browsing history";
        $price = "24000 Bdt | ";
        $price_f = "48000 Bdt";
        @endphp
        <x-product-card :image="$image" :caption="$caption" :price="$price" :price_f="$price_f" />
    </div>
</div>
