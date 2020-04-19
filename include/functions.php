<?php

function get_boreholes ($link) {

	$sql = "SELECT * FROM boreholes";

	$result = mysqli_query($link, $sql);

	$boreholes = mysqli_fetch_all($result, 1);


	return $boreholes;
}





?>