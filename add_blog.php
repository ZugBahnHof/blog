<?php
session_start();
require_once( "inc/config.inc.php" );
require_once( "inc/functions.inc.php" );
$user = check_user();
$userid = $user['id'];

$site_title = "Index";
$a5="active";
$r5="&raquo;";
$site_color = "light-green darken-4";
$site_color_text = "light-green-text text-darken-4";
$site_color_html = "#33691e";
include 'inc/header.inc.php';
?>
<h1 class="<?=$site_color_text?>">Eintrag hinzufügen</h1>
<p>Bitte füllen sie alle Felder aus!</p>
<div class="row">
   <form class="col s12" method="post">
     <div class="row">
       <div class="input-field col s12 m6">
         <i class="material-icons prefix">edit</i>
         <input id="title" name="title" type="text" class="validate" required>
         <label for="title">Titel</label>
       </div>
     </div>
     <input type="hidden" name="owner" value="$userid">
     <div class="row">
       <button class="<?=$site_color?> btn waves-effect waves-light col s12 m6 l3" type="submit">Submit
         <i class="material-icons right">send</i>
       </button>
     </div>
   </form>
 </div>
<?php
 include 'inc/footer.inc.php';
 ?>
