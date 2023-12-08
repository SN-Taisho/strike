@include('components.header', ['title' => 'Gallery'])

<main>
    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Gallery</h1>
                <p>Relive the excitement of your bowling adventures as you browse through our captivating collection of
                    photos. Capture the thrill of strikes and spares, the camaraderie of team spirit, and the joy of
                    shared experiences.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img src="https://res.cloudinary.com/test-strike/image/upload/v1702012776/Gallery/karla-rivera-yFBdywTfwaQ-unsplash_cidb1p.jpg" alt="Banner image">
            </div>
        </div>
    </section>

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

    <section class="community-content">
        <div class="width-limiter justify-evenly flex-wrap">

            @foreach ($gallery as $image)
                <a href="/image-view" class="image-item border-smooth">
                    <img src="{{ $image['image'] }}" alt="Gallery item" class="trans-ease-in-out" />
                </a>
            @endforeach

        </div>
    </section>

</main>

@include('components.footer')
