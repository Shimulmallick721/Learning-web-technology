<?php
$_SESSION['store']=[];
$data["errors"]=[];
$request =[];
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if (isset($_POST['full_name']) && $_POST['full_name'] !== '') {
        $request['full_name'] = $_POST['full_name'];
        $_SESSION['store']['name'] = $_POST['full_name'];
        $_COOKIE['Name'] = "TEST";

    }else{
        $data["errors"]['name'] = 'Name Not Found!';
    }

    if(isset($_POST['phone'])){
        $request['phone'] = $_POST['phone'];
        $_SESSION['store']['phone'] = $_POST['phone'];
    }
    if(isset($_POST['email'])){
        $request['email'] = $_POST['email'];
        $_SESSION['store']['email'] = $_POST['email'];

    }

    if (isset($_POST['password']) && $_POST['password'] !== '') {
        if(7> strlen($_POST['password'])){
            $data['errors']['minimum'] ="Password must be 8 digit";
        }
        else{
            if($_POST['password']=== $_POST['confirm_password']){
                $request['password'] = $_POST['password'];
            }
            else{
                $data['errors']['notmatched'] = 'Password not matched!';
            }
        }
    }
    else{
        $data["errors"]['password'] = 'Password can not be empty!';
    }

    //store data
    if(!file_exists('Administrative.txt')){
        $data['errors']['no_file'] = 'No data file found!';
    }
    else{
            file_put_contents("../model/admin.txt","Name: {$request['full_name']} ", FILE_APPEND);
            file_put_contents("../model/admin.txt","Email:{$request['email']} ", FILE_APPEND);
            file_put_contents("../model/admin.txt","Phone:{$request['phone']} ", FILE_APPEND);
            file_put_contents("../model/admin.txt","Password:{$request['password']} ", FILE_APPEND);
            clearstatcache();
    }
}
?>
<div class="content" style=" background-color:#828282">

<center>
<h2>Administrative Registration</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <label for="full_name">Name:</label><br>
    <input type="text" id="full_name" name="full_name" placeholder="enter your full name" value="<?=isset($_SESSION['store']['name'])? $_SESSION['store']['name']:null;?>">
    <span><?=isset($data['errors']['name'])? $data['errors']['name']:null;?></span><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" placeholder="enter your email" value="<?=isset($_SESSION['store']['email'])? $_SESSION['store']['email']:null;?>" required><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" placeholder="+880123456789" value="<?=isset($_SESSION['store']['phone'])? $_SESSION['store']['phone']:null;?>"><br>
    <label for="password">Password:</label><br>
    <input type="password" placeholder="enter your password" id="password" name="password"><br>
    <span>
            <?php
            if(isset($data['errors']['password'])){
                echo $data['errors']['password'];
            }
            else{
                if(isset($data['errors']['minimum'])){
                    echo $data['errors']['minimum'];
                }
            }
            ?>
        </span><br>
    <input type="password" name="confirm_password" placeholder="confirm password"/>
    <span>
            <?php
            if(isset($data['errors']['notmatched'])){
                echo $data['errors']['notmatched'];
            }
            ?>
        </span><br>
    <label for="profile_photo">Upload a photo</label><br>
    <input type="file" id="profile_photo" name="image"><br>
    <span><?=isset($data['errors']['image'])? $data['errors']['image']:null;?></span><br>
    <br><br>
    <input type="submit" value="submit">
    <span><?=isset($data['errors']['no_file'])? $data['errors']['no_file']:null;?></span><br>
</form>

<a href="Admin.php">Go back to login</a>
		</center>
</div>
