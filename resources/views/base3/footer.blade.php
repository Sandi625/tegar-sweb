

{{-- <section class="anotherTour">
  <div class="container">
    <h2>Another Tour Packages</h2>

     <div class="tourCard">
                <h3>Another Tour</h3>
                <ul>
                    <li><a href="{{ route('bromoijen.bali') }}">Bromo Ijen Tour Start from Surabaya (Finish at
                            Bali)</a></li>
                    <li><a href="{{ route('bromoijen.surabaya') }}">Bromo Ijen Tour Start from Surabaya (Finish at
                            Surabaya)</a></li>
                    <li><a href="{{ route('pesanfrombali2.page') }}">Bromo Ijen Tour Start from Bali (Finish at
                            Surabaya)</a></li>
                    <li><a href="{{ route('pesanfrombali1.page') }}">Bromo Ijen Tour Start from Bali (Finish at
                            Bali)</a></li>
                    <li><a href="{{ route('tumpak3.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Bali
                            (Finish at Surabaya)</a></li>
                    <li><a href="{{ route('tumpak4.page') }}">Tumpaksewu–Ijen–Bromo Tour (4D3N) Start from Bali
                            (Finish at Bali)</a></li>
                    <li><a href="{{ route('tumpak1.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Surabaya
                            (Finish at Bali)</a></li>
                    <li><a href="{{ route('tumpak2.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Surabaya
                            (Finish at Surabaya)</a></li>
                    <li><a href="{{ route('finishbali.page') }}">Midnight Ijen from Bali</a></li>
                    <li><a href="{{ route('finishbanyuwangi.page') }}">Midnight Ijen from Banyuwangi</a></li>
                </ul>
            </div>
  </div>
</section> --}}






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





        <a href="{{ route(name: 'allpackage.page') }}" class="backButton">
            <abbr title="Back">
                <img class="buttonn" src="https://img.icons8.com/material-outlined/48/142361/back--v1.png" />
            </abbr>
        </a>
    </section>
 <footer>
  <div class="footerDetails">
    <!-- Kolom 1 -->
    <div class="footerDescription">
      <h1 class="footerTitle">Tegar</h1>
      <p class="footerPara">
        Discover New Destinations. See breath-taking places and experience
        them from your device online.
        <br /><br />
        Our travel writing captures the one thing we always strive to create
        – incredible travel experiences. From learning about the historical
        and political context of a destination to finding some really great
        hikes, each new place has something to discover.
        <br /><br />
        We have a passion for storytelling, a knack for putting itineraries
        together and a strong desire to have fun.
      </p>
    </div>

    <!-- Kolom 2 -->
    <div class="footerContact">
      <h1 class="contactTitle">Contact Me</h1>
      <p class="contactPara">
        If you want to make any inquiries about the website, you can contact
        me through below options
      </p>
      <div class="contactOptions">
        <a href="https://github.com/chamindujs" target="_blank" class="contactOption">
          <abbr title="GitHub">
            <img src="https://img.icons8.com/ios-glyphs/60/ca7717/github.png" />
          </abbr>
        </a>
        <a href="https://wa.link/1yweij" target="_blank" class="contactOption">
          <abbr title="WhatsApp">
            <img src="https://img.icons8.com/material-outlined/48/ca7717/whatsapp--v1.png" />
          </abbr>
        </a>
        <div class="contactOption call">
          <abbr title="Call">
            <img src="https://img.icons8.com/ios/48/ca7717/phone.png" />
          </abbr>
        </div>
        <a href="mailto:chamindujs@gmail.com" target="_blank" class="contactOption">
          <abbr title="Gmail">
            <img src="https://img.icons8.com/ios/50/ca7717/gmail-new.png" />
          </abbr>
        </a>
        <div class="contactOption discord">
          <abbr title="Discord">
            <img src="https://img.icons8.com/ios/50/ca7717/discord-logo--v1.png" />
          </abbr>
        </div>
      </div>
    </div>

    <!-- Kolom 3 -->
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
      <span>Tegar Firmansyah And Sandi Permadi</span>
    </p>
  </div>
</footer>
    <script src="{{ asset('appcustom.js') }}"></script>
</body>

</html>
