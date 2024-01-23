@include('admin.components.admin-head', ['title' => 'Admin Login'])

@include('admin.components.admin-header')

<main>

    <h1 class="section-heading" style="margin-top: 2rem"> Sign In</h1>

    <form id="enroll-form" class="width-limiter border-smooth" style="max-width: 720px">

        <h2 class="section-subheading text-align-center">Please enter your admin credentials</h2>
        <section class="form-section flex-col">
            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Username</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Password</label>
            </div>
        </section>

        <button type="submit" class="submit-btn trans-ease-in-out">Submit</button>

    </form>

</main>

@include('components.footer')