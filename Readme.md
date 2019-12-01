## PAM: Personal Activity Manager

This app will support adding tasks (via web interface, mobile app or command line). These tasks could be linked to a project.

There is a page specifically for notes, which could be linked to a task, and therefore with the project the task is assigned to.

This app will provide the user to assign tasks working with multiple projects at once.
The app will feature notifications for the mobile and web app

The app features a calendar which helps the user see an overview of the tasks for the current week, month or year.

Features:
* The app will be accessible via the command line both in Windows and linux. Details about the app behind the cli tool will be added to its own app repository. 

Data Info:
The database name is pam. The table where the tasks are stored has the following model:
Rows:
* id (AUTOINCREMENT, PRIMARY KEY)
* user_id
* title
* description
* completed
* date_created (DEFAULT CURRENT)
* notification
* notification_id
* project_id
* deadline
* date_completed