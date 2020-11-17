<?php 
namespace Cyk/UpToComposer;

class Help{

	public function __construct()
	{
		echo 'hello Composer';
	}


	public function dd($data)
	{
		var_dump($data);die;
	}

}
