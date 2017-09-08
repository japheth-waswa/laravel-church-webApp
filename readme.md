# Fully functional church web application

This project is meant to distribute functional web application to churches for free.It has most of church functionalities and can be downloaded and used freely

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Laravel 5.4
```
```
mysql database
```

### Installing

A step by step series of examples that tell you how you have to get a development env running

Step 1(Clone repository)

```
Download or clone this repository into your local machine and extract the files if compressed into a local server ie wamp,xamp etc to a folder named "church"
```

Step 2(create database)

```
Log into your local mysql and create database with the name "church"
```

Step 3(create database tables)

```
3.1 run php artisan migrate command to generate database tables.
```
or
```
3.2 import the "church.sql" file located in the root of this project
```

Step 4(test installation)

```
Go to http://localhost/church/public/ If it works then installation was successful
```

Step 5(application name)(optional)

```
Open .env file in the root of this project and change application name to your preference ie "church-of-christ".
```

Step 6(login and update)

```
Go to http://localhost/church/public/login and use email: admin@gmail.com and password: admin123
```

Congragulations installation has been sucessful!


## Demo
For demo 

## Acknowledgments

* Miss Carol Mathews for design inspiration and guidance.
