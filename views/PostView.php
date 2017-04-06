<?php 

class PostView {

	public function showAllPost($posts) {
		require_once('templates/posts.php');
	}

	public function formAddPost() {
		require_once('templates/formaddpost.php');
	}

	public function notifyAddPost($status){
		if($status) {
			echo 'Add success, <a href="http://localhost/blogmvc/?action=list">click here back to home</a>';
		} else{
			echo 'Add fail';
		}
	}

}

 ?>