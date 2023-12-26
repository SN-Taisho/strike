@include('components.head', ['title' => 'Programmes'])

@include('components.header')

<main>

    <h1 class="section-heading" style="padding: 2rem 1rem 1rem">Programmes</h1>

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
                                <a href="/enroll" class="alt">Enroll</a>
                                <a href="/programme-details">View Programme</a>
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

</main>

@include('components.footer')
