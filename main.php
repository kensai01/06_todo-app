<?php
include "class_db.php";
include "class_todo.php";

  $task = new TodoList();
  $task->currentTask->CreateTask();
  $task->currentTask->DeleteTask();
  $result = $task->getQuery();
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
          $task->displayCurrentTasks($result);
          ?>
          </table>
        <form class="" action="main.php" method="post">
          <h2 class="text-center">Delete Task</h2>
          <select name="id" id="">
             <?php
             $result2 = $task->getQuery();
             $task->displayIDSelector($result2);
             ?>
          </select>
          <br>
          <br>
         <input class="btn btn-primary" type="submit" name="delete" value="DELETE">
         </div>
        </form>
    </div>
  </div>
</body>
</html>
