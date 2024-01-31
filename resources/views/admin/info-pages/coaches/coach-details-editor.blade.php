@include('admin.components.admin-head', ['title' => 'Coeaches Management'])

@include('admin.components.admin-header')

<main>
    <form class="edit-form width-limiter" style="max-width: 720px">
        <h1 class="section-heading">Edit Coach Details</h1>

        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" id="nameInput" class="input">
                <label class="label" style="background-color: var(--bgLight)">Coach Name</label>
            </div>

            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" id="positionInput"
                    class="input">
                <label class="label" style="background-color: var(--bgLight)">Coach Position</label>
            </div>
        </section>

        <section class="form-section">
            <div class="input-group file">
                <label class="filelabel">Coach Photo (1:1)</label>
                <input required="" type="file" name="imageInput" autocomplete="off" id="imageInput"
                    class="input">
            </div>
        </section>

        <section class="form-section">
            <p>Select coach employment type</p>
            <div class="radio-vertical">
                <label class="radio-button">
                    <input type="radio" name="employmentType" value="Fulltime">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Full-time</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="employmentType" value="Parttime">
                    <div class="radio-circle"></div>
                    <span class="radio-label">Part-time</span>
                </label>
            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

    <h1 class="section-heading">Edit Coach Attributes</h1>

    <form class="edit-form width-limiter" style="max-width: 720px">
        <section class="form-section">
            <div class="input-group">
                <input required="true" type="text" name="" autocomplete="off" class="input">
                <label class="label" style="background-color: var(--bgLight)">New Coach Attribute</label>
            </div>
        </section>
        <button type="submit" class="action-btn alt text-deco-none" style="margin: auto">Add Attribute</button>
    </form>

    <div class="table-limiter" style="max-width: 720px">
        <table class="res-table small">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Attribute</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @for ($i = 0; $i < 9; $i++)
                    <tr>
                        <td data-label="No.">{{ $i + 1 }}</td>
                        <td data-label="Attribute">
                            <p class="limit-text">Lorem ipsum, dolor sit amet
                            </p>
                        </td>
                        <td class="actions" data-label="Action">
                            <button type="button" class="action-btn edit icon"
                                onclick="window.location.href='/event-details-editor'"><svg width="24"
                                    height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                    <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                </svg> &nbsp;Edit</button>
                            <button type="button" class="action-btn delete icon"
                                onclick="window.location.href='/delete_event'">
                                <svg width="24" height="24" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 5v17h15V5h-15Z"></path>
                                    <path d="M10 10v6.5"></path>
                                    <path d="M14 10v6.5"></path>
                                    <path d="M2 5h20"></path>
                                    <path d="m8 5 1.645-3h4.744L16 5H8Z"></path>
                                </svg>&nbsp;Delete</button>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>


</main>

<script></script>

@include('components.footer')
