#Hexagonal Architecture Example
A completely pointless PHP application that bakes waffles using hexagonal architecture.

The purpose is to demonstrate the nature and purpose of this architecture.

The application currently has adapters to deliver waffles into a MySql database or a Redis Store. If you want to use those you will need to have an instance of each running and configure the application to use them. (It is built using the Symfony Config component, so should be straightforward)
##Running the code
- Checkout this repo
- Start the inbuilt PHP server
```
php -S localhost:8000
```
- Run the script in your browser
```
http://localhost:8000
```
