@include('components.head', ['title' => 'Programme Details'])

<main>

    <div class="width-limiter">
        <div class="selection-wrapper">
            <button class="default" onclick="window.location.href='products'">Products</button>
            <button onclick="window.location.href='categories'">Categories</button>
                <button onclick="window.location.href='my-cart'">Cart</button>
            <button onclick="window.location.href=',y-purchases'">Purchases</button>
        </div>
    </div>

</main>

@include('components.footer')
