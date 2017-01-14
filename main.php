<?php
include "db.php";
include "class_todo.php";

  $task = new Todo();
  $task->CreateTask();
  $task->DeleteTask();

  global $connection;
  $query = "SELECT * FROM todo";

  $result = mysqli_query($connection, $query);

  if (!$result)
  {
    die('Query failed.');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Simple TO DO Application</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <h1 class="text-center">TO DO</h1>
      <h2 class="text-center">Create Task</h2>
        <form class="" action="main.php" method="post">
          <label for="task">Task</label>
            <div class="form-group">
                <input type="text" class="form-control" name="task">
            </div>
            <label for="notes">Notes</label>
            <div class="form-group">
                <textarea type="password" class="form-control" name="notes"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" name="create" value="CREATE">
        </form>
        <br>
        <h2 class="text-center">Current Tasks</h2>


        <table class="table table-hover table-striped table-responsive">
        <?php
          while ($row = mysqli_fetch_assoc($result))
          {
            foreach ($row as $field)
            {
              echo "<td>" . htmlspecialchars($field) . '</td>';
            }
            echo"</tr>";
          }
            ?>
          </table>
        <form class="" action="main.php" method="post">
          <select name="id" id="">
             <?php
             global $connection;
             $query = "SELECT * FROM todo";
             $result = mysqli_query($connection, $query);
             if(!$result) {
                 die('Query FAILED' . mysqli_error());
             }

             while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];

             echo "<option value=$id>$id</option>";

             }
               ?>
          </select>

          </div>

         <input class="btn btn-primary" type="submit" name="delete" value="DELETE">
        </form>
    </div>
  </div>
</body>
</html>
