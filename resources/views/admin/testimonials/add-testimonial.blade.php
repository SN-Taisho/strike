@include('admin.components.admin-head', ['title' => 'Add Testimonial'])

@include('admin.components.admin-header')

<main>
    <form action="{{ route('testimonials.store') }}" class="edit-form width-limiter" style="max-width: 720px" method="POST">
        @csrf
        <h1 class="section-heading">Add Testimonial</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="name" autocomplete="off" id="nameInput" class="input">
                <label class="label" style="background-color: var(--bgLight)">Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="role" autocomplete="off" id="positionInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Position</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Photo (1:1)</label>
                <input required="" type="file" name="image" autocomplete="off" id="imageInput" class="input">
            </div>
        </section>

        <section class="form-section">
            <p>Testimonial Content</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="body" autocomplete="off" id="contentInput" class="input"
                    rows="5"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/testimonials-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Testimonial</button>
        </div>
    </form>

        <section class="community-content" style="margin-top: 3rem">
            <div class="width-limiter justify-evenly flex-wrap">

                <div class="testimonials-card flex-col sFont" key={i}>
                    <div class="profile">
                        <img id="image" src=" https://res.cloudinary.com/test-strike/image/upload/v1702011837/Testimonials/tinywow_79350280_3137254119636979_4560698172439003136_n_1__42492023_wxp3sd.webp"
                            alt="testimonial profile" width="100" height="100" />
                        <h3 id="name" class="pFont">Lorem Ipsom dolor</h3>
                        <p id="position">Lorem Ipsum</p>
                    </div>
                    <p id="content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum, quidem eum praesentium
                        voluptatum exercitationem dolores nulla dolorum vitae doloribus non veritatis cupiditate
                        earum
                        consequuntur voluptate nobis quisquam! Rem, consectetur. lorem
                    </p>

                    <svg width="80" height="80 "fill="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fillRule="evenodd"
                            d="M9.427 4.558C5.66 6.976 3.57 9.79 3.15 13c-.65 4.999 3.82 7.445 6.084 5.247 2.265-2.198.907-4.989-.733-5.751-1.64-.763-2.643-.497-2.468-1.517.175-1.019 2.509-3.845 4.558-5.16a.374.374 0 0 0 .057-.511l-.507-.659c-.22-.286-.43-.275-.715-.092Z"
                            clipRule="evenodd" />
                        <path fillRule="evenodd"
                            d="M19.34 4.558C15.574 6.976 13.482 9.79 13.064 13c-.651 4.999 3.82 7.445 6.084 5.247 2.265-2.198.907-4.989-.733-5.751-1.64-.763-2.643-.497-2.468-1.517.175-1.019 2.508-3.845 4.558-5.16a.374.374 0 0 0 .057-.511l-.507-.659c-.22-.286-.43-.275-.715-.092Z"
                            clipRule="evenodd" />
                    </svg>
                </div>

            </div>
        </section>

        <script>
            const inputElements = {
                name: {
                    input: document.getElementById('nameInput'),
                    output: document.getElementById('name')
                },
                position: {
                    input: document.getElementById('positionInput'),
                    output: document.getElementById('position')
                },
                content: {
                    input: document.getElementById('contentInput'),
                    output: document.getElementById('content')
                },
            };

            const image = document.getElementById('image');

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
                    image.src = event.target.result;
                };

                reader.readAsDataURL(file);
            });
        </script>




</main>

@include('components.footer')
