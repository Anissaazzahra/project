<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});


Route::get('/latihan', function () {
	return view('belajar');
});

Route::get('/satu', function () {
	return view('about.satu');
});

Route::get('/dua', function () {
	return view('about.dua');
});

Route::get('/tiga', function () {
	return view('about.tiga');
});

Route::get('/about/{nama}/{sekolah}/{umur}', function ($a,$b,$c) {
	return 'Nama saya : '.$a.'<br>
		saya sekolah di : '.$b.'<br>
		umur saya : '.$c.'<br>';
});

Route::get('/tes/{nama}', function () {
	$a="jhon";
	return 'Ini adalah halaman '.$a;
});
// mencari semua model
Route::get('testmodel', function(){
	$a = App\Post::all();
	return $a;
});

Route::get('testmodel2', function(){
	$a = App\Post::where('title','like','%cepat nikah%')->get ();
	return $a;
});

Route::get('testmodel3', function(){
	$Post = App\Post::find(1);
	$Post->title = "Ciri Keluarga sakinah";
	$Post->save();
	return $Post;
});

Route::get('testmodel4', function(){
	$Post = App\Post::find(1);
	$Post->delete();
});

Route::get('testmodel5', function(){
	$Post = new App\Post;
	$Post->title = "7 Amalan Pembuka Jodoh";
	$Post->content = "Shalat Malam, Sedekah, Puasa Sunnah, Silaturahmi, Senyum, Doa, Taubat";
	$Post->save();
	return $Post;
});

Route::get('/about', function() {
	return view('about');
});

Route::get('cektampilan', function() {
	return view('layouts.master');

});

// Route::get('/ortu', function() {
// 	$ortu = App\ortu::all();
// 	foreach ($ortu as $key) {
// 		echo $key->nama_ayah;
// 		echo " dengan ";
// 		echo $key->nama_ibu;
// 		echo " mempunyai anak";
// 		foreach ($key->siswa as $data) {
// 			echo "<li>".$data->nama."</li>";
// 			echo "<hr>";
// 		}
// 	}
// });

Route::get('/coba', 'nisaaa@index');
Route::get('/coba2', 'nisaaa@tampilanmodel');
Route::get('/coba3', 'nisaaa@tampilanmodel1');
Route::get('/coba4', 'nisaaa@percobaan');
Route::resource('/ortu','ortuController');
Route::resource('/siswa','siswaController');