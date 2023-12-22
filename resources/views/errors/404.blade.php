@include('components.head', ['title' => 'Page not found'])

@include('components.header')

<main>

    <section class="error-block sFont flex-col align-center justify-center">
        <svg width="128" height="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z"></path>
            <path d="M15.5 9v.5"></path>
            <path d="M8.5 9v.5"></path>
            <path d="M15.5 15.5s-1-2-3.5-2-3.5 2-3.5 2"></path>
        </svg>
        <h1 class="pFont text-align-center">Oops! Looks like this page doesn't exist or is currently unavailable</h1>
        <p class="text-align-center">The page you’re looking for has taken a vacation to the great virtual beyond, or
            maybe it never existed in the first place. Don’t fret, intrepid adventurer! Head back to our homepage with
            the button below, or let your inner detective loose and search for what you desire using the handy bar
            above. Happy exploring!</p>
        <a href="/home" class="border-smooth text-deco-none">Return Home</a>
    </section>

</main>

@include('components.footer')
