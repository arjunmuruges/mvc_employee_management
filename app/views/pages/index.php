 
<?php require APPROOT . '/views/inc/header.php'; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/index.css">

<form  method="post" action="<?php echo URLROOT.'pages/admin'?>"> 
  <div class="c">
    <h2>Employee Data Management</h2>
    <h3>User's</h3>
    <input type="submit" name="admin" value="Admin">
  </form><br><br>
  <div class="c1">
  <form action="<?php echo URLROOT.'pages/guest'?>">
    <input type="submit" name="guest" value="Guest">
  </form> 
</div>
  </div>
 <?php require APPROOT . '/views/inc/footer.php';?> 


 

 