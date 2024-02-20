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
            <p>About Us Paragraph</p>
            <textarea id="SNAbout" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNAbout').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            </script>
        </section>

        <section class="form-section flex-col">
            <p>Vision Paragraph</p>
            <textarea id="SNVision" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNVision').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            </script>
        </section>

        <section class="form-section flex-col">
            <p>Mission Paragraph</p>
            <textarea id="SNMission" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNMission').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            </script>
        </section>

        {{-- <section class="form-section flex-col" style="margin: auto;">
            <p>Vision Paragraph</p>
            <div class="input-group fill">
                <textarea required="true" type="text" name="vision_paragraph" autocomplete="off" id="visionInput" class="input"
                    rows="5"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section> --}}

        {{-- <section class="form-section flex-col" style="margin: auto;">
            <div class="input-group file">
                <label class="filelabel">Vi Banner</label>
                <input required="" type="file" autocomplete="disabled" name="Landing Banner"
                    accept="image/png, image/jpeg, image/webp" class="input" id="imageInput">
            </div>
        </section> --}}

        {{-- <section class="form-section flex-col" style="margin: auto;">
            <p>Mission Paragraph</p>
            <div class="input-group fill">
                <textarea required="true" type="text" name="mission_paragraph" autocomplete="off" id="missionInput" class="input"
                    rows="5"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <section class="form-section flex-col" style="margin: auto;">
            <p>Stakeholder Paragraph</p>
            <div class="input-group fill">
                <textarea required="true" type="text" name="stakeholder_paragraph" autocomplete="off" id="stakeholderInput"
                    class="input" rows="5"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <section class="form-section flex-col" style="margin: auto;">
            <p>Stakeholder List<br>(Separate by entering a new line)</p>
            <div class="input-group fill">
                <textarea required="true" type="text" name="stakeholder_paragraph" autocomplete="off" id="listInput" class="input"
                    rows="3"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section> --}}

        <div class="justify-evenly flex-wrap" style="margin-bottom: 3rem">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/about-us-editor'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1>About Us</h1>
            </div>

            <div class="i-section-right">

                <p id="callout" class="callout">"Skills are caught, not taught"</p>

                <p id="about">STRIKE believe sports provide a great platform to develop desirable character
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

                <p id="vision">To be a world class premier academy that
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

                <img id="image" class="border-smooth" src="{{ asset('assets/images/Strike.png') }}"
                    alt="Strike">

                <p id="mission">To impart life skills to the young so they may realize their maximum potential
                    through the
                    pursuit of
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

                <p id="stakeholder">Create a sustainable eco-system that have the best interest of:</p>
                <ul id="list">
                    <li>National Sports Associations</li>
                    <li>National Governing Bodies</li>
                    <li>Governing Education Agencies</li>
                    <li>Operators&#47;Service Providers&#47;Sponsors</li>
                    <li>Coaches</li>
                    <li>Parents</li>
                    <li>Bowlers</li>
                </ul>
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
        about: {
            input: document.getElementById('aboutInput'),
            output: document.getElementById('about')
        },
        vision: {
            input: document.getElementById('visionInput'),
            output: document.getElementById('vision')
        },
        mission: {
            input: document.getElementById('missionInput'),
            output: document.getElementById('mission')
        },
        stakeholders: {
            input: document.getElementById('stakeholderInput'),
            output: document.getElementById('stakeholder')
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


    // Stakeholder List Preview
    const listInput = document.getElementById("listInput");
    const list = document.getElementById("list");

    // Function to create the list
    function createList() {
        const items = listInput.value.split(/\r?\n/); // Split on newline characters
        list.innerHTML = ""; // Clear any existing list items

        items.forEach(item => {
            const listItem = document.createElement("li");
            listItem.textContent = item.trim(); // Trim any leading/trailing spaces
            list.appendChild(listItem);
        });

        const commaSeparatedItems = items.join(","); // Join with commas
        document.getElementById("listOutput").value = commaSeparatedItems;
    }

    listInput.addEventListener("input", createList);
</script>

@include('components.footer')
