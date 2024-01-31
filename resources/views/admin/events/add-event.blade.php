@include('admin.components.admin-head', ['title' => 'Add New Event'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form action="{{ route('events.store') }}" class="edit-form width-limiter" style="max-width: 720px" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="section-heading">Add New Event</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="name" autocomplete="off" id="titleInput" class="input">
                <label class="label">Event Title</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <label class="filelabel">Category</label>
                <select name="category" class="input">
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <button type="button" onclick="openModal()">
                    Add Item
                </button>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Event Image (4:3 or 16:9)</label>
                <input required="" type="file" name="image" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image1" src="https://placehold.co/400x300">
        </div>

        <section class="form-section">
            <p>Main Description of Programme</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="body" autocomplete="off" id="contentInput" class="input"
                    rows="5"></textarea>
                <label class="label">Event content</label>
            </div>
        </section>

        <h2 class="section-subheading">Date and Location</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="date" name="date" autocomplete="off" id="dateInput" class="input">
            </div>

            <div class="input-group">
                <input required="true" type="text" name="location" autocomplete="off" id="locationInput"
                    class="input">
                <label class="label">Location</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="date" name="date" autocomplete="off" id="dateInput" class="input">
            </div>

            <div class="input-group">
                <input required="true" type="text" name="location" autocomplete="off" id="locationInput"
                    class="input">
                <label class="label">Location</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <label class="filelabel">Tournament</label>
                <select name="category" class="input">
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/events-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Create Event</button>
        </div>
    </form>


    <!--< Page Preview>-->

    <h2 class="section-heading">Page Preview</h2>

    <div class="banner-image width-limiter">
        <img id="image2" src="https://placehold.co/400x300" alt="Event banner"
            style="height: inherit; width: 100%; object-fit: cover;">
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


    <!--<Add Category modal>-->
    <div id="addCategory" class="modal" style="display:none; background-color:white">

        <!-- Modal content -->
        <div class="modal-content">
            <h2>Add Category</h2>
            <form id="modalForm" action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input required="true" type="text" id="name" name="name" autocomplete="off" id="locationInput"
                        class="input">
                    <label class="label">Name</label>
                </div>

                <div class="input-group">
                    <input required="true" type="text" id="name" name="description" autocomplete="off" id="locationInput"
                        class="input">
                    <label class="label">Description</label>
                </div>

                <div class="justify-evenly flex-wrap">
                    <button type="button" class="cancel-btn trans-ease-in-out"
                        onclick="closeModal()">Cancel</button>
                    <button type="submit" class="submit-btn trans-ease-in-out">Create Category</button>
                </div>
            </form>
        </div>

    </div>

</main>

<script>

        // Get the modal
        var modal = document.getElementById("addCategory");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        function openModal() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        function closeModal() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

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
