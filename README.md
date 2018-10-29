<h1>FinManager</h1>
<h2>Financial Management System**</h2>
<h3>INTRODUCTION</h3>
<body>
This project deals with designing and implementing a system for handling the transactions for various accounts of a user . The user logins into the system and enters the details of the accounts he wants to track. He can edit or delete any account. Then he can add transactions related to any account. The transactions will be displayed with the respective account number and the account balance will be updated. Each transactions contains a description and transaction type attribute. The user can also edit and delete any transaction as required.
</body>

<h3>TECHNICAL ASPECTS</h3>
The application was developed using the WAMP approach, i.e. Windows, Apache, MySQL and PHP.
<h4>WINDOWS</h4>
The project was developed in a Windows environment using Dreamweaver and Netbeans but is now
hosted in a Linux environment on the CISE servers. This was possible due to the high level of portability of php code.
PHP
PHP is a widely-used general-purpose scripting language that is especially suited for Web development
and can be embedded into HTML. All server side code was written in php. As mentioned the design was done in Windows in a WAMP environment and then the code was ported and hosted on Apache in
Linux.
APACHE
The web server used is Apache with the php plugin. Apache again is a very reliable web server on both
Windows and Linux and also maintains a very similar interface in both.
MySQL
The database system used is MySQL which is an open source RDBMS. It is very light and highly
functional. Also with php and MySQL being used together very frequently a lot of online support was available
	
Normalization
1st normal form
For every entity the domain of every attribute is atomic and there exists a primary key that uniquely identifies a tuple..
The domain of each attribute contains only atomic (indivisible) values, and the value of each attribute contains only a single value from that domain
Hence the given database is in first normal form

2nd Normal Form
For a database to be in 2nd normal form, it must be in 1st normal form and also all of the non-key attributes must be describing the candidate key/keys.
As described before the database is in 1st normal form. Also all the non-key attributes are describing the candidate key in case of each entity set. Hence the database is in 2nd normal form.

PROCESS FLOW
The process flow implemented is as follows:
> The User logins into the system or creates or signs up if he does not have any account.


> Then the user can add/manage multiple accounts and add new transactions.

> To add a new account the user will have to provide the Account_Name, Account_type, User_ID and the opening balance

> Similarly the user can also add/edit transactions by specifying the Description, Amount, Type and the Account_ID.
.
>The transactions table and the balance in the corresponding account will automatically update.


> The user can also add income transactions and they will be saved just liked expense transactions.
> The user can logout and login again anytime.
