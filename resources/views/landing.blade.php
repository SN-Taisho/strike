@include('components.head', ['title' => 'Home'])

@include('components.header')

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
                <button type="button" id="learn-more" onclick="window.location.href='/about-us'">
                    <span>About Us</span>
                </button>
            </div>
        </div>
    </div>

    <section id="stats">
        <div class="width-limiter justify-evenly flex-wrap" style="gap: 2rem">
            <div class="stat-card align-center justify-center flex-col">
                <div class="flex align-center justify-center" style="gap: 1rem">
                    <svg width="98" height="98" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 6.5 12 4l10 2.5L12 9 2 6.5Z"></path>
                        <path d="M6.5 8v4.985S9 14.5 12 14.5s5.5-1.515 5.5-1.515V8"></path>
                        <path d="M3.5 7v11"></path>
                        <path d="M5 17H2v3h3v-3Z"></path>
                    </svg>
                    <h3 class="pFont">7000</h3>
                </div>
                <p class="sFont text-align-center">happy bowlers taught</p>
            </div>

            <div class="stat-card align-center justify-center flex-col">
                <div class="flex align-center justify-center" style="gap: 1rem">
                    <svg width="98" height="98" fill="none" stroke="currentColor" stroke-linejoin="round"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22c5.525 0 10-4.475 10-10S17.525 2 12 2 2 6.475 2 12s4.475 10 10 10Z"></path>
                        <path fill="currentColor" stroke="none"
                            d="M12 13c.83 0 1.5-.67 1.5-1.5S12.83 10 12 10s-1.5.67-1.5 1.5.67 1.5 1.5 1.5Z"></path>
                        <path fill="currentColor" stroke="none"
                            d="M15.5 9c.83 0 1.5-.67 1.5-1.5S16.33 6 15.5 6 14 6.67 14 7.5 14.67 9 15.5 9Z"></path>
                        <path fill="currentColor" stroke="none"
                            d="M8.5 9c.83 0 1.5-.67 1.5-1.5S9.33 6 8.5 6 7 6.67 7 7.5 7.67 9 8.5 9Z"></path>
                    </svg>
                    <h3 class="pFont">67%</h3>
                </div>
                <p class="sFont text-align-center">accuracy boost by using I.P.T.S. for 70% of students</p>
            </div>

            <div class="stat-card align-center justify-center flex-col">
                <div class="flex align-center justify-center" style="gap: 1rem">
                    <svg width="98" height="98" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 15c3.314 0 6-2.765 6-6.176V2H6v6.824C6 12.234 8.686 15 12 15Z"></path>
                        <path d="M6 10.5v-5H2c0 3.333 2 5 4 5Z" clip-rule="evenodd"></path>
                        <path d="M18 10.5v-5h4c0 3.333-2 5-4 5Z" clip-rule="evenodd"></path>
                        <path d="M12 15v3"></path>
                        <path d="m7.5 21 1.845-3h5.176l1.979 3h-9Z"></path>
                    </svg>
                    <h3 class="pFont">900</h3>
                </div>
                <p class="sFont text-align-center">Champions Made</p>
            </div>
        </div>
    </section>

    <section id="featured-events">
        <h2 class="section-heading alt">Events</h2>
        <div class="carousel">
            <div class="carousel-inner">
                @foreach ($events as $event)
                    <a href="/event-details"
                        class="featured-events-link trans-ease-in-out carousel-item {{ $loop->first ? 'active' : '' }} ci-1">
                        <img src="https://placehold.co/700x400" alt="event.webp" width="700" height="400" />
                        <h3 class="pFont">Lorem ipsum dolor {{ $loop->index }}</h3>
                    </a>
                @endforeach
                <a href="/events"
                    class="featured-events-link more trans-ease-in-out carousel-item ci-1">
                    <img src="https://placehold.co/700x400" alt="event.webp" width="700" height="400" style="opacity: 0;"/>
                    <h2 class="pFont">View more events</h2>
                </a>

            </div>
            <a id="prev1" class="prev">&#10094;</a>
            <a id="next1" class="next">&#10095;</a>
        </div>
    </section>

    <script>
        const carouselItems1 = document.querySelectorAll('.ci-1');
        const prevButton1 = document.querySelector('#prev1');
        const nextButton1 = document.querySelector('#next1');
        let currentSlide1 = 0;

        function showSlide1(n) {
            carouselItems1.forEach((item) => {
                item.classList.remove('active');
            });
            carouselItems1[n].classList.add('active');

            currentSlide1 = n;
        }

        showSlide1(0); // Show the first slide initially

        prevButton1.addEventListener('click', () => {
            showSlide1((currentSlide1 - 1 + carouselItems1.length) % carouselItems1.length);
        });

        nextButton1.addEventListener('click', () => {
            showSlide1((currentSlide1 + 1) % carouselItems1.length);
        });
    </script>

    <section id="featured-testimonials">
        <h2 class="section-heading">What our community has to say</h2>
        <div class="carousel" style="max-width: 700px">
            <div class="carousel-inner">
                @foreach ($testimonials as $testimonial)
                    <div class="carousel-item ci-2 {{ $loop->first ? 'active' : '' }} testimonials-card flex-col sFont">
                        <div class="profile">
                            <img src="https://placehold.co/300x300" alt="testimonial profile" width="100"
                                height="100" />
                            <h3 class="pFont">Lorem Ipsom dolor {{ $loop->index }}</h3>
                            <p>Lorem Ipsum</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum, quidem eum
                            praesentium
                            voluptatum exercitationem dolores nulla dolorum vitae doloribus non veritatis cupiditate
                            earum
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
                @endforeach
            </div>
            <a id="prev2" class="prev">&#10094;</a>
            <a id="next2" class="next">&#10095;</a>
        </div>
    </section>

    <script>
        const carouselItems2 = document.querySelectorAll('.ci-2');
        const prevButton2 = document.querySelector('#prev2');
        const nextButton2 = document.querySelector('#next2');
        let currentSlide2 = 0;

        function showSlide2(n) {
            carouselItems2.forEach((item) => {
                item.classList.remove('active');
            });
            carouselItems2[n].classList.add('active');

            currentSlide2 = n;
        }

        showSlide2(0); // Show the first slide initially

        prevButton2.addEventListener('click', () => {
            showSlide2((currentSlide2 - 1 + carouselItems2.length) % carouselItems2.length);
        });

        nextButton2.addEventListener('click', () => {
            showSlide2((currentSlide2 + 1) % carouselItems2.length);
        });
    </script>
</main>

@include('components.footer')
