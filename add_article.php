<?php
$site_title = "Index";
$a4="active";
$r4="&raquo;";
$site_color = "purple";
$site_color_text = "purple-text";
$site_color_html = "#9c27b0";
include 'inc/header.inc.php';
?>
<h1 class="<?=$site_color_text?>">Eintrag hinzufügen</h1>
<p>Bitte füllen sie alle Felder aus!</p>
<div class="row">
   <form class="col s12" action="upload.php" method="post">
     <div class="row">
       <div class="input-field col s12 l6">
         <i class="material-icons prefix">edit</i>
         <input id="title" name="title" type="text" class="validate" required>
         <label for="title">Titel</label>
       </div>
     </div>
     <div class="row">
         <div class="input-field col s12">
           <i class="material-icons prefix">short_text</i>
           <textarea id="description" name="description" class="materialize-textarea validate" required data-length="255"></textarea>
           <label for="description">Kurzbeschreibung</label>
         </div>
     </div>
     <div class="row">
       <div class="input-field col s12">
         <i class="material-icons prefix">notes</i>
         <textarea id="text" name="text" class="materialize-textarea validate" required></textarea>
         <label for="ingredients">Text</label>
       </div>
     </div>
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
