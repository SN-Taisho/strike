@include('admin.components.admin-head', ['title' => 'Coeaches Management'])

@include('admin.components.admin-header')

<main>
    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Edit Coach Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" id="nameInput" class="input">
                <label class="label" style="background-color: var(--bgLight)">Coach Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" id="positionInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Coach Position</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Coach Photo (1:1)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <section class="form-section">
            <p>Select coach employment type</p>
            <div class="radio-vertical">
                <label class="radio-button">
                    <input type="radio" name="employmentType" value="Fulltime">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Full-time</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="employmentType" value="Parttime">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Part-time</span>
                </label>
            </div>
        </section>

        <div class="width-limiter justify-center" style="padding-bottom: 3rem">

            <div class="coach-card">
                <img id="image" src="https://placehold.co/300x300.webp" alt="Coach">
                <div class="coach-profile">
                    <h3 id="name">Coach Name</h3>
                    <p id="position">Coach Position</p>
                </div>

                <div class="c-push"></div>

                <div class="coach-details">
                    <ul>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </div>

        </div>

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

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/coaches-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h1 class="section-heading">Edit Coach Attributes</h1>

    <dialog id="add-coach" class="modal">
        <button class="modal-close trans-ease-out" type="button"
            onclick="document.querySelector('#add-coach').close()"><svg width="48" height="48" fill="none"
                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z"></path>
                <path d="m14.829 9.172-5.657 5.657"></path>
                <path d="m9.172 9.172 5.656 5.657"></path>
            </svg></button>
        <h2 class="section-subheading" style="color: var(--bgLight); margin-bottom: 1rem">Add Coach Attribute</h2>
        <form class="align-center flex-col" method="" action="">

            <div class="input-group alt">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgMedium)">Coach Attribute</label>
            </div>

            <button class="submit-btn" type="submit">Add</button>
        </form>
    </dialog>

    <button type="button" class="action-btn alt text-deco-none" style="margin: auto"
        onclick="document.querySelector('#add-coach').showModal()">Add Attribute</button>

    <div class="table-limiter" style="max-width: 720px">
        <table class="res-table small">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Attribute</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @for ($i = 0; $i < 9; $i++)
                    <tr>
                        <td data-label="No.">{{ $i + 1 }}</td>
                        <td data-label="Attribute">
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
                                <h2 class="section-subheading" style="color: var(--bgLight); margin-bottom: 1rem">Edit
                                    Coach Attribute</h2>
                                <form class="align-center flex-col" method="" action="">

                                    <div class="input-group alt">
                                        <input required="true" type="text" name="" autocomplete="off"
                                            class="input">
                                        <label class="label" style="background-color: var(--bgMedium)">Coach
                                            Attribute</label>
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

</main>

@include('components.footer')
