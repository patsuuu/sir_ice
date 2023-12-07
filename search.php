<a href="admin_page.php?>"><input type="submit" value="Back"></a>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
		body {
			background-color: black;
			color: orange;
			
		}
		#title{
  color : #FF6701;
  
}
div.d{
  text-align: right;
  align-items: right;
  width: auto;
}
		.test {
			
		    display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
			border: 1px solid #c3c3c3;
			background-color: #1F1717;
		}
		video {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			border: 1px solid #c3c3c3;
			min-height: 50vh; 
			width: 310px;
			height: 200px;
		}
		a {
			text-decoration: none;
			color: #006CFF;
			font-size: 1.5rem;
		}
		.shot {
			
			
			
		}
	</style>
      <br><br><br><br><br><br><br><br>
    <title>patsuhub</title>
</head>
<body>
<script>
    window.history.forward();
    function noBack() { window.history.forward(); }
</script>
<div class="form-container">
    <center>
        <h2>VIDEOS</h2>
        <form method="get" action="admin_pg.php">
           
          
        </form>

        <br>

        <?php
        if (isset($_GET['search_title'])) {
            // Include the connection file
            include "conn.php";

            // Retrieve the search criteria from the form
            $search_title = $_GET['search_title'];

            // Add validation and data sanitization if required

            // Fetch data from the 'data' table based on the search criteria
            $sql = "SELECT * FROM videos WHERE title LIKE ?";
            $stmt = $con->prepare($sql);
            $search_title = '%' . $search_title . '%'; // Add wildcards for partial search
            $stmt->bind_param("s", $search_title);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Display the search results
                echo "<table border='4'>";
                echo "<tr><th>Title</th><th>Details</th><th>Authors</th><th>Data</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['details'] . "</td><td>" . $row['authors'] . "</td><td><a href='vieww_data.php?title=" . urlencode($row['title']) . "'>View</a></td></tr>";
                }
                echo "</table>";
            } else {
                // No results found
                echo "No results found!";
            }

            // Close the database connection
            $stmt->close();
            $con->close();
        }
        ?>
    </center>
</body>
</html>
