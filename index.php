
<?php
echo "Citizen.CreateThread(function() <br>";

$link = mysqli_connect("IP", "username", "pass", "dbname");	

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT vehicles.name, vehicles.model FROM vehicles";

				
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
		echo "AddTextEntryByHash(GetHashKey('".$row["model"] ."'), '".$row["name"] ."')<br>";
		
 }
        mysqli_free_result($result);
    } else{
        echo "Dumbass your table is emtpy.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
echo "end)";
                  ?>
				  
