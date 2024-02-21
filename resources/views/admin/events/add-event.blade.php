@include('admin.components.admin-head', ['title' => 'Add New Event'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Add New Event</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="eventTtitle" autocomplete="off" id="titleInput" class="input">
                <label class="label">Event Title</label>
            </div>
        </section>

        <section class="form-section" style="justify-content: center">
            <div class="input-group">
                <select name="" id="categorySelect" class="input">
                    <option selected>Select Category</option>
                    <option value="Strike Events">Strike Events</option>
                    <option value="Tournaments">Tournament</option>
                </select>
            </div>

            {{-- Modal Open --}}
            <button type="button" class="action-btn alt text-deco-none"
                onclick="document.querySelector('#add-category').showModal()">Add Category</button>
        </section>

        <script>
            document.getElementById("categorySelect").addEventListener("change", function() {
                this.querySelector('option[selected]').remove();
            });
        </script>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Event Image (4:3 or 16:9)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image1" src="https://placehold.co/400x300">
        </div>

        <section class="form-section flex-col">
            <p>Event Content</p>
            <textarea id="SNEventContent" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNEventContent').summernote({
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

                $('#SNEventContent').on('summernote.change', function(we, contents, $editable) {
                    const SNEventContent = $('#SNEventContent').summernote('code');

                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNEventContent, {
                        ALLOWED_TAGS: ['p', 'strong', 'em', 'ul', 'ol', 'li', 'br',
                            'a'
                        ],
                        ALLOWED_ATTRS: {
                            'a': ['href', 'target'] // Allow specific attributes for <a> tag
                        }
                    });

                    $('#content').empty().append(sanitizedHtml);
                });
            </script>
        </section>

        <input type="text" id="contentInputHidden" autocomplete="off" hidden>

        <h2 class="section-subheading">Date and Location</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="date" name="duration" autocomplete="off" id="dateInput" class="input">
                <label class="label" style="background-color: var(--softwhite)">Date of Event</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="agerange" autocomplete="off" id="locationInput"
                    class="input">
                <label class="label">Location</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/events-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Create Event</button>
        </div>
    </form>

    {{-- Modal Here --}}
    <dialog id="add-category" class="modal">

        <button class="modal-close trans-ease-out" type="button"
            onclick="document.querySelector('#add-category').close()"><svg width="48" height="48" fill="none"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z"></path>
                <path d="m14.829 9.172-5.657 5.657"></path>
                <path d="m9.172 9.172 5.656 5.657"></path>
            </svg></button>
        <h2 class="section-subheading text-align-center" style="color: var(--bgLight); margin-bottom: 1rem">Create New
            Category
        </h2>

        <form id="add" class="align-center flex-col" method="" action="" style="gap: 1rem">

            <div class="input-group alt" style="width: fit-content">
                <input required="true" type="text" name=""autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgMedium)">Category Name</label>
            </div>

            <div class="input-group alt" style="width: fit-content">
                <textarea class="input" name="" rows="3"></textarea>
                <label class="label" style="background-color: var(--bgMedium)">Category Description</label>
            </div>

            {{-- Modal Submit --}}
            <button class="submit-btn" type="submit">Save Category</button>
        </form>
    </dialog>

    <div class="form-section">
        <h2 class="section-subheading">Link Tournament Results</h2>
    </div>

    <div class="table-limiter" style="max-width: 720px;">
        <table class="res-table small limited">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Result</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @php
                    $year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                    $i = 0;
                @endphp

                @foreach ($year as $month)
                    <tr>
                        <td data-label="No.">{{ $i + 1 }}</td>
                        <td data-label="Result">Result Title</td>
                        <td data-label="Description">
                            <p class="limit-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Reprehenderit est aliquam vel necessitatibus quae in soluta odit impedit ab quaerat
                                nesciunt error repellendus tempora, ea odio velit iste explicabo possimus.</p>
                        </td>
                        <td class="actions" data-label="Action">
                            <div class="check-box-container">
                                <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                    <input type="checkbox" class="cyberpunk-checkbox">
                                    Link</label>
                            </div>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <h2 class="section-heading">Page Preview</h2>

    <div class="banner-image width-limiter">
        <img id="image2" src="https://placehold.co/400x300" alt="Event banner"
            style="height: inherit; width: 100%; object-fit: cover;">
    </div>

    <article class="article">
        <div class="width-limiter sFont">

            <h1 id="title" class="pFont">Event Title</h1>
            <span id="category">Event Category</span>
            <span id="location">Location</span>
            <span id="date" class="date">Date</span>

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

            <a href="/bowlers-achievement-details" class="trans-ease-out">View Results - Tournament Name</a>
        </div>
    </article>
</main>

<script>
    const inputElements = {
        title: {
            input: document.getElementById('titleInput'),
            output: document.getElementById('title')
        },
        date: {
            input: document.getElementById('dateInput'),
            output: document.getElementById('date')
        },
        location: {
            input: document.getElementById('locationInput'),
            output: document.getElementById('location')
        },
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

    const selectFields = {
        category: {
            selectElement: document.getElementById('categorySelect'),
            targetElement: document.getElementById('category')
        }
    }

    function updateTextFromOption({
        selectElement,
        targetElement
    }) {
        selectElement.addEventListener('change', function() {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            targetElement.textContent = selectedOption.value;
        });
    }

    Object.values(selectFields).forEach(updateTextFromOption);
</script>

@include('components.footer')
