init: docker-down-clear docker-pull docker-build docker-up
down: docker-down

docker-up:
	docker-compose up -d

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

docker-down:
	docker-compose down --remove-orphans