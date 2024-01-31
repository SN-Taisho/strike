@include('admin.components.admin-head', ['title' => 'Coaches Management'])

@include('admin.components.admin-header')

<main>
    <form action="" method="POST" enctype="multipart/form-data">
        <section class="info-section">
            <div class="width-limiter">
                <div class="i-section-left">
                    <h1>Meet our Coaches</h1>
                </div>

                <div class="i-section-right">
                    <section class="form-section flex-col" style="align-items: flex-start">
                        <div class="input-group fill">
                            <textarea required="" type="text" name="" autocomplete="off" id="coachesParagInput" class="input"
                                rows="5"></textarea>
                            <label class="label">Description</label>
                        </div>
                    </section>
                    <p id="coachesParag" style="margin-bottom: 1rem">At STRIKE Bowling Academy, we are committed to
                        providing our students with the best possible
                        coaching
                        experience. Our team of experienced and qualified coaches is passionate about bowling and
                        dedicated
                        to helping our students reach their full potential. Whether you are a beginner or a seasoned
                        bowler,
                        our coaches will provide you with the personalized instruction you need to improve your game. We
                        are
                        proud to have such a talented and dedicated team of coaches, and we know that they will help you
                        achieve your bowling goals.</p>

                    <div class="certification">
                        <img src="https://singaporebowling.org.sg/wp-content/uploads/2016/12/SBFLOGO1278468124142-1.png"
                            alt="Icon" height="48" />
                        <img src="https://www.sportsingapore.gov.sg/images/sportsg%20logo.png" alt="Icon"
                            height="48" />
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/28/Ministry_of_Education_%28Singapore%29_logo.svg/1200px-Ministry_of_Education_%28Singapore%29_logo.svg.png"
                            alt="Icon" height="48" />
                        <img src="https://neuentity.com/wp-content/uploads/2023/08/logo-red-cross.png" alt="Icon"
                            height="48" />
                    </div>
                </div>
            </div>
        </section>

        <section id="coaches-section">

            <h2>Full-Time Coaches</h2>

            <a href="{{ route('coach.create', ['shift'=> 'full-time']) }}" class="action-btn alt text-deco-none" style="margin: auto;">Add New Coach</a>

            <div class="table-limiter">
                <table class="res-table wide limited" style="max-width: 1440px;">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Employment Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td data-label="No.">{{ $i + 1 }}</td>
                                <td data-label="Photo" class="table-photo">
                                    <div class="image-wrapper">
                                        <img src="https://placehold.co/300x300" alt="Coach Image">
                                    </div>
                                </td>
                                <td data-label="Name">Lorem Ipsum Dolor</td>
                                <td data-label="Position">Lorem Ipsum</td>
                                <td data-label="Employment Stauts">Full-time</td>
                                <td class="actions" data-label="Action">
                                    <div class="check-box-container">
                                        <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                            <input type="checkbox" class="cyberpunk-checkbox">
                                            Show</label>
                                    </div>
                                    <button type="button" class="action-btn edit icon"
                                        onclick="window.location.href='/coach-details-editor'"><svg width="24"
                                            height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                            <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                        </svg> &nbsp;Edit</button>
                                    <button type="button" class="action-btn delete icon"
                                        onclick="window.location.href='/delete_coach'">
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

            <div class="width-limiter">

                @for ($i = 0; $i < 5; $i++)
                    <div class="coach-card">
                        <img src="https://placehold.co/300x300.webp" alt="Coach">
                        <div class="coach-profile">
                            <h3>Coach Name</h3>
                            <p>Coach Position</p>
                        </div>

                        <div class="c-push"></div>

                        <div class="coach-details">
                            <ul>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                            </ul>
                        </div>
                    </div>
                @endfor

            </div>

            <h2>Part-Time Coaches</h2>

            <a href="{{ route('coach.create', ['shift'=> 'part-time']) }}" class="action-btn alt text-deco-none" style="margin: auto;">Add New Coach</a>

            <div class="table-limiter">
                <table class="res-table wide limited" style="max-width: 1440px;">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Employment Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td data-label="No.">{{ $i + 1 }}</td>
                                <td data-label="Photo" class="table-photo">
                                    <div class="image-wrapper">
                                        <img src="https://placehold.co/300x300" alt="Coach Image">
                                    </div>
                                </td>
                                <td data-label="Name">Lorem Ipsum Dolor</td>
                                <td data-label="Position">Lorem Ipsum</td>
                                <td data-label="Employment Stauts">Part-time</td>
                                <td class="actions" data-label="Action">
                                    <div class="check-box-container">
                                        <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                            <input type="checkbox" class="cyberpunk-checkbox">
                                            Show</label>
                                    </div>
                                    <button type="button" class="action-btn edit icon"
                                        onclick="window.location.href='/coach-details-editor'"><svg width="24"
                                            height="24" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                            <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                        </svg> &nbsp;Edit</button>
                                    <button type="button" class="action-btn delete icon"
                                        onclick="window.location.href='/delete_coach'">
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

            <div class="width-limiter">

                @for ($i = 0; $i < 10; $i++)
                    <div class="coach-card">
                        <img src="https://placehold.co/300x300.webp" alt="Coach">
                        <div class="coach-profile">
                            <h3>Coach Name</h3>
                            <p>Coach Position</p>
                        </div>

                        <div class="coach-details">
                            <ul>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                                <li>Lorem</li>
                            </ul>
                        </div>
                    </div>
                @endfor

            </div>
        </section>

        <div class="justify-evenly flex-wrap" style="margin-bottom: 3rem">
            <button type="button" class="cancel-btn trans-ease-in-out"
                onclick="window.location.href='/landing-editor'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>

    </form>
</main>

<script>
    const inputElements = {
        description: {
            input: document.getElementById('coachesParagInput'),
            output: document.getElementById('coachesParag')
        },
    };

    // Generic function to handle input updates
    function updateContent(element) {
        element.input.addEventListener('input', () => {
            element.output.textContent = element.input.value;
        });
    }

    // Apply the update function to all elements in the inputElements object
    Object.values(inputElements).forEach(updateContent);
</script>

@include('components.footer')
