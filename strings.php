<?php

// en php varialble type string
$myVar = 'Mit navn er Julie'; 
// en variable type nummer (numerings variabel)
$myVar2 = 3;
// i PHP er \ backslash er den såkaldte escape-character
$book = 'The hitchhikers Guide to the Galaxy';
$author = 'Douglas Adams';
$book1 = "The hitchhiker's Guide to the Galaxy";

// som udgangspunkt brug kun "single quotes" (') i string formatering pg HTML konflikter
echo '<h1 class="red">My Headline</h1>';

?>	
<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Strings and variables</title>
</head>

<body>
<?php
	// at vise indhold af en varialbel
	echo $myVar; 
	echo '<br>';
	// at bruge et punktum med luft " . " er en Concatenation (konkatenerings operatør)
	// Konkatenering kan kombinere variabler og strings
	// en "conditional statement" - en betinget statement. == dobbelt lighedstegn = betyder at sammenligne - Equality. === 3 dobbelt betyder strict Equality (tjekker om det er det også den samme data type (datatype sikkerhed) - professionel) Tjekker for overensstemmelse i indhold og datatype.
	
	if($author === 'Douglas Adams'){
		echo '<h2>' . $book1 . ' by ' . $author . '</h2>';
	} else if($author === 'Lars Løkke'){
		echo '<h2>' . $author . ' er dum.' . '</h2>';
		} else '<h2>' . 'author er ikke Douglas Adams, men ' . $author . '</h2>';} 
		/* som h2:
		Hvis author er Lars Løkke: Lars Løkke er dum
		Hvis det er en tredje author:
		Author er hverken  Douglas Adams eller Lars Løkke, men [indhold af variablen $author]
		/*
		// som h2: forfatteren er ikke Douglas Adams men Lars Løkke men [indhold af variablen §author]
		
		

	
	
?>
</body>
</html>
