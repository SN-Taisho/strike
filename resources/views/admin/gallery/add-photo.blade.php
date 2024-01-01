@include('admin.components.admin-head', ['title' => 'Add New Photo'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Add New Photo</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="photoTitle" autocomplete="off" id="titleInput" class="input">
                <label class="label">Photo Title</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Upload Image<br>(preferrably 4:3 or 16:9)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <div class="details-header width-limiter">
            <img id="image" src="https://placehold.co/400x300">
        </div>

        <section class="form-section">
            <p>Photo Description</p>
            <div class="input-group fill">
                <textarea required="" type="text" name="text" autocomplete="off" id="contentInput" class="input"
                    rows="5"></textarea>
                <label class="label">Write Here</label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/gallery-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Upload Photo</button>
        </div>
    </form>

</main>

<script>
    const image = document.getElementById("image");

    // Handle image update efficiently
    const imageInput = document.getElementById('imageInput');
    imageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = (event) => {
            image.src = event.target.result;
        };

        reader.readAsDataURL(file);
    });
</script>

@include('components.footer')
