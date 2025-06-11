<ul class="navbar-nav ml-auto">
    <!-- Provincie links -->
	<li class="nav-item dropdown"> 
		<a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dating in UK</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	<?php foreach ($navItems as $item) { echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>"; } ?>
		</div>
	</li>
	<!-- Datingtips links 
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dating tips</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	<?php foreach ($navItems2 as $item2) { echo "<a class=\"dropdown-item\" href=\"$item2[slug]\">$item2[title]</a>"; } ?>
		</div>
	</li>
	-->
    <!-- Nieuwe sociale media links -->
    <li class="nav-item">
        <a class="nav-link" href="https://facebook.com/ukdate" target="_blank"><img src="img/fb.png" alt="Facebook UK Date"></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://instagram.com/shemaleunitedkindom" target="_blank"><img src="img/ig.png" alt="Instagram Shemale UK"></a>
    </li>
</ul>