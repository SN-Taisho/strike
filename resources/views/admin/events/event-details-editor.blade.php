@include('admin.components.admin-head', ['title' => 'Add Programme'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Edit Event Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="eventTtitle" autocomplete="off" id="titleInput" class="input">
                <label class="label">Event Title</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Event Image (3:4 or 16:9)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image1"
                src="https://res.cloudinary.com/test-strike/image/upload/v1702010311/Events/persnickety-prints-rrHl2zGZ9E4-unsplash_qcpfo1.jpg">
        </div>

        <section class="form-section">
            <p>Main Description of Programme</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="text" autocomplete="off" id="contentInput" class="input"
                    rows="5"></textarea>
                <label class="label">Event content</label>
            </div>
        </section>

        <h2 class="section-subheading">Date and Location</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="date" name="duration" autocomplete="off" id="dateInput" class="input">
            </div>

            <div class="input-group">
                <input required="true" type="text" name="agerange" autocomplete="off" id="locationInput"
                    class="input">
                <label class="label">Location</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out" onclick="window.location.href='/events-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h2 class="section-heading">Page Preview</h2>

    <div class="banner-image width-limiter">
        <img id="image2"
            src="https://res.cloudinary.com/test-strike/image/upload/v1702010311/Events/persnickety-prints-rrHl2zGZ9E4-unsplash_qcpfo1.jpg"
            alt="Event banner" style="height: inherit; width: 100%; object-fit: cover;">
    </div>

    <article class="article">
        <div class="width-limiter sFont">

            <h1 id="title" class="pFont">Event Title</h1>
            <span><span id="date">Date</span> - <span id="location">Location</span></span>

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
        mainDescription: {
            input: document.getElementById('contentInput'),
            output: document.getElementById('content')
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
