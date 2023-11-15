up:
	docker compose up -d
down:
	docker compose down
php-bash:
	docker compose exec php-laravel-test bash
php-logs:
	docker compose logs php-laravel-test
nginx-bash:
	docker compose exec nginx-laravel-test bash
nginx-logs:
	docker compose logs nginx-laravel-test
redis-bash:
	docker compose exec redis-laravel-test bash
redis-logs:
	docker compose logs redis-laravel-test
vendor:
	docker compose exec php-laravel-test bash -c "composer install"
