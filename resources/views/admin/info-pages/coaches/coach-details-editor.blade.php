@include('admin.components.admin-head', ['title' => 'Coach Details Editor'])

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
                    <ul id="list">
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

        <section class="form-section flex-col">
            <p>Coach Attribute List<br>(Separate by entering a new line)</p>
            <div class="input-group fill">
                <textarea required="true" type="text" name="" autocomplete="off" id="listInput" class="input" rows="3"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>
        {{-- Placement hidden input --}}
        <input id="listOutput" type="text" type="hidden" style="display: none;">

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

            // Coach attribute List Preview
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

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/coaches-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

</main>

@include('components.footer')
