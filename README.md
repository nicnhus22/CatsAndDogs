# Installation
Open a root MySQL terminal and setup the initial database:
```
CREATE DATABASE csgames
GRANT ALL ON csgames.* TO 'csgames'@'localhost' IDENTIFIED BY '<your password>';
```

Next, edit app/config/database.php and configure the database settings accordingly.

# Running the server
If not running in production, using PHP's integrated webserver is a quick way to test:
```
cd /path/to/repo
php -S localhost:8000
```

Then point your browser to http://localhost:8000.

Otherwise, please see the Apache configuration available in the 'sample-conf' folder.

# Features
* Apache configuration w/ SSL enabled (not vulnerable to POODLE)
