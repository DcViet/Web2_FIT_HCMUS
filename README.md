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
