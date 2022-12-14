<?php
	// deklarasi array dua dimensi
	$lagu = [
	    [
	        "judul" => "Bad Guy",
	        "penyanyi" => "Billie Marbot"
	    ],
	    [
	        "judul" => "Begadang",
	        "penyanyi" => "Rhoma Irama"
	    ],
	    [
	        "judul" => "Seberkas Sinar",
	        "penyanyi" => "Nike Ardilla"
	    ]
	];

	foreach($lagu as $song){
	    echo $song["judul"]."<br>";
	    echo $song["penyanyi"]."<br>";
	    echo "<hr>";
	}
?>