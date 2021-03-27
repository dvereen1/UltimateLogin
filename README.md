# Ultimate Login

A login and registration system which will serves as the foundation for future projects which require user accounts.

[Demo here](https://darianvereen.com/HTML_PHP/projects/ultimLogin/Register/register.php)

## Prerequisites

  * **Apache 2.4** or later - https://httpd.apache.org/
  * **PHP 7.2** or later - https://www.php.net/
  * **MySQL 8.0** or later - https://dev.mysql.com/doc/

## Database

### Login Table

| Field    | Type         | Null | Key | Default | Extra          |
|----------|--------------|------|-----|---------|----------------|
| username | varchar(255) | No   |     | NULL    |                |
| password | varchar(255) | No   |     | NULL    |                |
|

### Users Table

| Field    | Type         | Null | Key | Default | Extra          |
|----------|--------------|------|-----|---------|----------------|
| id       | int          | No   | PRI | NULL    | auto_increment |
| uptime   | datetime     | No   |     | NULL    |                |
| username | varchar(255) | No   | UNI | NULL    |                |
| secret   | varchar(255) | No   |     | NULL    |                |
| note     | text         | Yes  |     | NULL    |                |


## Includes and Other Links

## Includes and Other Links

Throughout this project, you'll notice some file includes and references which both exist outside the current directory and are used by other projects.

* [allProjectsModal.css](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/allProjectsModal.css)
* [allProjectsModal.js](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/allProjectsModal.js)
* [formValidator.js](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/formValidator.js)
* [headNoNav.php](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/headNoNav.php)
* [projectInfoModal.php](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/projectInforModal.php)
* [DBConnection.php](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/DBConnection.php)
* [FormValidator.php](https://github.com/dvereen1/PHP-JS-CSS-Includes/blob/main/FormValidator.php)

You can view these files at [PHP-JS-CSS-Includes](https://github.com/dvereen1/PHP-JS-CSS-Includes).