
<?php
   $conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
   $query = "insert into myuser(name,age,gender,work) 
   values('".$_POST['Uname']."',".$_POST['Uage'].",'".$_POST['Ugender']."','".$_POST['Uwork']."');";
   $result = mysqli_query($conn, $query);
   
    
    

   if($result){
      echo "<script>alert('데이터 삽입 성공');</script>";
   }else{
      echo "<script>alert('데이터 삽입 실패');</script>";
   } 
?>
<meta http-equiv="refresh" content="0; url=view.php"> 
// 삽입후 view.php로 이동
