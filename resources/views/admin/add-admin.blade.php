@include('admin.components.admin-head', ['title' => 'Add Admin'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Add Admin Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Admin Name</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Admin Username</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Admin Password</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/dashboard'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Admin</button>
        </div>
    </form>

</main>

@include('components.footer')
