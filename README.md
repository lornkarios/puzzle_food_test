# Тестовое задание для компании Puzzle food

Чтобы запустить проект достаточно выполнить несколько команд в папке проекта
```sh
    docker run --rm \
        -v "$(pwd)":/opt \
        -w /opt \
        laravelsail/php81-composer:latest \
        bash -c "composer install && cp .env.example .env" && sudo chown -R $USER: .
```
```sh
    vendor/bin/sail up -d
```
```sh
    vendor/bin/sail php artisan migrate
```
