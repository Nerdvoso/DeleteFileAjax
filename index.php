<!DOCTYPE html>
<html lang="en">
<head>
  <title>Example Delete File From PHP Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</head>
<body>

<div class="container">
  <h2>Lista File</h2>         
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>File</th>
        <th>Elimina</th>
       
      </tr>
    </thead>
    <tbody>
    <?php foreach (scandir("listafile") as $key => $value):?>
      <? if(is_file("listafile/".$value)):?>
      <tr id="<?php echo $key?>"> 
        <td><?php echo $value;?></td>
        <td><button type="button" data-file="<?php echo $value;?>" class="delete-btn btn btn-danger">Elimina</button></td>
      </tr>

      <?php endif;?>
    <?php endforeach;?>
    </tbody>
  </table>
</div>

</body>
</html>