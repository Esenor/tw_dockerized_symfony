# tw_dockerized_symfony

## Usage

    # Build docker image
    $ docker-compose -f etc/docker/docker-compose.yml build
    # Launch docker container
    $ docker-compose -f etc/docker/docker-compose.yml up -d
    # Connect inside the container
    $ docker exec -ti docker_phpfpm_1 bash

    # Inside container
    $ composer update
    $ chown -R www-data:www-data vendor var