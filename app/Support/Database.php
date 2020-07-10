<?php 


namespace App\Support;

// Class use
use mysqli;

/**
 * Database class setup
 */
abstract class Database
{
	
	/**
	 * Server related property
	 */
	private $host = 'localhost';
	private $user = 'root';
	private $pass = '';
	private $db = 'oop_crud';
	private $connection;

	/**
	 * Database connection setup
	 */
	private function connection()
	{
		
		return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);

	}

	/**
	 * Recovery data
	 */



	/**
	 *  File upload managements
	 */
	protected function fileUpload($file, $loacation='', array $file_type=['jpg','jpeg','png','gif'])
	{
		// file info
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];

		// file extension
		$file_array = explode(".", $file_name);
		$file_extension = strtolower(end($file_array));

		// Unique file name
		$unique_file_name = md5(time().rand()).".".$file_extension;

		// file upload method
		move_uploaded_file($file_tmp, $loacation.$unique_file_name);

		return $unique_file_name;

	}

	/**
	 * Data insert to table
	 */
	protected function insert($table_name, array $data)
	{
		
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

		// Make SQL column from database
		$array_key = array_keys($data);
		$array_col = implode(',', $array_key);

		// Make SQL values from database
		$array_val = array_values($data);

		foreach ($array_val as $value) {
			
			$from_value[] = "'".$value."'";

		}

		$array_values = implode(",", $from_value);


		$sql = "INSERT INTO $table_name($array_col) VALUES($array_values)";
		$query = $this -> connection() -> query($sql);

		if ( $query ) {
			return true;
		}
	}

	/**
	 * Data get all students
	 */
	protected function all($table, $order_by)
	{
		$sql = "SELECT * FROM $table ORDER BY id $order_by";
		$data = $this -> connection() -> query($sql);

		if ($data) {
			return $data;
		}
	}

	/**
	 * Delete data
	 */
	protected function delete($table, $id)
	{
		$sql = "DELETE FROM $table WHERE id='$id'";
		$data = $this -> connection() -> query($sql);

		if ($data) {
			return $data;
		}	
	}

	/**
	 * Find data
	 */
	protected function find($table, $id)
	{
		$sql = "SELECT * FROM $table WHERE id='$id'";
		$data = $this -> connection() -> query($sql);

		return $data;
	}

	/**
	 * Data update to table
	 */
	protected function update($table_name, array $data)
	{
		

		// // Make SQL values from database
		$array_val = array_values($data);


		$sql = "UPDATE $table_name SET name='$array_val[0]', email='$array_val[1]', cell='$array_val[2]', photo='$array_val[4]' WHERE id='$array_val[3]' ";
		$query = $this -> connection() -> query($sql);

		if ( $query ) {
			return $query;
		}
	}


}












