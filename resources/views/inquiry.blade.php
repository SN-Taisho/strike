@include('components.head', ['title' => 'Inquire'])

@include('components.header')

<main>

    <h1 class="section-heading" style="margin: 2rem auto 1rem; max-width: 720px;">tell us more so we can advise you on the
        appropriate programme
    </h1>

    <form id="enroll-form" class="width-limiter" style="max-width: 720px">

        <h2 class="section-subheading">Student Details</h2>

        {{-- First Name --}}
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">First Name</label>
            </div>

            {{-- Last Name --}}
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Last Name</label>
            </div>

            {{-- Date of Birth --}}
            <div class="input-group">
                <input required="true" type="date" name="duration" autocomplete="off" id="dateInput" class="input">
                <label class="label" style="background-color: var(--softwhite)">Date of Birth</label>
            </div>

            {{-- NRIC (last 3 digits + alpha) --}}
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">NRIC (last 3 digits + alpha)</label>
            </div>
        </section>

        {{-- School and Level --}}
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">School</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Level</label>
            </div>
        </section>

        {{-- Handedness (Left or Right) --}}
        <section class="form-section">
            <p>Handedness</p>
            <div class="radio-vertical">
                <label class="radio-button">
                    <input type="radio" name="handedness" value="L">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Left Handed</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="handedness" value="R">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Right Handed</span>
                </label>
            </div>
        </section>

        {{-- Sweaty palms or other pysical conditions --}}
        <section class="form-section">
            <p>Experiencing sweaty-palms?</p>
            <div class="radio-vertical">
                <label class="radio-button">
                    <input type="radio" name="sweaty-palms" value="yes">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Yes</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="sweaty-palms" value="no">
                    <div class="radio-circle"></div>
                    <span class="radio-label">No</span>
                </label>
            </div>
        </section>

        {{-- Plase provide a description of your condition --}}
        <section class="form-section">
            <p>Any other special talent/medical condition</p>
            <div class="input-group">
                <textarea required="" type="text" name="" autocomplete="off" class="input" rows="4"></textarea>
                <label class="label">Describe Here</label>
            </div>
        </section>

        {{-- Previews training/Coaching instructions (Coach Name/Academy) --}}
        <section class="form-section">
            <p>Previous training/coaching instructions<br><strong>(Coach name/academy)</strong></p>
            <div class="input-group">
                <textarea required="" type="text" name="" autocomplete="off" class="input" rows="4"></textarea>
                <label class="label">Describe Here</label>
            </div>
        </section>

        {{-- Objectives for joining this programme --}}
        <section class="form-section">
            <p>Objectives for joining this programme</p>
            <div class="input-group">
                <textarea required="" type="text" name="" autocomplete="off" class="input" rows="6"></textarea>
                <label class="label">Write Here</label>
            </div>
        </section>

        <hr class="divider">

        <h2 class="section-subheading">Parent's Information</h2>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">First Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Last Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Parent's Email</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Mobile No.</label>
            </div>
        </section>

        <hr class="divider">

        <h2 class="section-subheading" style="text-decoration: underline">Important Notes</h2>
        <section class="form-section" style="justify-content: flex-start">
            <p style="font-weight: bold">After submitting this form, you will receive a confirmation email
                <br />
                If you haven't received an email within a few minutes, please check your spam; otherwise, please contact
                us at <a href="/mailto:admin@strikeacademy.com"
                    style="color: var(--secondary)">admin@stikeacademy.com</a>
            </p>
        </section>

        <button type="submit" class="submit-btn trans-ease-in-out">Submit Inquiry</button>

    </form>

</main>

@include('components.footer')
