@include('admin.components.admin-head', ['title' => 'Add Important Policy'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Add New Important Policy</h1>

        <section class="form-section">
            <div class="input-group">
                <input id="policyCategoryInput" required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgLight)">Policy Cateogory</label>
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Important Policy Content</p>
            <textarea id="SNImpPolicyContent" name="RTLandingParag" placeholder="Write Here"></textarea>
            <script>
                $('#SNImpPolicyContent').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['p']],
                        ['font', ['bold', 'italic', 'underline']],
                        ['parag', ['ul', 'ol']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });

                $('#SNImpPolicyContent').on('summernote.change', function(we, contents, $editable) {
                    const SNImpPolicyContent = $('#SNImpPolicyContent').summernote('code');
                    console.log(SNImpPolicyContent);

                    // Create a safe and sanitized version of the HTML content
                    const sanitizedHtml = DOMPurify.sanitize(SNImpPolicyContent, {
                        ALLOWED_TAGS: ['p', 'strong', 'em', 'ul', 'ol', 'li', 'br',
                            'a'
                        ], // Adjust allowed tags as needed
                        ALLOWED_ATTRS: {
                            'a': ['href', 'target'] // Allow specific attributes for <a> tag
                        }
                    });

                    // Safely and selectively update content within #policyContent
                    $('#policyContent').empty().append(sanitizedHtml); // Replace or append based on your requirement
                });
            </script>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/important-policies-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Policy</button>
        </div>
    </form>

    <h3 class="section-heading">Policy Section Preview</h3>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2 id="policyCategory">Policy Category</h2>
            </div>

            <div class="i-section-right">
                <div id="policyContent">
                    <ul>
                        <li>Scheduled classes are reserved for students who have paid and are confirmed.</li>
                        <li>Students should attend scheduled classes regularly.</li>
                        <li>All classes are scheduled and listed on the ONLINE PORTAL. No reminders to attend classes
                            will
                            be sent.</li>
                        <li>Students are to confirm their SCHEDULE and TRAINING VENUE before class from the ONLINE
                            PORTAL.
                        </li>
                        <li>Students are responsible to settle any lane fees due before leaving the bowling centre</li>
                        <li>Students not able to attend any class MUST withdraw from the PORTAL at least 24 hours before
                            class</li>
                        <li>One lesson will be computed and any lane fees will apply if no withdrawal is made on PORTAL
                            and
                            no prior notice is received</li>
                        <li>Students/Parents are to schedule replacement classes from the PORTAL</li>
                        <li>Replacement classes are only offered based on a what is available basis</li>
                        <li>Replacement classes must be scheduled and attended within the duration of the current
                            programme
                        </li>
                        <li>Lessons that fall on public holidays will NOT be replaced. Capped at maximum two per
                            calendar
                            year. </li>
                        <li>Medical Certificates need to be provided for any medical excuses for any withdrawal less
                            than 24
                            hours. Notice must be received BEFORE start of class with Acknowledgement.</li>
                        <li>If no suitable replacement is available/provided, the missed lesson will be forfeited.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    const inputElements = {
        policyCategory: {
            input: document.getElementById('policyCategoryInput'),
            output: document.getElementById('policyCategory')
        },
    };

    // Generic function to handle input updates
    function updateContent(element) {
        element.input.addEventListener('input', () => {
            element.output.innerHTML = element.input.value;
        });
    }

    // Apply the update function to all elements in the inputElements object
    Object.values(inputElements).forEach(updateContent);
</script>

@include('components.footer')
