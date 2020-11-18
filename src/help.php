<?php 
namespace Cyk\UpToComposer;

class Help{

	public function __construct()
	{
		echo 'hello Composer';
	}


	/**
	 * 发送POST请求
	 *
	 * @param        $url
	 * @param string $data
	 * @param array  $header
	 * @param string $type
	 * @param bool   $authentication
	 *
	 * @return array|mixed
	 */
	function curl_send($url, $data = '', $type = 'get', $header = null, $timeout = 180)
	{
	    set_time_limit(0);
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // https请求 不验证证书和hosts
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	    if ('post' === $type) {
	        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
	        curl_setopt($curl, CURLOPT_POST, 1);
	        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	    }
	    if (!empty($header)) {
	        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	    }
	    $result = curl_exec($curl);
	    curl_close($curl);

	    return json_decode($result, true);
	}


	public function dd($data)
	{
		var_dump($data);die;
	}

}
