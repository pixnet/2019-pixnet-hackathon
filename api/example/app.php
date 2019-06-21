<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

class App
{
    const EMMA_API = 'https://emma.pixnet.cc';
    const CLIENT_ID = '';
    private static $common_params = [
        'client_id' => self::CLIENT_ID,
        'format' => 'json',
    ];

    public function start()
    {
        $answer = '';
        do {
            $answer = $this->requestInput('想找什麼呢？（文章 = 1；文章關鍵字 = 2；相關關鍵字 = 3；美食店家 = 4）：');
        } while (!in_array($answer, [1, 2, 3, 4]));

        switch ($answer) {
            case 1:
                $this->getArticles();
                break;
            case 2:
                $this->getArticleKeywords();
                break;
            case 3:
                $this->getKeywordKeywords();
                break;
            case 4:
                $this->getPOI();
                break;
        }
    }

    private function getArticles()
    {
        $place = '';
        do {
            $place = $this->requestInput('請輸入想去的國內縣市（或景點關鍵字）：');
        } while ('' == $place);

        $params = [
            'key' => [
                $place,
                '景點',
                '好玩',
            ],
            'site_category_id' => 28,
            'per_page' => 5,
            'content_filter' => 'on',
        ];

        $articles = $this->articlesSearch($params);
        foreach ($articles as $article) {
            echo '-----' . PHP_EOL;
            echo '文章 ID ：' . $article['id'] . PHP_EOL;
            echo '作者帳號：' . $article['user']['name'] . PHP_EOL;
            echo '文章連結：' . $article['link'] . PHP_EOL;
            echo '文章標題：' . $article['title'] . PHP_EOL;
        }
    }

    private function getArticleKeywords()
    {
        $author_name = '';
        $article_id = '';
        do {
            $author_name = $this->requestInput('請輸入文章作者：');
            $article_id = $this->requestInput('請輸入文章ID：');
        } while ('' == $author_name or !is_numeric($article_id));

        $params = [
            'user' => $author_name,
        ];

        $keywords = $this->articleKeywordsSearch($params, $article_id);
        foreach ($keywords as $keyword) {
            echo $keyword . PHP_EOL;
        }
    }

    private function getKeywordKeywords()
    {
        $keyword = '';
        do {
            $keyword = $this->requestInput('請輸入關鍵字：');
        } while ('' == $keyword);

        $params = [
            'key' => $keyword,
        ];

        $keywords = $this->keywordKeywordsSearch($params);
        foreach ($keywords as $keyword) {
            echo $keyword . PHP_EOL;
        }
    }

    private function getPOI()
    {
        $city = '';
        $town = '';
        $max_money = '';
        do {
            $city = $this->requestInput('請輸入城市（ex 高雄市）：');
            $town = $this->requestInput('請輸入區域（ex 鹽埕區）：');
            $max_money = $this->requestInput('請輸入最大金額：');
        } while ('' == $city or '' == $town or !is_numeric($max_money));

        $params = [
            'city' => $city,
            'town' => $town,
            'max_money' => $max_money,
        ];

        $pois = $this->POISearch($params);
        foreach ($pois as $poi) {
            echo '-----' . PHP_EOL;
            echo '店家名稱：' . $poi['name'] . PHP_EOL;
            echo '店家地址：' . implode('', $poi['address']) . PHP_EOL;
            echo '平均價位：' . $poi['money_description'] . PHP_EOL;
            echo '店家標籤：' . implode(', ', $poi['tags']) . PHP_EOL;
            echo '地圖位置：https://www.google.com.tw/maps/place/' . implode('', $poi['address']) . PHP_EOL;
        }
    }

    private function articlesSearch($params)
    {
        $params = array_merge($params, self::$common_params);

        $client = new Client();
        $url = self::EMMA_API . '/blog/articles/search';
        $response = $client->request('GET', $url, [
            'query' => $params,
        ]);

        if (200 != $response->getStatusCode()) {
            echo '出現錯誤，請重新查詢。' . PHP_EOL;
            return [];
        }

        $body = $response->getBody();
        $articles = json_decode($body, true)['articles'];
        return $articles;
    }

    private function articleKeywordsSearch($params, $article_id)
    {
        $params = array_merge($params, self::$common_params);

        $client = new Client();
        $url = self::EMMA_API . '/blog/articles/' . $article_id . '/keywords';
        $response = $client->request('GET', $url, [
            'query' => $params,
        ]);

        if (200 != $response->getStatusCode()) {
            echo '出現錯誤，請重新查詢。' . PHP_EOL;
            return [];
        }

        $body = $response->getBody();
        $keywords = json_decode($body, true)['data'];
        return $keywords;
    }

    private function keywordKeywordsSearch($params)
    {
        $params = array_merge($params, self::$common_params);

        $client = new Client();
        $url = self::EMMA_API . '/explorer/keywords';
        $response = $client->request('GET', $url, [
            'query' => $params,
        ]);

        if (200 != $response->getStatusCode()) {
            echo '出現錯誤，請重新查詢。' . PHP_EOL;
            return [];
        }

        $body = $response->getBody();
        $keywords = json_decode($body, true)['data'];
        return $keywords;
    }

    private function POISearch($params)
    {
        $params = array_merge($params, self::$common_params);

        $client = new Client();
        $url = self::EMMA_API . '/poi';
        $response = $client->request('GET', $url, [
            'query' => $params,
        ]);

        if (200 != $response->getStatusCode()) {
            echo '出現錯誤，請重新查詢。' . PHP_EOL;
            return [];
        }

        $body = $response->getBody();
        $pois = json_decode($body, true)['data']['pois'];
        return $pois;
    }

    private function requestInput($message)
    {
        echo "\e[1;33;43m_\e[0m " . $message . PHP_EOL;
        $fh = fopen('php://stdin', 'r');
        $input = fread($fh, 1000);
        fclose($fh);

        $input = str_split($input, strlen($input) - 1)[0];
        if (in_array(strtolower($input), ['exit', 'quit'])) {
            echo 'ㄅㄅ' . PHP_EOL;
            exit;
        }

        return $input;
    }
}

$app = new App();

do {
    $app->start();
} while (1);
