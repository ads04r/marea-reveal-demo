<?php

$i = (int) date("Y");
$file = "../data/" . $i . "_270e5b36-4d18-4b6e-a7ee-c49e3d301620.json";
while(!(file_exists($file)))
{
	$i--;
	$file = "../data/" . $i . "_270e5b36-4d18-4b6e-a7ee-c49e3d301620.json";
}
$data = json_decode(file_get_contents($file), true);

?><!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>MarEA reveal.js demo</title>

		<link rel="stylesheet" href="dist/reset.css">
		<link rel="stylesheet" href="dist/reveal.css">
		<link rel="stylesheet" href="dist/theme/black.css">

		<!-- Theme used for syntax highlighted code -->
		<link rel="stylesheet" href="plugin/highlight/monokai.css">
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<section>
					<img src="https://generic.wordpress.soton.ac.uk/marea/wp-content/uploads/sites/341/2019/06/cropped-colour.jpg">
					<p>
					MarEA contributions to the <br>
					<a href="https://database.eamena.org/en/">EAMENA database</a>
					</p>
				</section>
				<section>
					<h2>MarEA Research</h2>
					<table>
						<tr>
							<th>Country</th>
							<th>Sites Documented</th>
						</tr>

<?php

$country_data = $data['country_role'];
usort($country_data, function($a, $b) {
	if($a['sites'] < $b['sites']) { return 1; }
	if($a['sites'] > $b['sites']) { return -1; }
	return 0;
});
foreach($country_data as $id=>$country)
{
	print("\t\t\t\t\t\t<tr>\n");
	print("\t\t\t\t\t\t\t<td>" . $country['label'] . "</td>\n");
	print("\t\t\t\t\t\t\t<td>" . $country['sites'] . "</td>\n");
	print("\t\t\t\t\t\t</tr>\n");
}

?>

					</table>
				</section>
				<section>

					<section>
						<img src="/data/person_map_kieran.jpg" height="280">
						<h1>Kieran Westley</h1>
						<p>Dr Kieran Westley is a Research Associate at the University of Ulster.</p>
					</section>
					<section data-background-iframe="/demo/map.php?person=kieran" data-background-interactive data-preload>
					</section>

				</section>
				<section>

					<section>
						<img src="/data/person_map_crystal.jpg" height="280">
						<h1>Crystal El Safadi</h1>
						<p>Dr Crystal El Safadi is a Senior Research Fellow in Archaeology at the University of Southampton.</p>
					</section>
					<section data-background-iframe="/demo/map.php?person=crystal" data-background-interactive data-preload>
					</section>

				</section>
				<section>

					<section>
						<img src="/data/person_map_julia.jpg" height="280">
						<h1>Julia Nikolaus</h1>
						<p>Dr Julia Nikolaus is a Research Associate at the University of Ulster.</p>
					</section>
					<section data-background-iframe="/demo/map.php?person=julia" data-background-interactive data-preload>
					</section>

				</section>
				<section>

					<section>
						<img src="/data/person_map_harmen.jpg" height="280">
						<h1>Harmen Huigens</h1>
						<p>Dr Harmen Huigens is a Research Associate at the University of Ulster.</p>
					</section>
					<section data-background-iframe="/demo/map.php?person=harmen" data-background-interactive data-preload>
					</section>

				</section>
				<section>

					<section>
						<img src="/data/person_map_georgia.jpg" height="280">
						<h1>Georgia Andreou</h1>
						<p>Dr Georgia Andreou is a Research Fellow in Archaeology at the University of Southampton.</p>
					</section>
					<section data-background-iframe="/demo/map.php?person=georgia" data-background-interactive data-preload>
					</section>

				</section>
				<section>

					<section>
						<img src="/data/person_map_rodrigo.jpg" height="280">
						<h1>Rodrigo Ortiz Vazquez</h1>
						<p>Dr Rodrigo Ortiz Vazquez is a Research Fellow in Archaeology at the University of Southampton.</p>
					</section>
					<section data-background-iframe="/demo/map.php?person=rodrigo" data-background-interactive data-preload>
					</section>

				</section>
			</div>
		</div>

		<script src="dist/reveal.js"></script>
		<script src="plugin/notes/notes.js"></script>
		<script src="plugin/markdown/markdown.js"></script>
		<script src="plugin/highlight/highlight.js"></script>
		<script>
			// More info about initialization & config:
			// - https://revealjs.com/initialization/
			// - https://revealjs.com/config/
			Reveal.initialize({
				hash: true,

				// Learn about plugins: https://revealjs.com/plugins/
				plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
			});
		</script>
	</body>
</html>
