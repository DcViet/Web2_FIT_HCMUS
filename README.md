# Web2_FIT_HCMUS
[Danh sach bai tap Web2](http://web22k2321880291.42web.io)

XAMPP is a software package that contains Apache HTTP server, PHP, MariaDB/MySQL, and Perl.

Lab0: cài đặt xampp 
>cài đặt trên Debian 12.
- cách chạy xampp : sudo /opt/lampp/lampp start
- /xampp
```
dcviet@dcviet:/opt/lampp$ sudo /opt/lampp/lampp start
Starting XAMPP for Linux 8.2.4-0...
XAMPP: Starting Apache.../opt/lampp/share/xampp/xampplib: line 22: netstat: command not found
/opt/lampp/share/xampp/xampplib: line 22: netstat: command not found
ok.
XAMPP: Starting MySQL.../opt/lampp/share/xampp/xampplib: line 22: netstat: command not found
ok.
```

>trình soạn thảo vim và VScode
xem chi tiết tại phần nội dung bt bao gồm data được cập nhật lên server https://dash.infinityfree.com/

kiểm tra quyền truy cập htdocs:
```
ls -l /đường/dẫn/đến/thư/mục/htdocs
```

cấp quyền trong thư mục htdocs cho vscode:
```
sudo chown -R yourusername:yourusername /đường/dẫn/đến/thư/mục/htdocs
```

cài đặt composer trên linux debian:
đầu tiên: truy cập vào thư mục của xampp, và cài composer :

``` dcviet@dcviet:~$ ./bin/php composer.phar ```

-ở đây mình bị lỗi vì composer.phar không tồn tại trong thư mục /opt/lampp. 
=> nên: cần tải composer (lên trang chủ composer)

Để chạy Composer trong môi trường XAMPP: tải Composer và đặt tệp composer.phar trong thư mục XAMPP: 
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```
lỗi :
```
-bash: php: command not found 
```
=> bị thiếu php

```
sudo apt update

sudo apt install php-cli php-zip unzip
```

```
dcviet@dcviet:~$ sudo apt update
[sudo] password for dcviet: 
Hit:1 http://packages.microsoft.com/repos/code stable InRelease
Hit:2 https://brave-browser-apt-release.s3.brave.com stable InRelease          
Hit:3 http://deb.debian.org/debian bookworm InRelease                          
Get:4 http://deb.debian.org/debian bookworm-updates InRelease [52.1 kB]        
Hit:5 http://security.debian.org/debian-security bookworm-security InRelease   
Ign:6 http://repo.mongodb.org/apt/debian bullseye/mongodb-org/6.0 InRelease    
Ign:7 http://repo.mongodb.org/apt/debian buster/mongodb-org/7.0 InRelease      
Hit:8 https://download.sublimetext.com apt/dev/ InRelease                      
Hit:9 http://repo.mongodb.org/apt/debian bullseye/mongodb-org/6.0 Release      
Hit:11 http://repo.mongodb.org/apt/debian buster/mongodb-org/7.0 Release
Fetched 52.1 kB in 2s (24.3 kB/s)
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
6 packages can be upgraded. Run 'apt list --upgradable' to see them.
W: http://repo.mongodb.org/apt/debian/dists/buster/mongodb-org/7.0/Release.gpg: Key is stored in legacy trusted.gpg keyring (/etc/apt/trusted.gpg), see the DEPRECATION section in apt-key(8) for details.
dcviet@dcviet:~$ sudo apt install php-cli php-zip unzip
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
unzip is already the newest version (6.0-28).
The following packages were automatically installed and are no longer required:
  libxnvctrl0 linux-headers-6.1.0-10-amd64 linux-headers-6.1.0-10-common
  linux-headers-6.1.0-11-amd64 linux-headers-6.1.0-11-common
  linux-image-6.1.0-10-amd64 linux-image-6.1.0-11-amd64
  linux-image-6.1.0-9-amd64
Use 'sudo apt autoremove' to remove them.
The following additional packages will be installed:
  libzip4 php-common php8.2-cli php8.2-common php8.2-opcache php8.2-readline
  php8.2-zip
Suggested packages:
  php-pear
The following NEW packages will be installed:
  libzip4 php-cli php-common php-zip php8.2-cli php8.2-common php8.2-opcache
  php8.2-readline php8.2-zip
0 upgraded, 9 newly installed, 0 to remove and 6 not upgraded.
Need to get 2,859 kB of archives.
After this operation, 15.8 MB of additional disk space will be used.
Do you want to continue? [Y/n] y
Get:1 http://deb.debian.org/debian bookworm/main amd64 libzip4 amd64 1.7.3-1+b1 [55.5 kB]
Get:2 http://deb.debian.org/debian bookworm/main amd64 php-common all 2:93 [13.1 kB]
Get:3 http://deb.debian.org/debian bookworm/main amd64 php8.2-common amd64 8.2.7-1~deb12u1 [668 kB]
Get:4 http://deb.debian.org/debian bookworm/main amd64 php8.2-opcache amd64 8.2.7-1~deb12u1 [344 kB]
Get:5 http://deb.debian.org/debian bookworm/main amd64 php8.2-readline amd64 8.2.7-1~deb12u1 [12.4 kB]
Get:6 http://deb.debian.org/debian bookworm/main amd64 php8.2-cli amd64 8.2.7-1~deb12u1 [1,732 kB]
Get:7 http://deb.debian.org/debian bookworm/main amd64 php-cli all 2:8.2+93 [4,108 B]
Get:8 http://deb.debian.org/debian bookworm/main amd64 php8.2-zip amd64 8.2.7-1~deb12u1 [26.1 kB]
Get:9 http://deb.debian.org/debian bookworm/main amd64 php-zip all 2:8.2+93 [3,656 B]
Fetched 2,859 kB in 1s (4,484 kB/s)
Selecting previously unselected package libzip4:amd64.
(Reading database ... 269885 files and directories currently installed.)
Preparing to unpack .../0-libzip4_1.7.3-1+b1_amd64.deb ...
Unpacking libzip4:amd64 (1.7.3-1+b1) ...
Selecting previously unselected package php-common.
Preparing to unpack .../1-php-common_2%3a93_all.deb ...
Unpacking php-common (2:93) ...
Selecting previously unselected package php8.2-common.
Preparing to unpack .../2-php8.2-common_8.2.7-1~deb12u1_amd64.deb ...
Unpacking php8.2-common (8.2.7-1~deb12u1) ...
Selecting previously unselected package php8.2-opcache.
Preparing to unpack .../3-php8.2-opcache_8.2.7-1~deb12u1_amd64.deb ...
Unpacking php8.2-opcache (8.2.7-1~deb12u1) ...
Selecting previously unselected package php8.2-readline.
Preparing to unpack .../4-php8.2-readline_8.2.7-1~deb12u1_amd64.deb ...
Unpacking php8.2-readline (8.2.7-1~deb12u1) ...
Selecting previously unselected package php8.2-cli.
Preparing to unpack .../5-php8.2-cli_8.2.7-1~deb12u1_amd64.deb ...
Unpacking php8.2-cli (8.2.7-1~deb12u1) ...
Selecting previously unselected package php-cli.
Preparing to unpack .../6-php-cli_2%3a8.2+93_all.deb ...
Unpacking php-cli (2:8.2+93) ...
Selecting previously unselected package php8.2-zip.
Preparing to unpack .../7-php8.2-zip_8.2.7-1~deb12u1_amd64.deb ...
Unpacking php8.2-zip (8.2.7-1~deb12u1) ...
Selecting previously unselected package php-zip.
Preparing to unpack .../8-php-zip_2%3a8.2+93_all.deb ...
Unpacking php-zip (2:8.2+93) ...
Setting up php-common (2:93) ...
Created symlink /etc/systemd/system/timers.target.wants/phpsessionclean.timer → 
/lib/systemd/system/phpsessionclean.timer.
Setting up php8.2-common (8.2.7-1~deb12u1) ...

Creating config file /etc/php/8.2/mods-available/calendar.ini with new version

Creating config file /etc/php/8.2/mods-available/ctype.ini with new version

Creating config file /etc/php/8.2/mods-available/exif.ini with new version

Creating config file /etc/php/8.2/mods-available/fileinfo.ini with new version

Creating config file /etc/php/8.2/mods-available/ffi.ini with new version

Creating config file /etc/php/8.2/mods-available/ftp.ini with new version

Creating config file /etc/php/8.2/mods-available/gettext.ini with new version

Creating config file /etc/php/8.2/mods-available/iconv.ini with new version

Creating config file /etc/php/8.2/mods-available/pdo.ini with new version

Creating config file /etc/php/8.2/mods-available/phar.ini with new version

Creating config file /etc/php/8.2/mods-available/posix.ini with new version

Creating config file /etc/php/8.2/mods-available/shmop.ini with new version

Creating config file /etc/php/8.2/mods-available/sockets.ini with new version

Creating config file /etc/php/8.2/mods-available/sysvmsg.ini with new version

Creating config file /etc/php/8.2/mods-available/sysvsem.ini with new version

Creating config file /etc/php/8.2/mods-available/sysvshm.ini with new version

Creating config file /etc/php/8.2/mods-available/tokenizer.ini with new version
Setting up php8.2-opcache (8.2.7-1~deb12u1) ...

Creating config file /etc/php/8.2/mods-available/opcache.ini with new version
Setting up libzip4:amd64 (1.7.3-1+b1) ...
Setting up php8.2-readline (8.2.7-1~deb12u1) ...

Creating config file /etc/php/8.2/mods-available/readline.ini with new version
Setting up php8.2-cli (8.2.7-1~deb12u1) ...
update-alternatives: using /usr/bin/php8.2 to provide /usr/bin/php (php) in auto
 mode
update-alternatives: using /usr/bin/phar8.2 to provide /usr/bin/phar (phar) in a
uto mode
update-alternatives: using /usr/bin/phar.phar8.2 to provide /usr/bin/phar.phar (
phar.phar) in auto mode

Creating config file /etc/php/8.2/cli/php.ini with new version
Setting up php8.2-zip (8.2.7-1~deb12u1) ...

Creating config file /etc/php/8.2/mods-available/zip.ini with new version
Setting up php-cli (2:8.2+93) ...
update-alternatives: using /usr/bin/php.default to provide /usr/bin/php (php) in
 auto mode
update-alternatives: using /usr/bin/phar.default to provide /usr/bin/phar (phar)
 in auto mode
update-alternatives: using /usr/bin/phar.phar.default to provide /usr/bin/phar.p
har (phar.phar) in auto mode
Setting up php-zip (2:8.2+93) ...
Processing triggers for man-db (2.11.2-2) ...
Processing triggers for libc-bin (2.36-9+deb12u3) ...
Processing triggers for php8.2-cli (8.2.7-1~deb12u1) ...
dcviet@dcviet:
```

theo link từ trang chủ composer, cài vào: 
```
dcviet@dcviet:~$ sudo php composer-setup.php --install-dir=/opt/lampp/bin --filename=composer
All settings correct for using Composer
Downloading...

Composer (version 2.6.5) successfully installed to: /opt/lampp/bin/composer
Use it: php /opt/lampp/bin/composer

dcviet@dcviet:~$ 
```
tạo dự án laravel :
``` 
dcviet@dcviet:/opt/lampp/htdocs$ sudo composer create-project laravel/laravel w2-oss-01-test
[sudo] password for dcviet: 
Do not run Composer as root/super user! See https://getcomposer.org/root for details
Continue as root/super user [yes]? y 
Creating a "laravel/laravel" project at "./w2-oss-01-test"
Installing laravel/laravel (v10.2.6)
  - Installing laravel/laravel (v10.2.6): Extracting archive
Created project in /opt/lampp/htdocs/w2-oss-01-test
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies
Lock file operations: 110 installs, 0 updates, 0 removals
  - Locking brick/math (0.11.0)
  - Locking dflydev/dot-access-data (v3.0.2)
  - Locking doctrine/inflector (2.0.8)
  - Locking doctrine/lexer (3.0.0)
  - Locking dragonmantank/cron-expression (v3.3.3)
  - Locking egulias/email-validator (4.0.2)
  - Locking fakerphp/faker (v1.23.0)
  - Locking filp/whoops (2.15.3)
  - Locking fruitcake/php-cors (v1.3.0)
  - Locking graham-campbell/result-type (v1.1.1)
  - Locking guzzlehttp/guzzle (7.8.0)
  - Locking guzzlehttp/promises (2.0.1)
  - Locking guzzlehttp/psr7 (2.6.1)
  - Locking guzzlehttp/uri-template (v1.0.2)
  - Locking hamcrest/hamcrest-php (v2.0.1)
  - Locking laravel/framework (v10.28.0)
  - Locking laravel/pint (v1.13.3)
  - Locking laravel/prompts (v0.1.11)
  - Locking laravel/sail (v1.25.0)
  - Locking laravel/sanctum (v3.3.1)
  - Locking laravel/serializable-closure (v1.3.1)
  - Locking laravel/tinker (v2.8.2)
  - Locking league/commonmark (2.4.1)
  - Locking league/config (v1.2.0)
  - Locking league/flysystem (3.17.0)
  - Locking league/flysystem-local (3.16.0)
  - Locking league/mime-type-detection (1.13.0)
  - Locking mockery/mockery (1.6.6)
  - Locking monolog/monolog (3.4.0)
  - Locking myclabs/deep-copy (1.11.1)
  - Locking nesbot/carbon (2.71.0)
  - Locking nette/schema (v1.2.5)
  - Locking nette/utils (v4.0.2)
  - Locking nikic/php-parser (v4.17.1)
  - Locking nunomaduro/collision (v7.10.0)
  - Locking nunomaduro/termwind (v1.15.1)
  - Locking phar-io/manifest (2.0.3)
  - Locking phar-io/version (3.2.1)
  - Locking phpoption/phpoption (1.9.1)
  - Locking phpunit/php-code-coverage (10.1.7)
  - Locking phpunit/php-file-iterator (4.1.0)
  - Locking phpunit/php-invoker (4.0.0)
  - Locking phpunit/php-text-template (3.0.1)
  - Locking phpunit/php-timer (6.0.0)
  - Locking phpunit/phpunit (10.4.1)
  - Locking psr/clock (1.0.0)
  - Locking psr/container (2.0.2)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.3)
  - Locking psr/http-factory (1.0.2)
  - Locking psr/http-message (2.0)
  - Locking psr/log (3.0.0)
  - Locking psr/simple-cache (3.0.0)
  - Locking psy/psysh (v0.11.21)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/collection (2.0.0)
  - Locking ramsey/uuid (4.7.4)
  - Locking sebastian/cli-parser (2.0.0)
  - Locking sebastian/code-unit (2.0.0)
  - Locking sebastian/code-unit-reverse-lookup (3.0.0)
  - Locking sebastian/comparator (5.0.1)
  - Locking sebastian/complexity (3.1.0)
  - Locking sebastian/diff (5.0.3)
  - Locking sebastian/environment (6.0.1)
  - Locking sebastian/exporter (5.1.1)
  - Locking sebastian/global-state (6.0.1)
  - Locking sebastian/lines-of-code (2.0.1)
  - Locking sebastian/object-enumerator (5.0.0)
  - Locking sebastian/object-reflector (3.0.0)
  - Locking sebastian/recursion-context (5.0.0)
  - Locking sebastian/type (4.0.0)
  - Locking sebastian/version (4.0.1)
  - Locking spatie/backtrace (1.5.3)
  - Locking spatie/flare-client-php (1.4.2)
  - Locking spatie/ignition (1.11.2)
  - Locking spatie/laravel-ignition (2.3.1)
  - Locking symfony/console (v6.3.4)
  - Locking symfony/css-selector (v6.3.2)
  - Locking symfony/deprecation-contracts (v3.3.0)
  - Locking symfony/error-handler (v6.3.5)
  - Locking symfony/event-dispatcher (v6.3.2)
  - Locking symfony/event-dispatcher-contracts (v3.3.0)
  - Locking symfony/finder (v6.3.5)
  - Locking symfony/http-foundation (v6.3.5)
  - Locking symfony/http-kernel (v6.3.5)
  - Locking symfony/mailer (v6.3.5)
  - Locking symfony/mime (v6.3.5)
  - Locking symfony/polyfill-ctype (v1.28.0)
  - Locking symfony/polyfill-intl-grapheme (v1.28.0)
  - Locking symfony/polyfill-intl-idn (v1.28.0)
  - Locking symfony/polyfill-intl-normalizer (v1.28.0)
  - Locking symfony/polyfill-mbstring (v1.28.0)
  - Locking symfony/polyfill-php72 (v1.28.0)
  - Locking symfony/polyfill-php80 (v1.28.0)
  - Locking symfony/polyfill-php83 (v1.28.0)
  - Locking symfony/polyfill-uuid (v1.28.0)
  - Locking symfony/process (v6.3.4)
  - Locking symfony/routing (v6.3.5)
  - Locking symfony/service-contracts (v3.3.0)
  - Locking symfony/string (v6.3.5)
  - Locking symfony/translation (v6.3.3)
  - Locking symfony/translation-contracts (v3.3.0)
  - Locking symfony/uid (v6.3.0)
  - Locking symfony/var-dumper (v6.3.5)
  - Locking symfony/yaml (v6.3.3)
  - Locking theseer/tokenizer (1.2.1)
  - Locking tijsverkoyen/css-to-inline-styles (2.2.6)
  - Locking vlucas/phpdotenv (v5.5.0)
  - Locking voku/portable-ascii (2.0.1)
  - Locking webmozart/assert (1.11.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 110 installs, 0 updates, 0 removals
  - Downloading doctrine/inflector (2.0.8)
  - Downloading doctrine/lexer (3.0.0)
  - Downloading symfony/polyfill-ctype (v1.28.0)
  - Downloading webmozart/assert (1.11.0)
  - Downloading dragonmantank/cron-expression (v3.3.3)
  - Downloading symfony/deprecation-contracts (v3.3.0)
  - Downloading psr/container (2.0.2)
  - Downloading fakerphp/faker (v1.23.0)
  - Downloading symfony/polyfill-php80 (v1.28.0)
  - Downloading symfony/polyfill-php83 (v1.28.0)
  - Downloading symfony/polyfill-mbstring (v1.28.0)
  - Downloading symfony/http-foundation (v6.3.5)
  - Downloading fruitcake/php-cors (v1.3.0)
  - Downloading psr/http-message (2.0)
  - Downloading psr/http-client (1.0.3)
  - Downloading ralouphie/getallheaders (3.0.3)
  - Downloading psr/http-factory (1.0.2)
  - Downloading guzzlehttp/psr7 (2.6.1)
  - Downloading guzzlehttp/promises (2.0.1)
  - Downloading guzzlehttp/guzzle (7.8.0)
  - Downloading guzzlehttp/uri-template (v1.0.2)
  - Downloading laravel/pint (v1.13.3)
  - Downloading symfony/polyfill-intl-normalizer (v1.28.0)
  - Downloading symfony/polyfill-intl-grapheme (v1.28.0)
  - Downloading symfony/string (v6.3.5)
  - Downloading symfony/service-contracts (v3.3.0)
  - Downloading symfony/console (v6.3.4)
  - Downloading voku/portable-ascii (2.0.1)
  - Downloading phpoption/phpoption (1.9.1)
  - Downloading graham-campbell/result-type (v1.1.1)
  - Downloading vlucas/phpdotenv (v5.5.0)
  - Downloading symfony/css-selector (v6.3.2)
  - Downloading tijsverkoyen/css-to-inline-styles (2.2.6)
  - Downloading symfony/var-dumper (v6.3.5)
  - Downloading symfony/polyfill-uuid (v1.28.0)
  - Downloading symfony/uid (v6.3.0)
  - Downloading symfony/routing (v6.3.5)
  - Downloading symfony/process (v6.3.4)
  - Downloading symfony/polyfill-php72 (v1.28.0)
  - Downloading symfony/polyfill-intl-idn (v1.28.0)
  - Downloading symfony/mime (v6.3.5)
  - Downloading psr/event-dispatcher (1.0.0)
  - Downloading symfony/event-dispatcher-contracts (v3.3.0)
  - Downloading symfony/event-dispatcher (v6.3.2)
  - Downloading psr/log (3.0.0)
  - Downloading egulias/email-validator (4.0.2)
  - Downloading symfony/mailer (v6.3.5)
  - Downloading symfony/error-handler (v6.3.5)
  - Downloading symfony/http-kernel (v6.3.5)
  - Downloading symfony/finder (v6.3.5)
  - Downloading ramsey/collection (2.0.0)
  - Downloading brick/math (0.11.0)
  - Downloading ramsey/uuid (4.7.4)
  - Downloading psr/simple-cache (3.0.0)
  - Downloading nunomaduro/termwind (v1.15.1)
  - Downloading symfony/translation-contracts (v3.3.0)
  - Downloading symfony/translation (v6.3.3)
  - Downloading psr/clock (1.0.0)
  - Downloading nesbot/carbon (2.71.0)
  - Downloading monolog/monolog (3.4.0)
  - Downloading league/mime-type-detection (1.13.0)
  - Downloading league/flysystem (3.17.0)
  - Downloading league/flysystem-local (3.16.0)
  - Downloading nette/utils (v4.0.2)
  - Downloading nette/schema (v1.2.5)
  - Downloading dflydev/dot-access-data (v3.0.2)
  - Downloading league/config (v1.2.0)
  - Downloading league/commonmark (2.4.1)
  - Downloading laravel/serializable-closure (v1.3.1)
  - Downloading laravel/prompts (v0.1.11)
  - Downloading laravel/framework (v10.28.0)
  - Downloading symfony/yaml (v6.3.3)
  - Downloading laravel/sail (v1.25.0)
  - Downloading laravel/sanctum (v3.3.1)
  - Downloading nikic/php-parser (v4.17.1)
  - Downloading psy/psysh (v0.11.21)
  - Downloading laravel/tinker (v2.8.2)
  - Downloading hamcrest/hamcrest-php (v2.0.1)
  - Downloading mockery/mockery (1.6.6)
  - Downloading filp/whoops (2.15.3)
  - Downloading nunomaduro/collision (v7.10.0)
  - Downloading sebastian/version (4.0.1)
  - Downloading sebastian/type (4.0.0)
  - Downloading sebastian/recursion-context (5.0.0)
  - Downloading sebastian/object-reflector (3.0.0)
  - Downloading sebastian/object-enumerator (5.0.0)
  - Downloading sebastian/global-state (6.0.1)
  - Downloading sebastian/exporter (5.1.1)
  - Downloading sebastian/environment (6.0.1)
  - Downloading sebastian/diff (5.0.3)
  - Downloading sebastian/comparator (5.0.1)
  - Downloading sebastian/code-unit (2.0.0)
  - Downloading sebastian/cli-parser (2.0.0)
  - Downloading phpunit/php-timer (6.0.0)
  - Downloading phpunit/php-text-template (3.0.1)
  - Downloading phpunit/php-invoker (4.0.0)
  - Downloading phpunit/php-file-iterator (4.1.0)
  - Downloading theseer/tokenizer (1.2.1)
  - Downloading sebastian/lines-of-code (2.0.1)
  - Downloading sebastian/complexity (3.1.0)
  - Downloading sebastian/code-unit-reverse-lookup (3.0.0)
  - Downloading phpunit/php-code-coverage (10.1.7)
  - Downloading phar-io/version (3.2.1)
  - Downloading phar-io/manifest (2.0.3)
  - Downloading myclabs/deep-copy (1.11.1)
  - Downloading phpunit/phpunit (10.4.1)
  - Downloading spatie/backtrace (1.5.3)
  - Downloading spatie/flare-client-php (1.4.2)
  - Downloading spatie/ignition (1.11.2)
  - Downloading spatie/laravel-ignition (2.3.1)
  - Installing doctrine/inflector (2.0.8): Extracting archive
  - Installing doctrine/lexer (3.0.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.28.0): Extracting archive
  - Installing webmozart/assert (1.11.0): Extracting archive
  - Installing dragonmantank/cron-expression (v3.3.3): Extracting archive
  - Installing symfony/deprecation-contracts (v3.3.0): Extracting archive
  - Installing psr/container (2.0.2): Extracting archive
  - Installing fakerphp/faker (v1.23.0): Extracting archive
  - Installing symfony/polyfill-php80 (v1.28.0): Extracting archive
  - Installing symfony/polyfill-php83 (v1.28.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.28.0): Extracting archive
  - Installing symfony/http-foundation (v6.3.5): Extracting archive
  - Installing fruitcake/php-cors (v1.3.0): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.0.2): Extracting archive
  - Installing guzzlehttp/psr7 (2.6.1): Extracting archive
  - Installing guzzlehttp/promises (2.0.1): Extracting archive
  - Installing guzzlehttp/guzzle (7.8.0): Extracting archive
  - Installing guzzlehttp/uri-template (v1.0.2): Extracting archive
  - Installing laravel/pint (v1.13.3): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.28.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.28.0): Extracting archive
  - Installing symfony/string (v6.3.5): Extracting archive
  - Installing symfony/service-contracts (v3.3.0): Extracting archive
  - Installing symfony/console (v6.3.4): Extracting archive
  - Installing voku/portable-ascii (2.0.1): Extracting archive
  - Installing phpoption/phpoption (1.9.1): Extracting archive
  - Installing graham-campbell/result-type (v1.1.1): Extracting archive
  - Installing vlucas/phpdotenv (v5.5.0): Extracting archive
  - Installing symfony/css-selector (v6.3.2): Extracting archive
  - Installing tijsverkoyen/css-to-inline-styles (2.2.6): Extracting archive
  - Installing symfony/var-dumper (v6.3.5): Extracting archive
  - Installing symfony/polyfill-uuid (v1.28.0): Extracting archive
  - Installing symfony/uid (v6.3.0): Extracting archive
  - Installing symfony/routing (v6.3.5): Extracting archive
  - Installing symfony/process (v6.3.4): Extracting archive
  - Installing symfony/polyfill-php72 (v1.28.0): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.28.0): Extracting archive
  - Installing symfony/mime (v6.3.5): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.3.0): Extracting archive
  - Installing symfony/event-dispatcher (v6.3.2): Extracting archive
  - Installing psr/log (3.0.0): Extracting archive
  - Installing egulias/email-validator (4.0.2): Extracting archive
  - Installing symfony/mailer (v6.3.5): Extracting archive
  - Installing symfony/error-handler (v6.3.5): Extracting archive
  - Installing symfony/http-kernel (v6.3.5): Extracting archive
  - Installing symfony/finder (v6.3.5): Extracting archive
  - Installing ramsey/collection (2.0.0): Extracting archive
  - Installing brick/math (0.11.0): Extracting archive
  - Installing ramsey/uuid (4.7.4): Extracting archive
  - Installing psr/simple-cache (3.0.0): Extracting archive
  - Installing nunomaduro/termwind (v1.15.1): Extracting archive
  - Installing symfony/translation-contracts (v3.3.0): Extracting archive
  - Installing symfony/translation (v6.3.3): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing nesbot/carbon (2.71.0): Extracting archive
  - Installing monolog/monolog (3.4.0): Extracting archive
  - Installing league/mime-type-detection (1.13.0): Extracting archive
  - Installing league/flysystem (3.17.0): Extracting archive
  - Installing league/flysystem-local (3.16.0): Extracting archive
  - Installing nette/utils (v4.0.2): Extracting archive
  - Installing nette/schema (v1.2.5): Extracting archive
  - Installing dflydev/dot-access-data (v3.0.2): Extracting archive
  - Installing league/config (v1.2.0): Extracting archive
  - Installing league/commonmark (2.4.1): Extracting archive
  - Installing laravel/serializable-closure (v1.3.1): Extracting archive
  - Installing laravel/prompts (v0.1.11): Extracting archive
  - Installing laravel/framework (v10.28.0): Extracting archive
  - Installing symfony/yaml (v6.3.3): Extracting archive
  - Installing laravel/sail (v1.25.0): Extracting archive
  - Installing laravel/sanctum (v3.3.1): Extracting archive
  - Installing nikic/php-parser (v4.17.1): Extracting archive
  - Installing psy/psysh (v0.11.21): Extracting archive
  - Installing laravel/tinker (v2.8.2): Extracting archive
  - Installing hamcrest/hamcrest-php (v2.0.1): Extracting archive
  - Installing mockery/mockery (1.6.6): Extracting archive
  - Installing filp/whoops (2.15.3): Extracting archive
  - Installing nunomaduro/collision (v7.10.0): Extracting archive
  - Installing sebastian/version (4.0.1): Extracting archive
  - Installing sebastian/type (4.0.0): Extracting archive
  - Installing sebastian/recursion-context (5.0.0): Extracting archive
  - Installing sebastian/object-reflector (3.0.0): Extracting archive
  - Installing sebastian/object-enumerator (5.0.0): Extracting archive
  - Installing sebastian/global-state (6.0.1): Extracting archive
  - Installing sebastian/exporter (5.1.1): Extracting archive
  - Installing sebastian/environment (6.0.1): Extracting archive
  - Installing sebastian/diff (5.0.3): Extracting archive
  - Installing sebastian/comparator (5.0.1): Extracting archive
  - Installing sebastian/code-unit (2.0.0): Extracting archive
  - Installing sebastian/cli-parser (2.0.0): Extracting archive
  - Installing phpunit/php-timer (6.0.0): Extracting archive
  - Installing phpunit/php-text-template (3.0.1): Extracting archive
  - Installing phpunit/php-invoker (4.0.0): Extracting archive
  - Installing phpunit/php-file-iterator (4.1.0): Extracting archive
  - Installing theseer/tokenizer (1.2.1): Extracting archive
  - Installing sebastian/lines-of-code (2.0.1): Extracting archive
  - Installing sebastian/complexity (3.1.0): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (3.0.0): Extracting archive
  - Installing phpunit/php-code-coverage (10.1.7): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.3): Extracting archive
  - Installing myclabs/deep-copy (1.11.1): Extracting archive
  - Installing phpunit/phpunit (10.4.1): Extracting archive
  - Installing spatie/backtrace (1.5.3): Extracting archive
  - Installing spatie/flare-client-php (1.4.2): Extracting archive
  - Installing spatie/ignition (1.11.2): Extracting archive
  - Installing spatie/laravel-ignition (2.3.1): Extracting archive
55 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.  

  laravel/sail ................................................................................. DONE
  laravel/sanctum .............................................................................. DONE
  laravel/tinker ............................................................................... DONE
  nesbot/carbon ................................................................................ DONE
  nunomaduro/collision ......................................................................... DONE
  nunomaduro/termwind .......................................................................... DONE
  spatie/laravel-ignition ...................................................................... DONE

82 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].  

No security vulnerability advisories found.
> @php artisan key:generate --ansi

   INFO  Application key set successfully.  

dcviet@dcviet:/opt/lampp/htdocs$ 
```
