FROM debian:buster

#install service
RUN apk update -y && apk -y upgrade &&\
    apk install nginx openssl &&\
    rm -rf /var/lib/apt/lists/*

#setting ssl certificate
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/ssl/private/ssl_odomenic.key \
    -out /etc/ssl/certs/ssl_odomenic.crt \
    -subj "/C=RU/ST=Moscow/L=Moscow/O=school21/OU=school21/CN=odomenic.42.fr/"

#copy
COPY ./nginx.conf /etc/nginx/sites-available/default
RUN mkdir -p /run/nginx

#???? what folder??
VOLUME ["/var/www/"]

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
