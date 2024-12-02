# Tabel

## Overview
**Tabel** is a foundational template designed to help developers quickly build simple PHP applications using the Tabel framework. This skeleton provides a minimal setup that streamlines the development process, allowing you to focus on your application's functionality without the overhead of a full-fledged framework.

## Features
- **Basic Directory Structure**: Organized layout for easy navigation and management of your application.
- **Lightweight Design**: Minimal dependencies for faster performance.

## Getting Started

### Prerequisites
Before you begin, ensure you have the following installed:
- PHP (version 8.1 or higher)
- Composer (for dependency management)

### Installation
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/munenepeter/Tabel.git --depth=1
   ```
2. **Navigate into Your Project Directory & remove git**:
   ```bash
   cd Tabel

   rm -rf .git/

   #initialize your own tracking

   git init
   ```
3. **Install Dependencies**:
   ```bash
   composer install
   ```

### Configuration
1. **Environment Variables**: 
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your environment-specific settings, such as database credentials.


### Running Your Application
To run your application locally, you can use PHP's built-in server. From the root of your project directory, execute:

```bash
php -S localhost:8000 -t server.php
```

You can then access your application at `http://localhost:8000`.

## Development Guidelines

### Adding Routes
Define your application routes in a dedicated routes file (e.g., `routes/web.php`). 

And for cli commands, instead of the famous `artisan` you can use `tabel` or rename the file to whatever you would like
and the framework will not be supporting extensive cli commands, just those one can use for CRON jobs. Remember i made this for my usecase and more often than not i create my files manually.

Also it closely resembes laravel, so you should feel at home if you are familiar with the framework

## License
This skeleton is open-source and free to use. Feel free to modify it according to your project needs. Please ensure compliance with any licenses of third-party libraries included within.