@include('admin.components.admin-head', ['title' => 'About Us Editor'])

@include('admin.components.admin-header')

<main>
    <form>

        <h3 class="section-heading" style="margin-top: 3rem">About Us Editor</h3>

        <section class="form-section flex-col" style="margin: auto"">
            <p>Callout Heading</p>
            <div class="input-group">
                <input required="" type="text" name="about_callout" autocomplete="off" id="calloutInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight);">Write Here</label>
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Contact Us Paragraph</p>
            <textarea id="SNAboutParag" name="RTLandingParag" placeholder="Write Here"></textarea>
            <script>
                $('#SNAboutParag').summernote({
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

                $('#SNAboutParag').on('summernote.change', function(we, contents, $editable) {
                    const SNAboutParag = $('#SNAboutParag').summernote('code');
                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNAboutParag);

                    $('#aboutParag').html(sanitizedHtml);
                });
            </script>
        </section>

        <section class="form-section flex-col">
            <p>Vision Paragraph</p>
            <textarea id="SNVisionParag" name="RTLandingParag" placeholder="Write Here"></textarea>
            <script>
                $('#SNVisionParag').summernote({
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

                $('#SNVisionParag').on('summernote.change', function(we, contents, $editable) {
                    const SNVisionParag = $('#SNVisionParag').summernote('code');
                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNVisionParag);

                    $('#vision').html(sanitizedHtml);
                });
            </script>
        </section>

        <section class="form-section flex-col">
            <p>Mission Paragraph</p>
            <textarea id="SNMissionParag" name="RTLandingParag" placeholder="Write Here"></textarea>
            <script>
                $('#SNMissionParag').summernote({
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

                $('#SNMissionParag').on('summernote.change', function(we, contents, $editable) {
                    const SNMissionParag = $('#SNMissionParag').summernote('code');
                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNMissionParag);

                    $('#mission').html(sanitizedHtml);
                });
            </script>
        </section>

        <section class="form-section flex-col" style="margin: auto;">
            <div class="input-group file">
                <label class="filelabel">Vision Image</label>
                <input required="" type="file" autocomplete="disabled" name=""
                    accept="image/png, image/jpeg, image/webp" class="input" id="imageInput">
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Stakeholders</p>
            <textarea id="SNStakeholderParag" name="RTLandingParag" placeholder="Write Here"></textarea>
            <script>
                $('#SNStakeholderParag').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['p']],
                        ['font', ['bold', 'italic', 'underline']],
                        ['parag', ['ul', 'ol']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });

                $('#SNStakeholderParag').on('summernote.change', function(we, contents, $editable) {
                    const SNStakeholderParag = $('#SNStakeholderParag').summernote('code');

                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNStakeholderParag, {
                        ALLOWED_TAGS: ['p', 'strong', 'em', 'ul', 'ol', 'li', 'br',
                            'a'
                        ],
                        ALLOWED_ATTRS: {
                            'a': ['href', 'target'] // Allow specific attributes for <a> tag
                        }
                    });

                    $('#stakeholders').empty().append(sanitizedHtml);
                });
            </script>
        </section>

        <div class="justify-evenly flex-wrap" style="margin-bottom: 3rem">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/about-us-editor'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h3 class="section-heading">About Us Preview</h3>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1>About Us</h1>
            </div>

            <div class="i-section-right">

                <p id="callout" class="callout">"Skills are caught, not taught"</p>

                <p id="aboutParag">STRIKE believe sports provide a great platform to develop desirable character
                    traits. STRIKE's
                    progressive <strong>pedagogy</strong> harness the experiences of parents with successful
                    children,
                    coaches with
                    proven track
                    records, innovation provided by evolving technologies, and consultations with domain experts.
                    The
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

                <div id="vision">To be a world class premier academy that
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
                </div>
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

                <img id="image" class="border-smooth" src="{{ asset('assets/images/Strike.png') }}" alt="Strike">

                <div id="mission">To impart life skills to the young so they may realize their maximum potential
                    through the
                    pursuit of
                    bowling excellence in a fun-loving environment.</div>
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

                <div id="stakeholders">
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

                <input id="listOutput" type="text" type="hidden" style="display: none;">
            </div>
        </div>
    </section>
</main>

<script>
    const inputElements = {
        callout: {
            input: document.getElementById('calloutInput'),
            output: document.getElementById('callout')
        },
    };

    const image = document.getElementById('image');

    // Generic function to handle input updates
    function updateContent(element) {
        element.input.addEventListener('input', () => {
            element.output.innerHTML = element.input.value;
        });
    }

    // Apply the update function to all elements in the inputElements object
    Object.values(inputElements).forEach(updateContent);

    // Handle image update efficiently
    const imageInput = document.getElementById('imageInput');
    imageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = (event) => {
            image.src = event.target.result;
        };

        reader.readAsDataURL(file);
    });
</script>

@include('components.footer')
