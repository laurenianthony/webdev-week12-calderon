# Laravel API - Week 12 Assessment

A simple backend REST API built with Laravel 11. It uses Laravel Sanctum for token-based authentication and includes custom middleware to handle read-only token restrictions and error handling.

## Features
- User registration and login using Laravel Sanctum.
- Ability-based token scoping (full access vs. read-only).
- Custom middleware (`CheckReadOnlyToken`) that blocks write actions (`POST`, `PUT`, `DELETE`) for read-only tokens with a `403` status.
- Standardized error responses for unauthenticated requests (`401`), validation failures (`422`), and missing records (`404`).

## API Endpoints

| Method | Endpoint | Description | Authentication |
| :--- | :--- | :--- | :--- |
| **POST** | `/api/register` | Register a new user account | Public |
| **POST** | `/api/login` | Log in with credentials to receive a Bearer token | Public |
| **POST** | `/api/logout` | Revoke the current personal access token | Authenticated (Sanctum) |
| **GET** | `/api/books` | Retrieve a list of all books | Authenticated (Sanctum) |
| **GET** | `/api/books/{id}` | Retrieve a specific book by ID | Authenticated (Sanctum) |
| **POST** | `/api/books` | Create a new book record | Authenticated (Full Access / Non-readonly) |
| **PUT** | `/api/books/{id}` | Update an existing book record | Authenticated (Full Access / Non-readonly) |
| **DELETE** | `/api/books/{id}` | Delete a specific book record | Authenticated (Full Access / Non-readonly) |