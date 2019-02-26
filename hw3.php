<!DOCTYPE html>
<html>

<head>

<style>

.coin{
	width: 50px;
}

p, h3, h4{
	text-align: center;
}

div{
height: 35px;
line-height: 35px;
width: 200px;
border-radius: 25px;
background-color: powderblue;
padding: 20px;
text-align: center;
margin-left: auto;
margin-right: auto;
display: block;
}	

table {

border: 1px solid black;
border-collapse: collapse;
width: 100%;

}

th, td {
border: 1px solid black;
text-align: left;
padding: 8px;
}

thead {
	background-color: black;
	color: white;
}

tr:nth-child(even){
	background-color: #C0C0C0;
}
</style>
<title>Homework 3</title>


</head>

<body>
<h3>Homework 3</h3>
<h4>Em Ordway</h4>



<h4>Challenge 1</h4>

<?php


$books = array (



array ("Title" => "PHP and MySQL Web Development", "Author" => "Luke Welling", "Page Count" => 144, "Type" => "Paperback", "Price" => 31.63),
array ("Title" => "Web Design with HTML, CSS, Javascript and jQuery", "Author" => "John Duckett", "Page Count" => 135, "Type" => "Paperback", "Price" => 41.23),
array ("Title" => "PHP Cookbook: Solutions & Examples for PHP Progammers", "Author" => "David Sklar", "Page Count" => 14, "Type" => "Paperback", "Price" => 40.88),
array ("Title" => "Javascript and jQuery: Interactive Front-End Web Development", "Author" => "John Duckett", "Page Count" => 251, "Type" => "Paperback", "Price" => 22.09),
array ("Title" => "Modern PHP: New Features and Good Practices", "Author" => "Josh Lockhart", "Page Count" => 7, "Type" => "Paperback", "Price" => 28.49),
array ("Title" => "Programming PHP", "Author" => "Kevin Tatroe", "Page Count" => 26, "Type" => "Paperback", "Price" => 28.96)
);
	
	echo '<table>';
	echo '<thead>';
	echo '<tr><th>Title</th><th>Author</th><th>Page Count</th><th>Cover</th><th>Price</th></tr>';
	echo '</thead>';
	foreach ( $books as $book)
		{
			echo '<tr>';
			foreach ( $book as $key){
				 echo '<td>'.$key.'</td>';
    }
    echo '</tr>';

	
	
		}
		echo '</table><br>';

echo '<div>';
	$totalprice = array_sum(array_column($books, "Price"));
	print 'Your total price is: ' . ' ' . '$'.$totalprice;
	echo '</div>';


?>

<h4>Challenge 2</h4>

<?php


echo "<p>Let the coin flipping begin!</p>";
echo "<br>";


function coinToss ($desired){
	$heads= 0;
	$count= 0;
while ($heads<$desired){
	$flip = mt_rand(0,1);
	$count++;
if ($flip ==1){
	$heads++; //increments heads variable
	echo "<img src = \"heads.jpg\" class=\"coin\" alt=\"heads\">"; //show that head was flipped
 }
 
 else{
$heads=0; //sets heads variable back to 0
echo "<img src = \"tails.jpg\" class=\"coin\" alt=\"tails\"> "; //show tails was flipped
}
}
echo "<p><br><br>Flipped" ." ".$desired. " " ."heads in a row in  " . " " .$count . " flips!<br><br></p>";
}
coinToss (8);

?>

</body>


</html>
