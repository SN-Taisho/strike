@include('components.head', ['title' => 'Bowlers Achievement'])

@include('components.header')

<main>
    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Bowlers Achievement</h1>
                <p>Celebrate champions forged in fire, track
                    rivalries, and relive epic throws. This is where legends rise, one pin at a time.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img src="https://images.squarespace-cdn.com/content/v1/5b67aa09f8370a88da5aadeb/1537222299164-W5S365ZL9G62VLWCKWGX/League+Bowling+and+Tournament"
                    alt="Banner image">
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

            @foreach ($achievements as $achievement)
                <a class="article-card border-sharp text-deco-none" href="/bowlers-achievement-details" style="height: fit-content; padding-bottom: 0.5rem">
                    <img src="{{ $achievement['image'] }}" alt="Event Photo">

                    <div>
                        <h3 class="pFont">Tournament Name</h3>
                        <span class="sFont">Tournament Category</span>

                        <ul class="sFont list-style-none">
                            <li>1st Name</li>
                            <li>2nd Name</li>
                            <li>3rd Name</li>
                            <li>4th Name</li>
                        </ul>
                    </div>

                </a>
            @endforeach

        </div>
    </section>

</main>

@include('components.footer')
