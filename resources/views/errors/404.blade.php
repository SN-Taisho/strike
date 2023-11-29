@include('components.header', ['title' => 'Page not found'])

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
        <p class="text-align-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor praesentium, odio
            consectetur iusto nobis ut sequi eum tempora quas exercitationem sed aspernatur molestias, quasi doloremque
            amet nemo saepe tempore at?</p>
        <a href="/home" class="border-smooth text-deco-none">Return Home</a>
    </section>

</main>

@include('components.footer')
