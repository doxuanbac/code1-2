<?php
// biến
/*
Cách khởi tạo 1 biến
 - Một biến bắt đầu là $, theo sau là tên biến
 - Tên biết bắt đầu bằng 1 ký tự chữ hoặc gạch dưới, không được bắt đầu bằng số
 - tên biến phân biệt chữ hoa và chữ thường
*/
$name = "Do Xuan Bac";
$ngaySinh = "20/09/2000";
?>

<?php //data type
/* 
    Các kiểu dữ liệu trong php
        - Int (kiểu số nguyên)
        - boolean (true & false)
        - Float, double (số thực)
        - kiểu chuỗi (string)
        - kiểu mảng (array)
        - kiểu null (rỗng)
        - Object
    Sự khác nhau giữa dấu ' và ":
    nếu muốn in ra giá trị của biến khi echo ", ngược lại nếu dùng ' thì chỉ echo ra chuỗi bình thường. Dùng ' thì tốc độ sẽ nhanh hơn.
*/
?>

<?php // câu lệnh if else
/*
 Khi nào nên dùng if else, khi nào nên dùng swith
    - Sử dụng if else khi vòng lặp có ít trường hợp xảy ra (thường là 2)
    - Sử dụng swith khi vòng lặp có nhiều trường hợp xảy ra (>2)
*/
?>

<?php // vòng lặp
// các cách để loop một mảng 
// Vòng lặp for
    for($x = 0; $x < 10; $x++){
        echo "<pre>";
        echo $x;
    }
// Vòng lặp while
$i = 0; 
while ($i <= 10 ) {
    echo $i . "<br>"; 
    $i++; 
}
// vòng lặp do while
$i = 0;
do {
    echo "$i <br>"; 
    $i++; 
} while ($i <= 10);
/*
Sự khác biệt giữa continue và break
1. Continue dùng để bỏ qua 1 vòng lặp để tiếp tục vòng lặp sau đó
2. Break dùng để chấm dứt 1 vòng lặp
*/
// break
$i = 0;
for ($i = 0; $i < 5; $i++) {
echo $i;
if ($i == 3) {
    break;
}
}
//continue
$i = 0;
for ($i = 0; $i < 5; $i++) {
echo $i;
if ($i == 2) {
    continue;
}
}
?>

<?php //dumping
// các hàm để in mảng: var_durm, print_r
$aSoNguyen = array(1, 2, 3, 4, 5, 6);
echo "<pre>";
var_dump($aSoNguyen);
print_r($aSoNguyen);
?>

<?php
/* FUNCTION
1. Tác dụng của function: hàm có thể tái sử dụng nhiều lần, nên tránh khỏi việc viết code lặp đi lặp lại. Khi sử dụng hàm code nhìn sẽ rõ ràng, dễ đọc hơn
*/
// function với tham số không bắt buộc
function myFullname($firstname = "Việt", $lastname = "Bắc") {
    echo "$firstname $lastname";
 }
 myFullname();

 // function với tham số bắt buộc
 function Fullname($firstname , $lastname ) {
    echo "$firstname $lastname";
 }
 Fullname("Việt", "Bắc");

 // function với giá trị trả về
 function Myname($firstname , $lastname ) {
    $name = "$firstname $lastname";
    return $name;
 }
 echo Myname("Việt", "Bắc");
?>  

<?php
 // hàm func_get_args
 function my_function() {    
    $args = func_get_args();
    call_user_func_array("another_function", $args);
}
?>

<?php
$fp = @fopen('demo.txt', "r");

if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    while(!feof($fp))
    {
        echo fgetc($fp);
    }
}
?>

