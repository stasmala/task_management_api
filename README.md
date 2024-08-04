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

* POST /register - Регистрация нового пользователя.
* POST /login - Авторизация пользователя.
* POST /logout - Выход из системы.
* GET /tasks - Получение списка задач.
* POST /tasks - Создание новой задачи.
* GET /tasks/{id} - Получение информации о задаче.
* PUT /tasks/{id} - Обновление задачи.
* DELETE /tasks/{id} - Удаление задачи.
* POST /tasks/{taskId}/comments - Добавление комментария к задаче.
* GET /tasks/{taskId}/comments - Получение комментариев к задаче.
* DELETE /comments/{id} - Удаление комментария.
* POST /teams - Создание команды.
* GET /teams - Получение списка команд.
* POST /teams/{teamId}/users - Добавление пользователя в команду.
* DELETE /teams/{teamId}/users/{userId} - Удаление пользователя из команды.

## Тестирование

Для тестирования API вы можете использовать такие инструменты, как Postman или cURL. Подключитесь к серверу и используйте предоставленные эндпоинты для выполнения различных операций.
