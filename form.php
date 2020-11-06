<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reponse</title>
    <link rel="stylesheet" href="reponse.css">
</head>
<body>
<main>

<h1>Thank you for your answer!</h1>


<section> <?php
if (!empty($_POST)) {
    echo "You wrote: " . htmlspecialchars($_POST['name']) .'<br>' .$_POST['email'] .'<br>' .$_POST['number'] .'<br>' .$_POST['opciones'] ."<br>" .$_POST['user-satisfaction']
     ."<br>" .$_POST['comment'] ."<br>";
}
?>
</section>

<section>
    <?php
if(isset( $_POST['improve'])) 
  {
    $options = $_POST['improve'];
    $total = count($options);
    echo("You want to improve: ");
    for($i=0; $i <$total ; $i++)
    {
     
      echo "<br/> ".$options[$i];     
      
    }
}
var_dump($options);
?>
</section>

</main>
</body>
</html>
<!-- //habria que meter un if empty para que muestre mensaje de error, para securiser la pagina y que salga mensaje dee error -->
