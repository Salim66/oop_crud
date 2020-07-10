<?php 


namespace App\Controller;

// Class use
use App\Support\Database;

/**
 * Staff class setup
 */
class Staff extends Database
{
	
	/**
	 * Add new Staff
	 */
	public function addNewStaff($name ,$email, $cell, $photo)
	{

		// file upload
		$photo_name = $this -> fileUpload($photo, 'media/img/Staff/');
		
		// insert new student
		$data = $this -> insert('staffs', [

			'name'	=>	$name,
			'email'	=>	$email,
			'cell'	=>	$cell,
			'photo'	=>	$photo_name,

		]);

		if ($data) {
			return "<p class=\"alert alert-success\">Data added successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}

	}

	/**
	 * All Staff data get
	 */
	public function allStaff()
	{
		
		$data = $this -> all('staffs', 'DESC');

		if ($data) {
			return $data;
		}

	}

	/**
	 * Delete data from url id
	 */
	public function deleteStaff($id)
	{
		
		// delete staff
		$data = $this -> delete('staffs', $id);

		if ($data) {
			return "<p class=\"alert alert-success\">Student deleted successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}

	}

	/**
	 * Show single data by id
	 */
	public function singleStaff($id)
	{
		
		$data = $this -> find('staffs', $id);

		return $data -> fetch_assoc();

	}

	/**
	 * Update single data by id
	 */
	public function staffDataUpdate($name, $email, $cell,  $id, $new_photo, $old_photo)
	{
		
		// upload file
		if (empty($new_photo)) {
			$photo_name = $old_photo;
		}else {
			$photo_name = $this -> fileUpload($new_photo, 'media/img/Staff/');
		}

		// update data
		$data = $this -> update('staffs', [

			'name'	=>	$name,
			'email'	=>	$email,
			'cell'	=>	$cell,
			'id'	=>	$id,
			'photo'	=>	$photo_name,


		]);

		if ($data) {
			return "<p class=\"alert alert-success\">Update data successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}
	}
	
}












