# HI

現在 ubuntu 18 發覺有個好用的 timedatectl 非常方便

timedatectl 可以馬上設定時區

然後編輯一下 /etc/systemd/timesyncd.conf

[Time]
NTP= time1.google.com time2.google.com time3.google.com time4.google.com
#FallbackNTP=ntp.ubuntu.com

systemctl restart systemd-timesyncd.service

檢查一下狀態

systemctl status systemd-timesyncd.service

重新啟動一下

`$ timedatectl`
``` 
                      Local time: 四 2019-04-18 22:59:00 CST
                  Universal time: 四 2019-04-18 14:59:00 UTC
                        RTC time: 四 2019-04-18 14:59:00
                       Time zone: Asia/Taipei (CST, +0800)
       System clock synchronized: yes
systemd-timesyncd.service active: yes
                 RTC in local TZ: no

```

時間就會同步惹
