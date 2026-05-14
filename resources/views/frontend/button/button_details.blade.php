{{-- ================= BUTTON DETAILS PAGE ================= --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $button->name }} - Details</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

@include('frontend.partials.cart-header')

<main class="main__content_wrapper">

    {{-- BREADCRUMB --}}
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">
                            {{ $button->name }}
                        </h1>

                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items">
                                <a class="text-white" href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li class="breadcrumb__content--menu__items">
                                <span class="text-white">
                                    Button Details
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUCT DETAILS --}}
    <section class="product__details--section section--padding">
        <div class="container">

            <div class="row">

                {{-- IMAGE --}}
                <div class="col-lg-6">

                    <div class="product__details--media">

                        <div class="single__product--preview">

                            <img src="{{ asset('uploads/buttons/' . $button->image) }}"
                                 alt="{{ $button->name }}"
                                 class="w-100 border-radius-10">

                        </div>

                    </div>

                </div>

                {{-- DETAILS --}}
                <div class="col-lg-6">

                    <div class="product__details--info">

                        <form action="{{ route('button.add.to.cart') }}"
                              method="POST">

                            @csrf

                            <input type="hidden"
                                   name="id"
                                   value="{{ $button->id }}">

                            <h2 class="product__details--info__title mb-15">
                                {{ $button->name }}
                            </h2>

                            {{-- PRICE --}}
                            <div class="product__details--info__price mb-15">

                                <span class="current__price">
                                    Rs. {{ number_format($button->price,0) }}
                                </span>

                            </div>

                            {{-- MATERIAL --}}
                            <div class="mb-3">

                                <strong>Material :</strong>

                                <span>
                                    {{ $button->material }}
                                </span>

                            </div>

                            {{-- SIZE --}}
                            <div class="mb-3">

                                <strong>Size :</strong>

                                <span>
                                    {{ $button->size }}
                                </span>

                            </div>

                            {{-- COLOR --}}
                            @if($button->color)

                            <div class="mb-3">

                                <strong>Color :</strong>

                                <span>
                                    {{ $button->color }}
                                </span>

                            </div>

                            @endif

                            {{-- DESCRIPTION --}}
                            <p class="product__details--info__desc mb-20">

                                {{ $button->description ?? 'Premium quality button specially designed for sherwani, coat, waistcoat and fashion garments.' }}

                            </p>

                            {{-- QUANTITY --}}
                            <div class="quickview__variant--list quantity d-flex align-items-center mb-20">

                                <div class="quantity__box">

                                    {{-- MINUS --}}
                                    <button type="button"
                                            class="quantity__value decrease">
                                        -
                                    </button>

                                    {{-- INPUT --}}
                                    <label>

                                        <input type="number"
                                               name="quantity"
                                               class="quantity__number"
                                               value="1"
                                               min="1">

                                    </label>

                                    {{-- PLUS --}}
                                    <button type="button"
                                            class="quantity__value increase">
                                        +
                                    </button>

                                </div>

                                {{-- ADD TO CART --}}
                                <button class="primary__btn quickview__cart--btn"
                                        type="submit">

                                    Add To Cart

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </section>

</main>

{{-- QUANTITY SCRIPT --}}
<script>

document.addEventListener("DOMContentLoaded", function () {

    // PLUS
    document.querySelectorAll(".increase").forEach(button => {

        button.addEventListener("click", function () {

            let input = this.parentElement.querySelector(".quantity__number");

            input.value = parseInt(input.value) + 1;

        });

    });

    // MINUS
    document.querySelectorAll(".decrease").forEach(button => {

        button.addEventListener("click", function () {

            let input = this.parentElement.querySelector(".quantity__number");

            let current = parseInt(input.value);

            if(current > 1){

                input.value = current - 1;

            }

        });

    });

});

</script>

{{-- JS --}}
<script src="{{ asset('assets/js/vendor/popper.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>