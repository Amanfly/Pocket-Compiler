# Pocket-Compiler

## About

This is a web application developed as part of a course project. Users can use the C, C++, Java and Python compilers

Users can do two things:

* Write code online and compile it.
* Scan the code and compile it

This application was developed by [Aman Arora](https://github.com/amanfly) and [Pragyanshu Mohapatra](https://github.com/Pragyanshu-Mohapatra).

## INSTALL
setup instructions for linux.
### Prerequisites
* LAMP stack
* GCC
* G++
* Java
* Python2.7 and 3.8

To get above packages and tools, run

	sudo apt-get install lamp-server^ gcc g++ default-jdk python python3

Checkout this repo.

### Configurations
Next we need to configure apache2, starting with creating a virtualhost.

	sudo mv /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-enabled/000-default.conf
	sudo vim /etc/apache2/sites-enabled/000-default.conf
This conf file should look like

	<VirtualHost *:80>
	...some stuff...
	</VirtualHost>
after the closing VirtualHost tag add the following:

	Listen 8080
	<VirtualHost *:8080>
		DocumentRoot "PATH_TO_HOME_OF_REPO"
	    <Directory "PATH_TO_HOME_OF_REPO">
	        Options Indexes FollowSymLinks MultiViews
	        AllowOverride All
	    	Order allow,deny
	        Allow from all
	    </Directory>
	</VirtualHost>

Edit /etc/apache2/apache2.conf. In this block of code:

	<Directory />
	        Options FollowSymLinks
	        AllowOverride None
	        Require all denied
	</Directory>

Replace *Require all denied* with *Require all granted*.

Restart Apache using
	sudo apachectl restart

.


setup instructions for Window.
### Prerequisites
* xampp
* codeblocks
* Java
* Python2.7 and 3.8

```
Install CodeBlocks IDE
```

```
Go To  Codeblocks Installed Folder bin Location And Copy The Path. Mine Is

C:\Program Files (x86)\CodeBlocks\MinGW\bin

```

```
Then Set Your Compiler Path On Environment Variable From Windows System Property Otherwise It will not work 

```

```
Add putenv() function in every compiler code 
Add you path in putenv() function 

```

For Java Install Java
```
Go To Java Installed Folder bin Location And Copy The Path. Mine Is

C:\Program Files (x86)\Java\jdk1.8.0_112\bin

```


```
Add your path in putenv() function
```

