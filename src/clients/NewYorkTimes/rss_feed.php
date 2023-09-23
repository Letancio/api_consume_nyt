<?php 

    class rss{
        public function consultarrss(){
            $endpoint='https://rss.nytimes.com/services/xml/rss/nyt/Americas.xml';
            $api=curl_init();
            curl_setopt($api, CURLOPT_URL, $endpoint);
            curl_setopt($api, CURLOPT_HEADER, 0);

            //EXECUTE API REQUEST
            $response = curl_exec($api);

           //CLOSED API CONSULT
        curl_close($api);

        return $response;
        }
    }
