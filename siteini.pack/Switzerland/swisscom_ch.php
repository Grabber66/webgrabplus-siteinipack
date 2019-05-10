<?php
        $agent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0';
        $dir_path = dirname(__FILE__);
        $type = $_GET['type'];
        $start = $_GET['date'];
        $stop = $_GET['time'];
    

                if($type == '1') {
                    $channel = $_GET['channel'];
                    $url1 = 'https://services.sg1.etvp01.sctv.ch/catalog/tv/channels/list/(end=' . $stop . ';ids=' . $channel . ';level=normal;start=' . $start . ')';
                    $ch = curl_init ($url1);	
                    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'));
                    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('application/json; charset=utf-8'));
                    curl_setopt ($ch, CURLOPT_USERAGENT, $agent);
                    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt ($ch, CURLOPT_COOKIEFILE, $dir_path . '/swisscom.ch.cookies.txt');
                    $output1 = curl_exec($ch);
                    curl_close($ch);
                    echo $output1;

                } elseif($type == '2') {
                    $url2 = 'https://services.sg2.etvp01.sctv.ch/portfolio/tv/channels';
                    $ch = curl_init ($url2);	
                    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Accept: application/json, text/javascript, */*; q=0.01'));
                    curl_setopt ($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
                    curl_setopt ($ch, CURLOPT_USERAGENT, $agent);
                    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt ($ch, CURLOPT_COOKIEFILE, $dir_path . '/swisscom.ch.cookies.txt');		
                    $output2 = curl_exec($ch);
                    curl_close($ch);
                    echo $output2;
                    }
?>
