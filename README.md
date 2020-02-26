This is a service request management system.
It requires that a user registers before making or viewing their service requests. 
The administrator is able to view all requests.

Once the repository is cloned, run 'composer install'. Then run 'npm install'.
Change the .env.example to .env
Add your database login details (mysql).
create a database and list that database in .env.
run 'php artisan migrate' to set up all of our database tables.

Give the application a key by running 'php artisan key:generate', which will insert a key into config/app.php

If you wish to add your mail details for testing SMTP, check out /app/config/mail.php 
The application will not allow you to proceed until your email has been verified, but this feature can be turned off. You will get an error any time you try to send mail without first configuring the mail settings.
