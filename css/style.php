<?php
@session_start();
$color1 = $_SESSION['color1'];
$color_tab_active_bg = $site_color_html;
header("Content-type: text/css");
?>
.tab_head a.active {
  color:rgb(252, 234, 37)!important;
  background-color: <?=$color1?>!important;
}
.tabs_head .tab a:hover {
  background-color: #bdbdbd!important;
  color:#FFFFFF!important;
}
.tabs_head .tab a {
  color: #efebe9;
}
.tabs_head .indicator{
  background-color:#FFFFFF!important;
}
.tabs .indicator{
  background-color:#<?=$color1?>!important;
}
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  blockquote{
    margin: 20px 0;
    padding-left: 1.5rem;
    border-left: 5px solid <?=$color1?>; /* Just change the color value and that's it*/
  }
div.padleft{
  margin-left: 100px!important;
}
.img_center{
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  .breadcrumb:before {
      color: <?=$color1?>;
  }
  .breadcrumb, .breadcrumb:last-child {
     color: <?=$color1?>;
  }
div.navbar-fixed{
  padding-bottom: 130px;
}
div.padsides{
  padding-left: 10px!important;
  padding-right: 10px!important;
}
