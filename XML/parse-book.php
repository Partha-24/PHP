<?php 
$xml = simplexml_load_file("books.xml") or die ("Error : Cannot load file");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
            font-weight: lighter;
		}

		th {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

	</style>
</head>
<body>
    
    <table>
        <tr>
            <th>title</th>
            <th>author</th>
            <th>year</th>
            <th>Price</th>
        </tr>
        <?php foreach($xml as $book) : ?>
            <tr>
                <td><?= $book->title ?></td>
                <td><?= $book->author ?></td>
                <td><?= $book->year ?></td>
                <td><?= $book->price ?></td>
            </tr>
        <?php endforeach?>
    </table>
</body>
</html>