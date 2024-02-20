@include('admin.components.admin-head', ['title' => 'Important Policies Management'])

@include('admin.components.admin-header')

<main>
    <form action="">

        <h3 class="section-heading" style="margin-top: 3rem">Important Policies Mangement</h3>

        <section class="form-section flex-col">
            <p>Mission Paragraph</p>
            <textarea id="SNPolicyDesc" name="" placeholder="Write Here"></textarea>
            <script>
                $('#SNPolicyDesc').summernote({
                    inheritPlaceholder: true,
                    tabsize: 2,
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['view', ['codeview', 'help']]
                    ]
                });
            </script>
        </section>

        <a href="/add-important-policy" class="action-btn alt text-deco-none" style="margin: 2rem auto 1rem;">Add New
            Policy</a>

        <div class="table-limiter" style="max-width: 1024px;">
            <table class="res-table limited">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Content</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                        $i = 0;
                    @endphp

                    @foreach ($year as $month)
                        <tr>
                            <td data-label="No.">{{ $i + 1 }}</td>
                            <td data-label="Category">Lorem Ipsum dolor</td>
                            <td data-label="Content">
                                <p class="limit-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti
                                    hic
                                    soluta quam sequi voluptate, blanditiis, animi minus itaque accusamus id, nesciunt
                                    ad
                                    numquam labore fugiat culpa rem optio sunt qui. Lorem</p>
                            </td>
                            <td class="actions" data-label="Action">
                                <div class="check-box-container">
                                    <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                        <input type="checkbox" class="cyberpunk-checkbox">
                                        Show</label>
                                </div>
                                <button type="button" class="action-btn edit icon"
                                    onclick="window.location.href='/important-policy-editor'"><svg width="24"
                                        height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                        <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                    </svg> &nbsp;Edit</button>
                                <button type="button" class="action-btn delete icon"
                                    onclick="window.location.href='/delete_important_policy'">
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
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.locaiton.href='/importnat-policy-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>

    </form>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1 class=>Important Policies</h1>
            </div>

            <div class="i-section-right">
                <p>This page outlines the policies and procedures governing the operations of STRIKE Bowling
                    Academy.
                    These policies are designed to ensure the safety, well-being, and enjoyment of all students and
                    parents. Please read these policies carefully to ensure compliance.</p>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2>Attendance and Replacement Classes</h2>
            </div>

            <div class="i-section-right">
                <ul>
                    <li>Scheduled classes are reserved for students who have paid and are confirmed.</li>
                    <li>Students should attend scheduled classes regularly.</li>
                    <li>All classes are scheduled and listed on the ONLINE PORTAL. No reminders to attend classes will
                        be sent.</li>
                    <li>Students are to confirm their SCHEDULE and TRAINING VENUE before class from the ONLINE PORTAL.
                    </li>
                    <li>Students are responsible to settle any lane fees due before leaving the bowling centre</li>
                    <li>Students not able to attend any class MUST withdraw from the PORTAL at least 24 hours before
                        class</li>
                    <li>One lesson will be computed and any lane fees will apply if no withdrawal is made on PORTAL and
                        no prior notice is received</li>
                    <li>Students/Parents are to schedule replacement classes from the PORTAL</li>
                    <li>Replacement classes are only offered based on a what is available basis</li>
                    <li>Replacement classes must be scheduled and attended within the duration of the current programme
                    </li>
                    <li>Lessons that fall on public holidays will NOT be replaced. Capped at maximum two per calendar
                        year. </li>
                    <li>Medical Certificates need to be provided for any medical excuses for any withdrawal less than 24
                        hours. Notice must be received BEFORE start of class with Acknowledgement.</li>
                    <li>If no suitable replacement is available/provided, the missed lesson will be forfeited.</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="info-divider"></div>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2 class=>Payment and Fees</h2>
            </div>

            <div class="i-section-right">
                <ul>
                    <li>All fees to be payable prior to start of programme. No refund or transfer of fees paid.</li>
                    <li>A refundable deposit is payable upon enrollment into a regular programme</li>
                    <li>Deposit will be refunded in full subject to One Month notice before end of current programme and
                        no lanes penalties and/or other arrears outstanding</li>
                    <li>Annual membership fee is payable in January each year for the whole year. Membership for
                        students who join anytime within the year will be valid until end of the current year.</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="info-divider"></div>

    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h2 class=>Other Policies</h2>
            </div>

            <div class="i-section-right">
                <ul>
                    <li>STRIKE reserves the right to use photograph or videos to record the activities of its students.
                        The parents and students acknowledges and grant STRIKE absolute right to use such photograph or
                        videos for our marketing or publicity purposes as we deem fit.</li>
                    <li>All students and parents agree to indemnify STRIKE and its coaches/trainers for any
                        accidents/injuries during training and also whilst going to/from training venue.</li>
                    <li>STRIKE reserves the right to make, amend, vary, add to or remove policies that the management
                        deems necessary for the smooth and practical running of operations and conduct of lessons.</li>
                </ul>
            </div>
        </div>
    </section>

</main>

@include('components.footer')
