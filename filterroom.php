<?php
$connect = mysqli_connect("localhost", "root", "", "roombookingppdpkg");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM booking 
	WHERE username LIKE '%".$search."%'
	OR bookingID LIKE '%".$search."%' 
	OR room LIKE '%".$search."%' 
	OR startdate LIKE '%".$search."%'
	OR enddate LIKE '%".$search."%'
	OR starttime LIKE '%".$search."%'
	OR endtime LIKE '%".$search."%'
	OR title LIKE '%".$search."%'
	OR committee LIKE '%".$search."%'
	OR chairperson LIKE '%".$search."%'
	OR secretary LIKE '%".$search."%'
	OR note  LIKE '%".$search."%'
	OR status LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM booking ORDER BY bookingID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
			<th>Pengguna</th>
			<th>Bilik</th>
			<th>Tarikh Mula</th>
			<th>Masa Mula</th>
			<th>Tarikh Tamat</th>
			<th>Masa Tamat</th>
			<th>Tajuk</th>
			<th>Bil.Peserta</th>
			<th>Jawatankuasa</th>
			<th>Pengerusi</th>
			<th>Setiausaha</th>
			<th>Keperluan/Catatan</th>
			<th>Status</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["bookingID"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$row["room"].'</td>
				<td style="width:8%">'.$row["startdate"].'</td>
				<td style="width:8%">'.$row["enddate"].'</td>
				<td>'.$row["starttime"].'</td>
				<td>'.$row["endtime"].'</td>
				<td>'.$row["title"].'</td>
				<td>'.$row["noofparticipant"].'</td>
				<td>'.$row["committee"].'</td>
				<td>'.$row["chairperson"].'</td>
				<td>'.$row["secretary"].'</td>
				<td>'.$row["note"].'</td>
				<td>'.$row["status"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
			<th>Pengguna</th>
			<th>Bilik</th>
			<th>Tarikh Mula</th>
			<th>Masa Mula</th>
			<th>Tarikh Tamat</th>
			<th>Masa Tamat</th>
			<th>Tajuk</th>
			<th>Bil.Peserta</th>
			<th>Jawatankuasa</th>
			<th>Pengerusi</th>
			<th>Setiausaha</th>
			<th>Keperluan/Catatan</th>
			<th>Status</th>
						</tr>
						
			<tr>
				<td colspan="14" style="text-align:center">Data tiada dalam rekod</td></tr>';
}
?>