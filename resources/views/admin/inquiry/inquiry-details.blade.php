@include('admin.components.admin-head', ['title' => 'Inquiry Details'])

@include('admin.components.admin-header')

@php
    $replaceMe = 'Lorem Ipsum';
@endphp

<main>

    <div id="enroll-form" class="width-limiter" style="max-width: 720px; margin-top: 4rem;">

        <h2 class="section-subheading">Student Details</h2>

        {{-- First Name --}}
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">First Name</label>
            </div>

            {{-- Last Name --}}
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">Last Name</label>
            </div>

            {{-- Date of Birth --}}
            <div class="input-group">
                <input required="true" type="date" name="duration" autocomplete="off" id="dateInput"
                    class="input valid" value="2023-01-01" disabled readonly>
                <label class="label" style="background-color: var(--softwhite)">Date of Birth</label>
            </div>

            {{-- NRIC (last 3 digits + alpha) --}}
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">NRIC (last 3 digits + alpha)</label>
            </div>
        </section>

        {{-- School and Level --}}
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">School</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">Level</label>
            </div>
        </section>

        {{-- Handedness (Left or Right) --}}
        <section class="form-section">
            <p>Handedness</p>
            <div class="radio-vertical">
                <label class="radio-button">
                    <input type="radio" name="handedness" value="L" checked disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">Left Handed</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="handedness" value="R" disabled readonly>
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
                    <input type="radio" name="sweaty-palms" value="yes" disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">Yes</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="sweaty-palms" value="no" checked disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">No</span>
                </label>
            </div>
        </section>

        {{-- Plase provide a description of your condition --}}
        <section class="form-section">
            <p>Any other special talent/medical condition</p>
            <div class="input-group">
                <textarea required="" type="text" name="" autocomplete="off" class="input valid" disabled readonly
                    rows="4">{{ $replaceMe }}</textarea>
                <label class="label">Describe Here</label>
            </div>
        </section>

        {{-- Previews training/Coaching instructions (Coach Name/Academy) --}}
        <section class="form-section">
            <p>Previous training/coaching instructions<br><strong>(Coach name/academy)</strong></p>
            <div class="input-group">
                <textarea required="" type="text" name="" autocomplete="off" class="input valid" disabled readonly
                    rows="4">{{ $replaceMe }}</textarea>
                <label class="label">Describe Here</label>
            </div>
        </section>

        {{-- Programme of Interest --}}
        <section class="form-section">
            <p>Programme of Interest</p>
            <div class="radio-vertical">

                {{-- Can be fore eached --}}
                <label class="radio-button">
                    <input type="radio" name="programme_interest" value="1" checked disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">Foundation</span>
                </label>

                <label class="radio-button">
                    <input type="radio" name="programme_interest" value="2" disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">Performance</span>
                </label>

                <label class="radio-button">
                    <input type="radio" name="programme_interest" value="3" disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">Centre of Excellence</span>
                </label>

                <label class="radio-button">
                    <input type="radio" name="programme_interest" value="3" disabled readonly>
                    <div class="radio-circle"></div>
                    <span class="radio-label">Virtual Coaching</span>
                </label>
                </label>
            </div>
        </section>

        {{-- Objectives for joining this programme --}}
        <section class="form-section">
            <p>Objectives for joining this programme</p>
            <div class="input-group">
                <textarea required="" type="text" name="" autocomplete="off" class="input valid" disabled readonly
                    rows="6">{{ $replaceMe }}</textarea>
                <label class="label">Write Here</label>
            </div>
        </section>

        <hr class="divider">

        <h2 class="section-subheading">Parent's Information</h2>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">First Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">Last Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">Parent's Email</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input valid"
                    value="{{ $replaceMe }}" disabled readonly>
                <label class="label">Mobile No.</label>
            </div>
        </section>

        <hr class="divider">

        <h2 class="section-subheading">Actions</h2>

        <section class="form-section flex-wrap" style="justify-content: flex-start; gap: 2rem;">
            <button type="button" class="action-btn edit icon" {{-- Replace with parent email --}}
                onclick="window.location.href='mailto:parent@email.com'"><svg width="24" height="24"
                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 12V4.5H2v15h10"></path>
                    <path d="M22 17h-7"></path>
                    <path d="M17.5 14.5 15 17l2.5 2.5"></path>
                    <path d="M2 4.5 12 12l10-7.5"></path>
                </svg>&nbsp;Respond</button>

            <button type="button" class="action-btn delete icon" onclick="window.location.href='/delete_inquiry'">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.5 5v17h15V5h-15Z"></path>
                    <path d="M10 10v6.5"></path>
                    <path d="M14 10v6.5"></path>
                    <path d="M2 5h20"></path>
                    <path d="m8 5 1.645-3h4.744L16 5H8Z"></path>
                </svg>&nbsp;Delete</button>
        </section>

    </div>

</main>

@include('components.footer')
