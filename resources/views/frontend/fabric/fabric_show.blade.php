<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{ $fabric->name }} - Fabric Details</title>
  <meta name="description" content="Fabric Details Page">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

  <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins/glightbox.min.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  {{-- SWIPER CSS --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body>



@include('frontend.partials.cart-header')

<main class="main__content_wrapper">

<!-- BREADCRUMB SECTION -->
<section class="custom__breadcrumb">

    <div class="custom__breadcrumb--overlay"></div>

    <div class="container">

        <div class="breadcrumb__content text-center">

            <span class="custom__breadcrumb--subtitle">
                Premium Pakistani Collection
            </span>

            <h1 class="custom__breadcrumb--title">
                Fabric Details
            </h1>

            <p class="custom__breadcrumb--desc">
                Discover elegant and premium quality fabrics specially crafted for traditional Shalwar Kameez wear.
            </p>

        </div>

    </div>

</section>



<style>

/* =========================
   CUSTOM FABRIC BREADCRUMB
========================= */

.custom__breadcrumb{
    position:relative;
    padding:110px 0;
    overflow:hidden;

    background:url('/assets/img/banner/Polyester-Poplin-Fabric-Banner.jpg') center center/cover no-repeat;

    border-bottom-left-radius:30px;
    border-bottom-right-radius:30px;
}
/* DARK OVERLAY */
.custom__breadcrumb--overlay{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:
        linear-gradient(
            135deg,
            rgba(15,25,70,0.82),
            rgba(15,25,70,0.65)
        );
}

/* CONTENT */
.custom__breadcrumb .container{
    position:relative;
    z-index:2;
}

.custom__breadcrumb--subtitle{
    display:inline-block;
    background:rgba(255,255,255,0.12);
    border:1px solid rgba(255,255,255,0.15);
    backdrop-filter:blur(10px);

    color:#fff;
    font-size:13px;
    font-weight:500;

    padding:10px 18px;
    border-radius:30px;

    margin-bottom:18px;
}

/* TITLE */
.custom__breadcrumb--title{
    color:#fff;
    font-size:52px;
    font-weight:700;
    margin-bottom:15px;
    letter-spacing:0.5px;
}

/* DESCRIPTION */
.custom__breadcrumb--desc{
    max-width:650px;
    margin:auto;

    color:rgba(255,255,255,0.85);
    font-size:16px;
    line-height:1.9;
}

/* SOFT GOLD GLOW */
.custom__breadcrumb::after{
    content:'';
    position:absolute;

    width:350px;
    height:350px;

    background:rgba(162,140,84,0.18);

    border-radius:50%;

    top:-120px;
    right:-80px;

    filter:blur(40px);
}

/* MOBILE RESPONSIVE */
@media(max-width:768px){

    .custom__breadcrumb{
        padding:80px 0;
        border-bottom-left-radius:20px;
        border-bottom-right-radius:20px;
    }

    .custom__breadcrumb--title{
        font-size:34px;
        line-height:1.3;
    }

    .custom__breadcrumb--desc{
        font-size:14px;
        line-height:1.8;
        padding:0 10px;
    }

    .custom__breadcrumb--subtitle{
        font-size:12px;
        padding:8px 15px;
    }

}

</style>

<!-- PRODUCT DETAILS -->
<section class="product__details--section section--padding">
    <div class="container">

        <div class="row row-cols-lg-2 row-cols-md-2">

            <!-- LEFT SIDE IMAGES -->
            <div class="col">
                <div class="product__details--media">

                    <div class="product__media--preview swiper">
                        <div class="swiper-wrapper">

                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/fabrics/' . $fabric->image) }}"
                                     alt="{{ $fabric->name }}">
                            </div>

                            <!-- Duplicate slides (NO CONTENT REMOVED) -->
                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/fabrics/' . $fabric->image) }}">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/fabrics/' . $fabric->image) }}">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/fabrics/' . $fabric->image) }}">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('uploads/fabrics/' . $fabric->image) }}">
                            </div>

                        </div>
                    </div>

                    

                </div>
            </div>

            <!-- RIGHT SIDE INFO -->
