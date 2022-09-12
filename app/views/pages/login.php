<div class=" container1">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/login1.css">
    <form action="<?php echo URLROOT . 'pages/login' ?>" method="post">
        <h2>Login Details</h2>
        <h3>email address</h3><input type="text" name="emailaddress">
        <h3>password</h3><input type="password" name="password"><br>
        <?php
        if (isset($data['title'])); {
            print_r($data['title']);
        }
        ?><br>
        <button>submit</button>
    </form>
</div>