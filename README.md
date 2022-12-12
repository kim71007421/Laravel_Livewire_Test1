# Laravel_Livewire_Test1
라라벨 Livewire 테스트1

# 카카오 미러
sudo vi /etc/apt/sources.list

:%s/ap-northeast-2.ec2.archive.ubuntu.com/mirror.kakao.com/

apt update

# 
sudo apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 키코드
wget -q -O - https://packages.cloudfoundry.org/debian/cli.cloudfoundry.org.key | sudo apt-key add -

curl https://cli-assets.heroku.com/apt/release.key | sudo apt-key add -
wget -q -O - https://packages.cloudfoundry.org/debian/cli.cloudfoundry.org.key | apt-key add -

# Install PHP as Apache Module
sudo apt install php8.1 libapache2-mod-php8.0 -y

sudo apt install php8.1-{bcmath,bz2,cgi,cli,curl,decimal,dev,fpm,gd,gmp,grpc,http,mbstring,mcrypt,mysql,opcache,psr,readline,swoole,tidy,uuid,xdebug,xml,xmlrpc,zip,xsl,raphf} -y

sudo apt install php8.2 libapache2-mod-php8.2 -y
sudo apt install php8.2-{bcmath,bz2,cgi,cli,curl,decimal,dev,fpm,gd,gmp,grpc,http,mbstring,mcrypt,mysql,opcache,psr,readline,swoole,tidy,uuid,xdebug,xml,xmlrpc,zip,xsl,raphf} -y

apt purge php7.3

https://yorublog.tistory.com/68

# Configure Apache with PHP-FPM
sudo apt update

sudo apt install libapache2-mod-fcgid

sudo a2enmod proxy_fcgi setenvif

sudo a2enconf php8.0-fpm

# JIT 설정
JIT 컴파일러가 사용하도록 할당 된 메모리
opcache.enable=1
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


# Laravel 설치
composer global require laravel/installer

composer create-project --prefer-dist laravel/laravel livewire

# Mysql 캐릭터셋 설정
[client]
default-character-set=utf8

[mysql]
default-character-set=utf8

[mysqld]
collation-server = utf8_unicode_ci
init-connect='SET NAMES utf8'
character-set-server = utf8


[client]
default-character-set = utf8mb4

[mysql]
default-character-set = utf8mb4

[mysqld]
character-set-client-handshake = FALSE
character-set-server = utf8mb4
collation-server = utf8mb4_unicode_ci

/etc/init.d/mysql restart

# Install Livewire
composer require livewire/livewire

# node js 16.x
curl -sL https://deb.nodesource.com/setup_16.x | sudo -E bash -

apt-get install -y nodejs

# tailwindcss
npm install -D laravel-mix@latest tailwindcss@latest postcss@latest autoprefixer@latest @tailwindcss/jit

npx tailwindcss init

npm update

***************************************************************************************************
https 연결오류
assets/app.css 
assets/app.js

use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
    public function boot(UrlGenerator $url)
    {
        $url->forceScheme('https');
    }
}
***************************************************************************************************
