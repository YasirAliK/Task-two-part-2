 <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(!$conn)
		{
			echo "not connect with server";
		}


		if(!mysqli_select_db($conn,$dbname))
		{
			echo "Database not selected";
		}


		if(isset($_POST['Save']))
		{

			$Forward = $_POST['Forward'];
		    $Lef = $_POST['Left'];
		    $Rig = $_POST['Right'];

			 $sql = "INSERT INTO dirction2 (Forward, Left_Direct , Right_Direct) VALUES ($Forward, $Lef, $Rig)";
				 if ($conn->multi_query($sql) === TRUE) 
				{
			 		echo "New records created successfully";
				} 
				else 
				{
			    	echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}

		if(isset($_POST['Delete']))
		{
					
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			$id = $_POST['15'];

			$query = "SELECT * FROM `dirction2` WHERE `id` = $id";

			$result = mysqli_query($conn, $query);

			if($result)
			{
				echo "Data Deleted";
			}
			else
			{
				echo "Data not Deleted";
			}

			
		}

		 header("refresh:2; url=IndirectControl.html");

	?>