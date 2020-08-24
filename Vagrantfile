# -*- mode: ruby -*-
# vi: set ft=ruby :

# A Vagrantfile to set up two VMs, a webserver and a database server,
# connected together using an internal network with manually-assigned
# IP addresses for the VMs.

Vagrant.configure("2") do |config|
  # (We have used this box previously, so reusing it here should save a
  # bit of time by using a cached copy.)
  config.vm.box = "ubuntu/xenial64"

  config.vm.define "webserver" do |webserver|

    # These are options specific to the webserver VM
    webserver.vm.hostname = "webserver"
    
    # This type of port forwarding has been discussed elsewhere in
    # labs, but recall that it means that our host computer can
    # connect to IP address 127.0.0.1 port 8081, and that network
    # request will reach our webserver VM's port 80.
    webserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"
    
    # The VMs ip address
    webserver.vm.network "private_network", ip: "192.168.2.11"

    # This is needed if the project is being run on lab computers
    webserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]

    # Link to the file that contains the shell commands
    webserver.vm.provision "shell", path: "webserver.sh"
  end

  # Here is the section for defining the database server, which I have
  # named "dbserver".
  config.vm.define "dbserver" do |dbserver|

    # The name of the server
    dbserver.vm.hostname = "dbserver"

    # The VMs ip address
    dbserver.vm.network "private_network", ip: "192.168.2.12"

    # This is needed if the project is being run on lab computers
    dbserver.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    
    # Link to the file that contains the shell commands
    dbserver.vm.provision "shell", path: "dbserver.sh"
  end

  # Here is the section for defining the admin server, which I have
  # named "admin".
  config.vm.define "admin" do |admin|

    # The name of the server
    admin.vm.hostname = "admin"

    # This type of port forwarding has been discussed elsewhere in
    # labs, but recall that it means that our host computer can
    # connect to IP address 127.0.0.1 port 8081, and that network
    # request will reach our webserver VM's port 80.
    #webserver.vm.network "forwarded_port", guest: 80, host: 8081, host_ip: "127.0.0.1"

    # The VMs ip address
    admin.vm.network "private_network", ip: "192.168.2.13"

    # This is needed if the project is being run on lab computers
    admin.vm.synced_folder ".", "/vagrant", owner: "vagrant", group: "vagrant", mount_options: ["dmode=775,fmode=777"]
    
    # Link to the file that contains the shell commands
    admin.vm.provision "shell", path: "admin.sh"
  end

end

#  LocalWords:  webserver xenial64
