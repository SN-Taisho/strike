@include('admin.components.admin-head', ['title' => 'Events Management'])

@include('admin.components.admin-header')

<main>
    <form class="edit-form width-limiter">
        <h3 class="section-heading">Events Management</h3>

        <section class="form-section flex-col">
            {{-- Edit Banner --}}
            <p>Make sure to save changes after editing the banner</p>
            <button type="button" class="action-btn alt text-deco-none"
                onclick="document.querySelector('#edit-banner').showModal()">Edit Events Page Banner</button>
        </section>

        <section class="form-section">
            {{-- Modal Open --}}
            <button type="button" class="action-btn alt text-deco-none"
                onclick="document.querySelector('#add-category').showModal()">Add Category</button>
        </section>

        <div class="table-limiter" style="max-width: 988px;">
            <table class="res-table small limited">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Category Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>


                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td data-label="No.">{{ $i + 1 }}</td>
                            <td data-label="Category Title">Category Title</td>
                            <td data-label="Description">
                                <p class="limit-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit est aliquam vel necessitatibus quae in soluta odit impedit ab quaerat
                                    nesciunt error repellendus tempora, ea odio velit iste explicabo possimus.</p>
                            </td>
                            <td class="actions" data-label="Action">
                                <button type="button" class="action-btn edit icon"
                                    onclick="document.querySelector('#edit-category{{ $i + 1 }}').showModal()"><svg
                                        width="24" height="24" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                        <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                    </svg> &nbsp;Edit</button>
                                <button type="button" class="action-btn delete icon"
                                    onclick="window.location.href='/delete_event'">
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

        <a href="/add-event" class="action-btn alt text-deco-none" style="margin: 2rem auto 1rem auto;">Add New
            Event</a>

        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Event</th>
                        <th scope="col">Image</th>
                        <th scope="col">Location</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td data-label="No.">{{ $loop->index + 1 }}</td>
                            <td data-label="Event">Event Title</td>
                            <td data-label="Image" class="table-photo">
                                <div class="image-wrapper">
                                    <img src="{{ $event['image'] }}" alt="Event Image">
                                </div>
                            </td>
                            <td data-label="Location">Event Location</td>
                            <td data-label="Date">Event Date</td>
                            <td data-label="Description">
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
                                    onclick="window.location.href='/event-details-editor'"><svg width="24"
                                        height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                        <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                    </svg> &nbsp;Edit</button>
                                <button type="button" class="action-btn delete icon"
                                    onclick="window.location.href='/delete_event'">
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
                onclick="window.location.href='/events-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    {{-- Modal Here --}}
    <dialog id="add-category" class="modal">

        <button class="modal-close trans-ease-out" type="button"
            onclick="document.querySelector('#add-category').close()"><svg width="48" height="48"
                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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


    @for ($i = 0; $i < 5; $i++)
        {{-- Edit Modal Here --}}
        <dialog id="edit-category{{ $i + 1 }}" class="modal">

            <button class="modal-close trans-ease-out" type="button"
                onclick="document.querySelector('#edit-category{{ $i + 1 }}').close()"><svg width="48"
                    height="48" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z">
                    </path>
                    <path d="m14.829 9.172-5.657 5.657"></path>
                    <path d="m9.172 9.172 5.656 5.657"></path>
                </svg></button>
            <h2 class="section-subheading text-align-center" style="color: var(--bgLight); margin-bottom: 1rem">Edit
                Category
            </h2>

            <form id="add" class="align-center flex-col" method="" action="" style="gap: 1rem">

                <div class="input-group alt" style="width: fit-content">
                    <input required="true" type="text" name=""autocomplete="off" class="input">
                    <label class="label" style="background-color: var(--bgMedium)">Category
                        Name</label>
                </div>

                <div class="input-group alt" style="width: fit-content">
                    <textarea class="input" name="" rows="3"></textarea>
                    <label class="label" style="background-color: var(--bgMedium)">Category
                        Description</label>
                </div>

                {{-- Modal Submit --}}
                <button class="submit-btn" type="submit">Save Category</button>
            </form>
        </dialog>
    @endfor

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
                <p style="color: var(--bgLight);">Events Description</p>
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
                    <label class="filelabel">Event Banner</label>
                    <input required="" type="file" name="Event Banner" autocomplete="off" id="imageInput"
                        class="input">
                </div>
            </section>

            {{-- Modal Submit --}}
            <button class="submit-btn" type="submit">Save Banner</button>
        </form>
    </dialog>

    <h2 class="section-heading">Events Preview</h2>

    <section class="community-banner">
        <div class="width-limiter">
            <div class="banner-content">
                <h1>Events</h1>
                <p id="briefDescription">From cosmic bowling to family fun nights and competitive tournaments, our
                    calendar is packed with
                    fun
                    for all ages.</p>
            </div>
            <div class="banner-shape"></div>
            <div class="banner-img-container">
                <div></div>
                <img id="image"
                    src="https://res.cloudinary.com/test-strike/image/upload/v1702010311/Events/persnickety-prints-rrHl2zGZ9E4-unsplash_qcpfo1.jpg"
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

            @foreach ($events as $event)
                <a class="article-card border-sharp text-deco-none" href="/event-details">
                    <img src="{{ $event['image'] }}" alt="Event Photo">

                    <div>
                        <h3 class="pFont">Lorem Ipsum Dolor</h3>
                        <span class="sFont">Lorem 8, 2023 - Lorem Ipsum</span>

                        <p class="sFont">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique
                            laboriosam
                            voluptatem id qui. Corrupti quaerat inventore quisquam est unde debitis. Sunt vel voluptate
                            amet id rem, deleniti recusandae est tenetur. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Cum doloribus reiciendis dignissimos quia perferendis mollitia repudiandae
                            nulla, numquam odit tempore praesentium, magnam ut expedita quos autem molestiae natus animi
                            deleniti!</p>
                    </div>

                </a>
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
