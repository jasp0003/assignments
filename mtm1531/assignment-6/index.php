<?php

require_once 'includes/db.php';

$sql = $db->query('
    SELECT id, movie_title, release_date, director, actor, actress
    FROM movies
    ORDER BY movie_title ASC
');

// Display the last error created by our database
var_dump($db->errorInfo());
$results = $sql->fetchAll();


?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Movies</title>
<link href="css/general.css" rel="stylesheet">
</head>
<body>

     <a href="add.php">Add a Movie</a>

    <?php foreach ($results as $movie): ?>
    <h2>
        <a href="single.php?id=<?php echo $movie['id']; ?>">
		<?php echo $movie['movie_title']; ?>
        </a>
         </h2>
         
    
    <dl>
      <dt>Release_date</dt>
      <dd><?php echo $movie['release_date']; ?></dd>
      <dt>Director</dt>
      <dd><?php echo $movie['director']; ?></dd>
      <dt>Actor</dt>
      <dd><?php echo $movie['actor']; ?></dd>
      <dt>Actress</dt>
      <dd><?php echo $movie['actress']; ?></dd>
      </dl>
      <?php endforeach; ?>

</body>
</html>
