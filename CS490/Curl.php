


<?php  /* Implementation of curl */


 echo $userName;
 echo $Password;
 $userName = $_POST['userName'];
 $Password = $_POST['Password'];
  $post = 'userName='.$userName.'&Password='.$Password; 
	$url = 'https://web.njit.edu/~cls33/CS490/login.php';
  $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);      /* functions that set an option for a curl transfer */
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
	$replyFromDB2 = curl_exec($ch); /* set variable to store response */
 
	curl_close($ch);
  
 
 $value = json_decode($replyFromDB2, true); /* Using json to decode the response in a form of array */
 
 /* Below, if statements to compare received values */
 $html = file_get_contents('https://web.njit.edu/~jar63/CS490/index3.html'); 
 $html2= file_get_contents('https://web.njit.edu/~jar63/CS490/index4.html');
 $html3 = file_get_contents('https://web.njit.edu/~jar63/CS490/index.html');
 if (($value['UserID'] == "1") && ($value['Role'] == "1"))
  {
    echo "$html";
  }
  
 else if (($value['UserID'] == "2")&&($value['Role'] == "2"))
 { 
 
     echo "$html2";
 }
    
 else
  {
    echo "YOU ARE A GUEST!!";
    echo "$html3";
    
  }
 
?>


