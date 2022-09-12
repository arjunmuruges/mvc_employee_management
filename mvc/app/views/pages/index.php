<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
<div class="container">
<form  method="post" action="<?php echo URLROOT.'pages/'?>"> -->
<input type="text" name="admin" value="Admin">
<input type="text" name="guest" value="Guest">


</form>

</div> 




  <!-- <p>This is the TraversyMVC PHP framework. Please refer to the docs on how to use it</p> -->
<?php require APPROOT . '/views/inc/footer.php'; ?>
