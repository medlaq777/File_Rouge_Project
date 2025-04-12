# BeatRecords

Une Laravel web application Pour Finale Projet File Rouge
![BeatRecords Logo](./resources/img/logo.svg "BeatRecords Logo")

## Table of Contents

- [BeatRecords](#beatrecords)
  - [Table of Contents](#table-of-contents)
  - [Requirements](#requirements)
  - [Installation](#installation)
    - [1. Clone the repository](#1-clone-the-repository)
    - [2. Install PHP dependencies](#2-install-php-dependencies)
    - [3. Install Tailwind css 4 dependencies](#3-install-tailwind-css-4-dependencies)
    - [4. Copy environment file and generate application key](#4-copy-environment-file-and-generate-application-key)
  - [Configuration](#configuration)
    - [1. Database Setup](#1-database-setup)
    - [2. Run migrations with Seed the database](#2-run-migrations-with-seed-the-database)
  - [Running the Application](#running-the-application)
    - [Frontend assets compilation](#frontend-assets-compilation)
  - [Testing](#testing)
  - [Deployement](#deployement)

## Requirements

- PHP >= 8.0
- tailwind css >= 4.0
- Composer
- PostgreSQL
- Node.js & NPM
- [Laravel requirements](https://laravel.com/docs/12.x/deployment#server-requirements)

## Installation

### 1. Clone the repository

```bash
git clone [https://github.com/medlaq777/File_Rouge_Project]
cd beatrecords
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install Tailwind css 4 dependencies

```bash
npm install tailwindcss @tailwindcss/vite
```

### 4. Copy environment file and generate application key

```bash
cp .env.example .env
php artisan key:generate
```

## Configuration

### 1. Database Setup

Update the `.env` file with your database credentials:

``` bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=beatrecords
DB_USERNAME=postgress
DB_PASSWORD=postgress
```

### 2. Run migrations with Seed the database

```bash
php artisan migrate
```

```bash
php artisan db:seed
```

## Running the Application

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`.

### Frontend assets compilation

```bash
# Development
npm run dev

# Production
npm run build
```

## Testing

```bash
php artisan test
```

## Deployement
