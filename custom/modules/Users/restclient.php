<?php
class RestClient {
    
    public $options;
    
    // Populated after execution:
    public $response; // Response body.
    public $headers; // Parsed reponse header object.
	public $httpCode; // Parsed reponse errors.
    
    public function __construct($options=array()){
        $this->options = array_merge(array(
            'headers' => array(), 
            'curl_options' => array(), 
            'user_agent' => "PHP RestClient/0.1", 
            'base_url' => NULL, 
            'format' => NULL, 
            'username' => NULL, 
            'password' => NULL
        ), $options);
    }
    
    public function set_option($key, $value){
        $this->options[$key] = $value;
    }
    
    public function get($url, $parameters=array(), $headers=array()){
        return $this->execute($url, 'GET', $parameters, $headers);
    }
    
    public function post($url, $parameters=array(), $headers=array()){
        return $this->execute($url, 'POST', $parameters, $headers);
    }
    public function delete($url, $parameters=array(), $headers=array()){
		$data=json_encode($parameters);
		$url=$url."/".$data;
        return $this->execute($url, 'DELETE', $parameters, $headers);
    }
    public function execute($url, $method='GET', $parameters=array(), $headers=array()){
		$curl = curl_init();
		curl_setopt($curl,CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		if(strtoupper($method) == 'POST'){
			$data=json_encode($parameters);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl,CURLOPT_POSTFIELDS,array("json_data"=>$data));
		}
		elseif(strtoupper($method) == 'DELETE'){
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");  
		}
		$response = curl_exec($curl);
		$this->httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);
		return $response;
   }
}

?>