@include('admin.components.admin-head', ['title' => 'Important Policies Editor'])

@include('admin.components.admin-header')

<main>

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Edit Important Policy</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgLight)">Policy Cateogory</label>
            </div>
        </section>

        <section class="form-section flex-col">
            <p>Policy Content</p>
            <textarea id="SNPolicyContent" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNPolicyContent').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            </script>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/important-policies-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>


</main>

@include('components.footer')
