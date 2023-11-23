@include('partials.head')
<body>
@include('partials.header')
<main>
    <section class="container">

        @foreach ($products as $product)
            <div class="card">
                <div class="image-box">
                    <img class="first-img" src="/img/{{ $product["frontImage"] }}" alt="">
                    <img class="second-img" src="/img/{{ $product["backImage"] }}" alt="">

                    @if(isset($product["badges"]))
                        @foreach($product["badges"] as $badge)
                            @if($badge["type"] === "discount" && $badge["type"] === "tag")
                                <span class="discount">
                                    {{ $badge["value"] }}
                                </span>
                                <span class="sustain">
                                    Sostenibilità
                                </span>
                            @elseif($badge["type"] === "discount")
                                <span class="discount">
                                    {{ $badge["value"] }}
                                </span>
                            @elseif($badge["type"] === "tag")
                                <span class="sustain">
                                    Sostenibilità
                                </span>
                            @endif
                        @endforeach
                    @endif

                    <span class="heart">&hearts;</span>
                </div>
                <div class="text-box">
                    <span class="brand">{{ $product["brand"] }}</span>
                    <h4>{{ $product["name"] }}</h4>
                    <div class="price">
                        <span >{{ $product["price"] }} &euro;</span>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
</main>
@include('partials.footer')
</body>
