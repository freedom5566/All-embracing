git tag -l


列出所有Tag


可以直接git checkout tagname

重新啟動

ryu-manager ryu.app.ofctl_rest

持續紀錄log可以用



ryu-manager ryu.app.ofctl_rest --use-syslog --verbose >> /var/log/ryu.log 2>&1 &

