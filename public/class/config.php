<?php
	class database
	{
		private $server ="localhost";
		private $username = "root";
		private $password = "root";
		private $database = "sibangsat";

		function koneksidatabase()
		{
			try {
				// buat koneksi dengan database
				$dbh = new PDO('mysql:host='. $this->server .';dbname='. $this->database, $this->username, $this->password);

				// set error mode
				$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

				return $dbh;
			  }
			  catch (PDOException $e) {
				// tampilkan pesan kesalahan jika koneksi gagal
				print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
				die();
			  }
		}
	}

	$d1 = new database();
	$database = $d1->koneksidatabase();
?>