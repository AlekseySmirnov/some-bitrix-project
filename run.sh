#!/usr/bin/env bash

docker-compose up -d
#docker exec bitrix-test /bin/bash -c 'apt install git -y'
#docker exec bitrix-test /bin/bash -c 'cd /var/www/html/ && npm install && npm install -g gulp-cli && gulp build'
docker exec bitrix-test /bin/bash -c 'echo "127.0.0.1 ${PROJECT_NAME}" >> /etc/hosts'
docker exec bitrix-test /bin/bash -c 'echo "127.0.0.1 html.${PROJECT_NAME}" >> /etc/hosts'
