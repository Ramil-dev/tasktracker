## Инструкция
1. Скопировать Файлы:
    git clone https://github.com/Ramil-dev/tasktracker tasktracker
2. Перейти в папку с проектом и установить завсимости:
    composer install
3. Настроить подключение к бд:
    * переименовать файл .env.example в .env
    * и подставить свои значения 
4. Создать структуру бд:
    php artisan migrate
5. Забить тестовые данные:
    php artisan db:seed

## Затраченное время
* Читал про Laravel, ООП и тд. -- 2 дня
* Настройка Laravel, структуры бд (migrations), и заполнение данными (seeds) -- 50 мин
* Создание моделей -- 30 мин
* Роуты и контроллеры -- 1 ч 40 мин
