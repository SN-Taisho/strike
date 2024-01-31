@include('components.head', ['title' => 'Event Details'])

@include('components.header')

<main>
    <div class="banner-image width-limiter">
        <img src="{{ asset('storage/' . $event->image->link) }}" alt="Event banner"
            style="height: inherit; width: 100%; object-fit: cover;">
    </div>

    <article class="article">
        <div class="width-limiter sFont">

            <h1 class="pFont">{{ $event['name'] }}</h1>
            <span>{{ $event['date'] }} - {{ $event['location'] }}</span>

            <p>
                {{ $event['body'] }}
            </p>

        </div>
    </article>


</main>

@include('components.footer')
