# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.box = "hhvm"
  #config.vm.box_url = "boxfile/hhvm.box"
  config.vm.box_url = "https://dl.dropboxusercontent.com/s/vz8x4zboayzfu20/hhvm.box"
  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.vm.network :forwarded_port, guest: 8000, host: 8100
  config.vm.network :private_network, ip: "192.168.89.89"
  config.vm.synced_folder "./", "/vagrant",
    :owner => "vagrant",
    :group => "vagrant",
    :mount_options => ["dmode=777,fmode=777"],
    disabled:true

  config.vm.provider :virtualbox do |vb|
    vb.name = "HHVM-WORDPRESS"
    vb.customize ["modifyvm", :id, "--memory", "1024"]
    vb.customize ["modifyvm", :id, "--ostype", "Ubuntu_64"]
    vb.gui = false
  end

end
