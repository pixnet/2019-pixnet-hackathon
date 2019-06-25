# 卓騰語言科技
## Articut 文截 - 次世代斷詞引擎
<p> 從文本內容自動擷取地名及地點</p>

**將提供每個參賽隊伍十萬字的免費使用額度**

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
