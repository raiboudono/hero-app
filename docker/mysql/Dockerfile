
FROM mysql:8.0

ENV TZ=Asia/Tokyo \
    LANG=ja_JP.UTF-8 \
    LANGUAGE=ja_JP:ja \
    LC_ALL=ja_JP.UTF-8 \
    MYSQL_DATABASE=mydb \
    MYSQL_USER=sample \
    MYSQL_PASSWORD=sample \
    MYSQL_ROOT_PASSWORD=sample

COPY ./docker/mysql/my.cnf /etc/my.cnf

RUN set -eux \
    && apt-get update \
    && apt-get install -y \
    locales \
    && localedef -f UTF-8 -i ja_JP ja_JP \
    && chmod 644 /etc/my.cnf \
    && rm -rf /var/lib/apt/lists/*