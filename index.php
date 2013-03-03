<?php
//----------------------------------------------------------------------------------------------------------
// Set special .
//----------------------------------------------------------------------------------------------------------

require ('madMooseGLOBAL.php');

require ('madMooseInit.php');

require ('madMoosefuncs.php');

require ('madMoosePI.php');

//
// IMPOTANT - this require must come after selectID is parsed
//

require ('madMoosesecure.php');

//
// Set product diretcory
//
$instance = getNavArrayInstance($selectID);
$productDir = $NavArray[$instance] ['proddir'];

?>

<html>

<?php require ('madMooseMETAtags.php'); ?>

<head>
<title>Mad Moose Creations</title>

<style type="text/css">
<?php require ("madMooseStyleSheet.css"); ?>
</style>

<script type="text/javascript">

<?php require ("javascript/madMooseJavaScript.js"); ?>

</script>
 
</head>

<body onload="startUp()">

<script type="text/javascript">

<?php require ("javascript/wz_tooltip.js"); ?>

</script>
 
<div id="allcontent">

<div id="Banner" class="Banner">
<?php require ("madMooseBanner.php"); ?>
</div>

<div id="MainNav" class="MainNav">
<?php require ("madMooseMainNav.php"); ?>
</div>

<div id="LeftNav" class="LeftNav">
<?php require ("madMooseLeftNav.php"); ?>
</div>

<div class="Workarea">
<?php require ("madMooseWorkarea.php"); ?>
</div>

<div id="Footer" class="Footer">
<?php require ("madMooseFooter.php"); ?>
</div>

</div>

</body>
</html>
