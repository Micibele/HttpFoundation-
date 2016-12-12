<?php
 	namespace AppBundle\Controller;
 	
 	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 	use Symfony\Component\HttpFoundation\Request;
 	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

 	class BlogController extends Controller {

 		/**
 		* @Route("/blog", name="index")
 		*/
 		public function indexAction(){
			return $this->render(
				'blog/index.html.php',
				array()
			);
		}

 		/**
 		* @Route("/blog/home", name="home_page")
 		*/
 		public function homeAction(){
 			$request = Request::createFromGlobals();
 			$nome = $request->request->get('nome');
 			$email = $request->request->get('email');
 			$coment = $request->request->get('coment');

 			return $this->render(
 				'blog/home.html.php',
 				array('nome'=>$nome, 'email'=>$email, 'coment'=>$coment)
 			);
 			
 		}
 	}

?>