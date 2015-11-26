<?php
	class File {
		private $_file_name;
		private $_file_ext;
		private $_file_size;
		private $_password;
		private $_time_uploaded;
		private $_time_lapse;
		private $_location;

		public function __construct($name, $ext, $size, $pass, $time_u, $time_l, $l) {
			$this -> _file_name = $name;
			$this -> _file_ext = $ext;
			$this -> _file_size = $size;
			$this -> _password = $pass;
			$this -> _time_uploaded = $time_u;
			$this -> _time_lapse = $time_l;
			$this -> _location = $l;
		}

		public function getName() {
			return $this -> _file_name;
		}

		public function setName($name) {
			$this -> file_name = $name;
		}
	}
?>



<?php
// print_r("Made it to file.php <br/>");
// 	class File {
// 		private $file_name = "lol";
// 		private $file_ext;
// 		private $file_size;
// 		private $password;
// 		private $time_uploaded;
// 		private $time_lapse;
// 		private $file_tmp;
// 		private $location;

// 		private $errors = array();
// 		private $allowed_ext = array('jpg','jpeg', 'png', 'gif', 'pdf', 'doc', 'docx' );

// 		function __construct() {
// 			print_r("in file constructor");
// 			if (isset($_POST['file_'])) {
// 				$file_name = $_FILES['file_']['name'];
// 				$file_ext = strtolower(end(explode('.', $file_name)));
// 				$file_size = $_FILES['file_']['size'];
// 				$file_tmp = $_FILES['file_']['tmp_name'];
// 				$allowed_ext = array('jpg','jpeg', 'png', 'gif', 'pdf', 'doc', 'docx' );
// 			} else {
// 				echo 'LOLOL';
// 			}

// 			print_r($this -> file_name . ' LOL');

// 			if (isset($_POST['password'])) {
// 				$password = $_POST['password'];
// 			} else {
// 				$password = '-';
// 			}

// 			$time_uploaded = time();

// 			if (isset($_POST['time'])) {
// 				$selectOption = $_POST['time'];

// 				switch ($selectOption) {
// 					case '5m':
// 						$time_lapse = 300;
// 						break;
// 					case '1h':
// 						$time_lapse = 3600;
// 						break;
// 					case '6h':
// 						$time_lapse = 21600;
// 						break;
// 					case '24hr':
// 						$time_lapse = 86400;
// 						break;
// 					case '1w':
// 						$time_lapse = 604800;
// 						break;
// 					case '2w':
// 						$time_lapse = 1209600;
// 						break;
// 					case '1m':
// 						$time_lapse = 2592000;
// 						break;
// 					default:
// 						//will never be default
// 				}
// 			}

// 			$location = $this -> file_name;

// 			$this -> validate();
// 		}

// 		public function validate(){
// 			print_r("in file validate");
// 			if (in_array($this -> file_ext, $this -> allowed_ext) === false) {
// 			$errors[] = 'Extension not allowed';
// 			}

// 			//the file size shouldn't be over the limit
// 			if ($this -> file_size > 2097152) {
// 				$errors = 'File Size must be max 2mb';
// 			};

// 			//Upload files if there are no errors, otherwise output error(s) message
// 			if (empty($errors)) {
// 				if (move_uploaded_file($file_tmp, 'files/'.$file_name)) {
// 					upload();
// 					echo 'File uploaded';
// 				}
// 			} else {
// 				foreach ((array) $errors as $error) {
// 					echo $error;
// 				}
// 			}
// 		}


// 		public function upload() {
			
// 			$db = new Database('localhost', 'root', '', 'filesharing');

// 			$values = array($this -> file_name, $this -> file_ext, $this -> file_size, $this -> password, $this -> time_uploaded, $his -> time_lapse, $this -> location);

// 			$db -> insert('files', $this -> values);
// 		}
// 	}
// ?>