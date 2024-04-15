FROM richarvey/nginx-php-fpm:latest

COPY . $APP_PATH

RUN apt-get update && apt-get install -y \
    mysqli \
    supervisor

EXPOSE 80

RUN chown -R www-data:www-data $APP_PATH

RUN chmod -R 755 $APP_PATH/storage

COPY composer.json composer.lock $APP_PATH

WORKDIR $APP_PATH

RUN composer install --no-dev

COPY .env .env.example

RUN php artisan key:generate

RUN php artisan migrate --force

CMD ["supervisord", "-n", "-c", "/etc/supervisor/conf.d/php-fpm.conf"]
