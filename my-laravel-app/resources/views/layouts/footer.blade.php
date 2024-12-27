<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved. 
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/inner-files/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/inner-files/bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('/assets/js/isotope.min.js') }} "></script>
  <script src="{{ asset('/assets/js/owl-carousel.js') }} "></script>
  <script src="{{ asset('/assets/js/wow.js') }}"></script>
  <script src="{{ asset('/assets/js/tabs.js') }}"></script>
  <script src="{{ asset('/assets/js/popup.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>
