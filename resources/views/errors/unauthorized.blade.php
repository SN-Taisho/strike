@include('components.head', ['title' => 'Unauthorized'])

@include('components.header')

<main>

    <section class="error-block sFont flex-col align-center justify-center">
        <svg width="128" height="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="m12 2.5-11 19h22l-11-19Z" clip-rule="evenodd"></path>
            <path d="M12 17.5v.5"></path>
            <path d="m12 9.5.004 5"></path>
        </svg>
        <h1 class="pFont text-align-center">Oops! Looks like you don't have access to this page</h1>
        <p class="text-align-center">Hold on a sec!
            The content you're trying to access requires special permission. Unfortunately, it seems you're unauthorized
            to view this page.</p>
        <a href="/home" class="border-smooth text-deco-none">Return Home</a>
    </section>

</main>

@include('components.footer')
