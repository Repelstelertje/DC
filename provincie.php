<?php 

  include('includes/array_prov.php');
  include('includes/utils.php');

  if (isset($_GET['item'])) {
    $provincie = strip_bad_chars($_GET['item']);
    if (array_key_exists($provincie, $provincies)) {
      $zoek = $provincies[$provincie];
    } else {
      include '404.php';
      exit();
    }
  } else {
    include '404.php';
    exit();
  }

  include('includes/header.php');
?>
	
	<div class="container">
		<div class="jumbotron my-4">
			<h1 class="text-center"><?php echo $zoek['title']; ?></h1>
			<hr>
			<p><?php echo $zoek['info']; ?></p>
		</div>

		<div class="row" v-cloak>
      <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item" 
           id="Slankie"
           v-for="profile in filtered_profiles"
          >
        <div class="card h-100">
            <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" v-on:error="imgError" :src="profile.src.replace('150x150', '300x300')" :alt="'Dating in ' + profile.province + ' with ' + profile.name" :title="'View the profile of ' + profile.name + ' from ' + profile.city"></a>
            <div class="card-body">
            	<div class="card-top">
                  <h4 class="card-title">{{ profile.name }}</h4>  
              </div>
              <ul class="list-group">
                <li class="list-group-item">Age: {{ profile.age }}</li>
                <li class="list-group-item">Relationship: {{ profile.relationship }}</li>
                <li class="list-group-item">City: {{ profile.city }}</li>
                <li class="list-group-item">Province: {{ profile.province }}</li>
              </ul>
            </div>
            <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">View profile</a></div>
        </div>
      </div>
      <script nonce="2726c7f26c">
        var api_url= "https://22mlf09mds22.com/profile/province/uk/<?=$zoek['name']?>/120";
      </script>

      <!-- Pagination -->
      <nav class="nav-pag" aria-label="Page navigation">
        <ul class="pagination flex-wrap justify-content-center">
          <li class="page-item">
            <a class="page-link" aria-label="Previous"
               v-on:click="set_page_number(page-1)"
               >
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
            
          <li v-for="page_number in max_page_number"
              class="page-item"
              v-bind:class="{ active: page_number == page }"
              >
            <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
          </li>
            
          <li class="page-item">
            <a class="page-link" aria-label="Next"
                v-on:click="set_page_number(page+1)"
               >
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div><!-- /.row -->
    <div class="container">
      <div class="jumbotron">
        <?php echo $zoek['tekst']; ?>
      </div>
      <div class="jumbotron text-center">
       
      </div>
    </div>
  
  </div> <!-- container -->


<?php
	include('includes/footer.php');
?>