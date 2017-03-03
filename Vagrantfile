# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|

  config.vm.box = "bento/centos-6.7"

    config.vm.box_check_update = false

    config.vm.network "private_network", ip: "192.168.5.111"

    config.vm.hostname = "bitrix-dev"
    config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"

    config.vm.provider "virtualbox" do |v|
      v.name = "bitrix-dev"
      v.memory = 1024
      v.cpus = 1
    end

    config.vm.provider "virtualbox" do |v, override|
            override.vm.synced_folder "./www", "/home/bitrix/www",
                owner: "www-data", group: "www-data",
                mount_options: ["dmode=775,fmode=664"]
    end

    config.vm.provision :shell, :path => "./bitrix-env.sh"
    config.vm.provision :shell, :path => "./update-env.sh"
end
