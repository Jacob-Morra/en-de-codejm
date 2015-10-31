<html>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<h4> Encode Your Message Below! </h4>
Your message: <input type="text" name="msg"/>
<input type="submit"/>
</form>
</html>
<?php

/**
 * @author Jacob Morra 
 * @copyright 2015
 * 
 * This program encodes a user-entered message by applying one operation to all
 * characters in the message. 
 */
 
if (isset($_POST["msg"])){
    $msgIn = $_POST["msg"];  

	$enc1 = str_split($msgIn);
	$enc2 = array();
	$enc3 = array();
	$enc4 = array();
	
	//round 1: convert all chars to ascii values
	foreach ($enc1 as $value){
		$ascii = ord($value);
		$enc2[]=$ascii;
	}

	//print_r($enc2);
	
	echo "<hr>";

	//round 2: add 15 to each ascii value
	foreach($enc2 as $value){
		$ascii2 = $value + 15;
		$enc3[] = $ascii2;
	}
	
	//print_r($enc3);
	
	//round 3: convert ascii values to strings
	foreach ($enc3 as $value){
		$string1 = chr($value);
		$enc4[] = $string1;
	}
	
	//print_r($enc4);
	
	$enc5 = implode("", $enc4);
	
	echo "Your encoded message is: " . $enc5;	
}   


?>
