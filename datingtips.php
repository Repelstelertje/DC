<?php
define("TITLE", "Dating Tips");

// Load configuration for base URL
$config = include('includes/config.php');
$baseUrl = $config['BASE_URL'] ?? '';

// If the 'tip' parameter is missing, redirect to the default tips page
if (!isset($_GET['tip'])) {
    header('Location: ' . rtrim($baseUrl, '/') . '/datingtips');
    exit;
}

include('includes/array_tips.php');
include('includes/array_prov.php');
include('includes/utils.php');

$datingtip = strip_bad_chars($_GET['tip']);

// If the supplied tip does not exist, return a 404 response
if (!isset($datingtips[$datingtip])) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    include '404.php';
    exit;
}

$tips = $datingtips[$datingtip];

include('includes/header.php');
?>
<div class="container">
<?php if($tips): ?>
        <div class='jumbotron my-4'>
                <h1 class='text-center'><?php echo $tips["title"]; ?></h1>
        </div>
        <div class='jumbotron my-4'>
                <?php echo $tips["tekst"]; ?>
        </div>
<?php else: ?>
        <div class='jumbotron my-4'>
                <h1 class='text-center'>Dating Tips</h1>
                <ul>
                <?php foreach($datingtips as $key => $tip): ?>
                        <li><a href="datingtips.php?tip=<?php echo $key; ?>"><?php echo $tip['name']; ?></a></li>
                <?php endforeach; ?>
                </ul>
        </div>
<?php endif; ?>
</div>

<?php include('includes/footer.php'); ?>