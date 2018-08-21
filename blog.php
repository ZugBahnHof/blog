<?php
$site_title = "Blog";
$a2="active";
$r2="&raquo;";
$site_color = "orange";
$site_color_text = "orange-text";
$site_color_html = "#ff9800";
include 'inc/header.inc.php';
 ?>
 <h1 class="<?=$site_color_text?>">Blog auswählen</h1>
 <p>Da wir viele Blogs haben, müssen sie sich denjenigen Blog, den sie sich angucken wollen, hier herraussuchen.</p>
 <div class="row col s12">
   <ul class="collection">
<?php
$sql = "SELECT * FROM blogs";
foreach ($pdo->query($sql) as $blogs_list) {
    $blog_title_list = $blogs_list['title'];
    $blog_id_list = $blogs_list['blog_id'];
    echo'
    <div class="col s12 m6 l4 xl3">
      <a href="view.php?bid='.$blog_id_list.'" class="collection-item">'.$blog_title_list.'</a>
    </div>
    ';
  }
?>
  </ul>
</div>
<?php
include 'inc/footer.inc.php';
 ?>
