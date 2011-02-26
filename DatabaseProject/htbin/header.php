<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Project Management System</title>
 <link rel="stylesheet" type="text/css" href = "http://ix.cs.uoregon.edu/~sakolkar/DatabaseProject/main.css" media="screen"/>
  
</head>
<body onload = "this.focus();" screen_cature_injected="true" >

<tr>
	<td>
		<table width = "100%" cellpadding ="3" cellspacing="0" border = "0">
		<tbody>
			<tr>
				<th style = "background:grey" align="center">
					<strong>Welcome to Project Management System </strong>
				</th>
				<th style = "background:#ffffff" align = "right" width = "150">
				<strong><?php echo(date("F dS, Y ") . "<br />"); ?></strong>
				</th>
			</tr>
		</tbody>
			<tr>
				<td> </td>
			</tr>
		</table>
	</td>
</tr>

<tr>
    <td class="nav" align="left">
    <table width="100%" cellpadding="3" cellspacing="0">
    <tr>
        <td style="background:#AAAA8D">
        <a href="?m=Company">Company</a>
         | <a href="?m=Project">Project</a>
         | <a href="?m=Department">Department</a> 
         | <a href="?m=Task">Task</a> 
         | <a href="?m=Calendar">Calendar</a> 
         | User 
         | About 
         | Help
        </td>
        <td style = "background:#AAAA8D" nowrap="nowrap" align="right">
        <form name="frm_new" method="get" action="main.php">
        <table cellpadding="0" cellspacing="0">
        <tr><td>
        <select name="m" style="font-size:10px" onChange="f=document.frm_new;mod=f.m.options[f.m.selectedIndex].value;if (mod) f.submit();">
    <option value="0" selected="selected">- New Item -</option>
    <option value="Company">Company</option>
    <option value="Project">Project</option>
    <option value="Department">Department</option>
    <option value="Task">Task</option>
    <option value="Calendar">Calendar</option>    
    <option value="User">User</option>
</select>
        <input type="hidden" name="a" value="addedit" />
        </td></tr>
        </table>
        </form>
        </td>
    </tr>
    </table>
    </td>
</tr>
<br />

