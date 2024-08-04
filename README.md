# Task Management API

## Установка и настройка

1. **Клонируйте репозиторий**

   ```bash
   git clone https://github.com/stasmala/task_management_api


2. **Установите зависимости**

   ```bash
   composer install

3. **Создайте файл конфигурации**
   Скопируйте .env.example в .env и отредактируйте его:
   
   ```bash
   cp .env.example .env

4. **Создайте ключ приложения**

   ```bash
   php artisan key:generate

5. **Запустите миграции**

   ```bash
   php artisan migrate

5. **Запустите сервер**

   ```bash
   php artisan serve --port=8080

По умолчанию сервер будет доступен по адресу http://localhost:8080.

## Документация API

Вся документация API доступна по следующему пути: public/doc.html.

## Эндпоинты

* POST /api/register - Регистрация нового пользователя.
* POST /api/login - Авторизация пользователя.
* POST /api/logout - Выход из системы.
* GET /api/tasks - Получение списка задач.
* POST /api/tasks - Создание новой задачи.
* GET /api/tasks/{id} - Получение информации о задаче.
* PUT /api/tasks/{id} - Обновление задачи.
* DELETE /api/tasks/{id} - Удаление задачи.
* POST /api/tasks/{taskId}/comments - Добавление комментария к задаче.
* GET /api/tasks/{taskId}/comments - Получение комментариев к задаче.
* DELETE /api/comments/{id} - Удаление комментария.
* POST /api/teams - Создание команды.
* GET /api/teams - Получение списка команд.
* POST /api/teams/{teamId}/users - Добавление пользователя в команду.
* DELETE /api/teams/{teamId}/users/{userId} - Удаление пользователя из команды.

## Тестирование

Для тестирования API вы можете использовать такие инструменты, как Postman или cURL. Подключитесь к серверу и используйте предоставленные эндпоинты для выполнения различных операций.
