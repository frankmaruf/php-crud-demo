# PHP simple CRUD Operation
> lt's get into it.

## Steps
- <b>Class:</b>I have Created a Class Name Connection to work with DB.
- <b>__construct:</b>In Order to work with Connection Class you have to provide the dsn, username, password
> example: new Connection("mysql:host=localhost;dbname=demo-1", "root", "")
- <b>connection() Member function:</b>I have Created a function to connect to the db. If it failed it will throw an error.
- <b>getData() Member function:</b>I have Created a function which will give result based on you query.