<div class="col-lg-6 col-12">

    <!-- FORM START -->
    <form action="{{ route('add.to.cart', $fabric->id) }}" method="POST">

        @csrf

        <div class="product__details--info custom__fabric--card">

            <!-- TITLE -->
            <h2 class="product__details--info__title custom__title">
                {{ $fabric->name }}
            </h2>

            <!-- PRICE -->
            <div class="custom__price--box">

                <div>
                    <span class="price__label">
                        Price Per Meter
                    </span>

                    <h3 class="current__price" id="finalPrice">
                        Rs. {{ number_format($fabric->price,0) }}
                    </h3>
                </div>

                <div class="meter__badge">
                    Premium
                </div>

            </div>

            <!-- DESCRIPTION -->
            <p class="product__details--info__desc custom__desc">
                {{ $fabric->description }}
            </p>

            <!-- INFO GRID -->
            <div class="fabric__info--grid">

                <div class="fabric__info--item">
                    <span>Fabric Type</span>
                    <strong>{{ $fabric->fabric_type }}</strong>
                </div>

                <div class="fabric__info--item">
                    <span>Season</span>
                    <strong>{{ $fabric->season }}</strong>
                </div>

                <div class="fabric__info--item">
                    <span>Recommended</span>
                    <strong>4 Meter Suit</strong>
                </div>

                <div class="fabric__info--item">
                    <span>Quality</span>
                    <strong>Export Quality</strong>
                </div>

            </div>

            <!-- QUANTITY -->
            <div class="custom__quantity--wrapper">

                <div class="quantity__top">

                    <label>
                        Select Meter
                    </label>

                    <span class="meter__text">
                        Per Meter Pricing
                    </span>

                </div>

                <div class="custom__quantity--area">

                    <!-- QUANTITY BOX -->
                    <div class="quantity__box custom__quantity--box">

                        <button type="button"
                                class="qty__btn"
                                id="decreaseBtn">
                            −
                        </button>

                        <input type="number"
                               name="meter"
                               id="meterInput"
                               class="quantity__number qty__input"
                               value="1"
                               min="1">

                        <button type="button"
                                class="qty__btn"
                                id="increaseBtn">
                            +
                        </button>

                    </div>

                    <!-- TOTAL -->
                    <div class="total__price--box">

                        <span>Total</span>

                        <strong id="dynamicPrice">
                            Rs. {{ number_format($fabric->price,0) }}
                        </strong>

                    </div>

                </div>

            </div>

            <!-- BUTTON -->
            <button class="custom__cart--btn" type="submit">

                Add To Cart

            </button>

        </div>

    </form>
    <!-- FORM END -->

</div>


<!-- STYLE -->
<style>

.custom__fabric--card{
    background:#fff;
    border-radius:20px;
    padding:28px;
    border:1px solid rgba(0,0,0,0.06);
    box-shadow:
        0 10px 25px rgba(15,25,70,0.05),
        0 2px 6px rgba(0,0,0,0.03);
    position:relative;
    overflow:hidden;
}

/* SOFT TOP EFFECT */
.custom__fabric--card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:linear-gradient(90deg,#A28C54,#d2bb84);
}

.custom__title{
    font-size:28px;
    font-weight:700;
    color:#0F1946;
    margin-bottom:18px;
    line-height:1.4;
}

.custom__price--box{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    margin-bottom:18px;
    padding-bottom:18px;
    border-bottom:1px solid #f1f1f1;
}

.price__label{
    display:block;
    font-size:13px;
    color:#888;
    margin-bottom:5px;
}

.current__price{
    font-size:30px;
    color:#A28C54;
    font-weight:700;
    margin:0;
}

.meter__badge{
    background:#f8f5ed;
    color:#A28C54;
    padding:8px 14px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
    border:1px solid rgba(162,140,84,0.15);
}

.custom__desc{
    color:#666;
    font-size:14px;
    line-height:1.9;
    margin-bottom:22px;
}

.fabric__info--grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:14px;
    margin-bottom:24px;
}

.fabric__info--item{
    background:#fcfcfc;
    border:1px solid #f0f0f0;
    border-radius:14px;
    padding:14px;
    transition:0.3s;
}

.fabric__info--item:hover{
    transform:translateY(-2px);
    box-shadow:0 6px 18px rgba(0,0,0,0.04);
}

