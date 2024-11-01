# NotebookAPI

## Описание

NotebookAPI — это API, разработанное на основе Laravel, которое предоставляет доступ к данным о заметках. API позволяет пользователям выполнять стандартные операции CRUD (создание, чтение, обновление и удаление) для заметок.

## Установка

### Требования

-   PHP >= 8.1
-   Composer
-   SQLite

### Клонирование репозитория

```bash
git clone https://github.com/goooguska/NotebookAPI.git
cd NotebookAPI
```

### Установка зависимостей

Для установки зависимостей выполните команду:

```bash
composer install
```

### Настройка .env файла

Скопируйте файл `.env.example` в `.env` и настройте параметры базы данных и другие конфигурации:

```bash
cp .env.example .env
```

Измените настройки для использования SQLite:

```bash
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```

### Запуск миграций

Для запуска миграций выполните команду:

```bash
php artisan migrate
```

### Запуск приложения

Для запуска локального сервера используйте следующую команду:

```bash
php artisan serve
```

Теперь API доступно по адресу: http://127.0.0.1:8000/api/v1

### Эндпоинты

#### Получить все заметки

`GET /api/v1/notebook`

#### Получить заметку по ID

`GET /api/v1/notebook/{id}`

#### Создать новую заметку

`POST /api/notebook`

**Тело запроса:**

```json
{
    "fullname": "string",
    "company": "string",
    "phone": "string",
    "email": "string",
    "date_of_birth": "date",
    "image": "string"
}
```

#### Обновить заметку

`POST /api/v1/notebook/{id}`

**Тело запроса:**

```json
{
    "fullname": "string",
    "company": "string",
    "phone": "string",
    "email": "string",
    "date_of_birth": "date",
    "image": "string"
}
```

#### Удалить заметку

`DELETE /api/v1/notebook/{id}`

### Контакты

Если у вас есть вопросы или предложения, свяжитесь со мной по адресу cahalego@mail.ru.
