@include('components.header', ['title' => 'Calendar'])

<main>
    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1 class=>Calendar of Events</h1>
            </div>

            <div class="i-section-right">
                <p>Our calendar is brimming with engaging activities, from captivating workshops to exhilarating competitions. Whether you're seeking knowledge, entertainment, or camaraderie, our events promise to enrich your experience.</p>
            </div>
        </div>
    </section>

    @php
        $year = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    @endphp

    @foreach ($year as $month)
        <section class="info-section">
            <div class="width-limiter">
                <div class="i-section-left">
                    <h2>{{ $month }}</h2>
                </div>

                <div class="i-section-right">
                    <ul>
                        <li>Lorem 12, 2023 - dolor sit amet consectetur adipisicing elit. Autem numquam expedita, quam
                            velit
                            saepe mollitia quibusdam odio! Beatae, architecto nam perferendis labore accusantium
                            consequuntur, veniam quo, cupiditate a nemo deserunt.</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="info-divider"></div>
    @endforeach

</main>

@include('components.footer')
