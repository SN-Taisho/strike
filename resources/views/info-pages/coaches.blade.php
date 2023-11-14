@include('components.header', ['title' => 'Bowling Coaches'])

<main>
    <section class="info-section">
        <div class="width-limiter">
            <div class="i-section-left">
                <h1>Meet our Coaches</h1>
            </div>

            <div class="i-section-right">
                <p>At STRIKE Bowling Academy, we are committed to providing our students with the best possible coaching
                    experience. Our team of experienced and qualified coaches is passionate about bowling and dedicated
                    to helping our students reach their full potential. Whether you are a beginner or a seasoned bowler,
                    our coaches will provide you with the personalized instruction you need to improve your game. We are
                    proud to have such a talented and dedicated team of coaches, and we know that they will help you
                    achieve your bowling goals.</p>

                <div class="certification">
                    <img src="https://singaporebowling.org.sg/wp-content/uploads/2016/12/SBFLOGO1278468124142-1.png"
                        alt="Icon" height="48" />
                    <img src="https://www.sportsingapore.gov.sg/images/sportsg%20logo.png" alt="Icon"
                        height="48" />
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/2/28/Ministry_of_Education_%28Singapore%29_logo.svg/1200px-Ministry_of_Education_%28Singapore%29_logo.svg.png"
                        alt="Icon" height="48" />
                    <img src="https://neuentity.com/wp-content/uploads/2023/08/logo-red-cross.png" alt="Icon" height="48" />
                </div>
            </div>
        </div>
    </section>

    <section id="coaches-section">
        <h2>Full-Time Coaches</h2>
        <div class="width-limiter">

            @for ($i = 0; $i < 5; $i++)
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
                        </ul>
                    </div>
                </div>
            @endfor

        </div>

        <h2>Part-Time Coaches</h2>
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
                        </ul>
                    </div>
                </div>
            @endfor

        </div>
    </section>

</main>

@include('components.footer')
