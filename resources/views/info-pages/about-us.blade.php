@include('components.header', ['title' => 'About Us'])

<main>
    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1>About Us</h1>
            </div>

            <div class="i-section-right">
                <p class="callout">"Skills are caught, not taught"</p>
                <p>STRIKE believe sports provide a great platform to develop desirable character traits. STRIKE's
                    progressive <strong>pedagogy</strong> harness the experiences of parents with successful children,
                    coaches with
                    proven track
                    records, innovation provided by evolving technologies, and consultations with domain experts. The
                    sport of
                    bowling has many unique attributes to maximise every teachable moment to achieve the desired
                    outcomes.</p>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2>Vision</h2>
            </div>

            <div class="i-section-right">
                <p>To be a world class premier academy that
                    produces not only bowling champions but
                    champions for life.
                    <br>
                    Staffed by a team of professional coaches
                    and administrators delivering the highest
                    quality curriculum, powered by best
                    practices whilst upholding an
                    irreproachable code of conduct.
                    <br>
                    Create a conducive environment infused
                    with fun-loving activities that allows for life
                    skills to be caught rather than taught.
                </p>
            </div>
        </div>
    </section>

    <div class="info-divider"></div>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2>Mission</h2>
            </div>

            <div class="i-section-right">
                <img src="{{ asset('assets/images/Strike.png') }}" alt="Strike">
                <p>To impart life skills to the young so they may realize their maximum potential through the pursuit of
                    bowling excellence in a fun-loving environment.</p>
            </div>
        </div>
    </section>

    <div class="info-divider"></div>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2>Stakeholders</h2>
            </div>

            <div class="i-section-right">
                <p>Create a sustainable eco-system that have the best interest of:</p>
                <ul>
                    <li>National Sports Associations</li>
                    <li>National Governing Bodies</li>
                    <li>Governing Education Agencies</li>
                    <li>Operators&#47;Service Providers&#47;Sponsors</li>
                    <li>Coaches</li>
                    <li>Parents</li>
                    <li>Bowlers</li>
                </ul>
            </div>
        </div>
    </section>


</main>

@include('components.footer')
