## What This Is
A simple LAMP (Linux - Apache - MariaDB -PHP) homelab that:
- Installs and configures Apache2, MariaDB, PHP
- Deploys a `dbtest.php` page that verifies PHP MYSQL connectivity

## Prerequisites
-Ubuntu Server LTS VM (>=2 CPU, >=2 GM RAM)
- Sudo user (e.g. `adminuser`)
- Internet access

## Installation Steps
```bash
sudo apt update && sudo apt install -y apache2 mariadb-server php libapache2-mod-php php-mysql
sudo mysql_secure_installation
