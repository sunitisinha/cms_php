<?php //We would not include functions.php file here because it is already included in admin_header.php


if(isset($_GET['edit_user']))
{

    $the_user_id=$_GET['edit_user'];

    $query="SELECT * FROM users WHERE user_id={$the_user_id}";
                        $select_users_query=mysqli_query($connection,$query);
                        while($row=mysqli_fetch_assoc($select_users_query))
                        {
                            $user_id=$row['user_id'];
                            $username=$row['username'];
                            $user_password=$row['user_password'];

                           
                            $user_firstname=$row['user_firstname'];
                            $user_lastname=$row['user_lastname'];
                            $user_email=$row['user_email'];
                            $user_image=$row['user_image'];
                            $user_role=$row['user_role'];
                        }




}
if(isset($_POST['edit_user']))
{

$user_firstname=$_POST['user_firstname'];
$user_lastname=$_POST['user_lastname'];
$user_role=$_POST['user_role'];



$username=$_POST['username'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];


$hashFormat="$2y$10$";
$salt="iusesomecrazystrings22";
$hashF_and_salt=$hashFormat.$salt;

$hashed_password=crypt($user_password,$hashF_and_salt);


$query="UPDATE users SET ";
    $query.="username='{$username}', ";
    $query.="user_password='{$hashed_password}', ";
    $query.="user_firstname='{$user_firstname}', ";
    $query.="user_lastname='{$user_lastname}', ";
    $query.="user_email='{$user_email}', ";
    $query.="user_role='{$user_role}' ";
    $query.="WHERE user_id={$the_user_id}";

    $edit_user_query=mysqli_query($connection,$query);

    confirmQuery($edit_user_query);
}







?>



<form action="" method="post" enctype="multipart/form-data">



<div class="form-group">
    <label for="title">Firstname</label>
    <input type="text" class="form-control" value="<?php echo $user_firstname; ?>" name="user_firstname">
</div>

<div class="form-group">
    <label for="title">Lastname</label>
    <input type="text" class="form-control" value="<?php echo $user_lastname; ?>" name="user_lastname">
</div>


<div class="form-group">
    <select name="user_role" id="">
        <option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
        <?php

        if($user_role=="admin")
        {
            echo "<option value='subscriber'>subscriber</option>";
        }
        else
        {
            echo "<option value='admin'>admin</option>";
        }

        ?>
</select>
</div>

<div class="form-group">
    <label for="author">Username</label>
    <input type="text" class="form-control" value="<?php echo $username; ?>" name="username">
</div>

<div class="form-group">
    <label for="post_status">Email</label>
    <input type="email" class="form-control" value="<?php echo $user_email; ?>" name="user_email">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" value="<?php echo $user_password; ?>"  name="user_password">
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
</div>


</form>