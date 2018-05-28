https://github.com/hexschool/TheF2E/wiki/API-DOC

牛刀小試

檢查報名人數QQ


可以用curl來檢查api


```sh
curl -X POST \
-H "Content-Type: application/json" \
-d '{"email":""}' \
https://www.thef2e.com/api/isSignUp
```

postman也不錯用

