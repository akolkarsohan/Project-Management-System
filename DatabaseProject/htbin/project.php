<?php
	if($result)
	{
		print $query;
		print "<br>";
		echo "<table border='1' style='background-color:white'><tr>";
		print "<tr><td><b>Proj_num</b></td><td><b>Reg_num</b></td><td><b>Proj_name</b></td><td><b>Budget</b></td><td><b>Status</b></td><td><b>Proj_url</b></td><td><b>Task_num</b></td><td><b>Cal_num(Event_id)</b></td></tr>";
		// printing table headers
		for($i=0; $i<$fields_num; $i++)
		{
			$field = mysql_fetch_field($result);
			echo "<td><b>{$field->name}</b></td>";
		}
		echo "</tr>\n";
		// printing table rows
		while($row = mysql_fetch_row($result))
		{
			echo "<tr>";
			// $row is array... foreach( .. ) puts every element
			// of $row to $cell variable
			foreach($row as $cell)
			echo "<td>{$cell}</td>";
			echo "</tr>\n";
		}
	}
	 
?>
