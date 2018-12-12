prdxn-dev-framework
===================

PRDXN's "starting package" used for development.

1. Avoided using mysqli_real_escape_string because PDO does that for me.
2. Avoided closing database connection because PDO does that for me.
3. Add Article page (only validation for empty is checked and thumbnail format).
4. During deletion of article I have not set warning because that includes javascript and i'm not comfortable using javascript during my test.

DATABASE
5. Database file included in database folder.
6. Database credintials present in classes/Connection.php
7. If directly want to login: try this => Username: sanjeet Password: sanjeet
