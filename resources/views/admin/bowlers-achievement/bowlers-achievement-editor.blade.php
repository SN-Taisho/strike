@include('admin.components.admin-head', ['title' => 'Bowlers Achievement Details Editor'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Edit Bowlers Achievement Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" id="titleInput" class="input">
                <label class="label">Tournament Title</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" id="categoryInput"
                    class="input">
                <label class="label">Tournament Category</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Tournament Image<br>(3:4 or 16:9)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image1"
                src="https://res.cloudinary.com/test-strike/image/upload/v1702010311/Events/persnickety-prints-rrHl2zGZ9E4-unsplash_qcpfo1.jpg">
        </div>

        <section class="form-section flex-col">
            <p>Bowlers Achievement Content</p>
            <textarea id="SNBAContent" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNBAContent').summernote({
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

                $('#SNBAContent').on('summernote.change', function(we, contents, $editable) {
                    const SNBAContent = $('#SNBAContent').summernote('code');

                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNBAContent, {
                        ALLOWED_TAGS: ['p', 'strong', 'em', 'ul', 'ol', 'li', 'br',
                            'a'
                        ],
                        ALLOWED_ATTRS: {
                            'a': ['href', 'target'] // Allow specific attributes for <a> tag
                        }
                    });

                    // Safely and selectively update content within #policyContent
                    $('#content').empty().append(sanitizedHtml); // Replace or append based on your requirement
                });
            </script>
        </section>

        <section class="form-section">
            {{-- Modal Open --}}
            <button type="button" class="action-btn alt text-deco-none"
                onclick="document.querySelector('#add-placement').showModal()">Add Placement</button>
        </section>

        <div class="justify-center flex-wrap" style="gap: 1rem; padding: 2rem;">

            @for ($i = 0; $i < 3; $i++)
                <div class="form-section border-smooth" style="border: 3px solid var(--bgMedium); max-width: 420px">

                    <div class="input-group" style="width: fit-content;">
                        <input required="true" type="text" name=""autocomplete="off" class="input">
                        <label class="label">Placement</label>
                    </div>

                    <div class="input-group" style="width: fit-content">
                        <input required="true" type="text" name=""autocomplete="off" class="input">
                        <label class="label">Name</label>
                    </div>

                    <img src="https://t4.ftcdn.net/jpg/02/15/84/43/360_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg"
                        alt="Bowler Photo" style="object-fit: cover; aspect-ratio: 1/1; width: 280px">

                    <div class="input-group fill">
                        <textarea required="" type="text" name="text" autocomplete="off" id="contentInput" class="input"
                            rows="5"></textarea>
                        <label class="label">Description</label>
                    </div>

                    <button type="button" class="cancel-btn trans-ease-in-out"
                        onclick="window.location.href='/delete_placement'">Remove</button>

                </div>
            @endfor
        </div>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/bowlers-achievement-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    {{-- Modal Here --}}
    <dialog id="add-placement" class="modal">

        <button class="modal-close trans-ease-out" type="button"
            onclick="document.querySelector('#add-placement').close()"><svg width="48" height="48" fill="none"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z"></path>
                <path d="m14.829 9.172-5.657 5.657"></path>
                <path d="m9.172 9.172 5.656 5.657"></path>
            </svg></button>
        <h2 class="section-subheading text-align-center" style="color: var(--bgLight); margin-bottom: 1rem">Add
            Placement
        </h2>

        <form id="add" class="align-center flex-col" method="" action="" style="gap: 1rem">

            <div class="input-group alt" style="width: fit-content">
                <input required="true" type="text" name=""autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgMedium)">Placement</label>
            </div>

            <div class="input-group alt" style="width: fit-content">
                <input required="true" type="text" name=""autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgMedium)">Name</label>
            </div>

            <div class="input-group alt file">
                <label class="filelabel">Bowler Photo (1:1)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>

            <div class="input-group alt">
                <textarea required="" type="text" name="text" autocomplete="off" id="contentInput" class="input"
                    rows="5"></textarea>
                <label class="label" style="background-color: var(--bgMedium)">Description</label>
            </div>

            {{-- Modal Submit --}}
            <button class="submit-btn" type="submit">Save Placement</button>
        </form>
    </dialog>

    <h2 class="section-heading">Page Preview</h2>

    <div class="banner-image width-limiter">
        <img id="image2"
            src="https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_350836209_969512447531209_9199530780059439315_n_42492430_e7bmue.webp"
            alt="Achievement banner" style="height: inherit; width: 100%; object-fit: cover;">
    </div>

    <article class="article">
        <div class="width-limiter sFont">

            <h1 id="title" class="pFont">Tournament Name</h1>
            <span id="category">Tournament Category</span>

            <div class="placements">
                <div class="placement-card">
                    <div>
                        <h2>Champion</h2>
                        <p>Lorem Ipsum</p>
                    </div>
                    <img src="https://t4.ftcdn.net/jpg/02/15/84/43/360_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg"
                        alt="Student Photo">
                </div>

                <div class="placement-card">
                    <div>
                        <h2>1st Runner-up</h2>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <img src="https://t4.ftcdn.net/jpg/02/15/84/43/360_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg"
                        alt="Student Photo">
                </div>

                <div class="placement-card">
                    <div>
                        <h2>1st</h2>
                        <p>Lorem ipsum</p>
                    </div>
                    <img src="https://t4.ftcdn.net/jpg/02/15/84/43/360_F_215844325_ttX9YiIIyeaR7Ne6EaLLjMAmy4GvPC69.jpg"
                        alt="Student Photo">
                </div>
            </div>

            <div id="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci, animi sunt
                    recusandae similique
                    molestiae rem voluptate. Sit eum repellat esse dolores quis quas, excepturi, odit earum quasi quo
                    ullam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt totam illum
                    architecto
                    perferendis rerum, eum voluptatum eligendi quos voluptates! Dignissimos incidunt voluptatum fuga
                    enim
                    quae voluptas magni ut ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                    dicta
                    nam sunt, eos maxime vero a mollitia reiciendis perspiciatis eligendi error, natus eaque quae ullam
                    expedita ex quos aut! Illum?</p>
            </div>

        </div>
    </article>
</main>

<script>
    const inputElements = {
        title: {
            input: document.getElementById('titleInput'),
            output: document.getElementById('title')
        },
        category: {
            input: document.getElementById('categoryInput'),
            output: document.getElementById('category')
        },
    };

    const images = {
        image1: document.getElementById('image1'),
        image2: document.getElementById('image2')
    };

    // Generic function to handle input updates
    function updateContent(element) {
        element.input.addEventListener('input', () => {
            element.output.textContent = element.input.value;
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
