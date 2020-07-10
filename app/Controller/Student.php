<?php 


namespace App\Controller;

// Class use
use App\Support\Database;

/**
 * Student class setup
 */
class Student extends Database
{
	/**
	 * Add new Student
	 */
	public function addNewStudent($name ,$email, $cell, $photo)
	{
		

		$data = $this -> insert('students', [

			'name'	=> $name,
			'email'	=> $email,
			'cell'	=> $cell,
			'photo'	=> $this -> fileUpload($photo, 'media/img/student/'),

		]);

		if ($data) {
			return "<p class=\"alert alert-success\">Data added successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}

	}

	/**
	 * All data get
	 */
	public function allStudent()
	{
		

		$data = $this -> all('students', 'DESC');

		if ($data) {
			return $data;
		}

	}

	/**
	 *  Delete single student from id
	 */
	public function deleteStudent($id)
	{
		$data = $this -> delete('students', $id);

		if ($data) {
			return "<p class=\"alert alert-success\">Student deleted successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}
	}

	/**
	 * Show single data from id
	 */
	public function singleStudent($id)
	{
		$data = $this -> find('students', $id);

		return $data -> fetch_assoc();
	}


	/**
	 * Update Student Data by id
	 */
	public function studentDataUpdate($name, $email, $cell,  $id, $new_photo, $old_photo)
	{
		
		if ( empty($new_photo) ) {
			// old photo set
			$photo_name = $old_photo;
		}else {
			// new photo set
			$photo = $this -> fileUpload($new_photo, 'media/img/student/');
			$photo_name = $photo;
		}

		$data = $this -> update('students', [

			'name'	=> $name,
			'email'	=> $email,
			'cell'	=> $cell,
			'id'	=> $id,
			'photo'	=> $photo_name,

		]);


		if ( $data ) {
			return "<p class=\"alert alert-success\">Update data successfull !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
		}
	}

}












