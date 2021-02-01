<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            $result = '';
            if (isset($_POST['calculate']))
            {
                $a = isset($_POST['a']) ? $_POST['a'] : '';
                $b = isset($_POST['b']) ? $_POST['b'] : '';
                $c = isset($_POST['c']) ? $_POST['c'] : '';
             
                $delta = ($b*$b) - (4*$a*$c);
             
                if ($delta < 0){
                    $result = 'Phương trình vô nghiệp';
                }
                else if ($delta == 0){
                    $result = 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
                }
                else {
                    $result = 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
                    $result .= ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
                }   
            } 
        ?>
        <form method="post" action="">
            Nhập hệ số a: <input type="text" name="a" value=""/> <br>
            Nhập hệ số b: <input type="text" name="b" value=""/> <br>
            Nhập hệ số c: <input type="text" name="c" value=""/> <br>
            <br/><br/>
            <input type="submit" name="calculate" value="Kết qủa" />
        </form>
        <?php echo $result; ?>
    </body>
</html>