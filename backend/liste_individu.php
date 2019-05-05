<?php 

require 'includes/connect_db.php';

if($db_found) {
$statut = "vendeur";
$sql = "SELECT * FROM individu WHERE Statut LIKE '%$statut%'";    
$result = mysqli_query($db_handle, $sql);
echo"<table>
	<thead>
	<caption></caption>
	</thead>
	<tbody>";
echo"<tr>";
	echo "<th>Nom </th>";
	echo "<th>Prenom</th>";
	echo "<th>Email</th>";
	echo "<th>Solde</th>";
	echo "<th>Supprimer</th>";
echo"</tr>";
echo"<br>";
while ($data = mysqli_fetch_assoc($result)) {
	echo"<tr>";
	echo "<td >". $data['Nom'] .'</td>';
	echo "<td >". $data['Prenom'] .'</td>';
	echo "<td >" . $data['Email'] .'</td>';
	echo "<td >" . $data['Solde'] .'</td>';
	echo "<td ><a href='../backend/suppression_individu.php?pseudo=".$data['Pseudo']."'><button class='btn btn-warning' id='supp'>Supprimer</button></a></td>";
	echo"</tr>";
}
echo"</tbody></table>";
} else {
echo "Database not found";
}
	
?>
<style>
table {
border-collapse:collapse;
width:100%;
max-width:700px;
min-width:400px;
text-align:center;
}

caption {
caption-side:bottom;
font-weight:bold;
font-style:italic;
margin:4px;
}

table,th, td {
border: 1px solid gray;
}

th, td {
height: 24px;
padding:4px;
vertical-align:middle;
}

th {
	background-color: #eeeeee;
	vertical-align:middle;
}
#supp{
	margin-top:5px;
	margin-bottom:5px;
}

.rowtitle {
background: #aaaaaa;
font-weight:bold;
}
table tr:nth-child(odd) td {
  background-color: #F0F0F0;
}
.pretty tr:nth-child(odd) td {
  background-color: #F0F0F0;
} 
</style>
