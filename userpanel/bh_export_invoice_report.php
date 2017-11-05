<?php 
ob_start();
session_start();
include("../lib/config.php");
   
/*   CSV Export*/
function escape_csv_value($value) 
{
	$value = str_replace('"', '""', $value); // First off escape all " and make them ""
	if(preg_match('/,/', $value) or preg_match("/\n/", $value) or preg_match('/"/', $value))
	{ // Check if I have any commas or new lines
		return '"'.$value.'"'; // If I have new lines or commas escape them
	} 
	else 
	{
		return $value; // If no new lines or commas just return the value
	}
}

function redirectURL($url) 
{
	$url=$_SERVER['HTTP_REFERER'];
    echo '<script> window.location.href="'.$url.'"</script>"';
}

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=exportEpin.csv");
header("Pragma: no-cache");
header("Expires: 0");

if($_REQUEST['userid'])
{
	$userid = $_REQUEST['userid'];
}
		
$totc_unpaid = 0;
$total = 0;
$content = '';
	  
$title = '';
$i=1;



$select = mysql_query("select * from lifejacket_subscription where user_id='$userid' order by id desc");

if(mysql_num_rows($select)>0)
{

	while($row=mysql_fetch_assoc($select))
	{
		
		if($data1['status']==0)
		{ 
			$statuss="Pending"; 
		}
		else 
		{
			$statuss="Paid";
		}
		
		$content .= escape_csv_value($i).",";
		$content .= escape_csv_value($row['transaction_no']).",";
		$content .= escape_csv_value($row['lifejacket_id']).",";
		$content .= escape_csv_value($row['date']).",";
		$content .= escape_csv_value(number_format($row['amount'],2)).",";
		$content .= escape_csv_value($row['package']).",";
		$content .= escape_csv_value($row['remark']).",";
		$content .= "\n";
		$i++;
	}
}						
$title .= "Sr No., Transaction No., Unique Id, Date, Amount, Package, Remark"."\n";
echo $title;
echo $content;

?>