<?php

namespace Consome\Helper;

trait RealizadorRequisicao
{
    /**
     * @param       $url
     * @param       array
     * @return      HTTP-Response
     */
    public static function requisicaoGet(string $url, ?string $params) 
    {
        $ch    = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($params))                                                                       
        ); 


        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    /**
     * @param       $url
     * @param       array $params
     * @return      HTTP-Response body or an empty string if the request fails or is empty
     */
    public static function requisicaoPost($url, ?string $params) 
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($params))                                                                       
        ); 
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}