@include('admin.components.admin-head', ['title' => 'Landing Editor'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter">
        <h3 class="section-heading">Landing Editor</h3>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="landing" autocomplete="off" class="input">
                <label class="label">Landing Heading</label>
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Landing Paragraph</p>
            <div class="input-group">
                <textarea required="" type="text" name="average_desc" autocomplete="off" class="input" rows="5"></textarea>
                <label class="label">Average and Difficulties</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Landing Banner</label>
                <input required="" type="file" name="Landing Banner" class="input">
            </div>
        </section>

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

        <hr class="divider">

        <section class="form-section">
            <p class="long">Select Programmes to Feature</p>
            <div class="check-box-container">
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Foundation</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Performance</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Centre of Excellence</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Digital Coaching</label>
            </div>
        </section>

        <section id="featured-programmes">
            <h2 class="section-heading">Featured Programmes</h2>

            <div class="width-limiter justify-evenly flex-wrap">

                @foreach ($programmes as $programme)
                    <div class="featured-programme">
                        <img src="{{ $programme['image'] }}" alt="programme.png" />
                        <div class="text-align-center">
                            <h3 class="pFont">{{ $programme['title'] }}</h3>
                            <div class="text-wrapper">
                                <p class="sFont">
                                    {{ $programme['desc'] }}
                                </p>
                            </div>
                            <a href="/programme" class="text-deco-none sFont trans-ease-out">
                                View Programme
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <hr class="divider">

        <h2 class="section-heading">Select Featured Events</h2>
        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Event</th>
                        <th scope="col">Date</th>
                        <th scope="col">Location</th>
                        <th scope="col">Select</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td data-label="No.">{{ $i + 1}}</td>
                            <td data-label="Event">Event Name</td>
                            <td data-label="Date">Lorem, 20, 2023</td>
                            <td data-label="Location">Lorem Ipsum Dolor</td>
                            <td class="actions" data-label="Select">
                                <div class="check-box-container">
                                    <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                        <input type="checkbox" class="cyberpunk-checkbox">
                                        Feature</label>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <section id="featured-events">
            <h2 class="section-heading alt">Featured Events</h2>
            <div class="width-limiter justify-center align-center flex-wrap">
                @foreach ($gallery as $image)
                    <a href="/events" class="featured-events-link trans-ease-in-out">
                        <img src="{{ $image['image'] }}" alt="event.webp" width="700" height="400" />
                        <h3 class="pFont">Lorem ipsum dolor</h3>
                    </a>
                @endforeach
            </div>
        </section>

        <hr class="divider">

        <h2 class="section-heading">Select Featured Testimonies</h2>
        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Testimony</th>
                        <th scope="col">Select</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td data-label="No.">{{ $i + 1 }}</td>
                            <td data-label="Name">Event Name</td>
                            <td data-label="Position">Lorem Ipsum Dolor</td>
                            <td data-label="Testimony">Lorem Ipsum Dolor</td>
                            <td class="actions" data-label="Select">
                                <div class="check-box-container">
                                    <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                        <input type="checkbox" class="cyberpunk-checkbox">
                                        Feature</label>
                                </div>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <section id="featured-testimonials">
            <h2 class="section-heading">What our community has to say</h2>
            <div class="width-limiter justify-evenly flex-wrap">
                @foreach ($testimonials as $testimony)
                    <div class="testimonials-card flex-col sFont" key={i}>
                        <div class="profile">
                            <img src="{{ $testimony['image'] }}" alt="testimonial profile" width="100"
                                height="100" />
                            <h3 class="pFont">Lorem Ipsom dolor</h3>
                            <p>Lorem Ipsum</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum, quidem eum praesentium
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
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="submit" class="cancel-btn trans-ease-in-out">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

</main>

@include('components.footer')
