@include('admin.components.admin-head', ['title' => 'Add Programme'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form action="{{ route('events.update',['event' => $event['id']]) }}" class="edit-form width-limiter" style="max-width: 720px" method="POST">
        @csrf
        @method('PUT')
        <h1 class="section-heading">Edit Event Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="name" autocomplete="off" id="titleInput" class="input"
                    value="{{ $event['name'] }}">
                <label class="label">Event Title</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Event Image (3:4 or 16:9)</label>
                <input type="file" name="image" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image1"
                src="{{ asset('storage/' . $event->image->link) }}">
        </div>

        <section class="form-section">
            <p>Main Description of Programme</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="body" autocomplete="off" id="contentInput" class="input"
                    rows="5">{{ $event['body'] }}</textarea>
                <label class="label">Event content</label>
            </div>
        </section>

        <h2 class="section-subheading">Date and Location</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="date" name="date" autocomplete="off" id="dateInput" class="input"
                    value="{{ $event['date'] }}">
            </div>

            <div class="input-group">
                <input required="true" type="text" name="location" autocomplete="off" id="locationInput" class="input"
                    value="{{ $event['location'] }}">
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
            src="{{ asset('storage/' . $event->image->link) }}"
            alt="Event banner" style="height: inherit; width: 100%; object-fit: cover;">
    </div>

    <article class="article">
        <div class="width-limiter sFont">

            <h1 id="title" class="pFont">{{$event['name']}}</h1>
            <span><span id="date">{{$event['date']}}</span> - <span id="location">{{$event['location']}}</span></span>

            <p id="content">
                {{$event['body']}}
            </p>

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
