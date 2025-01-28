# Laravel API with Sanctum Authentication

This project is a simple API built with Laravel 11 and Sanctum for user authentication. It includes routes for user registration, login, logout, and CRUD operations on tasks.

## Prerequisites

Before you begin, ensure you have the following installed:

- [Docker](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/)

## Getting Started

Follow these steps to deploy the application locally using Docker.

### 1. Clone the repository

```bash
git clone https://github.com/Wightons/kolomiets-testApi-Bekey
cd task-api
```

### 2. Setup .env variables

```bash
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=task_api
DB_USERNAME=sail
DB_PASSWORD=<your password>
```

### 3. Run migrations

```bash
sail artisan migrate
```

### 4. Run seeder to add users to database

```bash
sail artisan db:seed
```

### 5. URL's for test

#### Authentication Routes

- POST /register – Register a new user
- POST /login – Log in a user and get an access token
- POST /logout – Log out the user and invalidate the token

#### Task Routes (requires authentication)

- GET /tasks – Get a list of tasks
- POST /tasks – Create a new task
- GET /tasks/{id} – Get a specific task by ID
- PUT /tasks/{id} – Update a specific task by ID
- DELETE /tasks/{id} – Delete a specific task by ID
