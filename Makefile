attach:
	docker-compose run --rm --label traefik.enabled=false php /bin/sh

start:
	docker-compose up -d

logs:
	docker-compose logs -f
