@include('components.head', ['title' => 'Programme Details'])

@include('components.header')

<main class="soft">

    <div class="details-header width-limiter">
        <img src="{{ asset('storage/' . $programme->image->link ) }}"
            alt="Programme image">

        <div class="dh-content">
            <h1 class="heading pFont">{{ $programme['name'] }}</h1>
            <p class="sFont">
                {{ $programme['subheading'] }}
            </p>
        </div>

        <div class="dh-btn">
            <button class="sFont trans-ease-in-out" onclick="window.location.href='/contact-us'"">Inquire Now!</button>
            <span class="sFont"><svg width="16" height="16" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22a9.97 9.97 0 0 0 7.071-2.929A9.97 9.97 0 0 0 22 12a9.969 9.969 0 0 0-2.929-7.071A9.969 9.969 0 0 0 12 2a9.969 9.969 0 0 0-7.071 2.929A9.969 9.969 0 0 0 2 12a9.969 9.969 0 0 0 2.929 7.071A9.969 9.969 0 0 0 12 22Z">
                    </path>
                    <path fill="currentColor" fill-rule="evenodd" stroke="none"
                        d="M12 18.5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z" clip-rule="evenodd"></path>
                    <path d="M12 6v8"></path>
                </svg>&nbsp;Find out more by Contacting STRIKE</span>
        </div>
    </div>

    <div class="width-limiter details-content">
        <section class="sFont">
            <h2 class="pFont">About This Programme</h2>
            <p>
                {{ $programme['description'] }}
            </p>

            <h3 class="pFont">Other information</h3>
            <p>
                {{ $programme['other_info'] }}
            </p>
        </section>

        <ul class="tags">
            <li>
                <svg width="50" height="50" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 10a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"></path>
                    <path
                        d="M3 20.4v.6h18v-.6c0-2.24 0-3.36-.436-4.216a4 4 0 0 0-1.748-1.748C17.96 14 16.84 14 14.6 14H9.4c-2.24 0-3.36 0-4.216.436a4 4 0 0 0-1.748 1.748C3 17.04 3 18.16 3 20.4Z">
                    </path>
                </svg>
                <p>{{ $programme['age'] }} years old</p>
            </li>
            <li>
                <svg width="50" height="50" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3v18h18"></path>
                    <path d="m7 17 4-8 5 4.5L21 3"></path>
                </svg>
                <p>
                    {{ $programme['req_skill'] }}
                </p>
            </li>
        </ul>
    </div>

</main>

@include('components.footer')
