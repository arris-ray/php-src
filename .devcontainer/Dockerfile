FROM centos:centos7

RUN yum install -y https://repo.ius.io/ius-release-el7.rpm https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
  && yum remove git \
  && yum install -y \
    git236 vim-enhanced wget \
    gcc gcc-c++ make autoconf automake libtool bison re2c libxml2-devel binutils sqlite-devel readline-devel oniguruma-devel \
    valgrind \
  && yum clean all

RUN cd /tmp \
  && wget https://github.com/skvadrik/re2c/releases/download/1.0.3/re2c-1.0.3.tar.gz \
  && tar -xzf re2c-1.0.3.tar.gz \
  && cd re2c-1.0.3 \
  && ./configure \ 
  && make \
  && make install \
  && cd ~ \
  && rm -rf /tmp/re2c*