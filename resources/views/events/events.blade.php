@include('components.head', ['title' => 'Events'])

@include('components.header')

<main>
    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Events</h1>
                <p>From cosmic bowling to family fun nights and competitive tournaments, our calendar is packed with fun for all ages.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img src="https://res.cloudinary.com/test-strike/image/upload/v1702010311/Events/persnickety-prints-rrHl2zGZ9E4-unsplash_qcpfo1.jpg" alt="Banner image">
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

            @foreach ($events as $event)
                <a class="article-card border-sharp text-deco-none" href="{{ route('event.show',['event' => $event['id']]) }}">
                    <img src="{{ asset('storage/' . $event->image->link) }}" alt="Event Photo">

                    <div>
                        <h3 class="pFont">{{ $event['name'] }}r</h3>
                        <span class="sFont">{{ $event['date'] }} - {{ $event['location'] }}</span>

                        <p class="sFont">
                            {{ $event['body'] }}
                        </p>
                    </div>

                </a>
            @endforeach

        </div>
    </section>

</main>

@include('components.footer')