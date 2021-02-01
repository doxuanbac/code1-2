<!DOCTYPE html>
<html>
<body>

<?php
function myfunction($v1,$v2)
{
    // var_dump($v1);
    // var_dump($v2);die();
    $v1 = $v1 . '-' . $v2;
    return $v1;
}

$a = array("Dog","Cat","Horse");
$x = array();
print_r(array_reduce($a,"myfunction","X") . "<br>");
// print_r(array_reduce($x,"myfunction","NO"));
/* có 2 trường hợp: 
    1. mảng truyền vào có dữ liệu thì tham số initial sẽ được dùng vào đầu quá trình thực hiện câu lệnh ($v1)
    2. mảng truyền vào là rỗng thì kết quả sẽ trả về initial 
*/
?>

<?php
   function call_back_function($v1,$v2) 
   {
      return $v1 . "-" . $v2;
   }
   $array=array("a"=>"banana","b"=>"apple","c"=>"orange");
   print_r(array_reduce($array, "call_back_function"));
   print "<br>";
   print_r(array_reduce($array, "call_back_function", 10));
?>
</body>
</html>