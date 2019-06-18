## Raw Data 懶人包

### PIXNET 文章資料

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

### 使用者瀏覽 log

| 欄位 | 說明 | 範例 |
| - | - | - |
| url | 網頁網址 | http://red11115.pixnet.net/blog/post/43706497 |
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

### 使用者點擊 log

| 欄位 | 說明 | 範例 |
| - | - | - |
| page | 點擊時當前頁面網址 | https://hotel.eztravel.com.tw/domestic/introduction/HTLI000000297?checkIn=20190529&checkOut=20190530 |
| pos | 點擊位置 | sidebar |
| link | 點擊的連結url | https://hotel.eztravel.com.tw/domestic/introduction/HTLI000000297?checkIn=20190529&checkOut=20190530#projectContent-12 |
| link_content | 連結附帶的資訊（如超連結文字、<img tag.....等） | 房型資訊 |
| country | 點擊者所在的國家 | TW |
| city | 點擊者所在的城市 | Taichung |
| browser | 點擊者的瀏覽器 | Chrome |
| browser_version | 點擊者的瀏覽器版本 | 74.0.3729 |
| os | 點擊者的作業系統 | Windows 7 |
| os_version | 點擊者的作業系統版本 | 7.1.1 |
| device_model | 點擊者裝置名稱 | ASUS T00G |
| device_marketing | 點擊者裝置市場名稱 | ZenFone 6 |
| device_brand | 點擊者裝置品牌名稱 | ASUS |
| cookie_hash | 點擊者cookie(經hash處理) | 02435654d2149b2e49793bc91c7f4853 |
| referrer_host | 點擊者來源網站 | hotel.eztravel.com.tw |
| date | 點擊日期 yyyymmdd (UTC / GMT+8) | 20190528 |
| hour | 點擊時間(小時, UTC / GMT+8) | 1 |
| timestamp | 點擊時間timestamp  | 1558974948 |
| category_id | 文章分類 | 5 |
| author_id | 文章作者帳號 | anrine910070 |
| referrer_url | 點擊者來源網址 | https://hotel.eztravel.com.tw/domestic/results/TP1/001654 |

### Google Search 關鍵字 log

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

### HotelsCombined 導流 log - PIXNET 點擊 logs
> 這份與下份資料資料透過 cookie_hash 與 Label 中的 hashed cookie 來作為 key 串連

| 欄位 | 說明 | 範例 |
| - | - | - |
| url | 點擊時導流頁面的網址 | https://www.hotelscombined.com.tw/Hotel/Anho_Hotel.htm |
| country | 點擊者所在的國家 | TW |
| city | 點擊者所在的城市 | Taipei |
| resolution | 點擊者裝置圖像解析度 | 360x640 |
| browser | 點擊者的瀏覽器 | Chrome Mobile |
| browser_version | 點擊者的瀏覽器版本 | 73.0.3683 |
| os | 點擊者的作業系統 | Android |
| os_version | 點擊者的作業系統版本 | 5.0 |
| device_model | 點擊者裝置名稱 | SM-N900 |
| device_marketing | 點擊者裝置市場名稱 | GALAXY Note 3 |
| device_brand | 點擊者裝置品牌名稱 | Samsung |
| cookie_hash | 點擊者cookie(經hash處理) | 9242a733685e9610bd0be49462612491 |
| referrer_host | 點擊者來源網站 | www.hotelscombined.com.tw |
| date | 點擊日期 yyyymmdd | 20190327 |
| timestamp | 點擊時間timestamp  | 1559082358 |
| hour | 點擊時間(小時, UTC / GMT+8) | 3 |
| cookie_gender | 預測性別分類，包含："男", "女", "不明" | 男 |
| cookie_age | 預測年齡分類，包含："18-25", "25-35", "35-45", "45-65", "不明" | 45-65 |
| label | 點擊導流頁面地點/飯店名稱 | {"Breadcrumb":["Anho_Hotel"]} |
| referrer_url | 點擊者來源網址 | https://www.hotelscombined.com.tw/Place/Yilan_County.htm |

### HotelsCombined 導流 log - HotelsCombined 訂單數量資料
> 這份與上份資料資料透過 cookie_hash 與 Label 中的 hashed cookie 來作為 key 串連

| 欄位 | 說明 | 範例 |
| - | - | - |
| Label | Hashed 過的使用者cookie::導流板位 | 9242a733685e9610bd0be49462612491::Zone1::1200 |
| Visits | 導流瀏覽數 | 7 |
| Searches | 於HotelsCombined官網搜尋數 | 13 |
| Click To OTAs | 連結至導流訂房網站(Online Travel Agent)點擊數 | 1 |
| Bookings | 於訂房網站的下訂數 | 1 |