<?php

class HomeController extends BaseController
{
    function index() {
        $this->posts = $this-> model -> getLatestPosts(5);

    }
	
	function view($id) {

    }
}
