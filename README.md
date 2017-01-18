# TODO App

#### Table of Contents

1. [Description](#description)
2. [Setup - The basics of getting started with TODO App](#setup)
    * [Setup requirements](#setup-requirements)
    * [Deploying the TODO Application](#deploying-the-TODO-Application)
3. [Requirements](#requirements)
    * [Functional](#functional)
    * [Non-Functional](#non-functional)
4. [Use Cases](#use-cases)
5. [System Architecture Diagram](#system-architecture-diagram)
6. [Data Flow Diagrams](#data-flow-diagrams)
    * [View Task Diagram](#view-task-diagram)
    * [Add Task Diagram](#add-task-diagram)
    * [Delete Task Diagram](#delete-task-diagram)
6. [Sequence Diagram](#sequence-diagram)
7. [Database Design](#database-design)
8. [Class Diagram](#class-diagram)
9. [Test Cases](#test-cases)
10. [Work Breakdown](#work-breakdown)

## Description

This is a small application that can be used as a simple to do list. You can add tasks, view tasks and delete tasks. The prompt for this app is an assignment in order to orient myself with the WAMP development stack.

## Setup

### Setup Requirements

WAMP installed and running.

### Deploying the TODO Application
1. Launch WAMP / Make sure WAMP is running
1. Download the zip file and unzip the files into the wamp64/www directory.
   You should to create a folder called TODO in the wamp64/www folder in order to keep the files more organized and unzip there. 
1. Log into mysql through the command prompt and create a database by typing CREATE DATABASE todoapp; 
1. Type USE todoapp; in order to use this new created database.
1. Create a table by typing CREATE TABLE todo (id INTEGER AUTO_INCREMENT, task VARCHAR(20), notes TEXT(250), PRIMARY KEY (id), UNIQUE(id));
1. Type exit and press enter to exit the database.
1. Open the browser that works with WAMP and go to: localhost/TODO/main.php.
1. You should see the todo application on screen. 


## Requirements
### Functional
1. User should be able to add tasks.
1. User should be able to view tasks.
1. User should be able to delete tasks.

### Non-Functional
1. Usability - Needs to be very simple to use.
1. Reliablity - Needs to be available all the time to be effective.
1. Responsiveness - In order to be simple to use it must be very responsive when adding or removing tasks.

## Use Cases

| TITLE         | Add Tasks           |
| -------------:|:--------------|
| ID:       | 01 |
| Description     | User opens the website in any browser and enters a task name and task notes in the entry fields. Then the user presses create in order to create the new task.      |
| Primary Actor | User      |
| Preconditions | User is on the app website and the database is not down      |
| Postconditions | A task has been added to the list and the database has been updated     |
| Success Scenario | <ol><li>User clicks inside of Task field and fills in the task name. </li><li>User clicks inside Notes field and fills in the description of the task to be added. </li><li>User presses the CREATE button. </li><li>System adds an id to the new task and saves the information in the database. </li><li>System displays the new task at the bottom of the task list to display the updated tasks. </li></ol> |
| Extensions |<ol><li>Task list is full.</li><li>System displays error message saying that no space is available, clear out some tasks. </li></ol>  |
| Freequency of Use: | Daily      |
| Status | Prototype      |
| Owner | Mirza Besic     |
| Priority | High      |


| TITLE         | View Tasks          |
| -------------:|:--------------|
| ID:       | 02 |
| Description     | User opens the website in any browser and views the todo tasks.   |
| Primary Actor | User      |
| Preconditions | User is on the app website and the database is not down      |
| Postconditions | User is able to view the current tasks    |
| Success Scenario | <ol><li>User opens website in any browser.</li><li>System displays the current tasks in the database.</li></ol> |
| Extensions |<ol><li>Task list is empty.</li><li>System displays a blank task list. </li></ol>  |
| Freequency of Use: | Daily      |
| Status | Prototype      |
| Owner | Mirza Besic     |
| Priority | High      |


| TITLE         | Delete Tasks           |
| -------------:|:--------------|
| ID:       | 03 |
| Description     | User opens the website in any browser and views the todo tasks. In order to delete a task the user selects the task and presses delete.      |
| Primary Actor | User      |
| Preconditions | User is on the app website and the database is not down      |
| Postconditions | A task has been removed from the list and the database has been updated     |
| Success Scenario | <ol><li>User clicks inside of drop down selector and picks task ID to be deleted. </li><li> User presses the delete button. </li><li>System deletes the corresponding task from the database. </li><li>System displays the new task list.</li></ol> |
| Extensions |<ol><li>Task list is empty.</li><li>User can't select ID from drop down select.</li><li>If delete press, system disregards request.</li></ol>  |
| Freequency of Use: | Daily      |
| Status | Prototype      |
| Owner | Mirza Besic     |
| Priority | High      |

## System Architecture Diagram

![alt text](images/system_architecture_diagram.JPG)

## Data Flow Diagrams
### View Task Diagram
![alt text](images/DFD_view_task.JPG)

### Add Task Diagram
![alt text](images/DFD_add_task.JPG)

### Delete Task Diagram
![alt text](images/DFD_delete_task.JPG)

## Sequence Diagram
![alt text](images/sequence_diagram.JPG)

## Database Design
![alt text](images/database_design.JPG)
![alt text](images/database_design_1.JPG)
![alt text](images/database_table_example.JPG)

## Class Diagram
![alt text](images/class_diagram.JPG)

## Test Cases
### Add Task Test
#### Description
Testing the adding of a task.
#### Sequence of steps
1. Open any browser.
1. Go to http://localhost/CSC4996/TODO/main.php
1. Under Create Task click in the Task field and enter a task name.
1. Underneath enter the task description in the Notes field.
1. Press the Create button.

#### Expected result
1. New task appears on the bottom of the task list

#### Actual result

#### Pass/Fail

### View Task Test
#### Description
Testing the viewing of a task.
#### Sequence of steps
1. Open any browser.
1. Go to http://localhost/CSC4996/TODO/main.php
#### Expected result
1. The task list appears on the page.

#### Actual result

#### Pass/Fail

### Delete Task Test
#### Description
Testing the deletion of a task.
#### Sequence of steps
1. Open any browser.
1. Go to http://localhost/CSC4996/TODO/main.php
1. From the drop down selector, pick the ID of the task to be deleted.
1. Press the Delete button.

#### Expected result
1. Task list is immediately updated with the deleted task removed from view.

#### Actual result

#### Pass/Fail

## Work Breakdown
### Install Development Environment
* Estimated Hours: 2
* Actual time spent: 5
* Notes: Nothing remarkable.
* Issues: Port 80 problem, various Windows 10 services were blocking apache.

### Learn PHP basics
* Estimated Hours: 12
* Actual time spent: 10
* Notes: PHP is fun.
* Issues: I am far too used to Visual Studio holding my hand for syntax, refactoring, creation of classes etc.

### Write TODO Application
* Estimated Hours: 5
* Actual time spent: 3
* Notes: The time spent going through the PHP course on Udemy really helped me understand how PHP communicates with MySQL which I believe was the biggest hurdle in this application.
* Issues: PHP and MySQL syntax I am not very familiar with, so a LOT of time was spent chasing my tail over tiny little syntax mistakes that made my SQL queries not work for example. Need to put in more time.

### Write Documentation
* Estimated Hours: 10
* Actual time spent: 15-20
* Notes: Large learning curve on some of the items, likely they are still wrong as I'm still reading and learning about it.
* Issues: The simplicity of the app made it difficult to map things out because a lot of diagrams depend on relations between objects where as here it's a straightforward application so there isn't much going on to draw out. 
