<!DOCTYPE html>
<html>
<head>
    <title>Input Any Hashtags to Search Twitter</title>
    <style>
        body{
            padding : 5px;
            background-color: cornsilk;
        }
    </style>
</head>
<body>
<center>
<form method="POST" action="" name="homepage_input">
    <table>
        <tr>
            <td>
                <label for="word">Input a Search word :</label>
            </td>
            <td>
                <input type="text" name="input_entered" placeholder="Sola">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Get All Tweets With Hashtags!" name="search_now"></td>
        </tr>
    </table>
</form>
    <div>
        <?php
        if(isset($_POST['search_now'])) {
            echo "<hr/><center><font size =+2 color = blue>twitter response</font></center>";
@$acceptedInput = $_POST['input_entered'];

if(@$acceptedInput == '' || @$acceptedInput != 'nasa') {
    //$acceptedInput = 'nasa';
}
// Start request object
$curl = curl_init();
	// Set request object's options and headers
curl_setopt_array(
		$curl, 
		array(
  
			CURLOPT_URL => "https://api.twitter.com/1.1/search/tweets.json?q=".$acceptedInput."&result_type=popular",
  			CURLOPT_RETURNTRANSFER => true,
 
			CURLOPT_ENCODING => "",
  
			CURLOPT_MAXREDIRS => 10,
  
			CURLOPT_TIMEOUT => 30,
  
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 
			CURLOPT_CUSTOMREQUEST => "GET",
  
			CURLOPT_POSTFIELDS => "",
  
			CURLOPT_HTTPHEADER => array(
    
				 "Accept: */*",
    "Authorization: OAuth oauth_consumer_key=\"H0rOip9Gc5lWfBkwsbAHikHfS\",
    oauth_token=\"3424025068-CrqtCfBZW2nO7qJf906Kw63I0BLEymOxBTIWWqs\",
    oauth_signature_method=\"HMAC-SHA1\",
    oauth_timestamp=\"1556721501\",
    oauth_nonce=\"eULBV6bU2BG\",
    oauth_version=\"1.0\",
    oauth_signature=\"qJExBqEJDbklVE7ZqgqR%2FqWeg0A%3D\"",
    "Cache-Control: no-cache"
  ),
            
));

	

    $response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);


	if ($err) echo "There is a problem with calling Twitter API #:" . $err;
	else echo $response;
        }
?>
    </div>
</center>    
</body></html>