.fabric__info--item span{
    display:block;
    font-size:12px;
    color:#888;
    margin-bottom:5px;
}

.fabric__info--item strong{
    font-size:14px;
    color:#0F1946;
    font-weight:600;
}

.custom__quantity--wrapper{
    background:#fafafa;
    border-radius:16px;
    padding:18px;
    border:1px solid #f1f1f1;
    margin-bottom:22px;
}

.quantity__top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:15px;
    gap:10px;
}

.quantity__top label{
    font-size:15px;
    font-weight:600;
    color:#0F1946;
}

.meter__text{
    font-size:12px;
    color:#999;
}

.custom__quantity--area{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:15px;
    flex-wrap:wrap;
}

.custom__quantity--box{
    display:flex;
    align-items:center;
    overflow:hidden;
    border-radius:14px;
    background:#fff;
    border:1px solid #eaeaea;
    box-shadow:0 4px 12px rgba(0,0,0,0.03);
}

.qty__btn{
    width:42px;
    height:42px;
    border:none;
    background:#f7f7f7;
    color:#0F1946;
    font-size:22px;
    font-weight:600;
    transition:0.3s;
}

.qty__btn:hover{
    background:#A28C54;
    color:#fff;
}

.qty__input{
    width:65px;
    height:42px;
    border:none;
    text-align:center;
    font-size:16px;
    font-weight:600;
    color:#0F1946;
    background:#fff;
}

.qty__input:focus{
    outline:none;
}

.total__price--box{
    text-align:right;
}

.total__price--box span{
    display:block;
    font-size:12px;
    color:#888;
    margin-bottom:4px;
}

.total__price--box strong{
    font-size:24px;
    color:#0F1946;
    font-weight:700;
}

.custom__cart--btn{
    width:100%;
    height:54px;
    border:none;
    border-radius:16px;
    background:linear-gradient(135deg,#0F1946,#1b2c73);
    color:#fff;
    font-size:15px;
    font-weight:600;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    transition:0.35s;
    box-shadow:0 10px 20px rgba(15,25,70,0.15);
}

.custom__cart--btn:hover{
    transform:translateY(-2px);
    background:linear-gradient(135deg,#A28C54,#b99a5f);
    color:#fff;
}

/* MOBILE RESPONSIVE */
@media(max-width:768px){

    .custom__fabric--card{
        padding:20px;
        border-radius:16px;
    }

    .custom__title{
        font-size:22px;
    }

    .current__price{
        font-size:24px;
    }

    .fabric__info--grid{
        grid-template-columns:1fr;
    }

    .custom__quantity--area{
        flex-direction:column;
        align-items:stretch;
    }

    .total__price--box{
        text-align:left;
    }

    .custom__cart--btn{
        height:50px;
        font-size:14px;
    }

}

</style>


<!-- PRICE SCRIPT -->
<script>

    const pricePerMeter = {{ $fabric->price }};

    const meterInput = document.getElementById('meterInput');

    const dynamicPrice = document.getElementById('dynamicPrice');

    function updatePrice()
    {
        let meter = parseInt(meterInput.value);

        if(isNaN(meter) || meter < 1)
        {
            meter = 1;
            meterInput.value = 1;
        }

        let total = meter * pricePerMeter;

        dynamicPrice.innerHTML = 'Rs. ' + total.toLocaleString();
    }

    document.getElementById('increaseBtn').addEventListener('click', function(){

        meterInput.value = parseInt(meterInput.value) + 1;

        updatePrice();

    });

    document.getElementById('decreaseBtn').addEventListener('click', function(){

        let current = parseInt(meterInput.value);

        if(current > 1)
        {
            meterInput.value = current - 1;
        }

        updatePrice();

    });

    meterInput.addEventListener('input', updatePrice);

</script>

        </div>

    </div>
</section>

</main>

@include('frontend.partials.footer')

<!-- All Script JS Plugins here  -->
  <script src="{{ asset('assets/js/vendor/popper.js') }}" defer="defer"></script>
  <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
  <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/glightbox.min.js') }}" defer="defer"></script>
{{-- SWIPER JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Customscript js -->
  <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>