
Conversation opened. 1 unread message.

Skip to content
Using Strathmore University - SU Mail with screen readers
Click here to enable desktop notifications for Strathmore University - SU Mail.   Learn more  Hide

  More 
1 of 1,374
 
(no subject) 
Inbox
x 

Faustina Vicky <vicky.mathenge@strathmore.edu>
Attachments2:23 PM (19 minutes ago)
to me 

4 Attachments
	
Click here to Reply or Forward
Using 1.1 GB
Manage
Program Policies
Powered by Google
Last account activity: 1 hour ago
Details

<?php
/*
*Print teh foloowing string on a new line
*in place of the spaces
*@example
*"Wambua dreamt of cows."
*output
*---Wambua
*---dreamt
*---of
*---cows.
*/

$sentence1 = "Wambua dreamt of cows";
$sentence2 = "Kambua dreamt of cows";
$sentence3 = "Syombua dreamt of cows";
//solution1
$sentence_array = explode(' ',$sentence1 );
foreach ($sentence_array as $word){
echo $word.'<br/>';
}

//solution2
echo preg_replace('/\s+/','<br/>',$sentence2);
//solution3[Davis&Roy]
echo str_replace(' ','</br>', $sentence3);

 ?>
lokis.php
Displaying wambua_corrupted_sample.txt.