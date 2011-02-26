<?php
	if($result)
	{
		print $query;
		print "<br>";
		echo "<table border='1' style='background-color:white'><tr>";
		print "<tr><td><b>Task_num</b></td><td><b>Proj_num</b></td><td><b>Start_date</b></td><td><b>Due_date</b></td><td><b>Description</b></td></tr>";
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
