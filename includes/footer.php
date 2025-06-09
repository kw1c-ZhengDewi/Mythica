  <footer>

    <!-- Current Date -->
    <span class="Flexbox" id="CurrentDate-div">
      <?php
      $currentDate = date("d-m-Y");
      echo "Today's date: " . $currentDate;
      ?>
    </span>

    <span class="Flexbox" id="UserStatus">
      <?php
      echo "User's login status: not logged in"
      ?>
    </span>


    <!-- Current Time -->
    <span class="Flexbox" id="CurrentTime-div">
      <?php
      date_default_timezone_set('Europe/Amsterdam'); // Set to your desired time zone
      $CurrentTime = date("H:i");
      echo $CurrentTime;
      ?>
    </span>
  </footer>