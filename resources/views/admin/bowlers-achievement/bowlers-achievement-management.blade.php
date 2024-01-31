@include('admin.components.admin-head', ['title' => 'Bowlers Achievement Management'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter">
        <h3 class="section-heading">Bowlers Achievement Management</h3>

        <!-- <section class="form-section" style="max-width: 720px; margin: auto">
            <p>Brief Description of the Bowlers Management page</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="brief_desc" autocomplete="off" id="briefDescriptionInput" class="input"
                    rows="5"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Event Banner</label>
                <input required="" type="file" name="Event Banner" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section> -->


        <!-- <script>
            const inputElements = {
                briefDescription: {
                    input: document.getElementById('briefDescriptionInput'),
                    output: document.getElementById('briefDescription')
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
        </script> -->

        <a href="{{ route('bowlers.create') }}" class="action-btn alt text-deco-none"
            style="margin: 2rem auto 1rem auto;">Add New
            Bowlers Achievement</a>

        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Image</th>
                        <th scope="col">Tournament Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Winners</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($achievements as $achievement)
                        <tr>
                            <td data-label="No.">{{ $loop->index + 1 }}</td>
                            <td data-label="Image" class="table-photo">
                                <div class="image-wrapper">
                                    <img src="{{ $achievement['image'] }}" alt="Event Image">
                                </div>
                            </td>
                            <td data-label="Tournament Name">Tournament Name</td>
                            <td data-label="Category">Lorem Ipsum
                            </td>
                            <td data-label="Winners">Lorem ipsum, Lorem ipsum, Lorem ipsum</td>
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
                                    onclick="window.location.href='/bowlers-achievement-details-editor'"><svg width="24"
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
                onclick="window.location.href='/bowlers-achievement-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>


    <h2 class="section-heading">Bowlers Achievement Preview</h2>
    
    <section class="community-banner">
            <div class="width-limiter">
                <div class="banner-content">
                    <h1>Bowlers Achievement</h1>
                    <p id="briefDescription">Celebrate champions forged in fire, track
                        rivalries, and relive epic throws. This is where legends rise, one pin at a time.</p>
                </div>
                <div class="banner-shape"></div>
                <div class="banner-img-container">
                    <div></div>
                    <img id="image"
                        src="https://images.squarespace-cdn.com/content/v1/5b67aa09f8370a88da5aadeb/1537222299164-W5S365ZL9G62VLWCKWGX/League+Bowling+and+Tournament"
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

            @foreach ($achievements as $achievement)
                <a class="article-card border-sharp text-deco-none" href="/bowlers-achievement-details"
                    style="height: fit-content; padding-bottom: 0.5rem">
                    <img src="{{ $achievement['image'] }}" alt="Event Photo">

                    <div>
                        <h3 class="pFont">Tournament Name</h3>
                        <span class="sFont">Tournament Category</span>

                        <ul class="sFont list-style-none">
                            <li>1st Name</li>
                            <li>2nd Name</li>
                            <li>3rd Name</li>
                            <li>4th Name</li>
                        </ul>
                    </div>

                </a>
            @endforeach

        </div>
    </section>

</main>

@include('components.footer')
