<?php
  include_once 'connect.php';
  session_start();
  if(isset($_POST['submit'])){


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $sub = mysqli_real_escape_string($conn, $_POST['subject']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $query = "INSERT INTO feedback(name, subject, email, msg) VALUES('$name', '$sub', '$email', '$message')";

    if(mysqli_query($conn, $query)){
      '<script type="text/javascript">
      alert("DELETED  Successfully");

      </script>';
      header('location: index.html');
    }
}
?>
