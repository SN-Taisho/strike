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

        <section class="form-section">
            <p>Tournament Placements<br>(Press enter to add new bullet)</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="text" autocomplete="off" id="listInput" class="input"
                    rows="2"></textarea>
                <label class="label">Write here</label>
            </div>
        </section>
        {{-- Placement hidden input --}}
        <input id="listOutput" type="text" type="hidden" style="display: none;">

        <section class="form-section">
            <p>Main Description of Programme</p>
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

    <h2 class="section-heading">Page Preview</h2>

    <div class="banner-image width-limiter">
        <img id="image2" src="https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_350836209_969512447531209_9199530780059439315_n_42492430_e7bmue.webp"
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

            <p id="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci, animi sunt recusandae similique
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


     // Placement List Preview
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
