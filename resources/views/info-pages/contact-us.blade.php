@include('components.head', ['title' => 'Contact Us'])

@include('components.header')

<main>
    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1>Contact Us</h1>
            </div>

            <div class="i-section-right">
                <p>We are always here to help. Please feel free to contact us with any questions or concerns you may
                    have. You can reach us by phone, email, or by filling out the contact form below. We will respond to
                    your inquiry as soon as possible.</p>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2>Strike Academy Private Limited</h2>
            </div>

            <div class="i-section-right">
                <h3>Opening Hours</h3>
                <p class="callout">10 AM to 6 PM daily</p>

                <h3>Address</h3>
                <p class="callout">131 Rifle Range Road, #04-01, Singapore 588046</p>

                <h3>Phone</h3>
                <p class="callout">(65) 9645 9065</p>

                <h3>Email</h3>
                <p class="callout" style="word-break: break-all">admin@strikeacademy.com</p>
                <p>(For programme registration, place call or email STRIKE ADMIN)</p>

                <h3>Stay in Touch with Us</h3>
                <ul id="contact-us-socials" class="flex list-style-none">
                    <li>
                        <a href="/facebook">
                            <img src="{{ asset('assets/icons/facebook-icon.png') }}" alt="facebook.png"
                                width="48" />
                        </a>
                    </li>
                    <li>
                        <a href="/instagram">
                            <img src="{{ asset('assets/icons/instagram-icon.png') }}" alt="instagram.png"
                                width="48" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

@include('components.footer')
