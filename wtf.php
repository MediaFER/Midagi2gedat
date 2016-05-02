<?php

require "vendor/autoload.php";

$consoles=
[
	[
		"name"=>"Playstation 1",
		"image"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/PSX-Console-wController.jpg/220px-PSX-Console-wController.jpg",
		"game"=>"http://www.wtfgamersonly.com/wp-content/uploads/2014/12/Crash-Bandicoot-img.1.jpg"
	],
	[
		"name"=>"PCMasterRace",
		"image"=>"http://cdn2.pcadvisor.co.uk/cmsdata/reviews/3609507/Yoyo_Tech_PC_thumb336.jpg",
		"game"=>"https://www.extremetech.com/wp-content/uploads/2016/03/PCMasterRace-640x353.jpg"
	],
	[
		"name"=>"Gameboy",
		"image"=>"https://upload.wikimedia.org/wikipedia/commons/f/f4/Game-Boy-FL.jpg",
		"game"=>"http://images.eurogamer.net/modojo.com/features/1002/gtadvance.jpg"
	]

];
use Illuminate\Database\Capsule\Manager as DB;

$db = new DB;
$db->addConnection([
    'driver'    => 'mysql',
    'database'  => 'consoles',
    'username'  => 'root',
    'password'  => '',
    'host'      => 'localhost',
    'charset'   => 'latin1',
    'collation' => 'latin1_swedish_ci',
    'prefix'    => ''
]);
$db->setAsGlobal();

$db->schema()->dropIfExists('classics');

$db->schema()->create('classics',function($table){
	$table->string('name');
	$table->string("image");
	$table->string("game");
});

$db->table('classics')->insert($consoles);

$classics = $db->table('classics')->get();

//print_r($classics);
	
foreach($classics as $classic){
	print "<img width='69px' src=".$classic->image.">";
	print "<img width='40px' src=".$classic->game.">";
}