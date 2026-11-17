# Laravel API - Week 12 Assessment

A simple backend REST API built with Laravel 11. It uses Laravel Sanctum for token-based authentication and includes custom middleware to handle read-only token restrictions and error handling.

## Features
- User registration and login using Laravel Sanctum.
- Ability-based token scoping (full access vs. read-only).
- Custom middleware (`CheckReadOnlyToken`) that blocks write actions (`POST`, `PUT`, `DELETE`) for read-only tokens with a `403` status.
- Standardized error responses for unauthenticated requests (`401`), validation failures (`422`), and missing records (`404`).

