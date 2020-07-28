//pass request data to views//


Route::get('test', function () {
    $name = request('name');

    return $name;
});



Route::get('test', function () {
    $name = request('name');

    return view('test', [
		'name' => $name
	]);
});