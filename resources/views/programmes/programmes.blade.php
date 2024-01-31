@include('components.head', ['title' => 'Programmes'])

@include('components.header')

<main>

    <h1 class="section-heading" style="padding: 2rem 1rem 1rem">Programmes</h1>

    <section id="programme-listing" style="margin-bottom: 3rem">
        <div class="width-limiter">

            <div class="programmes flex-col">

                @foreach ($programmes as $programme)
                    <div class="programme-card">

                        <div class="img-wrapper"><img src="{{ asset('storage/' . $programme->image->link) }}" alt="Programme image"></div>

                        <div class="content">
                            <h2 class="card-heading">{{ $programme['name'] }}</h2>
                            <span style="font-weight: bold; letter-spacing: 1px;">{{ $programme['age'] }} |
                                {{ $programme['req_skill'] }}</span>
                            <p>{{ $programme['description'] }}</p>
                            <div class="programme-links sFont">
                                <a href="/enroll" class="alt">Enroll</a>
                                <a href="{{ route('programme.show',['programme' => $programme['id'] ]) }}">View Programme</a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="schedule">
                <table>
                    <caption class="section-heading">Upcoming Events</caption>
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
