<?php
$aItems = [
	"username" => "root",
	"password" => "root1",
	"age" => 13,
];

    function renderUsername($aUsernames)
    {
        $aKeys = array_keys($aUsernames); // ["username" , "password"]
        echo '<ul>';
        echo array_reduce($aKeys, function ($carry, $key) use ($aUsernames) {
            
            $carry .=  "<li>" . $key . ':' . $aUsernames[$key] . "</li>";  // root root1 => username:root | password:root1 | age:13
            return $carry;
        }, "");
    }
    renderUsername($aItems);
?>

<?php
    
?>  
<!-- function a($x) {
	$carry = '';
	echo '<ul>';
		$carry = $x;
		return $carry;
}

echo a('z'); -->
