@include('admin.components.admin-head', ['title' => 'Landing Editor'])

@include('admin.components.admin-header')

<main style="overflow: hidden">

    @include('components.popups.success', ['type' => 0, 'message' => 'Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aspernatur quae tempora, eum consequatur vitae et fugit optio ipsam aliquam soluta provident, porro nulla incidunt? Magnam animi quo ad deleniti!'])

    <form class="edit-form width-limiter">
        <h3 class="section-heading">Landing Editor</h3>

        <section class="form-section flex-col">
            <p>Landing Heading<br>(Adding * line-breaks and highlights the following characters)</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="landing_heading" autocomplete="off" id="landingHeadingInput" class="input"
                    rows="3"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Landing Paragraph</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="landing_paragraph" autocomplete="off" id="landingParagraphInput"
                    class="input" rows="5"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <input type="text" id="landingParagraphHidden" hidden>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Landing Banner</label>
                <input required="" type="file" name="Landing Banner" accept="image/png, image/jpeg, image/webp"
                    class="input" id="landingBannerInput">
            </div>
        </section>

        <div id="landing-banner" class="flex">
            <img id="landingBannerImage" src="{{ asset('assets/images/landing.jpg') }}" alt="landing-banner.png" />
            <div class="width-limiter flex">
                <div id="landing-content">
                    <h1 id="landingHeading" class="pFont">
                        Don't call it a Dream, <br />
                        <span>Call it a Plan.</span>
                    </h1>
                    <p id="landingParagraph" class="sFont">
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

        <script>
            const landingHeadingInput = document.getElementById('landingHeadingInput');
            const landingParagraphInput = document.getElementById('landingParagraphInput');
            const landingHeading = document.querySelector('#landingHeading');
            const landingParagraph = document.querySelector('#landingParagraph');
            const landingBannerInput = document.getElementById('landingBannerInput');
            const landingBannerImage = document.getElementById('landingBannerImage');

            // Single event listener for both heading and paragraph inputs
            document.addEventListener('input', (event) => {
                if (event.target === landingHeadingInput) {
                    const text = event.target.value;
                    const parts = text.split('*');
                    landingHeading.innerHTML = `${parts[0]}<br /><span>${parts[1] || ''}</span>`;
                } else if (event.target === landingParagraphInput) {
                    landingParagraph.innerHTML = event.target.value.replace(/\n/g, '<br>');
                }
            });

            landingBannerInput.addEventListener('change', (event) => {
                const file = event.target.files[0];
                const reader = new FileReader();
                reader.onload = () => landingBannerImage.src = reader.result;
                reader.readAsDataURL(file);
            });

            const inputFieldsAndIds = [{
                inputFieldId: 'landingParagraphInput',
                hiddenInputId: 'landingParagraphHidden',
            }, ];

            function saveLineBreaksToHiddenInputs(inputFieldsAndIds) {
                inputFieldsAndIds.forEach(({
                    inputFieldId,
                    hiddenInputId
                }) => {
                    const inputField = document.getElementById(inputFieldId);
                    const hiddenInput = document.getElementById(hiddenInputId);

                    inputField.addEventListener('input', () => {
                        const textWithEntities = inputField.value.replace(/\n/g, '<br>');
                        hiddenInput.value = textWithEntities;
                    });
                });
            }

            saveLineBreaksToHiddenInputs(inputFieldsAndIds);
        </script>

        <hr class="divider">

        <section class="form-section">
            <div class="input-group">
                <p>SVG for Stat<br>(98px x 98px size)</p>
                <input required="" type="file" name="" autocomplete="off" id="svg1Input" class="input">
            </div>
        </section>

        <section class="form-section" style="justify-content: center">
            <div class="input-group">
                <input required="" type="text" name="" autocomplete="off" id="stat1Input" class="input">
                <label class="label" style="background-color: var(--bgLight)">Stat 1</label>
            </div>
            <div class="input-group">
                <input required="" type="text" name="" autocomplete="off" id="stat1TextInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Stat 1 Text</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <p>SVG for Stat<br>(98px x 98px size)</p>
                <input required="" type="file" name="" autocomplete="off" id="svg2Input" class="input">
            </div>
        </section>

        <section class="form-section" style="justify-content: center">
            <div class="input-group">
                <input required="" type="text" name="" autocomplete="off" id="stat2Input" class="input">
                <label class="label" style="background-color: var(--bgLight)">Stat 2</label>
            </div>
            <div class="input-group">
                <input required="" type="text" name="" autocomplete="off" id="stat2TextInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Stat 2 Text</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <p>SVG for Stat<br>(98px x 98px size)</p>
                <input required="" type="file" name="" autocomplete="off" id="svg3Input"
                    class="input">
            </div>
        </section>

        <section class="form-section" style="justify-content: center">
            <div class="input-group">
                <input required="" type="text" name="" autocomplete="off" id="stat3Input"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Stat 3</label>
            </div>
            <div class="input-group">
                <input required="" type="text" name="" autocomplete="off" id="stat3TextInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Stat 3 Text</label>
            </div>
        </section>

        <section id="stats">
            <div class="width-limiter justify-evenly flex-wrap" style="gap: 2rem">
                <div class="stat-card align-center justify-center flex-col">
                    <div class="flex align-center justify-center" style="gap: 1rem">
                        <img id="svg1" src="{{ asset('assets/icons/bachelor-cap.svg') }}" alt="stat"
                            width="98" height="98">

                        <h3 id="stat1" class="pFont">7000</h3>
                    </div>
                    <p id="stat1Text" class="sFont text-align-center">happy bowlers taught</p>
                </div>

                <div class="stat-card align-center justify-center flex-col">
                    <div class="flex align-center justify-center" style="gap: 1rem">
                        <img id="svg2" src="{{ asset('assets/icons/bowling.svg') }}" alt="stat"
                            width="98" height="98">

                        <h3 id="stat2" class="pFont">67%</h3>
                    </div>
                    <p id="stat2Text" class="sFont text-align-center">accuracy boost by using I.P.T.S. for 70% of
                        students</p>
                </div>

                <div class="stat-card align-center justify-center flex-col">
                    <div class="flex align-center justify-center" style="gap: 1rem">
                        <img id="svg3" src="{{ asset('assets/icons/trophy.svg') }}" alt="stat"
                            width="98" height="98">
                        <h3 id="stat3" class="pFont">900</h3>
                    </div>
                    <p id="stat3Text" class="sFont text-align-center">Champions Made</p>
                </div>
            </div>
        </section>

        <script>
            const inputElements = {
                stat1: {
                    input: document.getElementById('stat1Input'),
                    output: document.getElementById('stat1')
                },
                stat2: {
                    input: document.getElementById('stat2Input'),
                    output: document.getElementById('stat2')
                },
                stat3: {
                    input: document.getElementById('stat3Input'),
                    output: document.getElementById('stat3')
                },

                stat1Text: {
                    input: document.getElementById('stat1TextInput'),
                    output: document.getElementById('stat1Text')
                },
                stat2Text: {
                    input: document.getElementById('stat2TextInput'),
                    output: document.getElementById('stat2Text')
                },
                stat3Text: {
                    input: document.getElementById('stat3TextInput'),
                    output: document.getElementById('stat3Text')
                }
            };

            // Generic function to handle input updates
            function updateContent(element) {
                element.input.addEventListener('input', () => {
                    element.output.textContent = element.input.value;
                });
            }

            const svgs = {
                svg1: {
                    input: document.getElementById('svg1Input'),
                    output: document.getElementById('svg1')
                },
                svg2: {
                    input: document.getElementById('svg2Input'),
                    output: document.getElementById('svg2')
                },
                svg3: {
                    input: document.getElementById('svg3Input'),
                    output: document.getElementById('svg3')
                }
            }

            for (const svgId in svgs) {
                const svg = svgs[svgId];
                svg.input.addEventListener('change', (event) => {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (event) => {
                            svg.output.src = event.target.result;
                        };
                        reader.readAsDataURL(file); // Read the file as a data URL
                    }
                });
            }

            // Apply the update function to all elements in the inputElements object
            Object.values(inputElements).forEach(updateContent);
        </script>

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
                    @foreach ($events as $event)
                        <tr>
                            <td data-label="No.">{{ $loop->index + 1 }}</td>
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
                    @endforeach
                </tbody>
            </table>
        </div>

        <section id="featured-events">
            <h2 class="section-heading alt">Upcoming Events</h2>
            <div class="carousel">
                <div class="carousel-inner">
                    @foreach ($events as $event)
                        <a href="/events"
                            class="featured-events-link trans-ease-in-out carousel-item {{ $loop->first ? 'active' : '' }} ci-1">
                            <img src="https://placehold.co/700x400" alt="event.webp" width="700"
                                height="400" />
                            <h3 class="pFont">Lorem ipsum dolor {{ $loop->index }}</h3>
                        </a>
                    @endforeach
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
                    @foreach ($testimonials as $testimonial)
                        <tr>
                            <td data-label="No.">{{ $loop->index + 1 }}</td>
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
                    @endforeach
                </tbody>
            </table>
        </div>

        <section id="featured-testimonials">
            <h2 class="section-heading">What our community has to say</h2>
            <div class="carousel" style="max-width: 700px">
                <div class="carousel-inner">
                    @foreach ($testimonials as $testimonial)
                        <div
                            class="carousel-item ci-2 {{ $loop->first ? 'active' : '' }} testimonials-card flex-col sFont">
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

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/landing-editor'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

</main>

@include('components.footer')
