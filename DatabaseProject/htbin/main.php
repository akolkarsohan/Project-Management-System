<!--Author: Sohan Akolkar
Final Project - CIS 551
Feb 16,2010-->

<?php //Header
include 'header.php'; ?>

<?php

//--------------------------------------------------------------------
/*Connection code taken from CIS system's support page,
<https://systems.cs.uoregon.edu/wiki/index.php?n=Help.WebPHPmysql>*/


//Database Connection starts
$homedir = "/home/users/sakolkar";
// Parse the config file for this app; this one in the current directory
$conf = @parse_ini_file("$homedir/etc/myapp.conf");
$debug = $conf['debug'];

// student users can use unix domain socket to connect
$location = ":$homedir/mysql-data/mysqld_sock";

// if for some reason your database is on a different server, parse .my.cnf
$mysql_conf = parse_ini_string(preg_replace("/^#.*$/m","", file_get_contents("$homedir/.my.cnf")), TRUE);
$location = $mysql_conf['client']['host'].":".$mysql_conf['client']['port'];

// connect to the database server
$conn = mysql_connect($location, $conf['dbuser'], $conf['password']) 
	or die ("Could not connect MySQL");
//if ($debug) print "Connection to <b>$location</b> successful.<br />";

// select the database
$selected_db=mysql_select_db($conf['database'], $conn) 
	or die ("Could not open database");
if ($debug) print "Database <b>$database</b> selected.<br />";
?>

<?php
if($_GET['m'])
	{
		$query = "SELECT * FROM pms_db.";
		$query = $query."`".$_GET['m']."`;";
		
		print"<h4>Query Executed:</h4>";
		//print $query;
		print "<br>";
		$result = mysql_query($query);
		switch($query){ 

		case "SELECT * FROM pms_db.`Company`;":
			include 'company.php';
			break;
  		case "SELECT * FROM pms_db.`Project`;": 
			include 'project.php';
			break;
		case "SELECT * FROM pms_db.`Department`;": 
			include 'department.php'; 
			break; 
		case "SELECT * FROM pms_db.`Task`;": 
			include 'task.php'; 
			break; 

		case "SELECT * FROM pms_db.`Calendar`;": 
			include 'calendar.php';
			break; 

		case "SELECT * FROM pms_db.`User`;": $blank = 5; break; 

		//case "Sat": $blank = 6; break; 

	}

}
 //Footer
 
?>
<!--
<table border="1">
<tbody>
<tr>
<hr>
<th style="background:#888888" colspan="2" width = "1320" valign= "bottom">
	<?php //include 'footer.php'?>
</th>

</tr>
</tbody>
</table>
-->
<table width = "100%" cellpadding ="3" cellspacing="0" border = "0">
		<tbody>
			<tr>
			<br/> <hr>
				<td style = "background:grey">
					<?php include 'footer.php'?>
				</td>
				
			</tr>
		</tbody>
</table>
