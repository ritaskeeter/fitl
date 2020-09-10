<?php

//Controller to display pages(views)

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; //Asks to use/get the props of the controller.php file in the Controllers folder

class PageController extends Controller
{

	public function aboutpage(){
		return view('pages/about');
	}

	//Exercise function
	public function contactpage(){
		return view('pages/contact');
	}
}

?>