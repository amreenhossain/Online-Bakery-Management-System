<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bakery";
$conn= mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
    $user=$_POST['user'];
    $pass= $_POST['pass'];
    $usertype=$_POST['usertype'];
    $query= "SELECT * FROM `multiuserlogin` WHERE Username='".$user."' and Password = '".$pass."' and usertype ='".$usertype."'";
    $result = mysqli_query($conn, $query);
    if($result){
        while($row=mysqli_fetch_array($result)){
            echo'<script type="text/javascript">alert("Successfully logged in as '.$row['usertype'].'")</script>';
        }
        if(mysqli_num_rows($result)>0){
            ?>
            <script type="text/javascript">
            window.location.href="admin.php"</script>
            <?php
        }
        else{
            ?>
            <script type="text/javascript">
            window.location.href="user.php"</script>
            <?php
        }
    }else{
        echo 'No User Found Under This Username';
    }
}




?>
<html>
<head>
<meta charset = "utf-8">
   <title> Login </title>
   
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
    <div class="row-md-6">
    <div class="col-md-6">
     <h2> Login </h2>
</div>
<form method = "post">
     <table>
       <tr>
          <td> Username : <input type="text" name="user" placeholder= "USERNAME"></td>
       </tr>
       <tr>
          <td> Password : <input type="text" name="pass" placeholder= "PASSWORD"></td>
       </tr>
       <tr>
         <td>Select User Type: <select name="usertype">
              <option value="admin">admin</option>
              <option value="user">user</option>
           </select>
        </td>
       </tr>
       <tr>
        <td> <input type="submit" name="Login" value="Login"></td>
     </table>
</form>
</body>
</html>