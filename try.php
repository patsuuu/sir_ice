

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table class='fl-table'>
		<thread>
			<tr>
				<th>NAME</th>
			</tr>
			<?php
			$mysqli = new mysqli('localhost','root','','hub_db') or die(mysql_error(mysqli));
			$result = $mysqli->query('SELECT * FROM hub_tbl') or die(mysqli->error);
				while($row = $result->fetch_assoc()):?>
				 <tbody id="myTable">
				<tr>
					<td><?php print $row['name'];?> </td>
                    </td>
                   </tr>
                 </tbody>
			<?php endwhile;?>
		</table>
	</div>
</body>
</html>