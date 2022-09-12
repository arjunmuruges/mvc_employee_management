<form action="<?php echo URLROOT . 'pages/addinfo' ?>" method="post" enctype="multipart/form-data">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/add_data.css">
    <h1 id="c">Welcome to Employee Portal</h1>
    <div class="divc">
        <div class="division"> 
            <h3>Emp_fname</h3><input type="text" name="fname" required>
            <h3>Emp_lname</h3><input type="text" name="lname" required>
            <h3>Emp_email</h3><input type="text" name="email" uniqid="email" required>
            <h3>Emp_number</h3><input type="tel" name="number" minlength="10" maxlength="10" required>
        </div>
        <div class="division1">
            <h3>Emp_street</h3><input type="text" name="street" required>
            <h3>Emp_state</h3><input type="text" name="state" required>
            <h3>emp_country</h3>
            <input type="text" name="country" required>
            <h3>pincode</h3><input type="tel" name="pincode" minlength="6" maxlength="6" required>
            <h3>image</h3><input type="file" name="image" required ><br><br>
            <button>submit</button>
        </div>
    </div>
</form>