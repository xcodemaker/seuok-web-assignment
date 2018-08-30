# seuok-web-assignment
Project Idea Submission and Reviewing Platform

This platform is based on two user roles

*Developers
    They can submit the ideas and edit/delete according to the user need. User can preview the submitted ideas and an idea contains a Title and a description.

*Administrator
    This user role is the owner of the platform. The person can review the submitted ideas as well as change the status of the idea from 'pending' to 'Accepted' or 'Declined'



users can register and add their project ideas to web site then that are stores in database 
we have provide default admin for client then customer can use that admin accont for user account control and ideas accept or decline and also can promote user as admin and remove users

there is two roles in application one is user and another is admin. admin and user can play defferent roles users can view only user section and application have admin section that can only acces for the admin if adimn log to web system then navigation bar change and show extra admin button using that button admin can do adimn works

#integrated versions
php version 7.1.9
laravel 5.6.*
mysql 5.7.19

#step 01

first you should clone this repo to your local server location

#step 02

then cmd or git bash execute this command

composer install

then execute

npm install

#step 3

then you should generate env file using this commands

cp .env.example .env
php artisan key:generate

after genetare env file you should configure your database with env file

#step 4

then you should migrate database using this command

php artisan migrate

then you can run this app in your local server
