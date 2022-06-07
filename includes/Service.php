<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;



/**
 *
 */
class Service 
{
    /**
     *
     * @param int $length
     */
    public function __construct() {
        $this->name = 'API Call to output 3 items from the result';
       
        $this->url = "http://pokeapi.co/api/v2/pokemon/mewtwo/";
     
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
     * API CALL.
     */
    public function ApiCall() 
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL =>$this->url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        return $response; 
    }
}
