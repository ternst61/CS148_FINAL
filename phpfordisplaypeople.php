<?php

foreach ($people as $person) {
	print "<div class=\"person\">";
	//Name f m l
	print "<h2 class=\"name\">" . $person[1] . " " . $person[2] . " " . $person[3] . "</h2>";
	//Birthdate - deathdate
	print "<p class=\"basic\">" . $person[4] . "-" . $person[5];
	print ', ' . $person[6] . '</p>';
	print '<a href="" class="show">Show More</a>';
	print '<p class="advanced hidden">' . $person[7] . " " . $person [8] . "</p>";
	print '</div>';
}

?>