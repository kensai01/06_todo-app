<?php
include "class_db.php";

class ToDoTask
{
  // TODO check the privacy needs of the below variables
  //var $id;
  //var $task;
  //var $notes;
  //var $query;
  /* Creates a task based on task name / task notes input from user.
  via form control, _POST is set and the (task/notes) are inserted
  into the database.*/
  function CreateTask() {
    // ensure form/submit was sent correctly
    if (isset($_POST['create']))
      {
        //set the global connection to the database opened in db.php
        global $connection;
        //assign the submited task and task notes to local variables
        $task = $_POST['task'];
        $notes = $_POST['notes'];

        // prevent sql injection
        $task =  mysqli_real_escape_string($connection, $task);
        $notes =  mysqli_real_escape_string($connection, $notes);

        // assign the SQL statement which inserts task and notes to a variable
        $query = "INSERT INTO todo(task,notes) VALUES ('$task', '$notes')";

        // add query to the database
        $result = mysqli_query($connection, $query);

        // ensure database query(insertion) worked
        if (!$result)
        {
          die('QUERY HAS FAILED DAWG!.');
        }
      }
  }

  /* Deletes a task based on task ID input from user via form control,
   _POST is set and the (ID) corresponding to the task in DB is deleted.*/
  function deleteTask() {
    // ensure form/submit was sent correctly
    if(isset($_POST['delete'])) {
      //set the global connection to the database opened in db.php
      global $connection;

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
}

class TodoList
{
    var $currentTask;

    function ToDoList()
    {
      $this->currentTask = new ToDoTask();
    }

    function getQuery() {
      global $connection;

      $currentTask = new StdClass;
      $currentTask->query = "SELECT * FROM todo";

      $currentTask->result = mysqli_query($connection, $currentTask->query);

      if (!$currentTask->result)
      {
        die('Query failed.'. mysqli_error($connection));
      }
      return $currentTask->result;
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
