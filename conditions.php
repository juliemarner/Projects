<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>If betingelse og switch statement</title>
<style type="text/css">
	.red {color: : red;}
	.green {color: : green;}
	</style>
</head>

<body>
<form action="<?= $_SERVER['PHP_SELF']?>" method="get">
<input type="number" name="sp" min="0" max="150">
<input type="submit">

</form>

if ($studypoints<80){
echo '<p class="red">';
echo 'Kun ' .$studypoints.' study points er ikke nok!';
echo '</p>';

$studypoints = filter_input(INPUT_GET, 'sp', FILTER_VALIDATE_INT);
$studypoints = empty($studypoints) ? 0 : $studypoints;




// med && kan man sætte 2 eller flere betingelser, her inkl den alle tal mel 80-100
} else if ($studypoints>80 && $studypoints>100){
// alternativt kan bruges: else if
<h1> . 'Når study points er under 80 skal der vises en rød tekst med advarsel: Kun [antallet af study points] er ikke nok!'</h1>";
if '<h1 class= "red" >My Headline</h1>';

else if "<h1> . 'Når study points er lig med eller over 80 en grøn tekst: Super, du kan gå op til din eksamen'</h1>";
else "<h1> . 'Når study points er over 100: Du har formodentlig snydt!'</h1>";



<!-- output afhængig af antallet af study points -->
<!-- Når study points er under 80 skal der vises en rød tekst med advarsel: ' Kun [antallet af study points] er ikke nok! -->
<!-- Når study points er lig med eller over 80 en grøn tekst: Super, du kan gå op til din eksamen-->
<!-- Når study points er over 100: Du har formodentlig snydt -->
<!-- NO inline styles please -->

</body>
</html>
