<!-- Footer -->
<footer>
    <ul class="footer-links">
        <li><a href="https://18date.net/" target="_blank" class="m-0">18Date</a> - </li>
        <li><a href="https://sex55.net/" target="_blank" class="m-0">Sex55</a> - </li>
        <li><a href="https://shemaledaten.net/" target="_blank" class="m-0">Shemale Daten</a> - </li>
        <li><a href="https://oproepjesnederland.nl/" target="_blank" class="m-0">Oproepjes Nederland</a> - </li>
        <li><a href="https://zoekertjesbelgie.be/" target="_blank" class="m-0">Zoekertjes België</a> - </li>
        <li><a href="https://datingnebenan.de/" target="_blank" class="m-0">Dating Nebenan</a> - </li>
        <li><a href="https://e-notifyer.nl/" target="_blank" class="m-0">E-notifyer</a> - </li>
        <li><a href="partnerlinks" class="m-0">More partner links...</a></li>
    </ul>
    <span class="sub-text">Copyright &copy; <?php echo date('Y'); ?> <?php echo $companyName; ?> | The free datingsite of the UK </span>
</footer>
</div> <!-- /.oproepjes -->

<script src="js/vendor/vue.2.5.13.min.js"></script>
<script src="js/vendor/axios.0.17.1.min.js"></script>

<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-router@3.5.3/dist/vue-router.min.js"></script>

<script type="text/javascript"   nonce="2726c7f26c" SameSite=None; Secure>
  ////Random IMG
  var topper = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg'];
  $('<a href="https://testars-consin.icu/543064f4-6080-4845-8f43-30f049426cdf?site={DC}"><img class="align-center" src="img/banners/' + topper[Math.floor(Math.random() * topper.length)] + '" alt="Exciting places to connect"></a>').appendTo('#top-banner');
  var footer = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg'];
  $('<a href="https://testars-consin.icu/543064f4-6080-4845-8f43-30f049426cdf?site={DC}"><img class="align-center" src="img/banners/' + footer[Math.floor(Math.random() * footer.length)] + '" alt="Exciting places to connect"></a>').appendTo('#footer-banner');
</script>

<?php 
  if(isset ($type) && $type == "profile"){

    echo '<script src="js/profile.js"></script>';
  } else {

    echo '<script src="js/oproepjes.js"></script>';
  }
?>

</body>

</html>
