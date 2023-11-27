@include('components.header', ['title' => 'Programme Details'])

<main class="soft">

    <div class="details-header width-limiter">
        <img src="https:/placehold.co/400x400/webp" alt="Programme image">

        <div class="dh-content">
            <h1 class="heading pFont">Programme Name</h1>
            <p class="sFont">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi saepe soluta eaque aut,
                vitae
                voluptates atque? Nesciunt unde laboriosam laudantium, minima adipisci neque ipsum iure. Neque commodi
                vel praesentium corporis.</p>
        </div>

        <div class="dh-btn">
            <button class="sFont trans-ease-in-out">Enroll Now!</button>
            <span class="sFont"><svg width="16" height="16" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 22a9.97 9.97 0 0 0 7.071-2.929A9.97 9.97 0 0 0 22 12a9.969 9.969 0 0 0-2.929-7.071A9.969 9.969 0 0 0 12 2a9.969 9.969 0 0 0-7.071 2.929A9.969 9.969 0 0 0 2 12a9.969 9.969 0 0 0 2.929 7.071A9.969 9.969 0 0 0 12 22Z">
                    </path>
                    <path fill="currentColor" fill-rule="evenodd" stroke="none"
                        d="M12 18.5a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5Z" clip-rule="evenodd"></path>
                    <path d="M12 6v8"></path>
                </svg>&nbsp;Make sure to read the programme details before enrolling</span>
        </div>
    </div>

    <div class="width-limiter details-content">
        <section class="sFont">
            <h2 class="pFont">About This Programme</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo saepe nemo facere, exercitationem qui optio iste! Inventore, perspiciatis doloribus. Quod, quis vel quidem illo atque amet non magni fuga dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ducimus porro praesentium at iure ipsum officia qui, ab eius aliquam asperiores voluptatibus, iusto voluptate quasi voluptates, enim quia corrupti nostrum.</p>

            <h3 class="pFont">Other information</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ex, pariatur ratione dolores velit vero nulla laboriosam minus quas qui ipsum temporibus. Molestiae pariatur, neque voluptas odit quisquam nulla atque?</p>
        </section>

        <ul class="tags">
            <li><img src="https://placehold.co/50x50" alt="Icon"><p>Lorem Ipsum</p></li>
            <li><img src="https://placehold.co/50x50" alt="Icon"><p>Lorem Ipsum</p></li>

            <li><img src="https://placehold.co/50x50" alt="Icon"><p>Lorem Ipsum</p></li>
            <li><img src="https://placehold.co/50x50" alt="Icon"><p>Lorem Ipsum</p></li>
        </ul>
    </div>

</main>

@include('components.footer')
