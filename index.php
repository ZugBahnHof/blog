<?php
$site_title = "Index";
$a1="active";
$r1="&raquo;";
$site_color = "red accent-4";
$site_color_text = "red-text text-accent-4";
$site_color_html = "#d50000";
include 'inc/header.inc.php';
//require_once 'view.php';
?>
<?php
$sql = "SELECT * FROM blogs";
foreach ($pdo->query($sql) as $blogs_list) {
    $blog_title_list = $blogs_list['title'];
    $blog_id_list = $blogs_list['blog_id'];
    echo'<div id="'.$blog_id_list.'" class="col s12">';
    $b_id = $blog_id_list;
    include 'view.php';
    echo '</div>';
  }
?>
<div id="index" class="col s12">
  <h1 class="<?=$site_color_text?>">Titel</h1>
</div>
<?php
include 'inc/footer.inc.php';
 ?>
