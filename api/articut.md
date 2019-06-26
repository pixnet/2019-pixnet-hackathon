# 卓騰語言科技
## Articut 文截 - 次世代斷詞引擎
**從文本內容自動擷取地名及地點**

1. 卓騰語言科技提供 Pixnet Hackathon2019 活動的參賽隊伍「 10 萬字」的免費額度。若參加隊伍使用的字數超過 10 萬字，則需由參賽隊伍自費加值，費用為「每 10 萬字 300 元，沒有使用期限」。
2. 每個參賽隊伍提供一個 e-mail 給主辦單位(並完成在 api.droidtown.co 的註冊)，卓騰語言科技會為隊伍進行加值。之後登入 api.droidtown.co 就能看到 10 萬字的 key 了。
3. 為促進參賽隊伍在活動期間儘量挖掘 Pixnet 資料集中的潛在價值的動機，卓騰語言科技提供給 Pixnet Hacathon2019 活動參賽隊伍的「 10 萬字」免費額度將在 2019/09/21 24:00 時歸零。若參賽隊伍有自行購買的額度，則不在歸零的範圍內。

|   資源名稱  |               連結                                |
| :--------: | ------------------------------------------------ |
| API GitHub | [More](https://github.com/Droidtown/ArticutAPI)
| API 文件    | [More](https://api.droidtown.co)
| FB 粉絲專頁  | [More](https://www.facebook.com/Articut/)

### 範例
[Event Detection API 使用範例程式碼](https://github.com/Droidtown/ArticutAPI/blob/master/Demos/EventDetection/EventDemo.py)
#### 效果
```
input: "傍晚大家可以到淡水去看夕陽喔"
output: 
{
    "time": [
        "傍晚"
    ],
    "site": [
        "淡水"
    ],
    "event": [
        "看夕陽"
    ]
}
```
```
input: "明天花蓮的原野牧場有一間餐廳可以吃中飯"
output:
{
    "time": [
        "明天"
    ],
    "site": [
        "花蓮",
        "原野牧場"
    ],
    "event": [
        "吃中飯"
    ]
}
```
```
input: "這張地圖是不死兔這次到澎湖玩耍所記錄的景點與美食喔"
output:
{
    "time": [],
    "site": [
        "澎湖"
    ],
    "event": [
        "記錄",
        "玩耍"
    ]
}
```
