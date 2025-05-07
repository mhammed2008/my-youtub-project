 Laravel Project

This is a Laravel 12 application that provides a robust foundation for building web applications.

## Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- SQLite (or your preferred database)

## Installation

1. Clone the repository:
```bash
git clone [your-repository-url]
cd [your-project-name]
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Create database:
```bash
touch database/database.sqlite
```

7. Run migrations:
```bash
php artisan migrate
```

8. Start the development server:
```bash
php artisan serve
```

9. In a separate terminal, start Vite development server:
```bash
npm run dev
```
