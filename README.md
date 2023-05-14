# Livewire-Fortify-Authentication

This project is based on [Laravel Framework](https://laravel.com/) and using two main packages : 
- [Fortify](https://laravel.com/docs/10.x/fortify) for manage authentication
- [Livewore](https://laravel-livewire.com/) for implement user interface

The main purpose of this project is to easily implement a user interface with login/register/forgot-password functionnalities in the same place.

It can be very usefull in an ecommerce tunnel for authenticate user without leaving the page.

## Installation

Starting please make sure you are install and correctly configure Fortify and Livewire on your Laravel project.

All needed files are in "app/Http/Livewire" and "resources/views/livewire" folders.


## How does it work ?

The entry point of this system is the "Authentication" Livewire component. It display child Livewire component depending of a "view" parameter.
The project use 3 children components : 
- "Login" used for login a user
- "Register" for register a user
- "Forgot Password wich implement a forgot-password functionnality (send a reset link email")

Be carrefull for the forgot-password functionnality you have to define the "reset-password" routes (check "/routes/web.php" file)

## Customization

On this repo, the project use [TailwindUi](https://tailwindui.com/) to display forms.
Be free to use your own integration but you have to keep all inputs and all html attributs (starting by "**wire:**" to keep the component working)

---

Made with love by :

[<img src="https://www.updaz.fr/img/logo-blue.png" alt="logo Updaz" width="300px" />](https://www.updaz.fr)

➡️ For more information : [www.updaz.fr](https://www.updaz.fr)

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/matthieu-dazord/)
