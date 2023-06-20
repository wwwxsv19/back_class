<?php
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
  $query = "update myuser set name='".$_POST['myname']."', age=".$_POST['myage'].", 
  gender='".$_POST['mygender']."', work='".$_POST['mywork']."' where num=".$_POST['mynum'].";";
  $result = mysqli_query($conn, $query);

  if($result){
    echo "<script>alert('데이터 수정 성공');</script>";
  }
  else{
    echo "<script>alert('데이터 수정 실패');</script>";
  }
?>

<meta http-equiv="refresh" content="0; url=view.php">