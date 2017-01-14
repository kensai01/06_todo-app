<?php
include "db.php";

class Todo
{
    public $id;
    public $task;
    public $notes;
    public $result;

    function CreateTask() {
      if (isset($_POST['create']))
        {
          global $connection;
          $task = $_POST['task'];
          $notes = $_POST['notes'];

          // prevent sql injection
          $task =  mysqli_real_escape_string($connection, $task);
          $notes =  mysqli_real_escape_string($connection, $notes);

          $query = "INSERT INTO todo(task,notes) VALUES ('$task', '$notes')";

          $result = mysqli_query($connection, $query);

          if (!$result)
          {
            die('QUERY HAS FAILED DAWG!.');
          }
        }
    }

    function deleteTask() {
      if(isset($_POST['delete'])) {
        global $connection;

        //$task = $_POST['task'];
        //$notes = $_POST['notes'];
        $id = $_POST['id'];

        $query = "DELETE FROM todo WHERE id = $id ";

        $result = mysqli_query($connection, $query);
        if(!$result)
          {
            die("QUERY FAILED" . mysqli_error($connection));
          }
        else
          {
            echo "Record Deleted";
          }
        }
    }

    function getQuery() {
      global $connection;
      $query = "SELECT * FROM todo";

      $result = mysqli_query($connection, $query);

      if (!$result)
      {
        die('Query failed.');
      }
      return $result;
    }

    function displayIDSelector($result2) {
      while($row = mysqli_fetch_assoc($result2)) {
         $id = $row['id'];
      echo "<option value=$id>$id</option>";
    }
  }

    function displayCurrentTasks($result){
      while ($row = mysqli_fetch_assoc($result))
      {
        foreach ($row as $field)
        {
          echo "<td>" . htmlspecialchars($field) . '</td>';
        }
        echo"</tr>";
      }
    }
}
?>
