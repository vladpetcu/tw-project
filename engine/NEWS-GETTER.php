<?php
    // error_reporting(E_ERROR | E_PARSE);
    require_once 'news-inserter.php';

    $today = date('d/m/Y');
    $limit = 10;
    $url = "https://api.skypicker.com/flights?flyFrom=RO&curr=EUR&sort=date&passengers=1&limit=50&date_from=".strval($today)."&partner=picky";

    $response = file_get_contents($url);
    $response = json_decode($response);

    //sterg tot din news daca se poate
    $newsIns = new NewsInserter();
    if($newsIns->clearNewsTable() == 'failed'){
        die('Database error! on truncate table');
    }
    
    $pixabayKey = "12532462-dc0abacd62b440ae44c1e7358";
    for($i = 0; $i < count($response->data), $i < $limit; $i++){
        $price = $response->data[$i]->price;
        $country = $response->data[$i]->countryTo->name;
        $city = $response->data[$i]->cityTo;
        $dist = $response->data[$i]->distance;
        $dur = $response->data[$i]->fly_duration;
        $layover = 1;
        if($response->data[$i]->has_airport_change == FALSE)
            $layover = 0;

        $cityKey = str_replace(' ', '+', $city);
        $imgUrl = "https://pixabay.com/api/?key=".strval($pixabayKey)."&q=".strval($cityKey);

        // $imgResponse = file_get_contents($imgUrl);
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $imgUrl);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'TripInspire');
        $imgResponse = curl_exec($curl_handle);
        curl_close($curl_handle);

        $imgResponse = json_decode($imgResponse);
        
        if($imgResponse->hits[$i]->previewURL != null){
            $imgLink = $imgResponse->hits[$i]->previewURL;
        }
        else{
            $imgLink = "http://localhost/pr/mvc/public/images/ads/flight.jpeg";
        }

        $rsp = $newsIns->insertNewsData($price, $country, $city, $dist, $dur, $layover, $imgLink);
        
    }       
    echo '<br><p>Magic Done! status: '. $rsp .'</p><br>';
?>

  