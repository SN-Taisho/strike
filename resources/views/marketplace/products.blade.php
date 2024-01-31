@include('components.header', ['title' => 'Programme Details'])

<main>

    <div class="width-limiter">
        <div class="selection-wrapper">
            <button class="default" onclick="window.location.href='products'">Products</button>
            <button onclick="window.location.href='categories'">Categories</button>
                <button onclick="window.location.href='my-cart'">Cart</button>
            <button onclick="window.location.href=',y-purchases'">Purchases</button>
        </div>
    </div>

    <div class="width-limiter">
        <div class="selection-wrapper">
            <button class="default" onclick="window.location.href='products'">All Categories</button>
            <button onclick="window.location.href='categories'">Categories</button>
            <button onclick="window.location.href='categories'">Categories</button>
            <button onclick="window.location.href='categories'">Categories</button>
            <button onclick="window.location.href='categories'">Categories</button>
            <button onclick="window.location.href='categories'">Categories</button>
        </div>
    </div>

    <div class="width-limiter">
        <form action="" class="search-form align-center">
            <input type="text" placeholder="Search" class="border-smooth trans-ease-in-out">
            <button type="submit" class="border-smooth trans-ease-in-out" title="Search"><svg width="32"
                    height="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 19a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17Z"></path>
                    <path d="M13.328 7.172A3.988 3.988 0 0 0 10.5 6a3.988 3.988 0 0 0-2.828 1.172"></path>
                    <path d="m16.61 16.611 4.244 4.243"></path>
                </svg></button>
        </form>
    </div>

    <h1 class="section-heading">Products</h1>

    <div class="pc-container width-limiter">

        @for ($i = 0; $i < 8; $i++)
            <div class="product-card border-sharp">
                <a href="/product-details">
                    <img src="https://placehold.co/400x400/webp" alt="Product Image" class="border-sharp">
                </a>

                <h2 class="product-title">Product Title</h2>

                <span>&dollar; 999.00</span>
                <p class="sFont">Stock : 999</p>

                <a href="/add" class="add-to-cart-btn border-smooth text-deco-none sFont">
                    <svg width="32" height="32" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" stroke="none"
                            d="M10.25 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z"></path>
                        <path fill="currentColor" stroke="none"
                            d="M18.75 22.5a1.75 1.75 0 1 0 0-3.5 1.75 1.75 0 0 0 0 3.5Z"></path>
                        <path d="m7 6 2.5 11h10L22 8.5"></path>
                        <path d="M12.5 13h8"></path>
                        <path d="M2.5 3 7 6"></path>
                        <path d="M22 8.5h-9.5"></path>
                    </svg>
                    <p>Add to Cart</p>
                </a>
            </div>
        @endfor

    </div>

</main>

@include('components.footer')
