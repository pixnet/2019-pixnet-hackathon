👉 2019/7/12（五）主辦單位寄發的初賽資格錄取通知 email 中，將提供參賽隊伍本屆資料包下載連結。

# Raw Data 懶人包
## 總覽
- [PIXNET 文章資料](https://github.com/pixnet/2019-pixnet-hackathon/blob/master/data/README.md#pixnet-%E6%96%87%E7%AB%A0%E8%B3%87%E6%96%99)
- [使用者瀏覽log](https://github.com/pixnet/2019-pixnet-hackathon/blob/master/data/README.md#%E4%BD%BF%E7%94%A8%E8%80%85%E7%80%8F%E8%A6%BD-log)
- [使用者點擊log](https://github.com/pixnet/2019-pixnet-hackathon/blob/master/data/README.md#%E4%BD%BF%E7%94%A8%E8%80%85%E9%BB%9E%E6%93%8A-log)
- [Google Search 關鍵字log](https://github.com/pixnet/2019-pixnet-hackathon/blob/master/data/README.md#google-search-%E9%97%9C%E9%8D%B5%E5%AD%97-log)
- [HotelsCombined 導流 log - PIXNET 點擊 log](https://github.com/pixnet/2019-pixnet-hackathon/blob/master/data/README.md#hotelscombined-%E5%B0%8E%E6%B5%81-log---pixnet-%E7%80%8F%E8%A6%BD-logs)
- [HotelsCombined 導流 log - HotelsCombined 訂單數量資料](https://github.com/pixnet/2019-pixnet-hackathon/blob/master/data/README.md#hotelscombined-%E5%B0%8E%E6%B5%81-log---hotelscombined-%E8%A8%82%E5%96%AE%E6%95%B8%E9%87%8F%E8%B3%87%E6%96%99)
- [(log 資料限定) log 資料內網址對應的文章資料](https://github.com/pixnet/2019-pixnet-hackathon/tree/master/data#-log-%E8%B3%87%E6%96%99%E9%99%90%E5%AE%9A--log-%E8%B3%87%E6%96%99%E5%85%A7%E7%B6%B2%E5%9D%80%E5%B0%8D%E6%87%89%E7%9A%84%E6%96%87%E7%AB%A0%E8%B3%87%E6%96%99)

## PIXNET 文章資料
### 資料範例
```json
{
  "hits":10,
  "keyword_top10":[{"tfidf":0.27377,"word":"臺中"}],
  "title":"[好-遊記] 臺中港區藝術中心",
  "post_at":1519060234,
  "site_category":"國外旅遊",
  "content":"臺中港區藝術中心就在清水眷村文化園區的隔壁",
  "url":"http://travelmap.pixnet.net/blog/post/462208709",
  "tags":["清水","藝術中心","狗年","臺中","台中","港區藝術中心"]
}
```
### 資料說明
| 欄位 | 說明 | 範例 |
| - | - | - |
| tags | 作者對此篇文章下的標籤 | ["raw","台北","江振誠"] |
| title | 文章標題 | 台北餐廳 ~ 新開幕的RAW  江振誠終於來了 |
| site_category | 文章類別 | 美味食記 |
| entity_address | 文章內Entity的經緯度 | [{"address":"台北市樂群三路301號", "location": {"lon":"121.559524","lat":"25.0830268"}}] |
| content | 內文 HTML | <p>江振誠~這名字已經在台灣被炒得很紅<br> (後略) |
| post_at | 發表日期 Unix timestamp | 1418203513 |
| hits | 熱度(Page View) | 12841 |
| image_links | 文章圖片連結與標籤 | [{"url":"http://pic.pimg.tw/.../abc.jpg","image_tags":[]}] |
| url | 文章網址 | http://selenakuo.pixnet.net/blog/post/44297773 |
| keyword_top10 | 前10個文章概要關鍵字(tf-idf分數由高到低排序) | [{"tfidf":100.04224,"word":"冰淇淋"},{"tfidf":100.03201,"word":"三星"}, ...(後略)] |

## 使用者瀏覽 log
> 日期區間: 20180701 ~ 20190701; 資料格式: newline-delimited JSON

### 資料範例
```json
{
  "url": "https://wowline.pixnet.net/blog/post/93867959",
  "country": "TW",
  "city": "Taipei",
  "resolution": "414x736",
  "browser": "Mobile Safari",
  "browser_version": "12.1.1",
  "os": "iOS",
  "os_version": "12.3.2",
  "device_model": "iPhone",
  "device_marketing": "iPhone",
  "device_brand": "Apple",
  "cookie_hash": "udr3pZNgk/uqjJc0OXzjZA==",
  "referrer_host": "www.google.com.tw",
  "date": "20190625",
  "timestamp": "1561430320",
  "hour": "10",
  "author_id": "wowline",
  "category_id": "生活綜合",
  "referrer_venue": "google",
  "cookie_gender": "男",
  "cookie_age": "不明",
  "referrer_url": "https://www.google.com.tw"
}
```
### 資料說明
| 欄位 | 說明 | 範例 |
| - | - | - |
| url | 當前瀏覽網頁網址 | http://red11115.pixnet.net/blog/post/43706497 |
| country | 瀏覽者所在國家 | TW |
| city | 瀏覽者所在城市 | Taipei |
| resolution | 瀏覽者裝置圖像解析度 | 360x640 |
| browser | 瀏覽者使用的瀏覽器 | Chrome Mobile |
| browser_version | 瀏覽者使用的瀏覽器版本 | 62.0.3202 |
| os | 瀏覽者作業系統 | Android |
| os_version | 瀏覽者作業系統版本 | 5.0.2 |
| device_model | 瀏覽者裝置名稱 | HTC M8x |
| device_marketing | 瀏覽者裝置市場名稱 | One M8 |
| device_brand | 瀏覽者裝置品牌 | hTC |
| cookie_hash | 瀏覽者cookie(經hash處理) | 72f24ba0a28c12db8074488df9e29d80 |
| referrer_host | 瀏覽者來源網站 | ya1101.pixnet.net |
| date | 瀏覽日期 yyyymmdd | 20171206 |
| timestamp | 瀏覽時間戳記 | 1512543425 |
| hour | 瀏覽的時間(小時) | 14 |
| author_id | 文章作者帳號 | red11115 |
| category_id | 文章分類 | 生活綜合 |
| referrer_venue | 瀏覽者來源網站 | pixnet |
| cookie_gender | 預測性別分類，包含："男", "女", "不明" | 不明 |
| cookie_age | 預測年齡分類，包含："18-25", "25-35", "35-45", "45-65", "不明" | 25-35 |
| referrer_url | 瀏覽者來源網址 | http://ya1101.pixnet.net/blog/post/171256641 |

## 使用者點擊 log
> 日期區間: 20180701 ~ 20190701; 資料格式: newline-delimited JSON 

### 資料範例
```json
{
  "url": "https://ayeah3713883.pixnet.net/blog/post/455036777",
  "e_category": "blog-related-article",
  "e_action": "imps",
  "e_label": "相關文章1", 
  "country": "TW",
  "city": "Taipei",
  "browser": "Chrome Mobile",
  "browser_version": "59.0.3071",
  "os": "Android",
  "os_version": "6.0.1",
  "device_model": "SAMSUNG SM-N910U",
  "device_marketing": "GALAXY Note 4 LTE",
  "device_brand": "Samsung",
  "cookie_hash": "ny7TLAxGNlvFaiSb8gJKeA==",
  "referrer_host": "",
  "date": "20190526",
  "hour": "0",
  "timestamp": "1558801224",
  "category_id": "圖文創作",
  "author_id": "ayeah3713883",
  "referrer_url": "https://www.google.com"
}
```
### 資料說明
| 欄位 | 說明 | 範例 |
| - | - | - |
| url | 當前瀏覽頁面網址 | https://hotel.eztravel.com.tw/domestic/introduction/HTLI000000297?checkIn=20190529&checkOut=20190530 |
| e_category | 點擊類別 | article_stay_time |
| e_action | 點擊行為種類 | 離開頁面 |
| e_label | 點擊行為標籤（如裝置類別、交易紀錄...等） | desktop |
| country | 點擊者所在的國家 | TW |
| city | 點擊者所在的城市 | Taichung |
| browser | 點擊者的瀏覽器 | Chrome |
| browser_version | 點擊者的瀏覽器版本 | 74.0.3729 |
| os | 點擊者的作業系統 | Android |
| os_version | 點擊者的作業系統版本 | 7.1.1 |
| device_model | 點擊者裝置名稱 | ASUS T00G |
| device_marketing | 點擊者裝置市場名稱 | ZenFone 6 |
| device_brand | 點擊者裝置品牌名稱 | ASUS |
| cookie_hash | 點擊者cookie(經hash處理) | 02435654d2149b2e49793bc91c7f4853 |
| date | 點擊日期 yyyymmdd (UTC / GMT+8) | 20190526 |
| hour | 點擊時間(小時, UTC / GMT+8) | 4 |
| timestamp | 點擊時間timestamp  | 1558817164 |
| category_id | 文章分類 | 星座算命 |
| author_id | 文章作者帳號 | ab0150009 |
| referrer_url | 點擊者來源網址 | http://ab0150009.pixnet.net/blog/post/46740384 |

## Google Search 關鍵字 log
> 篩選條件: impression >= 3; 日期區間: 20180701 ~ 20190701; 資料格式: newline-delimited JSON

### 資料範例
```json
{
  "author_id": "ifitnessgo",
  "clicks": "1",
  "ctr": "0.5",
  "impressions": "2",
  "position": "1.0",
  "keyword": "單槓拉不上去",
  "url": "http://ifitnessgo.pixnet.net/blog/post/13781005",
  "country": "twn",
  "device": "DESKTOP",
  "date": "20190619",
  "category": "運動體育"
}
```
### 資料說明
| 欄位 | 說明 | 範例 |
| - | - | - |
| author_id | 文章作者帳號 | rex850467 |
| clicks | 搜尋此keyword帶來的文章點擊數 | 1 |
| ctr | clicks/impressions | 0.25 |
| impressions | 搜尋此keyword帶來的文章曝光數 | 4 |
| position | 網頁在Google搜尋結果的次序 | 2 |
| keyword | Google搜尋關鍵字 | 南島夢遊民宿 |
| url | 文章網址 | http://rex850467.pixnet.net/blog/post/131822744 |
| country | 瀏覽者所在的國家 | twn |
| device | 瀏覽者裝置種類 | MOBILE |
| date | 瀏覽日期 yyyymmdd | 20190324 |
| category | 文章分類 | 國內旅遊 |

## HotelsCombined 導流 log - PIXNET 瀏覽 logs
> 這份與下份資料資料透過 cookie_hash 來作為 key 串連。
> 日期區間：20181008 ~ 20190701; 資料格式: newline-delimited JSON 

### 資料範例
```json
{
  "url": "https://www.hotelscombined.com.tw/Hotel/Beitou_Sweet_Me_Hot_Spring_Resort.htm",
  "country": "TW",
  "city": "Taipei",
  "resolution": "375x667",
  "browser": "Chrome Mobile iOS",
  "browser_version": "74.0.3729",
  "os": "iOS",
  "os_version": "12.1",
  "device_model": "iPhone",
  "device_marketing": "iPhone",
  "device_brand": "Apple",
  "cookie_hash": "a1DSch0mVHphDGRTbzV1bg==",
  "referrer_host": "reika23.pixnet.net",
  "date": "20190516",
  "hour": "22",
  "cookie_gender": "女",
  "cookie_age": "25-35",
  "label": "{\"Breadcrumb\":[\"Beitou_Sweet_Me_Hot_Spring_Resort\"]}",
  "referrer_url": "https://reika23.pixnet.net/blog/post/217685700"
  }
```
### 資料說明
| 欄位 | 說明 | 範例 |
| - | - | - |
| url | 瀏覽時導流頁面的網址 | https://www.hotelscombined.com.tw/Hotel/Anho_Hotel.htm |
| country | 瀏覽者所在的國家 | TW |
| city | 瀏覽者所在的城市 | Taipei |
| resolution | 瀏覽者裝置圖像解析度 | 360x640 |
| browser | 溜覽者的瀏覽器 | Chrome Mobile |
| browser_version | 瀏覽者的瀏覽器版本 | 73.0.3683 |
| os | 瀏覽者的作業系統 | Android |
| os_version | 瀏覽者的作業系統版本 | 5.0 |
| device_model | 瀏覽者裝置名稱 | SM-N900 |
| device_marketing | 瀏覽者裝置市場名稱 | GALAXY Note 3 |
| device_brand | 瀏覽者裝置品牌名稱 | Samsung |
| cookie_hash | 瀏覽者cookie(經hash處理) | 9242a733685e9610bd0be49462612491 |
| referrer_host | 瀏覽者來源網站 | car0126.pixnet.net |
| date | 瀏覽日期 yyyymmdd | 20190327 |
| hour | 瀏覽時間(小時, UTC / GMT+8) | 3 |
| cookie_gender | 預測性別分類，包含："男", "女", "不明" | 男 |
| cookie_age | 預測年齡分類，包含："18-25", "25-35", "35-45", "45-65", "不明" | 45-65 |
| label | 瀏覽導流頁面地點/飯店名稱 | {"Breadcrumb":["Anho_Hotel"]} |
| referrer_url | 瀏覽者來源網址 | https://car0126.pixnet.net/blog/post/4388627 |

## HotelsCombined 導流 log - HotelsCombined 訂單數量資料
> 這份與上份資料資料透過 cookie_hash 來作為 key 串連，兩者從2019年4月18日開始可串連。
> 資料日期區間：2019/1/7 ~ 2019/7/9; 資料格式: newline-delimited JSON

### 資料範例
```json
{
"Date": "20190402",
"cookie_hash": "MdjBU0d98pv72atTbexgKQ==",
"zone": "Zone3",
"Visit": "1",
"Searches": "3",
"Clicks To OTAs": "6",
"Bookings": "1"
}
```
### 資料說明
| 欄位 | 說明 | 範例 |
| - | - | - |
| Date | 導流日期 yyyymmdd | 20190205 |
| cookie_hash | Hashed 過的使用者cookie | MdjBU0d98pv72atTbexgKQ== |
| zone | 導流板位樣式編號 | Zone3 |
| Visit | 導流瀏覽數 | 7 | 
| Searches | 於HotelsCombined官網搜尋數 | 13 |
| Click To OTAs | 連結至導流訂房網站(Online Travel Agent)點擊數 | 1 |
| Bookings | 於訂房網站的下訂數 | 1 |

## ( log 資料限定 ) log 資料內網址對應的文章資料
> 資料格式: newline-delimited JSON

### 檔案對照表（Google Drive）

| log | 網址欄位 | 網址文章資料檔名 |
| - | - | - |
| 使用者瀏覽 log | url | **PIXNET_visit_log_url_articles.gz** |
| 使用者點擊 log | url | **PIXNET_event_log_url_articles.zip** |
| Google Search 關鍵字 log| url | **PIXNET_search_log_url_articles.gz** |
| HotelsCombined 導流 log | referrer_url  | **HotelsCombined_log_referrer_url_articles.zip** |

### 文章資料說明

| 欄位| 說明| 範例 |
| - | - | - |
| url | 網頁網址 | http:\\/\\/graceliang0611.pixnet.net\\/blog\\/post\\/222163281 |
| post_at | 發文時間 timestamp | 1531987200 |
| post_date | 發文日期 | 2018-07-19T16:00:00+08:00 |
| author | 文章作者帳號 | graceliang0611 |
| article_id | 文章id (網址最後面的 int ) | 222163281 |
| tags | 作者對此篇文章下的標籤 | ["\u91d1\u9580","\u5ec8\u9580"] |
| title | 文章標題 | 2018\u91d1\u9580\u5ec8\u9580 |
| content | 內文 HTML | \<img alt=\"IMG_5243.JPG\" src=\"https:\/\/pic.pp> (後略) |
| hits | 文章被瀏覽數 | 8932 |
| comment_ids | 評論者會員帳號 | ["graceliang0611","graceliang0611"] |
| category | 文章類別 | \u570b\u5916\u65c5\u904a |
| is_spam | 是否為垃圾文章 (0: 不是; 1:是) | 0 |
