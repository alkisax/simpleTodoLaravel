# Laravel Learning Project - Todo App with Weather & Random Generator

A practical Laravel Blade project demonstrating foundational concepts of PHP and Laravel through a full-stack web application.

1. app is live at [simpleToDoLaravel](https://simpletodolaravel.onrender.com)  
2. [README.md](https://github.com/alkisax/simpleTodoLaravel/blob/main/README.md)  
3. step by step instructions md of how the app was made [Instructions](https://github.com/alkisax/simpleTodoLaravel/blob/main/todoInstructionsLaravel.md)


## Features

### 1. Welcome Page
- Landing page with a featured image
- Simple introduction to the application
- showcase of layout and button component

### 2. Random Number Generator
- Generates random numbers between custom min/max values
- Automatically swaps min/max if entered in reverse
- Built using Blade templates and PHP logic

### 3. Weather API Integration
- Fetches current weather data from the OpenWeatherMap API
- Displays weather in a styled Blade view
- Defaults to Athens, Greece

### 4. Full CRUD Todo Application
- **Create**: Add new todos with username and task
- **Read**: View paginated list of all todos
- **Update**: Edit existing todos / Toggle completed status
- **Delete**: Remove todos
- Uses Laravel's routing, controllers, and Eloquent ORM
- Connected to an SQLite database

## Technologies Used

### Backend & Frontend (Laravel Blade)
- **Laravel 11** - PHP web framework
- **Blade** - Laravel templating engine
- **Eloquent ORM** - Database abstraction
- **PHP 8+** - Core programming language
- **Laravel HTTP Client** - External API integration
- **OpenWeatherMap API** - Weather data source
- **Pagination** - Built-in Laravel paginator

## Learning Objectives Achieved

This project was created to learn and demonstrate:

- Laravel routing and controller structure
- Blade templating and form handling
- Eloquent ORM with SQLite
- CRUD operations and validation
- Pagination and user-friendly UI
- External API integration with Laravel HTTP client
- Basic Laravel project structure and logic

## Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/your-laravel-project.git
cd your-laravel-project
```

2. Install Dependencies
`composer install`  
3. Create and Configure .env File
Copy the example environment file and update as needed:
`cp .env.example .env`  
Set the following in .env:  
```
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
OPENWEATHER_API_KEY=your_openweather_api_key
```
You can create the SQLite file using:
`touch database/database.sqlite`  
4. Run Migrations
`php artisan migrate`   
5. Serve the Application
`php artisan serve`  
Then visit http://localhost:8000 in your browser.

## Screenshots

### 1. Welcome Page
![Welcome Page](https://github.com/alkisax/simpleTodoLaravel/raw/main/public/screenshots/1.welcome.png)

### 2. Random Number Generator
![Random Generator](https://github.com/alkisax/simpleTodoLaravel/raw/main/public/screenshots/2.random.png)

### 3. Todo List (Index)
![Todo Index](https://github.com/alkisax/simpleTodoLaravel/raw/main/public/screenshots/3.index.todo.png)

### 4. Create Todo
![Create Todo](https://github.com/alkisax/simpleTodoLaravel/raw/main/public/screenshots/4.create.todo.png)

### 5. Update Todo
![Update Todo](https://github.com/alkisax/simpleTodoLaravel/raw/main/public/screenshots/5.change.todo.png)

### 6. Weather Integration
![Weather](https://github.com/alkisax/simpleTodoLaravel/raw/main/public/screenshots/6.weather.png)
