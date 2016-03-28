<?php
 echo $ID;
 echo $Title;
 echo $Description;
 echo $Place;
 echo $startDate;
 echo $EndDate;
 echo $startTime;
 echo $endTime;
 echo $Submitter;
 echo $link;
 echo $Image;
 echo $EventName;
 echo $Organization;
 echo $Approved;
 
 $link = $_POST['link'];
 $Approved = $_POST['Approved'];
 $ID = $_POST['ID']; 
 $Title = $_POST['Title'];
 $Description= $_POST['Description'];
 $Place= $_POST['Place'];
 $startDate= $_POST['startDate'];
 $EndDate= $_POST['EndDate'];
 $startTime= $_POST['startTime'];
 $endTime= $_POST['endTime'];
 $Image= $_POST['Image'];
 $EventName= $_POST['EventName'];
 $Submitter= $_POST['Submitter'];
 $Organization= $_POST['Organization'];
 
  echo $userName;
 echo $Password;
 $userName = $_POST['userName'];
 $Password = $_POST['Password'];
  /*$post = 'userName='.$userName.'&Password='.$Password; */
  
 $post ='ID='.$ID.'&Title='.$Title.'&startDate='.$startDate.'&EndDate='.$EndDate.'&startTime='.$startTime.'&endTime='.$endTime.'&Description='.$Description.'&Submitter='.$Submitter.'&Place='.$Place.'&Organization='.$Organization.'&link='.$link.'&Image='.$Image.'&EventName='.$EventName.'&Approved='.$Approved;
	$url = 'https://web.njit.edu/~cls33/CS490/CreateEvent.php';
  $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);      /* functions that set an option for a curl transfer */
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
	$replyFromDB2 = curl_exec($ch); /* set variable to store response */
  echo $replyFromDB2;
 
	curl_close($ch);
  
 
 $value = json_decode($replyFromDB2, true); /* Using json to decode the response in a form of array */
 echo $value;
 
 /* Below, if statements to compare received values */
 $html = file_get_contents('https://web.njit.edu/~jar63/CS490/index3.html'); 
 $html2= file_get_contents('https://web.njit.edu/~jar63/CS490/index4.html');
   
    
?>

