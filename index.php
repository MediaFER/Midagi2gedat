<?php
require "vendor/autoload.php";

echo "Yo, nig.";
$consoles=
[
	"Nintendo",
	"Playstation 4.5",
	"xBox One v2",
	"PCMasterRace"

];

$bla = collect($consoles)
	->reverse()
	->map(function($console){
		return trim("$console ruulib");
	})
	->each(function($consoles){
		print "$consoles\n";
	})
	->implode("\n\(•_•)\n
				   )  )z\n
				  /  /")\n;

print "\n\n"
print_r("$bla");