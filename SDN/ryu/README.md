git tag -l


列出所有Tag


可以直接git checkout tagname

重新啟動

ryu-manager ryu.app.ofctl_rest

背景執行並持續紀錄log可以用



ryu-manager ryu.app.ofctl_rest --use-syslog --verbose >> /var/log/ryu.log 2>&1 &


[ryu-manager -h](https://github.com/osrg/ryu/blob/master/doc/source/man/ryu_manager.rst)列出所有命令

