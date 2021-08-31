FROM webdevops/php-nginx:8.0

#Copia o arquivo de configuração do nginx
RUN chmod +w /etc/nginx/nginx.conf
COPY nginx.conf /etc/nginx/nginx.conf

WORKDIR /var/www/html

COPY . .
COPY ./supervisord.conf /etc/supervisor/conf.d/

RUN service nginx restart
RUN service php-fpm restart
# RUN composer install --optimize-autoloader --no-scripts --no-plugins --ignore-platform-reqs 


EXPOSE 80 443
