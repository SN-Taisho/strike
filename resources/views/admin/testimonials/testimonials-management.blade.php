@include('admin.components.admin-head', ['title' => 'Testimonials Management'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter">
        <h3 class="section-heading">Testimonials Management</h3>

        <section class="form-section flex-col">
            {{-- Edit Banner --}}
            <p>Make sure to save changes after editing the banner</p>
            <button type="button" class="action-btn alt text-deco-none"
                onclick="document.querySelector('#edit-banner').showModal()">Edit Testimonials Page Banner</button>
        </section>

        <a href="/add-testimonial" class="action-btn alt text-deco-none" style="margin: 2rem auto 1rem auto;">Add New
            Testimonial</a>

        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Content</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                        <tr>
                            <td data-label="No.">{{ $loop->index + 1 }}</td>
                            <td data-label="Image" class="table-photo">
                                <div class="image-wrapper">
                                    <img src="{{ $testimonial['image'] }}" alt="Testimonial Image">
                                </div>
                            </td>
                            <td data-label="Name">Lorem Ipsum Dolor</td>
                            <td data-label="Position">Lorem Ipsum</td>
                            <td data-label="Content">
                                <p class="limit-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Molestiae iste blanditiis vitae molestias, necessitatibus, libero rem quo eum rerum,
                                    mollitia minus tempora! Illum nam officia minus. Totam perferendis sit dignissimos?
                                </p>
                            </td>
                            <td class="actions" data-label="Action">
                                <div class="check-box-container">
                                    <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                        <input type="checkbox" class="cyberpunk-checkbox">
                                        Show</label>
                                </div>
                                <button type="button" class="action-btn edit icon"
                                    onclick="window.location.href='/testimonial-editor'"><svg width="24"
                                        height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                        <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                    </svg> &nbsp;Edit</button>
                                <button type="button" class="action-btn delete icon"
                                    onclick="window.location.href='/delete_testimonial'">
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
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/testimonials-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

     {{-- Edit Banner  Modal --}}
     <dialog id="edit-banner" class="modal large">

        <button class="modal-close trans-ease-out" type="button"
            onclick="document.querySelector('#edit-banner').close()"><svg width="48" height="48"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                </path>
                <path d="m14.829 9.172-5.657 5.657"></path>
                <path d="m9.172 9.172 5.656 5.657"></path>
            </svg></button>
        <h2 class="section-subheading text-align-center" style="color: var(--bgLight); margin-bottom: 1rem">Edit
            Banner
        </h2>

        <form id="add" class="align-center flex-col" method="" action="" style="gap: 1rem">

            <section class="form-section flex-col" style="width: 95%;">
                <p style="color: var(--bgLight);">Testimonials Page Description</p>
                <textarea id="SNBriefDesc" name="" placeholder="Write Here"></textarea>
                <script>
                    $('#SNBriefDesc').summernote({
                        inheritPlaceholder: true,
                        tabsize: 2,
                        height: 200,
                        toolbar: [
                            ['style', ['p']],
                            ['font', ['bold', 'italic', 'underline']],
                            ['color', ['color']],
                            ['view', ['codeview', 'help']]
                        ]
                    });

                    $('#SNBriefDesc').on('summernote.change', function(we, contents, $editable) {
                        const SNBriefDesc = $('#SNBriefDesc').summernote('code');
                        // Create a safe and sanitized version of the HTML content
                        const sanitizedHtml = DOMPurify.sanitize(SNBriefDesc);

                        $('#briefDescription').html(sanitizedHtml);
                    });
                </script>
            </section>

            <section class="form-section">
                <div class="input-group file alt">
                    <label class="filelabel">Testimonials Page Banner</label>
                    <input required="" type="file" name="Event Banner" autocomplete="off" id="imageInput"
                        class="input">
                </div>
            </section>

            {{-- Modal Submit --}}
            <button class="submit-btn" type="submit">Save Banner</button>
        </form>
    </dialog>

    <h2 class="section-heading">Testimonials Preview</h2>

    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Testimonials</h1>
                <p id="briefDescription">Discover how we've helped individuals and businesses achieve remarkable
                    outcomes, fueled
                    by
                    innovation and a commitment to excellence.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img id="image"
                    src="https://res.cloudinary.com/test-strike/image/upload/v1702013066/Success/kalle-stillersson-cYkmWlq_vYM-unsplash_z3zn9k.jpg"
                    alt="Banner image">
            </div>
        </div>
    </section>

    <div class="width-limiter">
        <form action="" class="search-form align-center">
            <input type="text" placeholder="Search" class="border-smooth trans-ease-in-out">
            <button type="submit" class="border-smooth trans-ease-in-out" title="Search"><svg width="32"
                    height="32" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 19a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17Z"></path>
                    <path d="M13.328 7.172A3.988 3.988 0 0 0 10.5 6a3.988 3.988 0 0 0-2.828 1.172"></path>
                    <path d="m16.61 16.611 4.244 4.243"></path>
                </svg></button>
        </form>
    </div>

    <section class="community-content">
        <div class="width-limiter justify-evenly flex-wrap">

            @foreach ($testimonials as $testimonial)
                <div class="testimonials-card flex-col sFont" key={i}>
                    <div class="profile">
                        <img src="{{ $testimonial['image'] }}" alt="testimonial profile" width="100"
                            height="100" />
                        <h3 class="pFont">Lorem Ipsom dolor</h3>
                        <p>Lorem Ipsum</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ipsum, quidem eum praesentium
                        voluptatum exercitationem dolores nulla dolorum vitae doloribus non veritatis cupiditate earum
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
            @endforeach

        </div>
    </section>

</main>
<script>
    const image = document.getElementById('image');

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
@include('components.footer')
