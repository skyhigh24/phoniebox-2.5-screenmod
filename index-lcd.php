<?php
include("inc.header.php");
header("refresh: 30;");
/*******************************************
* START HTML
*******************************************/
html_bootstrap3_createHeader("en","Phoniebox",$conf['base_url']);
?>
<style type="text/css">
  .container {
    width: 100% !important;
    height: 100vh;
    overflow: hidden;
  }
  div#coverWrapper {
    right: 0;
    position: fixed;
    bottom: 17%;
  }
  .row.playerControls {
    height: 80vh;
    width: 65% !important;
    margin-bottom: 0;
  }
  i.mdi, .mdi-24px.mdi-set, .mdi-48px.mdi:before, .mdi-72px, .mdi-72px.mdi:before, .mdi-72px.mdi-play, .mdi-72px.mdi-pause, .mdi-72px-mdi-set, .mdi-24px.mdi-set,
.mdi-24px.mdi:before {
    font-size: 85px;
  }
  .btn-group.controlVolumeUpDown:nth-child(2) {
    margin-left: -10px;
  }
</style>
<body>
  <div class="container">
    <div class="row playerControls">
<?php
print '<div id="api-alert" class="alert alert-warning" style="display: none"></div>';
include("inc.controlPlayer.mini.php");
?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</body>
<script src="js/jukebox.js">
</script>
<script>
 JUKEBOX.lang = <?php echo json_encode($lang );?>
</script>
</html>
