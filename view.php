<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb'); // MySQL 서버에 접속
if (mysqli_connect_errno()) { // 접속 오류 확인
  echo 'MySQL 접속 실패 : ' . mysqli_connect_error();
  exit();
}
$query = "select * from myuser";
$result = mysqli_query($conn, $query); // 쿼리 실행
$count = mysqli_num_rows($result);

echo "<table border=1 width=500 align = center>";
    echo "<tr><td colspan=7 align = center>데이터의 개수는 ".$count."개 입니다.<br></td></tr>";
    echo "<tr><th>번호</th><th>이름</th><th>나이</th><th>성별</th><th>직업</th><th>삭제</th><th>수정</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) { // 결과 출력
    echo "<tr align=center><td>".$row["num"]."</td><td>".$row["name"]."</td><td>".$row["age"].
    "</td><td>".$row["gender"]."</td><td>".$row["work"]."</td>
    <td><a href='delete.php?num=".$row["num"]."'>삭제</a></td>
    <td><a href=modify.php?num=".$row["num"].">수정</a></td></tr>";
    }
echo"</table>";


mysqli_close($conn); // MySQL 연결 닫기
?>
<br>
<form method="post" action="insert.php" align = center>
  이름 : <input type="text" name="Uname"><br>
  나이 : <input type="text" name="Uage"><br>
  성별 : <input type="text" name="Ugender"><br>
  직업 : <input type="text" name="Uwork"><br>
  <br>
  <input type="submit" value="확인"><br>
</form>



