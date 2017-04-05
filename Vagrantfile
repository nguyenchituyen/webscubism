# -*- mode: ruby -*-
# vi: set ft=ruby :

# required vagrant plugins
# - vagrant-rsync-back
# - vagrant-gatling-rsync

Vagrant.configure(2) do |config|
  config.vm.box = "centos/7"
  config.vm.box_url = "https://atlas.hashicorp.com/centos/boxes/7/versions/1611.01/providers/virtualbox.box"

  config.ssh.insert_key = false

  if Vagrant.has_plugin?("vagrant-vbguest") then
    config.vbguest.auto_update = true
  end
config.vm.network "forwarded_port", guest: 80, host: 8080
config.vm.network "forwarded_port", guest: 8000, host: 8000
  config.vm.network "private_network", ip: "11.11.11.11"
  # config.vm.network "public_network"

  config.vm.synced_folder ".", "/vagrant", mount_options: ["dmode=777,fmode=777"], type: "virtualbox"
  config.vm.synced_folder ".", "/var/www/scubism", mount_options: ["dmode=777,fmode=777"], type: "virtualbox"

  config.vm.provider "virtualbox" do |vb|
    # Display the VirtualBox GUI when booting the machine
    vb.gui = false

    # Customize the amount of memory on the VM:
    vb.cpus = 2
    vb.memory = "2048"
    vb.customize ["modifyvm", :id, "--ioapic", "on"]
    vb.customize ["modifyvm", :id, "--memory", 2048]
  end

  config.vm.provision "shell", inline: <<-EOC

echo "#========================"
echo "#Setup softs"
echo "#========================"

yum install -y deltarpm

yum install -y epel-release

yum update -y

yum groupinstall "Development tools"

yum -y install git wget net-tools

rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

yum update -y

yum install -y php70w php70w-opcache php70w-mysql.x86_64 php70w-mbstring.x86_64 php70w-xml.x86_64 php70w-pdo.x86_64 mariadb-server

systemctl start mariadb

echo 'cd /vagrant' >> /home/vagrant/.bashrc
echo '/usr/sbin/setenforce 0' >> /home/vagrant/.bashrc
echo '/usr/sbin/setenforce 0' >> /root/.bashrc

echo "#========================"
echo "#Setup projects"
echo "#========================"

SOURCE_PATH="/var/www/scubism"
cd $SOURCE_PATH

if [ -f "/usr/local/bin/composer" ]; then
  echo "composer.phar is downloaded"
else
  export PATH=$PATH:/usr/local/bin
  echo 'export PATH=$PATH:/usr/local/bin' >> /root/.bashrc
  wget https://getcomposer.org/composer.phar
  mv composer.phar /usr/local/bin/composer
  chmod a+x /usr/local/bin/composer
fi

composer update --no-dev

echo "#========================"
echo "#Setup Database & migration"
echo "#========================"
mysql -uroot -e "CREATE DATABASE IF NOT EXISTS scubism"
php artisan migrate -n
php artisan db:seed -n

echo "#========================"
echo "#Setup Apache"
echo "#========================"
cat > /etc/httpd/conf.d/scubism.conf <<EOF
<VirtualHost *:80>
    ServerAdmin admin@scubism.vn
    DocumentRoot $SOURCE_PATH/public
    ServerName scubism.vn
    <Directory $SOURCE_PATH/public>
        Require all granted
        AllowOverride All
        Options -Indexes
    </Directory>

    ErrorLog /var/log/httpd/scubism.error.log
    LogLevel warn
    CustomLog /var/log/httpd/scubism.access.log combined
</VirtualHost>
EOF
/usr/sbin/setenforce 0
sed -i $"s/SELINUX=enforcing/SELINUX=disabled/g" /etc/selinux/config
/bin/systemctl restart httpd.service
/bin/systemctl restart  mariadb.service

  EOC

end