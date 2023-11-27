@include('components.header', ['title' => 'Programmes'])

<main>

    <h1 class="section-heading" style="padding: 2rem 1rem 1rem">Programmes</h1>

    <section id="programme-listing" style="margin-bottom: 3rem">
        <div class="width-limiter">

            <div class="programmes flex-col">

                @for ($i = 0; $i < 3; $i++)
                    <div class="programme-card">

                        <div class="img-wrapper"><img src="https://placehold.co/350x350/webp" alt="Programme image"></div>

                        <div class="content">
                            <h2 class="card-heading">Programme Title Lorem ipsum</h2>
                            <span>Age Range</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed consectetur quia inventore
                                modi optio praesentium repellat nisi architecto quas. Quis tempore dolorem sed mollitia
                                adipisci, iste exercitationem vitae at rem.</p>
                            <div class="programme-links sFont">
                                <a href="/enroll" class="alt">Enroll</a>
                                <a href="/programme-details">View Programme</a>
                            </div>
                        </div>

                    </div>
                @endfor

            </div>

            <div class="schedule">
                <table>
                    <caption class="section-heading">Schedule</caption>
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

</main>

@include('components.footer')
