<?php 


namespace App\Controller;
use App\Support\Database;

/**
 * Teacher class setup
 */
class Teacher extends Database
{
		
		/**
		 * Add new Teacher
		 */
		public function addNewTeacher($name ,$email, $cell, $photo)
		{

			// fileupload
			$photo_name = $this -> fileUpload($photo, 'media/img/Teacher/' );

			$data = $this -> insert('teachers', [

				'name'	=>	$name,
				'email'	=>	$email,
				'cell'	=>	$cell,
				'photo'	=>	$photo_name,


			]);

			if ($data) {
				return "<p class=\"alert alert-success\">Teacher added successful !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}

		/**
		 * Show all data
		 */
		public function allTeacher()
		{
			$data = $this -> all('teachers', 'DESC');

			if ($data) {
				return $data;
			}
		}

		/**
		 * Delete single data from url
		 */
		public function deleteTeacher($id)
		{
			$data = $this -> delete('teachers', $id);

			if ($data) {
				return $data;
			}
		}

		/**
		 *  Show single data from url id
		 */
		public function singleTeacher($id)
		{
			$data = $this -> find('teachers', $id);

			return $data -> fetch_assoc();
		}

		/**
		 * Update teacher data by id
		 */
		public function teacherDataUpdate($name, $email, $cell,  $id, $new_photo, $old_photo)
		{

			if (empty($new_photo)) {
				$photo_name = $old_photo;
			}else {

				// fileupload
				$photo_name = $this -> fileUpload($new_photo, 'media/img/Teacher/' );
			}

			$data = $this -> update('teachers', [

				'name'	=>	$name,
				'email'	=>	$email,
				'cell'	=>	$cell,
				'id'	=>	$id,
				'photo'	=>	$photo_name,



			]);

			if ($data) {
				return "<p class=\"alert alert-success\">Update Data successful !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}
		}

}












