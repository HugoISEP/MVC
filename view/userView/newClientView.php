<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/newClient.css">
    <title>New Client</title>
</head>
<body>

<div id="client_informations">
    <header>
        <h1>NEW CLIENT</h1>
    </header>
    <section class="informations">
        <form method="post" action="index.php?action=newClient" <!--onsubmit="return validate()" enctype="multipart/form-data"-->>
            <fieldset class="box">
                <label for="first_name">First Name</label> :
                <input type="text" name="first_name" id="first_name" placeholder="Arthur" size="40" autofocus required/>
                <br/>
                <br/>
                <label for="last_name">Last Name</label> :
                <input type="text" name="last_name" id="last_name" placeholder="Lorphelin" size="40" required/>
                <br/>
                <select id="gender" name="gender" required>
                    Gender :
                    <option value="Male"> Male </option>
                    <option value="Female"> Female </option>
                    <option value="Other"> Other </option>
                </select>
                <br/>
                <label for="email">Your Email</label> :
                <input type="email" name="email" id="email" placeholder="arthurlorphelin@gmail.com" size="40" required>
                <br/>
                <br/>
                <label for="password">Password</label> :
                <input type="password" name="password" id="password" size="40" placeholder="********" required>
                <br/>
                <br/>
                <label for="confirm_pass">Confirm Your Password</label> :
                <input type="password" name="confirm_password" id="confirm_password" size="40" placeholder="********" required>
                <br/>
                <br/>
                Birthday :
                <input type="date" name="birth" id="birth" size="2" placeholder="30" required><label for="birth"></label>
                <br/>
                <br/>
                Phone Number :
                <input type="tel" name="phone_number" id="phone_number" size="11" placeholder="06 75 92 62 21" pattern="[0-9]{10}" maxlength="10" required><label for="phone_number"></label>
                <br/>
                <br/>
                <label for="email_center">Center : </label>
                <select id="email_center" name="email_center">
                    <?php while($result = $centersData -> fetch()){?>
                        <option value="<?= $result['email'] ?>">
                            <?= $result['email'] ?>
                        </option>
                    <?php } ?>
                </select>
                <br/>
                <br/>
                <label for="ID_photo">ID Photo</label> :
                <input type="file" name="photo" id="ID_photo" value="Choose ...">
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <input type="submit" value="Sign Up">
            </fieldset>
            <br/>
            <br/>
        </form>

    </section>
</div>

</body>
</html>

<script type="text/javascript">
    function validate(){
        var a = this.getElementById('password').value;
        var b = this.getElementById('confirm_password').value;

        if (a!==b){
            alert('Les mots de passes ne correspondent pas !')
            return false
    }
</script>