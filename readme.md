# Dockerized WordPress Setup

This repository contains a Docker Compose configuration to set up a WordPress environment with an Nginx reverse proxy and a MySQL database. It allows for easy installation and deployment of WordPress, making development and testing straightforward.

## Table of Contents

- [Dockerized WordPress Setup](#dockerized-wordpress-setup)
  - [Table of Contents](#table-of-contents)
  - [Features](#features)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)

## Features

- WordPress running on the latest version.
- MySQL database for data persistence.
- Nginx configured as a reverse proxy.
- Persistent data storage for WordPress and MySQL.

## Prerequisites

Before you begin, ensure you have the following installed:

- Docker
- Docker Compose

You can install Docker and Docker Compose by following the instructions on the official [Docker website](https://docs.docker.com/get-docker/) and [Docker Compose documentation](https://docs.docker.com/compose/install/).

## Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/abdebek/wordpress-blog.git
   cd  wordpress-blog
   ```

2. Ensure you have the necessary files in place:

- docker-compose.yml
- wp-config.php
- nginx.conf
- Any custom content in the wp-content directory.
- index.html (optional, for default response)

Configuration
In the docker-compose.yml file, you can modify the following environment variables for the MySQL service:

```yaml
environment:
  MYSQL_ROOT_PASSWORD: "your_root_password" # Change this for better security
  MYSQL_DATABASE: "wordpress" # Name of the database
  MYSQL_USER: "wordpress" # Database user
  MYSQL_PASSWORD: "password" # Database user password
```

Additionally, adjust the Nginx and Apache configurations if necessary in nginx.conf and apache.conf.

Usage
To start the WordPress environment, run the following command from the directory containing the docker-compose.yml file:

```bash
docker-compose up -d
```

Stopping the Environment
To stop the running containers, use:

```bash
docker-compose down
```
