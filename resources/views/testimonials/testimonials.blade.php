@include('components.header', ['title' => 'Events'])

<main>
    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Testimonials &<br>Case Study</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deserunt harum laborum
                    repellat
                    rem expedita eaque. Porro, cum quia esse pariatur velit maxime quaerat amet? Laborum alias
                    cupiditate placeat incidunt.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img src="https://placehold.co/1920x1080.webp" alt="Banner image">
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

            @for ($i = 0; $i < 9; $i++)
                <div class="testimonials-card flex-col sFont" key={i}>
                    <div class="profile">
                        <img src="https://placehold.co/100x100.webp" alt="testimonial profile" />
                        <h3 class="pFont">Lorem Ipsom dolor</h3>
                        <p>Lorem Ipsum</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum, quidem eum praesentium
                        voluptatum exercitationem dolores nulla dolorum vitae doloribus non veritatis cupiditate earum
                        consequuntur voluptate nobis quisquam! Rem, consectetur.
                    </p>

                    <svg width="80" height="80 "fill="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fillRule="evenodd"
                            d="M9.427 4.558C5.66 6.976 3.57 9.79 3.15 13c-.65 4.999 3.82 7.445 6.084 5.247 2.265-2.198.907-4.989-.733-5.751-1.64-.763-2.643-.497-2.468-1.517.175-1.019 2.509-3.845 4.558-5.16a.374.374 0 0 0 .057-.511l-.507-.659c-.22-.286-.43-.275-.715-.092Z"
                            clipRule="evenodd" />
                        <path fillRule="evenodd"
                            d="M19.34 4.558C15.574 6.976 13.482 9.79 13.064 13c-.651 4.999 3.82 7.445 6.084 5.247 2.265-2.198.907-4.989-.733-5.751-1.64-.763-2.643-.497-2.468-1.517.175-1.019 2.508-3.845 4.558-5.16a.374.374 0 0 0 .057-.511l-.507-.659c-.22-.286-.43-.275-.715-.092Z"
                            clipRule="evenodd" />
                    </svg>
                </div>
            @endfor

        </div>
    </section>

</main>

@include('components.footer')
