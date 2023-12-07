@include('components.header', ['title' => 'Enroll'])

<main>

    <h1 class="section-heading" style="margin-top: 2rem"> Virtual Coaching</h1>

    <form id="enroll-form" class="width-limiter" style="max-width: 720px">

        {{-- First name and Last name --}}
        <h2 class="section-subheading">First name and Last name</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">First Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Last Name</label>
            </div>
        </section>

        {{-- Email , and contact number --}}
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Email</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Phone Number</label>
            </div>
        </section>

        {{-- Physical Attributes --}}
        <h2 class="section-subheading">Physical Attributes</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Birthday / Age</label>
            </div>

            <div class="input-group short">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Height (cm)</label>
            </div>
            <div class="input-group short">
                <input required="true" type="text" name="text" autocomplete="off" class="input">
                <label class="label">Weight (kg)</label>
            </div>
        </section>

        {{-- Sweaty palms or other pysical conditions --}}
        <section class="form-section">
            <p>Do you have sweaty-palms or other pysical conditions to highlight?</p>
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
            <p>Please provide a description of your condition</p>
            <div class="input-group">
                <textarea required="" type="text" name="text" autocomplete="off" class="input" rows="5"></textarea>
                <label class="label">Description of Condition</label>
            </div>
        </section>

        {{-- Current Arsenal (Brand, Model, Weight) --}}
        <section class="form-section">
            <p>Enter your current Arsenal<br>(Brand, Model, Weight)</p>
            <div class="input-group">
                <textarea required="" type="text" name="text" autocomplete="off" class="input" rows="5"></textarea>
                <label class="label">Current Arsenal</label>
            </div>
        </section>

        {{-- Are you over the age of 18? --}}
        <section class="form-section">
            <p>Are you over the age of 18?</p>
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

        {{-- Bowler skill level --}}
        <section class="form-section">
            <p>Bowler's Skill Level</p>
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
        </hr>

        {{-- Parents Info --}}
        <h2 class="section-subheading">Parent's Information</h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="parent_email" autocomplete="off" class="input">
                <label class="label">Parent's Email</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="parent_mobile" autocomplete="off" class="input">
                <label class="label">Phone Number</label>
            </div>
        </section>

        <hr class="divider">
        </hr>

        {{-- Details of Current or Past Coach/es --}}
        <h2 class="section-subheading">Details of Current or Past Coach/es </h2>
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="coach_name" autocomplete="off" class="input">
                <label class="label">Coach Name</label>
            </div>

            <div class="input-group short">
                <input required="true" type="text" name="training_year" autocomplete="off" class="input">
                <label class="label">Duration</label>
            </div>
        </section>

        {{-- Have you participated in any major sanctioned tournaments in the last year --}}
        <section class="form-section">
            <p class="long">Have you participate in any major sanctioned tournaments in the last year</p>
            <div class="check-box-container">
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    National School</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    National Age Group</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Singapore Open</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Others</label>
            </div>
        </section>

        {{-- These were my average and difficulties I encountered --}}
        <section class="form-section">
            <p>Tell us about your coach</p>
            <div class="input-group">
                <textarea required="" type="text" name="average_desc" autocomplete="off" class="input" rows="5"></textarea>
                <label class="label">Average and Difficulties</label>
            </div>
        </section>

        {{-- These are  areas I hope to fix --}}
        <section class="form-section">
            <p class="long">These are areas I hope to fix</p>
            <div class="check-box-container">
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    National School</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    National Age Group</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Singapore Open</label>
                <label class="cyberpunk-checkbox-label">
                    <input type="checkbox" class="cyberpunk-checkbox">
                    Others</label>
            </div>
        </section>

        {{-- Tell us about your coach --}}
        <section class="form-section">
            <p>Tell us about your coach</p>
            <div class="input-group">
                <textarea required="" type="text" name="coach_desc" autocomplete="off" class="input" rows="5"></textarea>
                <label class="label">About Coach</label>
            </div>
        </section>

        <hr class="divider">

        {{-- Video Submission --}}
        <h2 class="section-subheading">Video Submission</h2>
        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Front-view</label>
                <input required="" type="file" name="front_view" class="input">
            </div>

            <div class="input-group file">
                <label class="filelabel">Back-view</label>
                <input required="" type="file" name="back_view" class="input">
            </div>

            <div class="input-group file">
                <label class="filelabel">Side-view</label>
                <input required="" type="file" name="side_view" class="input">
            </div>

            <div class="input-group file">
                <label class="filelabel">Close-up Release</label>
                <input required="" type="file" name="closeup_release" class="input">
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

        <button type="submit" class="submit-btn trans-ease-in-out">Submit</button>

    </form>

</main>

@include('components.footer')
