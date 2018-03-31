          
<!doctype html>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
        <?php  
        foreach ($birthdays as $birthday) {
            echo "<h1>" . $birthday['month'] . "</h1>";
            echo "<h2>" . $birthday['day'] . "</h2>";
            echo "<a href='edit/". $birthday['id'] ."'><p>".$birthday['person'];
            echo "<a href='delete/". $birthday['id'] ."'>x";
            echo "</p>";
            echo "</a>";
        }


        ?>  
		<!-- <h1>februari</h1>
		<h2>22</h2>   
        <p>
            <a href="edit.php?id=4">
                Anoushka (1981)</a>
                
            <a href="delete.php?id=4">x</a>
        </p> -->
<p><a href="<?= URL ?>home/create">+ Toevoegen</a></p>

	</body>
</html>
