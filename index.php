<?php 
    $account_ID = '';
    $password = '';
    $name = '';

    $name_error = '';
    $account_error = '';
    $password_error = '';

    if ( isset($_POST['name']) ) {
        $name = $_POST['name'];
    }
    if ( isset($_POST['account']) ) {
        $account_ID = $_POST['account'];
    }
    if ( isset($_POST['password']) ) {
        $password = $_POST['password'];
    }


    if ( empty($_POST['name'])  ) {
        $name_error = 'Name is required';
    }
    if ( empty($_POST['account'])  ) {
        $account_error = 'Account is required';
    }
    if ( empty($_POST['password'])  ) {
        $password_error = 'Not found password, please try again';
    }

    if ( !empty($_POST['name']) && !empty($_POST['account']) && !empty($_POST['password']) ) {
        echo '<script language="javascript">';
        echo 'alert("Account created successfully")';
        echo '</script>';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP For Everyone Final Project</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form {
        border: 1px solid black;
        width: 500px;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .maxwidth {
        width: 100%;

        display: grid;
        grid-template-columns: 30% 80%;
        grid-template-rows: 1fr;
        grid-template-areas: 'label input';
        row-gap: 40px;
    }

    .title {
        grid-area: label;
        font-weight: 700;
        font-size: 1.25rem;
        text-align: center;
    }

    .input {
        grid-area: input;
        width: 80%;
    }

    .button {
        width: 30%;
        font-family: Open-sans;
        background-color: black;
        color: white;
        font-size: 1.25rem;
        padding: 10px;
        border-radius: 30px;
    }

    </style>
</head>
<body>
    <h1>Sign Up</h1>
    <form method="POST" class="form">
        <div class="maxwidth">
            <label class="title">Name: </label>
            <input type="text" name="name" value="<?php echo "$account_ID" ?>"  class="input" />
        </div>
        <?php echo "<p style='color: red'>$name_error</p>" ?>
       <div class="maxwidth">
            <label class="title">Account: </label>
            <input type="text" name="account" value="<?php echo "$password" ?>"  class="input" />
       </div>
       <?php echo "<p style='color: red'>$account_error</p>" ?>
       <div class="maxwidth">
            <label class="title">Password: </label>
            <input type="password" name="password" value="<?php echo "$name" ?>" class="input" />
       </div>
       <?php echo "<p style='color: red'>$password_error</p>" ?>

        <button type="submit" class="button">SUBMIT</button>
    </form>
</body>
</html>