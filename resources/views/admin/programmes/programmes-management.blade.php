@include('admin.components.admin-head', ['title' => 'Programme Management'])

@include('admin.components.admin-header')

<main style="background-color: var(--softwhite);">

    <form class="edit-form width-limiter">
        <h3 class="section-heading">Programme Selection</h3>

        <a href="/add-programme" class="action-btn alt text-deco-none" style="margin: auto;">Add New Programme</a>

        <div class="table-limiter">
            <table class="res-table wide limited" style="max-width: 1440px;">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Programme</th>
                        <th scope="col">Age Range</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $i = 0;
                    @endphp

                    @foreach ($programmes as $programme)
                        <tr>
                            <td data-label="No.">{{ $i + 1 }}</td>
                            <td data-label="Programme">{{ $programme['title'] }}</td>
                            <td data-label="Age Range">{{ $programme['agerange'] }}</td>
                            <td data-label="Description">
                                <p class="limit-text">{{ $programme['desc'] }}
                                </p>
                            </td>
                            <td class="actions" data-label="Action">
                                <div class="check-box-container">
                                    <label class="cyberpunk-checkbox-label" style="color: var(--secondary)">
                                        <input type="checkbox" class="cyberpunk-checkbox">
                                        Show</label>
                                </div>
                                <button type="button" class="action-btn edit icon"
                                    onclick="window.location.href='/edit-programme-details'"><svg width="24"
                                        height="24" fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 13v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h7"></path>
                                        <path d="M7 13.36V17h3.659L21 6.654 17.348 3 7 13.36Z"></path>
                                    </svg> &nbsp;Edit</button>
                                <button type="button" class="action-btn delete icon"
                                    onclick="window.location.href='/delete_programme'">
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

        <h2 class="section-heading">Programmes Preview</h2>

        <section id="programme-listing" style="margin-bottom: 3rem">
            <div class="width-limiter">

                <div class="programmes flex-col">

                    @foreach ($programmes as $programme)
                        <div class="programme-card">

                            <div class="img-wrapper"><img src="{{ $programme['image'] }}" alt="Programme image"></div>

                            <div class="content">
                                <h2 class="card-heading">{{ $programme['title'] }}</h2>
                                <span style="font-weight: bold; letter-spacing: 1px;">{{ $programme['agerange'] }} |
                                    {{ $programme['suitable'] }}</span>
                                <p>{{ $programme['desc'] }}</p>
                                <div class="programme-links sFont">
                                    <a href="javascript:void(0);" class="alt">Enroll</a>
                                    <a href="javascript:void(0);">View Programme</a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

                <div class="schedule">
                    <table>
                        <caption class="section-heading">Upcomeming Events</caption>
                        <thead class="pFont">
                            <tr>
                                <th>Date</th>
                                <th>Event</th>
                            </tr>
                        </thead>
                        <tbody class="sFont">
                            @for ($i = 1; $i < 9 + 1; $i++)
                                <tr>
                                    <td>text {{ $i }}</td>
                                    <td>text {{ $i }} Lorem ipsum dolor sit</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

        <div class="justify-evenly flex-wrap">
            <button type="button" class="cancel-btn trans-ease-in-out" onclick="window.location.href='/programmes-management'">Cancel</button>
            <button type="submit" class="submit-btn trans-ease-in-out">Save Changes</button>
        </div>
    </form>

</main>

@include('components.footer')
