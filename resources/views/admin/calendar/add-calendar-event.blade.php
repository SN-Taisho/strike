@include('admin.components.admin-head', ['title' => 'Add Calendar Event'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Add New Calendar Event</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="calendarEvent" autocomplete="off" id="titleInput" class="input">
                <label class="label" style="background-color: var(--bgLight)">Event Title</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="date" name="date" autocomplete="off" id="dateInput" class="input">
                <label class="label" style="background-color: var(--bgLight);">Calendar Event Date</label>
            </div>
        </section>

        <section class="form-section">
            <p>Calendar Event Description</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="other_information" autocomplete="off" id="otherInfoInput" class="input"
                    rows="3"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/calendar-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>


</main>

@include('components.footer')
