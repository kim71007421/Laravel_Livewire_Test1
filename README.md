# Laravel_Livewire_Test1
라라벨 Livewire 테스트1

# 카카오 미러
sudo vi /etc/apt/sources.list

:%s/ap-northeast-2.ec2.archive.ubuntu.com/mirror.kakao.com/

# Install PHP as Apache Module
sudo apt install php8.0 libapache2-mod-php8.0 -y

sudo apt install php8.0-{bcmath,bz2,cgi,cli,curl,decimal,dev,fpm,gd,gmp,grpc,http,mbstring,mcrypt,mysql,opcache,psr,readline,swoole,tidy,uuid,xdebug,xml,xmlrpc,zip,xsl,raphf} -y

apt purge php7.3

# Configure Apache with PHP-FPM
sudo apt update

sudo apt install libapache2-mod-fcgid

sudo a2enmod proxy_fcgi setenvif

sudo a2enconf php8.0-fpm

# JIT 설정
JIT 컴파일러가 사용하도록 할당 된 메모리

opcache.jit_buffer_size=100M

JIT 컴파일러 모드로 tracing이 기본값이며, 강력히 권고되고 있습니다. (Enabled by default and recommended for most users.)

opcache.jit=tracing

# COMPOSER 인스톨
curl -sS https://getcomposer.org/installer | php && sudo mv composer.phar /usr/local/bin/ && sudo ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

# GIT 업데이트
sudo add-apt-repository ppa:git-core/ppa -y

sudo apt-get update

sudo apt-get install git -y

git --version