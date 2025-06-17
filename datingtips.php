<?php 
        define("TITLE", "Dating Tips");

        include('includes/array_tips.php');
        include('includes/array_prov.php');
include('includes/header.php');
include('includes/utils.php');

$tips = null;
if(isset($_GET['tip'])) {
        $datingtip = strip_bad_chars($_GET['tip']);
        if(isset($datingtips[$datingtip])) {
                $tips = $datingtips[$datingtip];
        }
}
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