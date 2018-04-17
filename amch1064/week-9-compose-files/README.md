# Week 9 Home Work
This repository contains files needed replicate a simple version of our AWS Web Server Assignment, but instead of using two AWS Instances (Web Server and DB Server) we will use two containers.

## Instructions

This project uses `docker-compose` to spin up containers. The script will start two containers:
1. Web Server - Apache + PHP
2. Database Server - Maraidb

### Persistent Storage

The database server uses a folder on the local disk to storage all mysql related files. Hence, even after the container is destroyed and re-created all the mysql files are persistent. 

The following directory is used to store the files:
    ./dbvolume

#### Build the web server container
    docker-compose build
    

#### Start all containers
    docker-compose up -d
    

#### Stop all containers
    docker-compose down
    

#### Verify the working

Open the following url in your browswer

    http://0.0.0.0:5000/cloudtech.php
    

