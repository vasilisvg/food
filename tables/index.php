<?php
function ftoc($a) {
	$a = explode(' ', $a);
	$l = count($a);
	$i = 0;
	while ($i < $l) {
		if ( $a[$i][0] == "(" ) {
			$c = explode("(",$a[$i]);
			$a[$i] = $c[1];
			$b = "(";
		}
		if (is_numeric($a[$i])) {
			$a[$i] = roundDown(($a[$i] - 32) / 1.8);
		}
		$html .= $b . $a[$i] . " ";
		$b = '';
		$i++;
	}
	return $html;
}
function roundDown($number){
    return round($number * 2) / 2;
}
$title = 'Cooking Tables';
include '../head.php';
?>
header h1 {
	font-size: 19.2vw;
}
tr:nth-of-type
	</style>
</head>
<body>
	<article class="recipe">
		<header>
			<h1><?php echo $title; ?></h1>
		</header>

		<div>
			<table>
				<thead>
					<tr>
						<th>Ingredient</th>
						<th>Temperature</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th colspan="2">Beef/Lamb</th>
					</tr>
					<tr>
						<th>Rare</th>
						<td><?php echo ftoc("115 to 120 degrees (120 to 125 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Medium-Rare</th>
						<td><?php echo ftoc("120 to 125 degrees (125 to 130 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Medium</th>
						<td><?php echo ftoc("130 to 135 degrees (135 to 140 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Medium-Well</th>
						<td><?php echo ftoc("140 to 145 degrees (145 to 150 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Well-Done</th>
						<td><?php echo ftoc("150 to 155 degrees (155 to 160 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Pork</th>
					</tr>
					<tr>
						<th>Medium</th>
						<td><?php echo ftoc("140 to 145 degrees (145 to 150 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th>Well-Done</th>
						<td><?php echo ftoc("150 to 155 degrees (155 to 160 degrees after resting)"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Chicken</th>
					</tr>
					<tr>
						<th>White meat</th>
						<td><?php echo ftoc("160 degrees"); ?></td>
					</tr>
					<tr>
						<th>Dark meat</th>
						<td><?php echo ftoc("175 degrees"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Fish</th>
					</tr>
					<tr>
						<th>Rare</th>
						<td><?php echo ftoc("110 degrees (for tuna only)"); ?></td>
					</tr>
					<tr>
						<th>Medium Rare</th>
						<td><?php echo ftoc("125 degrees (for tuna or salmon)"); ?></td>
					</tr>
					<tr>
						<th>Medium</th>
						<td><?php echo ftoc("140 degrees (for white fleshed fish)"); ?></td>
					</tr>
					<tr>
						<th colspan="2">Other stuff</th>
					</tr>
					<tr>
						<th>Oil, for frying</th>
						<td><?php echo ftoc("325 to 375 degrees"); ?></td>
					</tr>
					<tr>
						<th>Sugar, for caramel</th>
						<td><?php echo ftoc("350 degrees"); ?></td>
					</tr>
					<tr>
						<th>Custard, for ice-cream</th>
						<td><?php echo ftoc("180 degrees"); ?></td>
					</tr>
				</tbody>
			</table>
			<table>
				<tr>
					<th>F</th>
					<th>C</th>
					<th>Gas</th>
				</tr>
				<tr>
					<td>225</td>
					<td><?php echo ftoc("225"); ?></td>
					<td>1/4</td>
				</tr>
				<tr>
					<td>250</td>
					<td><?php echo ftoc("250"); ?></td>
					<td>1/2</td>
				</tr>
				<tr>
					<td>275</td>
					<td><?php echo ftoc("275"); ?></td>
					<td>1</td>
				</tr>
				<tr>
					<td>300</td>
					<td><?php echo ftoc("300"); ?></td>
					<td>2</td>
				</tr>
				<tr>
					<td>325</td>
					<td><?php echo ftoc("325"); ?></td>
					<td>3</td>
				</tr>
				<tr>
					<td>350</td>
					<td><?php echo ftoc("350"); ?></td>
					<td>4</td>
				</tr>
				<tr>
					<td>375</td>
					<td><?php echo ftoc("375"); ?></td>
					<td>5</td>
				</tr>
				<tr>
					<td>400</td>
					<td><?php echo ftoc("400"); ?></td>
					<td>6</td>
				</tr>
				<tr>
					<td>425</td>
					<td><?php echo ftoc("425"); ?></td>
					<td>7</td>
				</tr>
				<tr>
					<td>450</td>
					<td><?php echo ftoc("450"); ?></td>
					<td>8</td>
				</tr>
				<tr>
					<td>475</td>
					<td><?php echo ftoc("475"); ?></td>
					<td>9</td>
				</tr>
			</table>
		</div>
	</article>
<?php include '../footer.php'; ?>
