This PHP application web application 

To setup - follow normal procedures  
-unzip the code to you htdocs folder
-restore the database contained in the /database folder

This application provides controllers for 3 types of user 
-User not logged in
-Admin


The database contains only 5 tables and their different columns - users 
role 1- user(admin)
role 2- user(user)
There are 2 typical users registered with the following username/passwords that you can try out: 

Administrator: 
  Username: admin@gmail.com
  Password: 111111 
Customer: 
  Username: michal@gmail.com
  Password: 123 

Login and user registration processes are provided as working. 

Registration Function
---------------------
1. Users must use their email address to register. The registration process checks that the users email is not already registered. 
2. All users are set to ENABLED and CUSTOMER type by default at registration. 
3. When the user attribute 'enabled' is set to 0 in the user table - that user will not be able to login. 
4. When the user attribute 'admin' is set to 1 in the user table - that user will be able to login as an administrator. 

Login Function
-----------------
Users enter their email and password in the login form.  The login process checks 
1. That the values entered are valid 
2. The user is ENABLED
3. The type of user Admin(ADMINISTRATOR) or user(CUSTOMER)



  
  