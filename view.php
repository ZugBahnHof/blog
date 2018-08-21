<?php
if (!isset($_GET['bid'])) {
    header("Location:index.php?msg=Error+404+–+Seite+nicht+gefunden");
}
if (isset($_GET['bid'])) {
    $b_id = $_GET['bid'];
    echo $b_id;
}
$site_title = "Blog";
$a2="active";
$r2="&raquo;";
$site_color = "orange";
$site_color_text = "orange-text";
$site_color_html = "#ff9800";
include 'inc/header.inc.php';
?>
<h1 class="<?php echo $site_color_text; ?>">Blog: <i>*Hier Titel einfügen*</i> </h1>
<ul class="collapsible">
<?php
$sql = "SELECT * FROM articles WHERE blog_id = $b_id ORDER BY date DESC";
foreach ($pdo->query($sql) as $data) {
    $title = $data['title'];
    $description = $data['description'];
    $text = $data['text'];
    $date = new DateTime($data['date']);
    $date_formatted = $date->format('d.m.y H:i:s')."<br />";
    echo '
    <li>
      <div class="collapsible-header">
        <i class="material-icons">filter_drama</i>
        <div class="row" style="width:100%;">
          <div class="col s6 m8 l10 left">'.$title.'</div>
          <div class="col s6 m4 l2"><em>geschrieben am:<br>'.$date_formatted.'</em></div>
        </div>
      </div>
      <div class="collapsible-body"><span>'.$text.'</span></div>
    </li>';
}
 ?>
</ul>
<?php
include 'inc/footer.inc.php';
 ?>
