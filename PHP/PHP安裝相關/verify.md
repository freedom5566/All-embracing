# verify

突然發覺PHP官方下載只剩下sha256驗證跟sig驗證

這邊講一下兩種驗證流程

p.s:

使用windows系統的話

如果有安裝7-zip可以直接右鍵檔案計算所有hash值


# sig

假設下載php-7.2.8.tar.gz

而且選擇的鏡像站皆是美國php.net站


`mkdir php && cd php`
把php-7.2.8.tar.gz mv進去

然後到http://php.net/distributions/php-7.2.8.tar.gz.asc

把檔案載下來副檔名要保持asc哦

載下來的asc檔案一樣放到php資料夾

`gpg --verify php-7.2.8.tar.gz.asc`

應該會看到

```
gpg: assuming signed data in `php-7.2.8.tar.gz'
gpg: Signature made 2018年07月17日 下午 02:05:08     using RSA key ID 2F9532C8
gpg: Can't check signature: public key not found
```
把2F9532C8複製下來

然後輸入

`gpg --recv-keys 2F9532C8`

會看到
```
gpg: requesting key EE5AF27F from hkp server keys.gnupg.net
gpg: /c/Users/user/.gnupg/trustdb.gpg: trustdb created
gpg: key EE5AF27F: public key "Remi Collet <remi@php.net>" imported
gpg: no ultimately trusted keys found
gpg: Total number processed: 1
gpg:               imported: 1  (RSA: 1)
```

其實做到這邊應該就能看出來沒問題了?

此時再執行一次

`gpg --verify php-7.2.8.tar.gz.asc`

```
gpg: assuming signed data in `php-7.2.8.tar.gz'
gpg: Signature made 2018年07月17日 下午 02:05:08     using RSA key ID 2F9532C8
gpg: Good signature from "Remi Collet <remi@php.net>"
gpg: WARNING: This key is not certified with a trusted signature!
gpg:          There is no indication that the signature belongs to the owner.
Primary key fingerprint: B1B4 4D8F 021E 4E2D 6021  E995 DC9F F8D3 EE5A F27F
```

這時候看http://php.net/downloads.php#gpg-7.2

會看到
```
pub   4096R/70D12172 2017-04-14 [expires: 2024-04-21]
     Key fingerprint = 1729 F839 38DA 44E2 7BA0  F4D3 DBDB 3974 70D1 2172
uid                  Sara Golemon <pollita@php.net>

pub   4096R/EE5AF27F 2017-05-24 [expires: 2024-05-22]
     Key fingerprint = B1B4 4D8F 021E 4E2D 6021  E995 DC9F F8D3 EE5A F27F
uid                  Remi Collet <remi@php.net>  
```

Primary key fingerprint可以看到是跟Key fingerprint是一樣的

# sha256驗證

很簡單

`sha256sum php-7.2.8.tar.gz`

會印出
```
a0cb9bf2f78498fc090eb553df03cdacc198785dec0818efa7a1804c2b7a8722 *php-7.2.8.tar.gz
```

可以看到跟php下載連結下面的sha256是一樣的
a0cb9bf2f78498fc090eb553df03cdacc198785dec0818efa7a1804c2b7a8722


參考資料
https://launchpad.net/+help-registry/verify-downloads.html
Sara Golemon
Remi Collet

感覺都好猛哦
