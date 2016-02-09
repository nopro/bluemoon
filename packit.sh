#!/bin/sh
# build extension package

ARCHFILE=../NoPro_Bluemoon-1.0.1.0.tgz
ARCHDATE=@$(date -d '20160208 1902' +%s)
SKIPS="package.xml.tpl $(basename $0)"

export CONT=$(php ../mod-contents.php $SKIPS) 
awk '/^[ 	]*<contents>/ { print "    " ENVIRON["CONT"]; next; };{print;}' package.xml.tpl > package.xml

touch -d $ARCHDATE package.xml $(find app)
tar -czf $ARCHFILE package.xml app
