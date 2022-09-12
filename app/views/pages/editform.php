<div class="model-container"></div>
<form action="<?php echo URLROOT . 'pages/editsave' ?>" method="post" enctype="multipart/form-data">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/editform.css">
    <h1 id="c1">Edit Form</h1>
    <div class="divc1">
        <div class="division2">

            <h3>Emp_id</h3><input type="number" name="Emp_id" id="id" value="<?php echo ($data[0]->Emp_id); ?>" placeholder="Emp_id">
            <h3>Emp_fname</h3><input type="text" name="Emp_fname" id="id" value='<?php echo $data[0]->Emp_fname; ?>' placeholder="Emp_fname">
            <h3>Emp_lname</h3><input type="text" name="Emp_lname" id="id" value='<?php echo $data[0]->Emp_lname ?>' placeholder="Emp_lname">
            <h3>Emp_email</h3><input type="text" name="Emp_email" uniqid="email" value='<?php echo $data[0]->Emp_email ?>' placeholder="Emp_email">
            <h3>Emp_number</h3><input type="text" name="Emp_number" maxlength="10" id="id" value='<?php echo $data[0]->Emp_number ?>' placeholder="Emp_number">
        </div>
        <div class="division3">
            <h3>Emp_street</h3><input type="text" name="Emp_street" id="id" value='<?php echo $data[0]->Emp_street ?>' placeholder="Emp_street">
            <h3>Emp_state</h3><input type="text" name="Emp_state" id="id" value='<?php echo $data[0]->Emp_state ?>' placeholder="Emp_state">

            <h3>emp_country</h3>
            <input type="text" name="Emp_country" id="id" value='<?php echo $data[0]->Emp_country ?>' placeholder="Emp_country">

            <h3>pincode</h3><input type="text" name="pincode" id="id" value='<?php echo $data[0]->pincode ?>' placeholder="pincode">
            <h3>image</h3><input type="file" name="image"  value=" <? echo $data->image ?>" width="100px" height="100px"> <br><br>
            <button id="id">submit</button>
</form>
</div>
</div>
</form>