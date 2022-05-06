# [Rihal Challenges] Full-Stack Software Engineer

The project is CRUD system for students and class in countries. 

## Installation

Use composer, and npm to install the project, full commands list:

```bash
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan db:seed
npm install
npm run dev
php artisan storage:link
```
## Database Design
![DatabaseDesign](https://i.imgur.com/3IafMal.png)

## Requirement and Specifications
1-	Relations statements:
a.	User belongs to one country.
b.	User belongs to one class.
2-	System users with roles:
a.	System Admin: full control of the system.
b.	Student: login and view his class and his information and edit his information.
3-	Functional:
a.	System admin can add/remove/modify/view user.
b.	System admin can add/remove/modify/view class.
c.	System admin can add/remove/modify/view country.
d.	Student login and view his class and his information.
e.	Student login and edit his information.
4-	Non-functional:
a.	Elegant theme responsive and support dark/light mode.
6-	Technology will be used depending on the requirements:
a.	Laravel.
b.	Laravel live-wire to implement the crude.
c.	Tailwind with open-source theme.
d.	SQLite for the database.
e.	Eloquent ORM (Laravel default).


## Usage

The admin can CRUD users as student, CRUD class, CRUD countries. the application will show some useful charts.

## Tools used and why
- This project used **SQLlite**  to help deploy the project without need to configure laravel with mysql database.
- **Tailwind**: Tailwind CSS is a utility-first CSS (Cascading Style Sheets) framework with predefined classes that you can use to build and design web pages directly in your markup. It lets you write CSS in your HTML in the form of predefined classes.
- **Alpine.js**: Alpine is a rugged, minimal tool for composing behavior directly in your markup. Think of it like jQuery for the modern web. Plop in a script tag and get going.  Alpine. js comes in at 21.9kB minified and 7.1kB gzipped, compared to jQuery at 87.6kB minified and 30.4kB minified and gzipped.
- Livewire: Livewire is a full-stack framework for Laravel that makes building dynamic interfaces simple, without leaving the comfort of Laravel.
- Quick Admin Panel: Generate Laravel Admin panel in minutes to focuses on the main issue of the application.
- Laravel Charts: Package to generate Chart.js charts directly from Laravel/Blade, without interacting with JavaScript.
- K-WD Dashboard: Fully responsive dashboard template built with tailwindcss & alpinejs https://github.com/Kamona-WD/kwd-dashboard

