@include('admin.components.admin-head', ['title' => 'Programme Details Editor'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Edit Programme Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="landing" autocomplete="off" id="titleInput" class="input">
                <label class="label">Programme Title</label>
            </div>
        </section>

        <section class="form-section">
            <p>Brief Description of the Programme</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="brief_desc" autocomplete="off" id="briefDescriptionInput" class="input"
                    rows="5"></textarea>
                <label class="label">Write Here</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Programme Image (1:1)</label>
                <input required="" type="file" name="programme_image" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image1"
                src="https://res.cloudinary.com/test-strike/image/upload/v1702006800/Programmes/fvt6wn495ijmzcwxop5n.webp"
                alt="Programme image">
        </div>

        <section class="form-section flex-col">
            <p>Main description of programme</p>
            <textarea id="SNMainDesc" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNMainDesc').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['p']],
                        ['font', ['bold', 'italic', 'underline']],
                        ['color', ['color']],
                        ['parag', ['ul', 'ol']],
                        ['view', ['codeview', 'help']]
                    ]
                });

                $('#SNMainDesc').on('summernote.change', function(we, contents, $editable) {
                    const SNMainDesc = $('#SNMainDesc').summernote('code');
                    console.log(SNMainDesc);

                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNMainDesc, {
                        ALLOWED_TAGS: ['p', 'strong', 'em', 'ul', 'ol', 'li', 'br',
                            'a'
                        ], // Adjust allowed tags as needed
                        ALLOWED_ATTRS: {
                            'a': ['href', 'target'] // Allow specific attributes for <a> tag
                        }
                    });

                    // Safely and selectively update content within #policyContent
                    $('#mainDesc').empty().append(sanitizedHtml); // Replace or append based on your requirement
                });
            </script>
        </section>

        <input type="text" id="mainDescriptionHidden" hidden>

        <h2 class="section-subheading">Duration, Age, and Skill Level</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="duration" autocomplete="off" id="durationInput"
                    class="input">
                <label class="label">Duration</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="agerange" autocomplete="off" id="ageRangeInput"
                    class="input">
                <label class="label">Age Range</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="skillrequirement" autocomplete="off" id="skillReqInput"
                    class="input">
                <label class="label">Skill Requirement</label>
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Provide other relevant information for the programme</p>
            <textarea id="SNOtherInfo" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNOtherInfo').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['p']],
                        ['font', ['bold', 'italic', 'underline']],
                        ['color', ['color']],
                        ['parag', ['ul', 'ol']],
                        ['view', ['codeview', 'help']]
                    ]
                });

                $('#SNMainDesc').on('summernote.change', function(we, contents, $editable) {
                    const SNMainDesc = $('#SNMainDesc').summernote('code');
                    console.log(SNMainDesc);

                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNMainDesc, {
                        ALLOWED_TAGS: ['p', 'strong', 'em', 'ul', 'ol', 'li', 'br',
                            'a'
                        ], // Adjust allowed tags as needed
                        ALLOWED_ATTRS: {
                            'a': ['href', 'target'] // Allow specific attributes for <a> tag
                        }
                    });

                    // Safely and selectively update content within #policyContent
                    $('#mainDesc').empty().append(sanitizedHtml); // Replace or append based on your requirement
                });
            </script>
        </section>

        <input type="text" id="otherInfoHidden" autocomplete="off"hidden>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/programmes-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h2 class="section-heading">Page Preview</h2>

    <div class="details-header width-limiter">
        <img id="image2"
            src="https://res.cloudinary.com/test-strike/image/upload/v1702006800/Programmes/fvt6wn495ijmzcwxop5n.webp"
            alt="Programme image">

        <div class="dh-content">
            <h1 id="title" class="heading pFont">Programme Name</h1>
            <p id="briefDescription" class="sFont">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Excepturi saepe soluta eaque
                aut,
                vitae
                voluptates atque? Nesciunt unde laboriosam laudantium, minima adipisci neque ipsum iure. Neque
                commodi
                vel praesentium corporis.</p>
        </div>

        <div class="dh-btn">
            <button class="sFont trans-ease-in-out" onclick="window.location.href='/inquire'">Inquire Now!</button>
            <span class="sFont"><svg width="16" height="16" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22a9.97 9.97 0 0 0 7.071-2.929A9.97 9.97 0 0 0 22 12a9.969 9.969 0 0 0-2.929-7.071A9.969 9.969 0 0 0 12 2a9.969 9.969 0 0 0-7.071 2.929A9.969 9.969 0 0 0 2 12a9.969 9.969 0 0 0 2.929 7.071A9.969 9.969 0 0 0 12 22Z">
                    </path>
                    <path fill="currentColor" fill-rule="evenodd" stroke="none"
                        d="M12 18.5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z" clip-rule="evenodd"></path>
                    <path d="M12 6v8"></path>
                </svg>&nbsp;Find out more by Contacting STRIKE</span>
        </div>
    </div>

    <div class="width-limiter details-content">
        <section class="sFont">
            <h2 class="pFont">About This Programme</h2>
            <p id="mainDesc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo saepe nemo facere,
                exercitationem qui
                optio
                iste! Inventore, perspiciatis doloribus. Quod, quis vel quidem illo atque amet non magni fuga dolor.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ducimus porro praesentium at iure
                ipsum
                officia qui, ab eius aliquam asperiores voluptatibus, iusto voluptate quasi voluptates, enim quia
                corrupti nostrum.</p>

            <h3 class="pFont">Other information</h3>
            <p id="otherInfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ex, pariatur ratione
                dolores velit
                vero
                nulla laboriosam minus quas qui ipsum temporibus. Molestiae pariatur, neque voluptas odit quisquam
                nulla
                atque?</p>
        </section>

        <ul class="tags">
            <li>
                <svg width="48" height="48" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path>
                    <path d="M14 2h-4"></path>
                    <path d="M12 2v4"></path>
                    <path d="M17.5 8 19 6.5"></path>
                    <path d="M12 14v-3"></path>
                    <path d="M12 14H9"></path>
                </svg>
                <p id="duration">Duration</p>
            </li>
            <li>
                <svg width="48" height="48" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 10a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"></path>
                    <path
                        d="M3 20.4v.6h18v-.6c0-2.24 0-3.36-.436-4.216a4 4 0 0 0-1.748-1.748C17.96 14 16.84 14 14.6 14H9.4c-2.24 0-3.36 0-4.216.436a4 4 0 0 0-1.748 1.748C3 17.04 3 18.16 3 20.4Z">
                    </path>
                </svg>
                <p id="ageRange">6 - 17 years old</p>
            </li>

            <li>
                <svg width="48" height="48" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3v18h18"></path>
                    <path d="m7 17 4-8 5 4.5L21 3"></path>
                </svg>
                <p id="skillReq">Required skill level</p>
            </li>
        </ul>
    </div>

</main>

<script>
    const inputElements = {
        title: {
            input: document.getElementById('titleInput'),
            output: document.getElementById('title')
        },
        briefDescription: {
            input: document.getElementById('briefDescriptionInput'),
            output: document.getElementById('briefDescription')
        },
        duration: {
            input: document.getElementById('durationInput'),
            output: document.getElementById('duration')
        },
        ageRange: {
            input: document.getElementById('ageRangeInput'),
            output: document.getElementById('ageRange')
        },
        skillReq: {
            input: document.getElementById('skillReqInput'),
            output: document.getElementById('skillReq')
        }
    };

    const images = {
        image1: document.getElementById('image1'),
        image2: document.getElementById('image2')
    };

    // Generic function to handle input updates
    function updateContent(element) {
        element.input.addEventListener('input', () => {
            element.output.innerHTML = element.input.value.replace(/\n/g, "<br>");
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
            images.image1.src = event.target.result;
            images.image2.src = event.target
                .result;
        };

        reader.readAsDataURL(file);
    });
</script>

@include('components.footer')
