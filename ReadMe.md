docker run -d -p 8020:80 --link my-mongo --name php-mongo -v "$PWD":/var/www/html php:7.4-apache

docker run -d --name my-mongo mongo:latest
