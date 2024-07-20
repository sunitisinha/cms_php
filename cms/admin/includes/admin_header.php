<?php ob_start(); ?>
<?php include "../includes/db.php"; ?><!--This notation refers to the parent directory of the current directory. It's used to navigate up one level in the directory hierarchy. For example, if you are in a directory called "my_folder," and you use ../, you are referring to the directory containing "my_folder."-->
<?php include "./functions.php"; ?><!--This notation refers to the current directory. It is often used to specify a file or directory within the same directory where the reference is made. For example, if you are in a directory called "my_folder" and you use ./file.txt, you are referring to a file named "file.txt" within "my_folder."

In web development, when you use these notations in URLs or links, they have similar meanings. For example:

"../index.php" in a URL would refer to the "index.php" file in the parent directory of the current web page's directory.
"./posts.php" in a URL would refer to the "posts.php" file in the current web page's directory.
Both ../ and ./ are used to specify paths and navigate within directory structures, but they have slightly different purposes. ../ is for moving up to a parent directory, and ./ is used for referring to the current directory.





-->

<?php session_start(); ?>

<?php //First we wrote that if user role session is null then it wont go inside loop.But if we wrote like this then it will go inside the loop
if(!isset($_SESSION['user_role']))
{
    header("Location:../index.php");
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/summernote.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>