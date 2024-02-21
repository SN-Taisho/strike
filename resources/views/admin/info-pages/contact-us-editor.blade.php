@include('admin.components.admin-head', ['title' => 'Contact Us Editor'])

@include('admin.components.admin-header')

<main>
    <form action="">

        <h3 class="section-heading" style="margin-top: 3rem">Contact Us Editor</h3>

        <section class="form-section flex-col">
            <p>Contact Us Paragraph</p>
            <textarea id="SNContactParag" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNContactParag').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['p']],
                        ['font', ['bold', 'italic', 'underline']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });

                $('#SNContactParag').on('summernote.change', function(we, contents, $editable) {
                    const SNContactParag = $('#SNContactParag').summernote('code');
                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNContactParag);

                    $('#contactParag').html(sanitizedHtml);
                });
            </script>
        </section>

        <section class="form-section" style="max-width: 720px; margin: auto;">
            <div class="input-group" style="margin-bottom: 1rem">
                <input required="" type="text" name="" autocomplete="off" id="openingInput" class="input">
                <label class="label" style="background-color: var(--bgLight);">Opening Hours</label>
            </div>

            <div class="input-group" style="margin-bottom: 1rem">
                <input required="" type="text" name="" autocomplete="off" id="addressInput" class="input">
                <label class="label" style="background-color: var(--bgLight);">Address</label>
            </div>

            <div class="input-group" style="margin-bottom: 1rem">
                <input required="" type="text" name="" autocomplete="off" id="phoneInput" class="input">
                <label class="label" style="background-color: var(--bgLight);">Phone No.</label>
            </div>

            <div class="input-group" style="margin-bottom: 1rem">
                <input required="" type="text" name="" autocomplete="off" id="emailInput" class="input">
                <label class="label" style="background-color: var(--bgLight);">Email</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/contact-us-editor'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h3 class="section-heading">Contact Us Preview</h3>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1>Contact Us</h1>

                <button type="button" class="inquire-btn" onclick="window.location.href='/inquire'"
                    style="margin-top: 2rem">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Inquire Now</span>
                </button>
            </div>

            <div class="i-section-right">
                <p id="contactParag">We are always here to help. Please feel free to contact us with any questions or
                    concerns you may
                    have. You can reach us by phone, email, or by filling out the contact form below. We will
                    respond to
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
                <p id="opening" class="callout">10 AM to 6 PM daily</p>

                <h3>Address</h3>
                <p id="address" class="callout">131 Rifle Range Road, #04-01, Singapore 588046</p>

                <h3>Phone</h3>
                <p id="phone" class="callout">
                    (65) 9645 9065
                </p>

                <a href="https://wa.me/(65) 9645 9065" id="whatsapp"
                    class="callout hover trans-ease-out text-deco-none"><svg xmlns="http://www.w3.org/2000/svg" x="0px"
                        y="0px" width="48" height="48" viewBox="0 0 48 48">
                        <path fill="#fff"
                            d="M4.9,43.3l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24	c0,10.5-8.5,19-19,19c0,0,0,0,0,0h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3z">
                        </path>
                        <path fill="#fff"
                            d="M4.9,43.8c-0.1,0-0.3-0.1-0.4-0.1c-0.1-0.1-0.2-0.3-0.1-0.5L7,33.5c-1.6-2.9-2.5-6.2-2.5-9.6	C4.5,13.2,13.3,4.5,24,4.5c5.2,0,10.1,2,13.8,5.7c3.7,3.7,5.7,8.6,5.7,13.8c0,10.7-8.7,19.5-19.5,19.5c-3.2,0-6.3-0.8-9.1-2.3	L5,43.8C5,43.8,4.9,43.8,4.9,43.8z">
                        </path>
                        <path fill="#cfd8dc"
                            d="M24,5c5.1,0,9.8,2,13.4,5.6C41,14.2,43,18.9,43,24c0,10.5-8.5,19-19,19h0c-3.2,0-6.3-0.8-9.1-2.3L4.9,43.3	l2.7-9.8C5.9,30.6,5,27.3,5,24C5,13.5,13.5,5,24,5 M24,43L24,43L24,43 M24,43L24,43L24,43 M24,4L24,4C13,4,4,13,4,24	c0,3.4,0.8,6.7,2.5,9.6L3.9,43c-0.1,0.3,0,0.7,0.3,1c0.2,0.2,0.4,0.3,0.7,0.3c0.1,0,0.2,0,0.3,0l9.7-2.5c2.8,1.5,6,2.2,9.2,2.2	c11,0,20-9,20-20c0-5.3-2.1-10.4-5.8-14.1C34.4,6.1,29.4,4,24,4L24,4z">
                        </path>
                        <path fill="#40c351"
                            d="M35.2,12.8c-3-3-6.9-4.6-11.2-4.6C15.3,8.2,8.2,15.3,8.2,24c0,3,0.8,5.9,2.4,8.4L11,33l-1.6,5.8l6-1.6l0.6,0.3	c2.4,1.4,5.2,2.2,8,2.2h0c8.7,0,15.8-7.1,15.8-15.8C39.8,19.8,38.2,15.8,35.2,12.8z">
                        </path>
                        <path fill="#fff" fill-rule="evenodd"
                            d="M19.3,16c-0.4-0.8-0.7-0.8-1.1-0.8c-0.3,0-0.6,0-0.9,0s-0.8,0.1-1.3,0.6c-0.4,0.5-1.7,1.6-1.7,4	s1.7,4.6,1.9,4.9s3.3,5.3,8.1,7.2c4,1.6,4.8,1.3,5.7,1.2c0.9-0.1,2.8-1.1,3.2-2.3c0.4-1.1,0.4-2.1,0.3-2.3c-0.1-0.2-0.4-0.3-0.9-0.6	s-2.8-1.4-3.2-1.5c-0.4-0.2-0.8-0.2-1.1,0.2c-0.3,0.5-1.2,1.5-1.5,1.9c-0.3,0.3-0.6,0.4-1,0.1c-0.5-0.2-2-0.7-3.8-2.4	c-1.4-1.3-2.4-2.8-2.6-3.3c-0.3-0.5,0-0.7,0.2-1c0.2-0.2,0.5-0.6,0.7-0.8c0.2-0.3,0.3-0.5,0.5-0.8c0.2-0.3,0.1-0.6,0-0.8	C20.6,19.3,19.7,17,19.3,16z"
                            clip-rule="evenodd"></path>
                    </svg>WhatsApp</a>

                <h3>Email</h3>
                <p id="email" class="callout" style="word-break: break-all">admin@strikeacademy.com</p>
                <p style="margin-bottom: 0.5rem">(For programme registration or inquiry, please call or email STRIKE
                    ADMIN)</p>

                <a href="mailto:admin@strikeacademy" class="callout hover trans-ease-out text-deco-none"><svg
                        width="32" height="32" fill="none" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 19.5h20v-15H2v15Z"></path>
                        <path d="M2 4.5 12 12l10-7.5"></path>
                        <path d="M12 4.5H2V12"></path>
                        <path d="M22 12V4.5H12"></path>
                    </svg>Send us an Email</a>

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

<script>
    const inputElements = {
        opening: {
            input: document.getElementById('openingInput'),
            output: document.getElementById('opening')
        },
        address: {
            input: document.getElementById('addressInput'),
            output: document.getElementById('address')
        },
        phone: {
            input: document.getElementById('phoneInput'),
            output: document.getElementById('phone')
        },
        email: {
            input: document.getElementById('emailInput'),
            output: document.getElementById('email')
        },
    };

    // Generic function to handle input updates
    function updateContent(element) {
        element.input.addEventListener('input', () => {
            element.output.textContent = element.input.value;
        });
    }

    // Apply the update function to all elements in the inputElements object
    Object.values(inputElements).forEach(updateContent);
</script>

@include('components.footer')
