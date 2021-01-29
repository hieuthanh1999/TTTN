<?php
$tenmaychu="localhost";
$tentaikhoan="root";
$pass="";
$csdl="shoe";
$site_url = 'http://localhost:8080/TTTN/shoe/';
$site_admin = 'http://localhost:8080/TTTN/shoe/admin/';
$conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die("Không kết nối được");
// if($conn==true)
// {
// 	echo "thành công";
// }
// else{
// 	echo "thất bại";
// }
// $sql = "INSERT INTO tbl_admin (id, email, name, pass) VALUES ('2', 'hongan', 'hongan@gmail.com', 'hongan')";
// if (mysqli_query($conn, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);

mysqli_set_charset($conn,"utf8");

?>