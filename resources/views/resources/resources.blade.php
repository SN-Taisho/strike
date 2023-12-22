@include('components.head', ['title' => 'Resources'])

@include('components.header')

<main>
    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Resources</h1>
                <p>Whether you're a beginner or a seasoned bowler, our resources page is your one-stop shop for all
                    things bowling. Explore a wealth of information, including tips and techniques, rules and etiquette,
                    and insights from bowling experts.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img src="https://res.cloudinary.com/test-strike/image/upload/v1702012942/Resources/premium_photo-1681489669846-33d1_zhj73h.webp"
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
        <h2 class="section-heading">Youtube Tutorials</h2>
        <div class="width-limiter justify-evenly flex-wrap">

            @for ($i = 0; $i < 9; $i++)
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/ScMzIvxBSi4?si=7k6SNhdgGJlACdNw" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            @endfor

        </div>
    </section>

</main>

@include('components.footer')
