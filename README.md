# Laravel Task List App

A simple task list web application built with Laravel.

## Demo
[Visit](https://task-list.dgjibrotech.com/)

## Features

- Add tasks to your list.
- Mark tasks as completed.
- Delete tasks.

## Requirements

- PHP 8.0+
- Composer
- MySQL
- Node.js

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/yourusername/laravel-tasklist.git
   cd laravel-tasklist
   ```

2. Install dependencies:

   ```bash
   composer install
   npm install
   npm run dev
   ```

3. Set up the environment:

   - Copy `.env.example` to `.env`.
   - Update `.env` with your database credentials.

4. Run migrations:

   ```bash
   php artisan migrate
   ```

5. Start the development server:

   ```bash
   php artisan serve
   ```

   Open `http://127.0.0.1:8000` in your browser.
