# DB
FROM mysql:latest
ENV MYSQL_ALLOW_EMPTY_PASSWORD=1
COPY ./valo.sql /docker-entrypoint-initdb.d/
