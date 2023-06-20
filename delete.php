<?php
   $conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
   $query = "delete from myuser where num=" . $_GET['num'];
   $result = mysqli_query($conn, $query);
   
   if($result){
      echo "<script>alert('데이터 삭제 성공'); </script>";
   }else{
      echo "<script>alert('데이터 삭제 실패'); </script>";
   }
?>

<meta http-equiv="refresh" content="0; url=view.php">