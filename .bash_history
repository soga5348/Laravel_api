php artisan serve --host=0.0.0.0 --port=80
exit
composer -v
ezit
ezit
exit
chmod -R 775 /var/www/storage /var/www/bootstrap/cache
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate
touch /var/www/database/database.sqlite
php artisan migrate
php artisan config:cache
php artisan migrate:fresh
exit
