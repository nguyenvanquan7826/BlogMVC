<?php 
	
class PostController {

	public function getPost() {
		require_once('models/PostModel.php');
		$postModel = new PostModel();
		$posts = $postModel->getPost();

		require_once('views/PostView.php');
		$postView = new PostView();
		$postView->showAllPost($posts);

	}

	public function addPost() {
		require_once('views/PostView.php');
		$postView = new PostView();
		$postView->formAddPost();
	}

	public function doAdd() {
		$title 			= $_POST['title'];
		$content 		= $_POST['content'];
		$urlThumbnail 	= $_POST['url_thumbnail'];
		$tag 			= $_POST['tag'];

		// check data

		// end check data

		$post = array(
			'title'				=> $title,
			'content'			=> $content,
			'url_thumbnail'		=> $urlThumbnail,
			'tag'				=> $tag,
		);

		require_once('models/PostModel.php');
		$postModel = new PostModel();
		$status = $postModel->addPost($post);

		require_once('views/PostView.php');
		$postView = new PostView();
		$postView->notifyAddPost($status);

		// echo $title . '<br>';
		// echo $content . '<br>';
		// echo $urlThumbnail . '<br>';
		// echo $tag . '<br>';
	}

}
?>