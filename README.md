# Script BuildAR :space_invader:
Created: late 2019
<br>
Version: localhost
<br><br>
Script BuildAR is a platform that optimises the development workflow of Spark AR Studio. It allows the users to create AR experiences for Facebook or Instagram without the necessity of having to understand code.
<br>
[Link to detailed project page](https://www.tiesfa.com/script-buildar.html)

## How to run Script BuildAR
1. Start your Local Development Environment (ex. MAMP, WAMP, XAMPP, etc.)
2. Setup the database. Script BuildAR comes with a default database of actions and triggers. You can find these in the backups folder.

## How to use Script BuildAR
[Link to demo video](https://vimeo.com/435815068)

## User Stories
* The user can generate a script for Spark AR Studio.
* The user is provided with documentation about Script BuildAR within the tool
* The user can manage the data
  * Add an action or trigger
  * Delete an action or trigger

## Features
* Generating a script
  * With the help of the form the right data gets loaded from the database. The user can then choose to copy the code or download it as a .js file
  * Visual feedback: notification when copying or downloading the generated script 
* Managing data
  * Adding Data
    * Data gets added to the database
    * Visual feedback: notification when data has been succesfully added
  * Deleting Data
    * Data gets removed from the database
    * Visual feedback: modal pops up asking if you are sure you want to delete the selected data

## Future Features
* __Trigger and Action overview:__ Right now there is no overview from all the data and no way to edit the data. A data
overview/edit section could be added.
* __Code Syntax:__ Adding a code syntax to the code fields will improve the readability. The UX test results
show that the code is readable as it is right now, but it is recommended to add this
change in the future to improve the readability even more.
* __Categorised dropdown menu:__ To differentiate personal added data from the initial data — in the dropdown menus — a
separation line could be added in the dropdown menu.
* __Upload Preset:__ Right now it is possible to download from- and upload backups to the database. But a
preset uploader could come in handy. In the preset section the user can upload
presets from others. It’s important to prevent doubles from getting imported.
* __Admin Section:__ By adding an admin section the database could be regulated. An admin can register
what data gets added or deleted, this improves the database content reliability.

## What Script BuildAR looks like

