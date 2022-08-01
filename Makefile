all:
	docker-compose -f srcs/docker-compose.yml up --build -d

clean:
	docker-compose -f srcs/docker-compose.yml down -v
	docker image prune -a
	sudo chmod -R 777 /home/odomenic/data
	sudo rm -rf /home/odomenic/data/mariadb/* /home/odomenic/data/wordpress/*

re: clean all
