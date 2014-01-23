<?php

class TestController extends BaseController {

	protected $layout = 'layouts.default';

	public function getIndex()
	{
		$title = 'titulo desde el controlador';
		return $this->layout->content = View::make('test.index',compact('title'));
	}
	public function getHola()
	{
		$title = 'titulo desde el controlador y el método Hola';
		return $this->layout->content = View::make('test.hola',compact('title'));
	}

}