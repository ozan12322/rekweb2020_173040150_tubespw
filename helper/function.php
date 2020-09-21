<?php 

	$conn = mysqli_connect("localhost", "root", "", "pw_173040150");

	function query($query) {

		global $conn;

		$results = mysqli_query($conn , $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($results) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	function tambah($data) {

		global $conn;

		$nama = htmlspecialchars($data['nama']);
		$pendiri = htmlspecialchars($data['pendiri']);
		$lahir = htmlspecialchars($data['lahir']);
		$penghasilan = htmlspecialchars($data['penghasilan']);
		$gambar = htmlspecialchars($data['gambar']);

		$query = "INSERT INTO teknologi VALUES
					('' , '$nama' , '$pendiri' , '$lahir' , '$penghasilan' , '$gambar')";
		mysqli_query($conn , $query);

		return mysqli_affected_rows($conn);

	}

	function hapus($id) {

		global $conn;

		mysqli_query($conn , "DELETE FROM teknologi WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function ubah($data) {

		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data['nama']);
		$pendiri = htmlspecialchars($data['pendiri']);
		$lahir = htmlspecialchars($data['lahir']);
		$penghasilan = htmlspecialchars($data['penghasilan']);
		$gambar = htmlspecialchars($data['gambar']);

		$query = "UPDATE teknologi SET
					nama = '$nama' ,
					pendiri = '$pendiri' ,
					lahir = '$lahir' ,
					penghasilan = '$penghasilan' ,
					gambar = '$gambar'
					WHERE id = $id";

		mysqli_query($conn , $query);

		return mysqli_affected_rows($conn);	
	} 

	// function login($data){
		
	// }

	function registrasi($data){

		global $conn;

		$username = strtolower(trim($data['username']));
		$password1 = mysqli_real_escape_string($conn , $data['password1']);
		$password2 = mysqli_real_escape_string($conn , $data['password2']);

		if ($password1 != $password2) {
			echo "<script>
			alert('Password tidak sesuai!');
			document.location.href='../admin/login.php';
			</script>";
			return false;
		}

		$password_baru = password_hash($password1,PASSWORD_DEFAULT);

		$query = "INSERT INTO user VALUES ('','$username','$password_baru')";
		mysqli_query($conn , $query);

		return mysqli_affected_rows($conn);

	}

	// end of function

 ?>