<?php
include "connect_db.php";

class ToDoTask
{
  /* Creates a task based on task name / task notes input from user.
  via form control, _POST is set and the (task/notes) are inserted
  into the database.*/
  function createTask() {
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
          die('QUERY HAS FAILED DAWG! CHECK YO:' . mysqli_error($connection));
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
      // set the ID of the task to be deleted to the submited ID number
      $id = $_POST['id'];
      // assign the delete SQL statement to delete from a specific ID
      $query = "DELETE FROM todo WHERE id = $id ";
      // get the query result which should be the deleted row
      $result = mysqli_query($connection, $query);
      // ensure that we had a result and that the query didn't fail
      if(!$result)
        {
          die("QUERY FAILED DAWG! CHECK YO:" . mysqli_error($connection));
        }
      else
        {
          // visually advise user of the deleted task
          echo "<h4 class='text-center'>Task has been deleted.</h4>";
        }
      }
  }
}

class TodoList
{
    //variable to hold the ToDoTask class
    var $currentTask;

    // assigning the relationship between the classes at construction
    function ToDoList()
    {
      $this->currentTask = new ToDoTask();
    }

    /* Returns all the rows from the todo table. */
    function getQuery() {
      global $connection;

      /* Stupid warning if I don't put this line below, why? I don't know. */
      $currentTask = new StdClass;
      // get all rows from todo
      $query = "SELECT * FROM todo";
      // save the query of all rows in result
      $allRowsOfToDoResult = mysqli_query($connection, $query);
      // ensure we have a result
      if (!$allRowsOfToDoResult)
      {
        die('QUERY FAILED DAWG! CHECK YO:'. mysqli_error($connection));
      }
      return $allRowsOfToDoResult;
    }

    /* Displays all the Id's in the current task database based on ID,
     in the shape of a drop down selection menu. */
    function displayIDSelector($allRowsOfToDo) {
      while($row = mysqli_fetch_assoc($allRowsOfToDo)) {
         $id = $row['id'];
      echo "<option value=$id>$id</option>";
    }
  }

    /* Displays all the current tasks in the task
     database in the form of a table.*/
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
