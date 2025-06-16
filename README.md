# Laravel Learning Project - Todo App with Weather & Random Generator

A practical Laravel Blade project demonstrating foundational concepts of PHP and Laravel through a full-stack web application.

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