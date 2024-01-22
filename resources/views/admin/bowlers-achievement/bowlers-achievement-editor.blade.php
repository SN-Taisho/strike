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

        <section class="form-section" style="max-width: 720px; margin: auto;">
            <p>Main Content of Bowler's
                Achievement
            </p>
            <div class="input-group fill">
                <textarea required="" type="text" name="text" autocomplete="off" id="contentInput" class="input"
                    rows="5"></textarea>
                <label class="label">Event content</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/bowlers-achievement-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h1 class="section-heading">Manage Tournament Placement</h1>

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
            Tournament Placement
        </h2>
        <form id="add" class="align-center flex-col" method="" action="" style="gap: 1rem">

            <div class="input-group alt">
                <input required="true" type="text" name=""autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgMedium)">Placement</label>
            </div>
            <div class="input-group alt">
                <input required="true" type="text" name=""autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgMedium)">Bowler's Name</label>
            </div>
            <button class="submit-btn" type="submit">Add Placement</button>
        </form>
    </dialog>

    <button type="button" class="action-btn alt text-deco-none" style="margin: auto"
        onclick="document.querySelector('#add-placement').showModal()">Add Tournament Placement</button>

    <div class="table-limiter" style="max-width: 720px">
        <table class="res-table small">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Placement</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td data-label="No.">{{ $i + 1 }}</td>
                        <td data-label="Placement">nth</td>
                        <td data-label="Name">
                            <p class="limit-text">Lorem ipsum, dolor sit amet
                            </p>
                        </td>
                        <td class="actions" data-label="Action">
                            <button type="button" class="action-btn edit icon"
                                onclick="document.querySelector('#edit-modal{{ $i + 1 }}').showModal()"><svg
                                    width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                    <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                </svg> &nbsp;Edit</button>

                            {{-- Edit Modal --}}
                            <dialog id="edit-modal{{ $i + 1 }}" class="modal">
                                <button class="modal-close trans-ease-out" type="button"
                                    onclick="document.querySelector('#edit-modal{{ $i + 1 }}').close()"><svg
                                        width="48" height="48" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                                        </path>
                                        <path d="m14.829 9.172-5.657 5.657"></path>
                                        <path d="m9.172 9.172 5.656 5.657"></path>
                                    </svg></button>
                                <h2 class="section-subheading"
                                    style="color: var(--bgLight); margin-bottom: 1rem; text-align: center">
                                    Edit
                                    Tournament Placement</h2>
                                <form class="align-center flex-col" method="" action=""
                                    style="gap: 1rem;">

                                    <div class="input-group alt">
                                        <input required="true" type="text" name=""autocomplete="off"
                                            class="input">
                                        <label class="label"
                                            style="background-color: var(--bgMedium)">Placement</label>
                                    </div>
                                    <div class="input-group alt">
                                        <input required="true" type="text" name=""autocomplete="off"
                                            class="input">
                                        <label class="label" style="background-color: var(--bgMedium)">Bowler's
                                            Name</label>
                                    </div>

                                    <button class="submit-btn" type="submit" style="margin-top: 1rem">Save</button>
                                </form>
                            </dialog>

                            <button type="button" class="action-btn delete icon"
                                onclick="window.location.href='/delete_attribute'">
                                <svg width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 5v17h15V5h-15Z"></path>
                                    <path d="M10 10v6.5"></path>
                                    <path d="M14 10v6.5"></path>
                                    <path d="M2 5h20"></path>
                                    <path d="m8 5 1.645-3h4.744L16 5H8Z"></path>
                                </svg>&nbsp;Delete</button>

                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>

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

            <ul id="list">
                <li>1st Place Lorem</li>
                <li>2nd Place Lorem</li>
                <li>3rd Place Lorem</li>
                <li>4th Place Lorem</li>
            </ul>

            <p id="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci, animi sunt
                recusandae similique
                molestiae rem voluptate. Sit eum repellat esse dolores quis quas, excepturi, odit earum quasi quo ullam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt totam illum architecto
                perferendis rerum, eum voluptatum eligendi quos voluptates! Dignissimos incidunt voluptatum fuga enim
                quae voluptas magni ut ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta
                nam sunt, eos maxime vero a mollitia reiciendis perspiciatis eligendi error, natus eaque quae ullam
                expedita ex quos aut! Illum?</p>

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
        content: {
            input: document.getElementById('contentInput'),
            output: document.getElementById('content')
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
