# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

    config.vm.box = "http://hub.agm/vagrant/boxes/bitrix_v1_basebox.box"
    config.vm.box_check_update = false

    config.vm.network "private_network", ip: "192.168.5.155"
    config.vm.hostname = "bitrix.dev"

    config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"

    config.vm.provider "virtualbox" do |v|
      v.name = "bitrix-dev"
      v.memory = 1024
      v.cpus = 1
    end    
    
    config.vm.synced_folder "./www", "/var/www", id: "www-data",
        owner: "www-data", group: "www-data",
        mount_options: ["dmode=775,fmode=664"]
    
    config.vm.synced_folder "./mysql", "/etc/mysql", id: "mysql",
        owner: "root", group: "root",
        mount_options: ["dmode=775,fmode=664"]
        
    config.vm.synced_folder "./nginx", "/etc/nginx", id: "nginx",
        owner: "root", group: "root",
        mount_options: ["dmode=775,fmode=664"]

    config.vm.synced_folder "./php5", "/etc/php5", id: "php5",
        owner: "root", group: "root",
        mount_options: ["dmode=775,fmode=664"]

    config.vm.provision "shell",
        inline: "apt-get install sendmail -y"

    config.vm.provision "shell", 
        inline: "service nginx restart; service php5-fpm restart", run: "always"

end
