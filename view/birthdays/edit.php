<form action="/school/Kalender/home/postEdit/<?php echo $result[0]['id']; ?>" method="POST">
<h1>Vul gegevens in</h1>
<h2>Naam <input value="<?php echo $result[0]['person'] ?>" type="text" name="person" ></h2>
<h2>Geboorte Dag <input value="<?php echo $result[0]['day'] ?>" type="number" name="day" ></h2>
<h2>Geboorte Maand <input value="<?php echo $result[0]['month'] ?>" type="number" name="month" ></h2>
<h2>Geboorte Jaar <input value="<?php echo $result[0]['year'] ?>" type="number" name="year" ></h2>
<button type="submit">submit</button>
</form>
