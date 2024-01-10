@include('components.head', ['title' => 'Programme Details'])

@include('components.header')

<main class="soft">

    <div class="details-header width-limiter">
        <img src="https://res.cloudinary.com/test-strike/image/upload/v1702006800/Programmes/fvt6wn495ijmzcwxop5n.webp"
            alt="Programme image">

        <div class="dh-content">
            <h1 class="heading pFont">Programme Name</h1>
            <p class="sFont">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi saepe soluta eaque aut,
                vitae
                voluptates atque? Nesciunt unde laboriosam laudantium, minima adipisci neque ipsum iure. Neque commodi
                vel praesentium corporis.</p>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo saepe nemo facere, exercitationem qui optio
                iste! Inventore, perspiciatis doloribus. Quod, quis vel quidem illo atque amet non magni fuga dolor.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ducimus porro praesentium at iure ipsum
                officia qui, ab eius aliquam asperiores voluptatibus, iusto voluptate quasi voluptates, enim quia
                corrupti nostrum.</p>

            <h3 class="pFont">Other information</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ex, pariatur ratione dolores velit vero
                nulla laboriosam minus quas qui ipsum temporibus. Molestiae pariatur, neque voluptas odit quisquam nulla
                atque?</p>
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
                <p>6 - 17 years old</p>
            </li>
            <li>
                <svg width="50" height="50" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3v18h18"></path>
                    <path d="m7 17 4-8 5 4.5L21 3"></path>
                </svg>
                <p>Required skill level</p>
            </li>
        </ul>
    </div>

</main>

@include('components.footer')
