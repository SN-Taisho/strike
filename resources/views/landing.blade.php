@include('components.header', ['title' => 'Home'])

<main>
    <div id="landing-banner" class="flex">
        <img src="{{ asset('assets/images/landing.jpg') }}" alt="landing-banner.png" />
        <div class="width-limiter flex">
            <div id="landing-content">
                <h1 class="pFont">
                    Don't call it a Dream, <br />
                    <span>Call it a Plan.</span>
                </h1>
                <p class="sFont">
                    STRIKE believe sports provide a great platform to develop desirable character traits.
                    STRIKE&apos;s progressive pedagogy harness the experience of parents with successful
                    children, coaches with proven track records, innovation provided by evolving technologies,
                    and consultation with domain experts.
                </p>
                <button id="learn-more">
                    <span>Learn More</span>
                </button>
            </div>
        </div>
    </div>

    <section id="featured-programmes">
        <h2 class="section-heading">Featured Programmes</h2>

        <div class="width-limiter justify-evenly flex-wrap">
            @for ($i = 0; $i < 3; $i++)
                <div class="featured-programme">
                    <img src="https://placehold.co/400x300" alt="programme.png" />
                    <div class="text-align-center">
                        <h3 class="pFont">Lorem Ipsum</h3>
                        <div class="text-wrapper">
                            <p class="sFont">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis deleniti impedit,
                                aliquid dolorem pariatur tempora numquam libero voluptates a possimus laborum sint
                                cupiditate labore voluptatum incidunt. Repudiandae voluptatibus deserunt nobi?
                            </p>
                        </div>
                        <a href="/programme" class="text-deco-none sFont trans-ease-out">
                            View Programme
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </section>

    <section id="featured-events">
        <h2 class="section-heading alt">Featured Events</h2>
        <div class="width-limiter justify-center align-center flex-wrap">
            @for ($i = 0; $i < 4; $i++)
                <a href="/events" class="featured-events-link trans-ease-in-out">
                    <img src="https://placehold.co/1280x720.webp" alt="event.webp" width="700" />
                    <h3 class="pFont">Lorem ipsum dolor</h3>
                </a>
            @endfor
        </div>
    </section>

    <section id="featured-testimonials">
        <h2 class="section-heading">What our community has to say</h2>
        <div class="width-limiter justify-evenly flex-wrap">
            @for ($i = 0; $i < 3; $i++)
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
