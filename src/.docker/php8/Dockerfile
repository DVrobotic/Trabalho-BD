FROM ubuntu:21.10

LABEL maintainer="Falacode"

ARG NODE_VERSION=16

WORKDIR /var/www/html

ENV DEBIAN_FRONTEND noninteractive
ENV TZ=UTC

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
    && apt-get install -y gnupg gosu curl ca-certificates zip unzip git supervisor sqlite3 libcap2-bin libpng-dev python2 \
    && mkdir -p ~/.gnupg \
    && chmod 600 ~/.gnupg \
    && echo "disable-ipv6" >> ~/.gnupg/dirmngr.conf \
    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C \
    && apt-key adv --homedir ~/.gnupg --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C \
    && echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu impish main" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
    && apt-get update \
    && apt-get install -y nginx php8.1-fpm php8.1-cli php8.1-dev \
       php8.1-pgsql php8.1-sqlite3 php8.1-gd php8.1-iconv \
       php8.1-curl php8.1-memcached \
       php8.1-imap php8.1-mysql php8.1-mbstring \
       php8.1-xml php-imagick php8.1-zip php8.1-bcmath php8.1-bz2 php8.1-soap php8.1-sockets \
       php8.1-intl php8.1-pdo php8.1-readline php8.1-pcov \
       php8.1-msgpack php8.1-igbinary php8.1-ldap \
       php8.1-redis php8.1-xdebug \
    && php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
    && curl -sL https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm \
    && curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
    && echo "deb https://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
    && apt-get update \
    && apt-get install -y yarn \
    # && apt-get install -y mysql-client \
    # && apt-get install -y postgresql-client \
    && apt-get -y autoremove \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


RUN ln -sf /usr/bin/php8.1 /etc/alternatives/php

# RUN ln -sf /dev/stdout /var/log/nginx/access.log \
# 	&& ln -sf /dev/stderr /var/log/nginx/error.log \
# 	&& ln -sf /dev/stderr /var/log/php8.1-fpm.log

#RUN echo "cgi.fix_pathinfo = 0;" >> /etc/php/7.3/fpm/php.ini \
#    && sed -i 's/post_max_size = 8M/post_max_size = 50M/g' /etc/php/7.3/fpm/php.ini \
#    && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 50M/g' /etc/php/7.3/fpm/php.ini \
#    && echo "cgi.fix_pathinfo = 0;" >> /etc/php/7.3/cli/php.ini \
#    && sed -i 's/post_max_size = 8M/post_max_size = 50M/g' /etc/php/7.3/cli/php.ini \
#    && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 50M/g' /etc/php/7.3/cli/php.ini \
#    && sed -i 's/worker_connections 768/worker_connections 4096/g' /etc/nginx/nginx.conf

# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
#     && composer self-update --snapshot \
#     && npm cache clean -f \
#     && npm install -g n \
#     && n stable && bash
# RUN npm install npm@latest -g && bash
# RUN npm i -g yarn

COPY entrypoint.sh /entrypoint.sh
COPY listener.php /listener.php
COPY nginx.conf.tpl /tmp/nginx.conf.tpl
COPY nginx_default.conf /etc/nginx/sites-enabled/default
COPY php-fpm.conf.tpl /tmp/php-fpm.conf.tpl
COPY supervisor.conf /etc/supervisor/conf.d/supervisor.conf

# RUN echo "* * * * * cd /var/www/html && php artisan schedule:run >> /dev/null 2>&1" > /var/spool/cron/crontabs/$(whoami)
# RUN chmod 600 /var/spool/cron/crontabs/$(whoami)

RUN chmod 755 /entrypoint.sh
ENV OPENSSL_CONF="/etc/ssl/"

EXPOSE 80
EXPOSE 443

CMD ["supervisord"]

COPY server.crt /etc/nginx/ssl/server.crt
COPY server.key /etc/nginx/ssl/server.key


CMD ["supervisord"]
