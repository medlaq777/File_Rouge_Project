# BeatRecords

![BeatRecords Logo](./resources/img/logo.svg "BeatRecords Logo")

https://baytrecord.me

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
    - [1. Run migrations with Seed the database](#1-run-migrations-with-seed-the-database)
  - [Running the Application](#running-the-application)
    - [Frontend assets compilation](#frontend-assets-compilation)
  - [Testing](#testing)
  - [Deployement](#deployement)
  - [FIGMA DESIGN](#figma-design)

## Requirements

- PHP >= 8.2
- TAILWIND CSS >= 4.0
- COMPOSER
- POSTGRESQL
- NODE.JS & NPM
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

Update the `.env` file with your database credentials:

``` bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=beatrecords
DB_USERNAME=postgress
DB_PASSWORD=postgress
```

```bash
cp .env.example .env
php artisan key:generate
```

## Configuration

### 1. Run migrations with Seed the database

```bash
php artisan migrate
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

## FIGMA DESIGN

https://www.figma.com/design/0G7MVqtTSTfvAeQP5DgjZ5/Untitled?node-id=0-1&t=IxXjtxW9usvGb8gs-1
