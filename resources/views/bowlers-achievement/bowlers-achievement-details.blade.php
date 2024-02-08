@include('components.head', ['title' => 'Bowlers Achievement Details'])

@include('components.header')

<main>
    <div class="banner-image width-limiter">
        <img src="https://res.cloudinary.com/test-strike/image/upload/v1702012409/Success/tinywow_350836209_969512447531209_9199530780059439315_n_42492430_e7bmue.webp"
            alt="Achievement banner" style="height: inherit; width: 100%; object-fit: cover;">
    </div>

    <article class="article">
        <div class="width-limiter sFont">

            <h1 class="pFont">Tournament Name</h1>
            <span>Tournament Category</span>


            <div class="placements">
                <div class="placement-card">
                    <div>
                        <h2>Champion</h2>
                        <p>Lorem Ipsum</p>
                    </div>
                    <img src="https://placehold.co/400x400" alt="Student Photo">
                </div>

                <div class="placement-card">
                    <div>
                        <h2>1st Runner-up</h2>
                        <p>Lorem ipsum dolor</p>
                    </div>
                    <img src="https://placehold.co/400x400" alt="Student Photo">
                </div>

                <div class="placement-card">
                    <div>
                        <h2>1st</h2>
                        <p>Lorem ipsum</p>
                    </div>
                    <img src="https://placehold.co/400x400" alt="Student Photo">
                </div>
            </div>

            <ul>
                <li>1st Place Lorem</li>
                <li>2nd Place Lorem</li>
                <li>3rd Place Lorem</li>
                <li>4th Place Lorem</li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto adipisci, animi sunt recusandae similique
                molestiae rem voluptate. Sit eum repellat esse dolores quis quas, excepturi, odit earum quasi quo ullam?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt totam illum architecto
                perferendis rerum, eum voluptatum eligendi quos voluptates! Dignissimos incidunt voluptatum fuga enim
                quae voluptas magni ut ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident dicta
                nam sunt, eos maxime vero a mollitia reiciendis perspiciatis eligendi error, natus eaque quae ullam
                expedita ex quos aut! Illum?</p>

        </div>
    </article>


</main>

@include('components.footer')
