## API 懶人包
### [PIXNET API 首頁](https://developer.pixnet.pro/#!/)
> 使用前請先閱讀 [注意事項](http://developer.pixnet.pro/#!/doc/pixnetApiTos/pixnetApiTos)

### 趕快來用 API

| API 名稱 | 文件位置 | API 範例 |
| - | - | - |
| 文章搜尋 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/blogArticlesSearch) | [範例](https://emma.pixnet.cc/blog/articles/search?format=json&type=tag&key=%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83) |
| 文章關鍵字 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/blogArticlesIdKeywords) | [範例](https://emma.pixnet.cc/blog/articles/46738528/keywords?format=json&user=admin) |
| 相關關鍵字 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/explorerKeywords) | [範例](https://emma.pixnet.cc/explorer/keywords?format=json&key=EMMA) |
| 標籤關注 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/tagFollow) | [範例](https://emma.pixnet.cc/tag/follow?name=%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83) |
| POI 清單 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/poiList) | [範例](https://emma.pixnet.cc/poi?format=json) |
| 自動補齊 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/explorerAutocomplete) | [範例](https://emma.pixnet.cc/explorer/autocomplete?format=json&key=%E7%97%9E%E5%AE%A2) |
| 以圖搜圖文 | [文件](https://developer.pixnet.pro/#!/doc/pixnetApi/explorerSimilarImages) | [範例](https://emma.pixnet.cc/explorer/similarimages?format=json&size=5&image_link=https://upload.wikimedia.org/wikipedia/zh/5/57/Pixnet_logo.png) |

### 使用情境教學

此頁面為 PIXNET 最新推出 - [Tag 集結頁](https://www.pixnet.net/tags/%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83) 之畫面
![](../static/pixnet-tag-page.png)

| 我想拿到 | 使用 API | 使用參數 | 範例 |
| - | - | - | - |
| 有 _台東熱氣球_ 標籤的文章 | [文章搜尋](https://developer.pixnet.pro/#!/doc/pixnetApi/blogArticlesSearch) | `type=tag`<br>`key=台東熱氣球` | [範例](https://emma.pixnet.cc/blog/articles/search?format=json&key=%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83&type=tag) |
| 此頁面其中一篇文章內容的關鍵字 | [文章關鍵字](https://developer.pixnet.pro/#!/doc/pixnetApi/blogArticlesIdKeywords) | `id=66852561`<br>`user=abcjcba` | [範例](https://emma.pixnet.cc/blog/articles/66852561/keywords?user=abcjcba) |
| 與 _台東熱氣球_ 相關的標籤 | [相關關鍵字](https://developer.pixnet.pro/#!/doc/pixnetApi/explorerKeywords) | `key=台東熱氣球` | [範例](https://emma.pixnet.cc/explorer/keywords?format=json&key=%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83) |
| _台東熱氣球_ 有多少人關注 | [標籤關注](https://developer.pixnet.pro/#!/doc/pixnetApi/tagFollow) | `name=台東熱氣球` | [範例](https://emma.pixnet.cc/tag/follow?format=json&name=%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83) |
| 找找 _台東鹿野_ 附近的店家 | [POI 清單](https://developer.pixnet.pro/#!/doc/pixnetApi/poiList) | `city=台東縣`<br>`town=鹿野鄉` | [範例](https://emma.pixnet.cc/poi?format=json&city=%E5%8F%B0%E6%9D%B1%E7%B8%A3&town=%E9%B9%BF%E9%87%8E%E9%84%89) |
| 找找 _台東熱氣球_ 還有可能的延伸 | [自動補齊](https://developer.pixnet.pro/#!/doc/pixnetApi/explorerAutocomplete) | `key=台東熱氣球` | [範例](https://emma.pixnet.cc/explorer/autocomplete?format=json&key=%E5%8F%B0%E6%9D%B1%E7%86%B1%E6%B0%A3%E7%90%83) |
| 找找 _台東熱氣球_ 圖片相關的圖文 | [以圖搜圖文](https://developer.pixnet.pro/#!/doc/pixnetApi/explorerSimilarImages) | `image_link=https://pic.pimg.tw/abcjcba/1527488091-1663934377_l.jpg` | [範例](https://emma.pixnet.cc/explorer/similarimages?format=json&image_link=https://pic.pimg.tw/abcjcba/1527488091-1663934377_l.jpg) |

### 再給我幾天 API

| API 名稱 | 說明 |
| - | - |
