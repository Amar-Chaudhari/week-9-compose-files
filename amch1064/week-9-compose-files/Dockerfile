FROM centos:7
MAINTAINER Amar

RUN rpm --import http://mirror.centos.org/centos/RPM-GPG-KEY-CentOS-7 \
    && rpm --import http://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7 \
    && yum -y install epel-release.noarch

RUN yum -y install \
    httpd \
    mysql-devel \
    mysql-libs \
    mod_ssl \
    php \
    php-cli \
    php-imap \
    php-ldap \
    php-mbstring \
    php-mcrypt \
    php-mysql \
    php-pear-MDB2-Driver-mysqli \
    php-pecl-memcached \
    php-tidy \
    php-xml \
    php-gd \
    msmtp \
    && yum -y update bash \
    && rm -rf /var/cache/yum/* \
    && yum clean all

RUN ln -sf /usr/share/zoneinfo/UTC /etc/localtime \
    && echo "NETWORKING=yes" > /etc/sysconfig/network

# Global Apache configuration changes
#
RUN sed -i \
    -e 's~^ServerSignature On$~ServerSignature Off~g' \
    -e 's~^ServerTokens OS$~ServerTokens Prod~g' \
    -e 's~^#ExtendedStatus On$~ExtendedStatus On~g' \
    -e 's~^DirectoryIndex \(.*\)$~DirectoryIndex \1 index.php~g' \
    -e 's~^NameVirtualHost \(.*\)$~#NameVirtualHost \1~g' \
    /etc/httpd/conf/httpd.conf

RUN rm -rf /sbin/sln \
    ; rm -rf /usr/{{lib,share}/locale,share/{man,doc,info,gnome/help,cracklib,il8n},{lib,lib64}/gconv,bin/localedef,sbin/build-locale-archive} \
    ; rm -rf /var/cache/{ldconfig,yum}/*

EXPOSE 80

CMD /usr/sbin/httpd -c "ErrorLog /dev/stdout" -DFOREGROUND