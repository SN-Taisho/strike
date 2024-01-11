@include('admin.components.admin-head', ['title' => 'Add Calendar Event'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Add New Important Policy</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgLight)">Policy Cateogory</label>
            </div>
        </section>

        <section class="form-section">
            <p>Policy Description</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="" autocomplete="off" class="input"
                    rows="3"></textarea>
                <label class="label" style="background-color: var(--bgLight)">Write Here</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/important-policies-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Policy</button>
        </div>
    </form>

</main>

@include('components.footer')
