@include('components.head', ['title' => 'Inquire'])

@include('components.header')

<main>

    <h1 class="section-heading" style="margin-top: 2rem"> Inquire</h1>

    <form id="enroll-form" class="width-limiter" style="max-width: 720px">

        {{-- First name and Last name --}}
        <h2 class="section-subheading">Enter your Name</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">First Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Last Name</label>
            </div>
        </section>

        {{-- Contact Info --}}
        <h2 class="section-subheading">Contact Information</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Email Address</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label">Mobile No.</label>
            </div>
        </section>

        {{-- Are you over the age of 18? --}}
        <section class="form-section">
            <p>Is your child over the age of 18?</p>
            <div class="radio-vertical">
                <label class="radio-button">
                    <input type="radio" name="overage" value="yes">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Yes</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="overage" value="no">
                    <div class="radio-circle"></div>
                    <span class="radio-label">No</span>
                </label>
            </div>
        </section>

        {{-- Child  skill level --}}
        <section class="form-section">
            <p>Skill level of bowler</p>
            <div id="skill-level" class="radio-horizontal">
                <div>
                    <label class="guide">
                        <span>Beginner</span>
                    </label>
                    <label>
                        <input type="radio" name="skill_level">
                        <span>1</span>
                    </label>
                    <label>
                        <input type="radio" name="skill_level">
                        <span>2</span>
                    </label>
                    <label>
                        <input type="radio" name="skill_level">
                        <span>3</span>
                    </label>
                    <label>
                        <input type="radio" name="skill_level">
                        <span>4</span>
                    </label>
                    <label>
                        <input type="radio" name="skill_level">
                        <span>5</span>
                    </label>
                    <label class="guide">
                        <span>Advanced</span>
                    </label>
                </div>
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
