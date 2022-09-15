# Full-Stack-Developer-Task
This is a web application that brings out jokes from the MySQL database.
The languages used are HTML, JavaScript, and PHP.

Installation Needed to be done:
The only software that would needed to be downloaded is XAMPP, this is
for the MySQL database. (https://www.apachefriends.org/)
During the installing phase, there are options given, the ones that should be
selected are Apache and MySQL.
Version: 3.3.0

After the installation, run the XAMPP control panel, there should be a start
option for both Apache and MySQL. Once done, click on admin, which is on the
row of MySQL. It open a browser interface, this is where you create a database,
which should be named as 'jokes', then import the SQL dump file into that
database.

Running the Web application:
The web application should be stored into htdocs, which is normally located
C:\xampp\htdocs. This can be changed by clicking on Apache config, which is on
the XAMPP control panel. Then selecting Apache (httpd.conf) and then locate the
following:

#
# DocumentRoot: The directory out of which you will serve your
# documents. By default, all requests are taken from this directory, but
# symbolic links and aliases may be used to point to other locations.
#
DocumentRoot "C:/xampp/htdocs"
<Directory "C:/xampp/htdocs">

This shows the location of the localhost and also can be changed to any
directory if needed.

After storing the web application in the localhost directory, open a web browser
preferably Chrome. Type in localhost in the browser URL bar and press enter.
The index page should pop up with a selection of jokes that can be chosen.

How the file should be stored in the localhost directory:

htdocs

CSS
  button.css
  layout.css

PHP
  conn.php
  process.php

index.html
