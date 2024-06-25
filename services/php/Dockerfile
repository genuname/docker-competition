# Указываем базовый образ с PHP 8.2
FROM php:8.2-fpm

# С помощью PECL (репозиторий PHP расширений) устанавливаем XDebug
# А так же, активируем расширение XDebug с помощью команды 
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Переносим конфигурационный файл XDebug в контейнер при сборке
ADD ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Обновляем пакеты в системе
# Устанавливаем необходимые пакеты для работы Composer, а это git и zip
RUN apt-get update && apt-get install -y \
    git \
    zip

# Забираем последнюю версию Composer из последнего образа и переносим в контейнер
# После этого composer будет доступен сразу по команде composer  в контейнере
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Запускаем php-fpm с помощью exec-синтаксиса команд
CMD ["php-fpm"]