# CreativeGuild Skill Test

This repository contains a full-stack skill test project built for CreativeGuild, demonstrating a basic authentication system with user registration and login.

---

## 🚀 Tech Stack

- **Backend**: Laravel 10, PHP 8
- **Frontend**: ReactJS
- **Authentication**: JWT (JSON Web Token)
- **Database**: MySQL

---

## 🛠 Project Structure

| Folder | Description |
|:------|:------------|
| `/backend` | Laravel project handling API, authentication, and user management |
| `/frontend` | React application managing UI, user registration, and login |

---

## 📚 Features

- User Registration
- User Login
- Secure password hashing
- JWT Authentication
- Error handling with try-catch blocks
- Frontend integrated with backend API
- Form validation on both client and server sides

---

## ⚙️ Setup Instructions

### Backend (Laravel)

1. Clone the repository:
    ```bash
    git clone https://github.com/parveensuyan/CreativeGuild-Skill-Test.git
    cd backend
    ```

2. Install PHP dependencies:
    ```bash
    composer install
    ```

3. Setup `.env` file:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure database credentials in `.env`.

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Start Laravel server:
    ```bash
    php artisan serve
    ```

---

### Frontend (React)

1. Navigate to the frontend folder:
    ```bash
    cd frontend
    ```

2. Install npm dependencies:
    ```bash
    npm install
    ```

3. Start the React app:
    ```bash
    npm start
    ```

---

## 🎯 API Endpoints

| Method | Endpoint | Description |
|:-------|:---------|:------------|
| `POST` | `/api/register` | Registers a new user |
| `POST` | `/api/login` | Logs in a user and returns a JWT token |

---

## ✨ Project Highlights

- Clean, modular code following Laravel and React best practices.
- Full error handling implemented with try-catch blocks.
- Secure API design using JWT.
- Lightweight, fast, and easy to extend for additional features.




