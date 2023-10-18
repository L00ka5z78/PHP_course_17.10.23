### Simple project in PHP during course

Instructions
Set document root to YOUR_PROJECT/public, that way the site is loaded from public/index.php
You should include/require all other files in index.php, that's your main file
You can use APP_PATH, FILES_PATH & VIEWS_PATH constants that are defined in index.php to help you with including files
Main code should go in app directory in any file that you choose, I created empty App.php that you can use to place your main logic but feel free to change it
You should define multiple functions there which will read all files within transaction_files directory and process them. It is up to you how you want to read those files, but the goal is to read all files within that directory
You can assume that all files within transaction_files directory are .csv files
One sample file is provided which contains formatted data
You can assume that all files in transaction_files directory will be of same format for now
Store data in memory (in an array)
First column is the date of the transaction
Second column is the check # which is optional & is not always provided
The third column is transaction description
The fourth column is the amount (negative number indicates it's an expense, positive number indicates it's an income)
Calculate the total income, total expense & net total (total income - total expense)
Print a simple HTML table containing all the data from the files
The html skeleton is provided in views/transactions.php file
The date of the transaction should be in this format "Jan 4, 2021"
Show income amounts in green color & show expense amounts in red

### result

![2023-10-18](https://github.com/L00ka5z78/PHP_course_17.10.23/assets/110019733/d6c05bef-0b82-4dfa-ab9f-8edebaa767dd)

Nothing fancy, there is nothing more you can do with it. It just displays dummy data from csv file. The problem was to get the data from the file and force it to show on screen.

