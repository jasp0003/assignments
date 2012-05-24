<?php 
$possible_subjects=array(
'Work inquiries'
,'Work'
,'Work inqu'
);
require_once 'includes/form-processor.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Form Validation</title>
<link href="css/general.css" rel="stylesheet">

</head>

<body>
<?php if ($display_thanks) : ?>
<strong>Thanks for registering.</strong>
<?php else : ?>
<form method="post" action="index.php">

<div>
<label for="name">Name<?php if(isset($errors['name'])): ?><strong class="error">is required</strong><?php endif;?></label>
<input id="name" name="name" required value="<?php echo $name; ?>">
</div>

<div>
<label for="email">E-Mail address<?php if(isset($errors['email'])): ?><strong class="error">is required</strong><?php endif;?></label>
<input type="email" id="email" name="email" required value="<?php echo $email;?>">
</div>

<div>
<label for="username">User Name<?php if(isset($errors['username'])): ?><strong class="error">is required</strong><?php endif;?></label>
<input id="username" name="username" required value="<?php echo $username; ?>">
</div>


<div>
<label for="password">password<?php if(isset($errors['password'])): ?><strong class="error">is required</strong><?php endif;?></label>
<input type="password" id="password" name="password" required value="<?php echo $email;?>">
</div>

<fieldset>
    <legend>Preferred language</legend>
    <?php if (isset($errors['language'])) : ?><strong>Select your preferred language</strong><?php endif; ?>
    <input type="radio" id="lang-en" name="language" value="en"<?php if ($language == 'en') { echo ' checked'; } ?>>
    <label for="lang-en">English</label>
    <input type="radio" id="lang-fr" name="language" value="fr"<?php if ($language == 'fr') { echo ' checked'; } ?>>
    <label for="lang-fr">Français</label>
    <input type="radio" id="lang-es" name="language" value="es"<?php if ($language == 'es') { echo ' checked'; } ?>>
    <label for="lang-es">Espaniol</label>
  </fieldset>

<div>
<label for="notes">Notes<?php if(isset($errors['notes'])): ?><strong class="error">Your note must be 5 to 100 characters long.</strong><?php endif;?></label>
<textarea id="notes" name="notes" ><?php echo $notes;?></textarea>
</div>

<div>
    <input type="checkbox" id="acceptterms" name="acceptterms" value="1"<?php if (isset($_POST['acceptterms'])) { echo ' checked'; } ?>>
    <label for="acceptterms">I accept the terms. <?php if (isset($errors['acceptterms'])) : ?><strong>You must agree to the terms.</strong><?php endif; ?></label>
  </div>

<button type="submit">Send</button>
</form>
<?php endif; ?>



</body>
</html>