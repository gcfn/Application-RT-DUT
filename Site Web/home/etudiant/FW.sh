#vide le FW
iptables -F

#Politiques par défaut
iptables -P INPUT DROP
iptables -P OUTPUT DROP
iptables -P FORWARD DROP

#définition des variables
$WANIF='eth1'
$LANIF='eth0'
$LANNET='192.168.1.0/24'
$LANIP='192.168.1.25'

#INPUT
iptables -A INPUT -i $WANIF -p tcp --dport 443 -j ACCEPT

#OUTPUT
iptables -A OUTPUT -o $LANIF -d $LANIP -p tcp --dport 22 -j ACCEPT
iptables -A OUTPUT -m conntrack --cstate ESTABLISHED -j ACCEPT

#FORWARD
