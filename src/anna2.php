# Set environment variables here so they are available globally to all apps
# (and Terminal), including those launched via Spotlight.
#
# After editing this file run the following command from the terminal to update
# environment variables globally without needing to reboot.
# NOTE: You will still need to restart the relevant application (including
# Terminal) to pick up the changes!
# grep -E "^setenv" /etc/launchd.conf | xargs -t -L 1 launchctl
#
# See http://www.digitaledgesw.com/node/31
# and http://stackoverflow.com/questions/135688/setting-environment-variables-in-os-x/
#
# Note that you must hardcode the paths below, don't use environment variables.
# You also need to surround multiple values in quotes, see MAVEN_OPTS example below.
#
setenv PHP /Applications/MAMP/bin/php/php8.0.8/bin


export MAMP_PHP=/Applications/MAMP/bin/php/php8.0.8/bin
export PATH="$MAMP_PHP:$PATH"

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

//skit i denna
sudo mv composer.phar /usr/local/bin/composer

Kör phpunit
./vendor/bin/phpunit --version


