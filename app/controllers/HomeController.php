<?php

// use Storage;


class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$path = storage_path().'/views/my_todo.json';
		$content = json_decode(file_get_contents($path), true);

		return View::make('index', array('type' => $content));
	}

	public function addTodo()
	{
		$name = Input::get('title');
		$date = date('Y/m/d');

		$path = storage_path().'/views/my_todo.json';
		$content = json_decode(file_get_contents($path), true);

		$last_item = end($content);
		$last_item_id = $last_item['id'];

		$content[] = array("id" => ++$last_item_id, "title" => $name, "date" => $date);

		$new_content = json_encode($content, true);
		file_put_contents($path, $new_content);
		
		return Redirect::to('/');
	}

	public function deleteTodo($id = null)
	{
		$path = storage_path().'/views/my_todo.json';
		$content = json_decode(file_get_contents($path), true);

		foreach ($content as $key => $value) {
			if ($value['id'] == $id) {
				unset($content[$key]);
			}
		}

		$new_content = json_encode($content, true);
		file_put_contents($path, $new_content);

		return Redirect::to('/');
	}

}
