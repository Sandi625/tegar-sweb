<section class="anotherTour">
    <div class="container">
        <h2>Another Tour Packages</h2>

      <div class="tourCard">
    <h3>Another Tour</h3>
    <ul>
        @foreach ($allTours as $item)
            @if ($item->route_name && Route::has($item->route_name))
                <li>
                    <a href="{{ route($item->route_name) }}">
                        {{ $item->title }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>


    </div>
</section>

<section class="googleMap" style="padding: 50px 0; background: var(--bg-color);">
    <div class="container" style="max-width: 1200px; margin: auto; text-align: center;">
        <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--text-color);">
            Find Us on Google Maps
        </h2>
        <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d709.5816697941696!2d114.2573701416686!3d-8.205609772008037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14f6d1d6614bb%3A0xf9c55b4687931297!2sPT.%20IJEN%20CRATER%20TOUR%20INDONESIA!5e0!3m2!1sen!2sid!4v1724565411781!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <a href="{{ route('allpackage.page') }}" class="backButton">
        <abbr title="Back">
            <img class="buttonn" src="https://img.icons8.com/material-outlined/48/142361/back--v1.png" />
        </abbr>
    </a>
</section>


<footer>
    <div class="footerDetails">

        <div class="footerDescription">
            <h1 class="footerTitle">Vamos</h1>
            <p class="footerPara">
                Discover New Destinations. See breath-taking places and experience them from your device online.
                <br><br>
                Our travel writing captures the one thing we always strive to create – incredible travel experiences.
                <br><br>
                We have a passion for storytelling, a knack for putting itineraries
                together and a strong desire to have fun.
            </p>
        </div>

        <div class="footerContact">
            <h1 class="contactTitle">Contact Me</h1>
            <p class="contactPara">
                If you want to make any inquiries about the website, contact me below.
            </p>
            <div class="contactOptions">
                <a href="#" class="contactOption">
                    <abbr title="WhatsApp">
                        <img src="https://img.icons8.com/material-outlined/48/ca7717/whatsapp--v1.png" />
                    </abbr>
                </a>
                <a href="mailto:someone@gmail.com" class="contactOption">
                    <abbr title="Email">
                        <img src="https://img.icons8.com/ios/50/ca7717/gmail-new.png" />
                    </abbr>
                </a>
            </div>
        </div>

        <div class="footerPayment">
            <h1 class="paymentTitle">Payment Method</h1>
            <div class="paymentOptions">
                <img src="/Images/paypal.png" alt="PayPal" />
                <img src="/Images/wise.png" alt="Wise" />
                <img src="/Images/bri.png" alt="BRI" />
            </div>

            <h1 class="paymentTitle">Available At</h1>
            <div class="availableOptions">
                <img src="/Images/airbnb.png" alt="Airbnb" />
                <img src="/Images/getyourguide.png" alt="GetYourGuide" />
            </div>
        </div>

        <div class="footerCopyright">
            <p>
                This website is designed and developed by
                <span>Vamos Teams</span>
            </p>
        </div>
    </div>
</footer>

    <script src="{{ asset('app.js') }}"></script>

