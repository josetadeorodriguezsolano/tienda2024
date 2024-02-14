<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Blade Template</title>
    <link rel="stylesheet" href="{{ asset('sass/home.scss') }}">
</head>
<body>
    <div class="container">
        <div class="categories">Categories</div>
        <div class="the-collections">THE COLEST STYLES ARE HERE</div>
        <div class="hot-deals">80% OFF <span>HOT DEALS</span></div>
        <div class="under-99-store">EXPLORE <span>UNDER $99 STORE</span></div>
        <div class="new-products">NEW PRODUCTS</div>

        <div class="product">
            <div class="name">Highlander M</div>
            <div class="price">$14.00</div>
            <div class="sale-price">$0.00</div>
        </div>

        <div class="hot-deal">
            <div class="title">ASOW</div>
            <div class="extra-off">EXTRA $55 OFF <span>ORDER NOW</span></div>
            <div class="products">
                <div class="product">
                    <div class="name">Clothing</div>
                    <div class="price">$100.00</div>
                    <div class="sale-price">$20.00</div>
                </div>
                <div class="product">
                    <div class="name">Electronics</div>
                    <div class="price">$100.00</div>
                    <div class="sale-price">$20.00</div>
                </div>
                <div class="product">
                    <div class="name">Health &amp; Beauty</div>
                    <div class="price">$100.00</div>
                    <div class="sale-price">$20.00</div>
                </div>
            </div>
        </div>

        <div class="lorem-ipsum">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna a ullamcorper laoreet, lorem velit elementum eros, ac accumsan ipsum libero sed velit. Sed eget sapien quis turpis cursus consectetur. Donec et nibh ipsum. Donec vestibulum, ex eget convallis rhoncus, sem nisi rhoncus nisi, a posuere velit nulla et ipsum.
        </div>
    </div>
</body>
</html>
