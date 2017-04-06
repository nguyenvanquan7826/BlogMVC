<?php 

class DbModel {
	public function connect() {
		$con = mysqli_connect('localhost', 'root', '', 'nvquan7826_blogmvc');
		mysqli_set_charset($con, 'utf8');

		if(mysqli_connect_errno()) {
			echo 'Connect error: ' . mysqli_connect_error();
		}
		return $con;
	}
}

 ?>