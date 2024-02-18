@include('admin.components.admin-head', ['title' => 'Calendar Management'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter" style="padding-top: 3rem">

        <h3 class="section-heading">Calendar of Events Management</h3>

        <section class="form-section flex-col">
            <p>Brief Description of the Calendar of Events page</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="brief_desc" autocomplete="off" id="briefDescriptionInput" class="input"
                    rows="5"></textarea>
                <label class="label">Write Here</label>
            </div>
        </section>

        <input type="text" id="briefDescriptionHidden" autocomplete="off" hidden>

        <a href="/add-calendar-event" class="action-btn alt text-deco-none" style="margin: 2rem auto 1rem;">Add New
            Calendar
            Event</a>

        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Event</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                        $i = 0;
                    @endphp

                    @foreach ($year as $month)
                        <tr>
                            <td data-label="No.">{{ $i + 1 }}</td>
                            <td data-label="Event">Event Title</td>
                            <td data-label="Description">
                                <p class="limit-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Reprehenderit est aliquam vel necessitatibus quae in soluta odit impedit ab quaerat
                                    nesciunt error repellendus tempora, ea odio velit iste explicabo possimus.</p>
                            </td>
                            <td data-label="Date">Event Date</td>
                            <td class="actions" data-label="Action">
                                <div class="check-box-container">
                                    <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                        <input type="checkbox" class="cyberpunk-checkbox">
                                        Show</label>
                                </div>
                                <button type="button" class="action-btn edit icon"
                                    onclick="window.location.href='/edit-event-details'"><svg width="24"
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
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/calendar-editor'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>


        <section class="info-section" style="background-color: var(--softwhite);">
            <div class="width-limiter">
                <div class="i-section-left">
                    <h1 class=>Calendar of Events</h1>
                </div>

                <div class="i-section-right">
                    <p id="briefDescription">Our calendar is brimming with engaging activities, from captivating
                        workshops
                        to exhilarating competitions. Whether you're seeking knowledge, entertainment, or camaraderie,
                        our
                        events promise to enrich your experience.</p>
                </div>
            </div>
        </section>

        @php
            $year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        @endphp

        @foreach ($year as $month)
            <section class="info-section">
                <div class="width-limiter">
                    <div class="i-section-left">
                        <h2>{{ $month }}</h2>
                    </div>

                    <div class="i-section-right">
                        <ul>
                            <li>Lorem 12, 2023 - dolor sit amet consectetur adipisicing elit. Autem numquam expedita,
                                quam
                                velit
                                saepe mollitia quibusdam odio! Beatae, architecto nam perferendis labore accusantium
                                consequuntur, veniam quo, cupiditate a nemo deserunt.</li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="info-divider"></div>
        @endforeach
    </form>

</main>
<script>
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
            element.output.innerHTML = element.input.value.replace(/\n/g, "<br>");
        });
    }

    // Apply the update function to all elements in the inputElements object
    Object.values(inputElements).forEach(updateContent);

    // LIne break save
    const inputFieldsAndIds = [{
        inputFieldId: 'briefDescriptionInput',
        hiddenInputId: 'briefDescriptionHidden',
    }, ];

    function saveLineBreaksToHiddenInputs(inputFieldsAndIds) {
        inputFieldsAndIds.forEach(({
            inputFieldId,
            hiddenInputId
        }) => {
            const inputField = document.getElementById(inputFieldId);
            const hiddenInput = document.getElementById(hiddenInputId);

            inputField.addEventListener('input', () => {
                const textWithEntities = inputField.value.replace(/\n/g, '<br>');
                hiddenInput.value = textWithEntities;
            });
        });
    }

    saveLineBreaksToHiddenInputs(inputFieldsAndIds);
</script>
@include('components.footer')
