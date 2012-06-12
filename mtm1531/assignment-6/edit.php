<?php
  require_once 'includes/db.php';
  $errors = array();
$id = filter_input(INPUT_GET, 'id',  FILTER_SANITIZE_NUMBER_INT);  
$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date= filter_input(INPUT_POST,'release_date',FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);
$actor = filter_input(INPUT_POST, 'actor', FILTER_SANITIZE_STRING);
$actress = filter_input(INPUT_POST, 'actress', FILTER_SANITIZE_STRING);


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if (strlen($movie_title) <1 || strlen($movie_title) > 256) {
	$errors[ 'movie_title'] = true;
  }
  
 
  if (strlen($release_date) <1 || strlen($release_date) > 256) {
	$errors[ 'release_date'] = true;
  }
  
  
  if (strlen($director) <1 || strlen($director) > 256) {
	$errors[ 'director'] = true;
  }
  
  
  if (strlen($actor) <1 || strlen($actor) > 256) {
	$errors[ 'actor'] = true;
  }
  
  if (strlen($actress) <1 || strlen($actress) > 256) {
	$errors[ 'actress'] = true;
  }
  
  if (empty($errors)) {
	  require_once 'includes/db.php';

	  $sql = $db->prepare('
	    UPDATE movies
		SET movie_title = :movie_title
		    ,release_date = :release_date
			,director = :director
			,actor = :actor
			,actress = :actress
			WHERE id = :id
		');
	  $sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
	  $sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
	  $sql->bindValue(':director', $director, PDO::PARAM_STR);
	  $sql->bindValue(':actor', $actor, PDO::PARAM_STR);
	  $sql->bindValue(':actress', $actress, PDO::PARAM_STR);
	  $sql->execute();
	  
	  header('Location: index.php');
	  exit;
  }
} else {
	
   $sql = $db->prepare('
  SELECT  movie_title, release_date, director, actor, actress
    FROM movies
   WHERE id = :id
   
   ');
   $sql->bindValue(':id' , $id, PDO::PARAM_INT);
   $sql->execute();
   $results = $sql->fetch();
   
   $movie_title = $results['movie_title'];
   $release_date = $results['release_date'];
   $director = $results['director'];
   $actor = $results['actor'];
   $actress = $results['actress'];
   
}



?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Edit Movie</title>
</head>
<body>

   <form method="post" action="edit.php?id=<?php echo $id; ?>">
      
      <div>
      
        <label for="movie_title">
        Movie Title
        <?php if (isset($errors['movie_title'])) : ?>
        <strong class="error">is required</strong>
        <?php endif; ?>
        </label>
        <input id="movie_title" name="movie_title" required value="<?php echo $movie_title; ?>">
      
       </div>
       
      <label for="release_date">release date</label>
      <input id="release_date" name="release_date" required value="<?php echo $release_date; ?>">
       
       <label for="director">director</label>
      <input id="director" name="director" required value="<?php echo $director; ?>">
       
       <label for="actor">actor</label>
      <input id="actor" name="actor" required value="<?php echo $actor; ?>">
       
       <label for="actress">actress</label>
      <input id="actress" name="actress" required value="<?php echo $actress; ?>">
       
       
       
       
        <button type="submit">Save</button>
   
   </form>


</body>
</html>