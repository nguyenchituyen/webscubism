#!/bin/bash
WEB_DIR=/var/www
ADMINER_FILE=/var/www/adminer.php
ADMINER_GZ=/var/www/adminer.php.gz

###########################################################################
downloadFile () {
    local linkDownload=$1
    local fileName=$2
    if [ -f $fileName ];
    then
        echo "$fileName is downloaded"
    else
        echo "Start download $fileName"
        wget $linkDownload -O $fileName
    fi
}
###########################################################################
echo '*******************'
echo 'setup adminer'
echo '*******************'

if [ -f $ADMINER_FILE ];
then
  echo 'Adminer installed before'
else
  echo 'Adminer is installing'
  downloadFile https://raw.githubusercontent.com/tyanhly/adminer/master/adminer.php.gz $ADMINER_GZ
  cd $WEB_DIR && tar -xzf adminer.php.gz

  cat << EOF >  /etc/httpd/conf.d/adminer.conf
  Alias "/adminer" "$ADMINER_FILE"

EOF
fi

/bin/systemctl restart  httpd.service