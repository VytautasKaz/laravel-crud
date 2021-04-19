# CRUD Project Manager app

## Description:

CRUD (create, read, update, delete) app developed with Laravel framwork. Guest user can only access the 'read' feature of the app. **Registration and login are required to access all of the other features**:

-   Employees table:

    -   Add new employees.
    -   Update existing employees (change name, assign/reassign a project).
    -   Delete employees from the table.

-   Projects table:

    -   Add a new project.
    -   Update an existing project (change title).
    -   Delete projects from the table.

## Launch instructions:

-   If you do not have composer installed in you system, install it (installation instructions [here](https://getcomposer.org/download)).
-   Clone this repository or download it as a ZIP package.
-   Open it with Visual Studio Code or your preferred code editor.
-   Import 'sp5db.sql' from the project's root directory into your MySql server or create a fresh schema.
-   Rename **'.env.example'** file to **'.env'** inside of the project's root directory and configure the database information.
-   Using GitBash, CMD or other terminal in your code editor:
    -   if composer is installed locally: run **php <'path to composer.phar file location'>/composer.phar install**
    -   if composer is installed on your system globally: run **composer install**
-   If you chose to import 'sp5db.sql', in terminal:
    -   Run **php artisan key:generate**
    -   Run **php artisan serve**
-   If you created a fresh database:
    -   Run **php artisan key:generate**
    -   Run **php artisan migrate** to create tables.
    -   Run **php artisan db:seed** to fill tables with data.
    -   Run **php artisan serve**
-   Follow the link that appears in the terminal after running 'php artisan serve'.

## Author:

[Vytautas K.](https://github.com/VytautasKaz)
