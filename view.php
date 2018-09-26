<?php
session_start();
require_once( "inc/config.inc.php" );
require_once( "inc/functions.inc.php" );
$site_title = "Blog";
$a2="active";
$r2="&raquo;";
$site_color = "orange";
$site_color_text = "orange-text";
$site_color_html = "#ff9800";
$answer = '';

if ($logged_in == TRUE) {
  $user = check_user();
  $userid = $user['id'];
}

$sql = "SELECT * FROM blogs WHERE blog_id = $b_id";
$blogs_list = $pdo->query($sql)->fetch();
$blog_title_list = $blogs_list['title'];
$owner_id_list = $blogs_list['owner_id'];

$answer .= '<h1 class="'.$site_color_text.'">Blog: <i>'.$blog_title_list.'</i> </h1>
<ul class="collapsible">';
$sql = "SELECT * FROM articles WHERE blog_id = $b_id ORDER BY date DESC";
foreach ($pdo->query($sql) as $data) {
    $title = $data['title'];
    $description = $data['description'];
    $text = $data['text'];
    $date = new DateTime($data['date']);
    $date_formatted = $date->format('d.m.y H:i:s')."<br />";
    $id_of_the_article = $data['id'];
    if ($owner_id_list == $userid) {
      $edit_button = '
        <br><a class="waves-effect waves-orange orange btn-small right" href="edit_blog.php?id='.$id_of_the_article.'"><i class="material-icons">edit</i></a>';
    }
    $answer .= '
    <li>
      <div class="collapsible-header">
        <i class="material-icons">filter_drama</i>
        <div class="row" style="width:100%;">
          <div class="col s6 m8 l10 left">'.$title.'</div>
          <div class="col s6 m4 l2"><em>geschrieben am:<br>'.$date_formatted.'</em></div>
        </div>
      </div>
      <div class="collapsible-body"><span>'.$text.'</span>'.$edit_button.'</div>
    </li>';
}
$answer .= '</ul>';
echo $answer;
 ?>
