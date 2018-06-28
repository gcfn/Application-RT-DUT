#!/bin/bash
sudo echo -e "# This file describes the network interfaces available on your system
# and how to activate them. For more information, see interfaces(5).

source /etc/network/interfaces.d/*

# The loopback network interface
auto lo
iface lo inet loopback\n" > /etc/network/interfaces
sudo echo -e "auto $1\niface $1 inet static\naddress $2" >> /etc/network/interfaces
sudo echo -e "netmask $3" >> /etc/network/interfaces
sudo echo -e "gateway $4" >> /etc/network/interfaces

ifdown $1
ifup $1
