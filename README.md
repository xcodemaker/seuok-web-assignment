# Project Idea Submission and Reviewing Platform
-----
This platform is based on two user roles

* **Developers**
    >They can submit the ideas and edit/delete according to the user need. User can preview the submitted ideas and an idea contains a Title and a description.

* **Administrator**
    >This user role is the owner of the platform. The person can review the submitted ideas as well as change the status of the idea from 'pending' to 'Accepted' or 'Declined' The administrator can promote the normal Developers to Administrator and the Administrators can delete normal users.


The views changed according to the user logged in and the functionalities depend upon the 
* In the home view the navbar contains 4 tabs called Home, About,Login,Register
* In the Developer view contains 4 different tabs called Home,About,ProjectIdeas,UserAccount(Name)
* In the adminsitrator view there is one more tab compared to the normal accounts called Admin that tab provides Administrator functionalities


### Group 2


| Student Number  | Name |  Branch Name| Contribution
| ------ | ------ |-----|-----
| SE/2014/011 | K.T.A.L. Karunathilake | Lakshan(Reporting) | Reporting and Readme
| SE/2014/012 | N.Kekayan | Master(commits) | Social Login,Login,Middleware
| SE/2014/013 | C.A.D Kumara | 
| SE/2014/014 | M.H.R.D.S. Kumara | dhammika | User Roles, CRUD Activities, Admin Functionalities 
| SE/2014/016 | H.M.G.M.L. Kumari | madusha | CRUD activities for developer activites
| SE/2014/018 | W.O. Lankadheera | lankadheera | Login/Register
| SE/2014/019 | G.Lidushan |

## Technologies 
----
[![N|Solid](https://camo.githubusercontent.com/5ceadc94fd40688144b193fd8ece2b805d79ca9b/68747470733a2f2f6c61726176656c2e636f6d2f6173736574732f696d672f636f6d706f6e656e74732f6c6f676f2d6c61726176656c2e737667)](https://nodesource.com/products/nsolid) 


Laravel 5.6 , PHP -7.1.9 , MySQL 5.7.19, Composer
-----
----

# Steps

1.Clone the repository master branch to the server directory
```sh
$ git clone https://github.com/xcodemaker/seuok-web-assignment.git
```

2.Execute composer install in the cmd in the directory
```sh
$ composer install
```
3.Generate the env files 
```sh
$ cp .env.example .env
$ php artisan key:generate
```
4.Rename the database connection according to the your database credentials

5.Migrate the data base models using
```sh
$ php artisan migrate
```
6.Social media keys generated should be copied at the end of the env file

7.Create a user account
>You can register using social media such as Facebook,Twitter,Githum
>
>If you need to make the user admin you have to manual change the database table called users and change the isAdmin from '0' to '1' 

8.Login using the credentials you have 
>Depending on your previlleges the accessibility will be limited

