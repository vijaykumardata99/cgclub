<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{

   public function sendMessage($mobileno){
    $username = "CGCHIPS-GANY";
    $password = "Gany@2023@1";
    $templateId = 1307169294503705903;
    $senderId = "CGSSDG";
    $deptSecureKey = "b4fad074-4e56-4b2d-ba1c-0d084588c61a";
    $message = "लॉगिन हेतु आपका ओ.टी.पी. 1234 हैं | PNRD, CHiPS";

    $sms_response_full = $this->sms_details($mobileno, $senderId, $username, $password, 3, $templateId, $message, $deptSecureKey);

    $sms_response = substr($sms_response_full, 0, 3);
    if ($sms_response == '402') {
        return "Message Sent..";
    } else {
        return "Message Sent Failed - " . $sms_response_full;
    }
    }

    public function sendSMS($mobileno, $message, $templateid)
    {
        $username = "CGCHIPS-GANY";
        $password = "Gany@2023@1";
        $templateId = 1307169294503705903;
        $senderId = "CGSSDG";
        $deptSecureKey = "b4fad074-4e56-4b2d-ba1c-0d084588c61a";
       // dd($data);

       $sms_response_full = $this->sms_details($mobileno, $senderId, $username, $password, 3, $templateId, $message, $deptSecureKey);

       $sms_response = substr($sms_response_full, 0, 3);

       $res = ["status" => 400, "message" => "Failed! Please Try Again ", "data" => null];

       if ($sms_response == '402') {
        $res = ["status" => 200, "message" => "Success", "data" => null];
       } else {
        $res = ["status" => 400, "message" => "Message Sent Failed", "data" => null];
       }
	    return json_decode(json_encode($res));

    }
    function post_sms($data){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://sms.cgstate.gov.in/SendSMS',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array('access-key: SMSBuildnxt@123'),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, false);
    }
    function sms_details($mobileno,$senderid,$username,$password,$smsType,$templateid, $message,$deptSecureKey){
        $encryp_password = sha1(trim($password));
        if($smsType == 1){ // for sendSingleSMS
            return $this->sendSingleSMS($username,$encryp_password,$senderid,$message,$mobileno,$deptSecureKey,$templateid);
        }else if($smsType == 2){ //// for sendBulkSMS
            return $this->sendBulkSMS($username,$encryp_password,$senderid,$message,$mobileno,$deptSecureKey,$templateid);
        }else if($smsType == 3){ // for sendSingleUnicodeSMS
            return $this->sendSingleUnicode($username, $encryp_password, $senderid, $message, $mobileno, $deptSecureKey, $templateid);
        }else if($smsType == 4 ){ // sendBulkUnicodeSMS
            return $this->sendBulkUnicode($username, $encryp_password, $senderid, $message, $mobileno, $deptSecureKey, $templateid);
        }else{
            echo "Invalid SMS Type ! Please Choose Valid One";exit;
        }
    }

    function post_to_url($url, $data)
    {
        $fields = '';
        foreach ($data as $key => $value) {
            $fields .= $key . '=' . $value . '&';
        }
        rtrim($fields, '&');
        $post = curl_init();
        curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($post, CURLOPT_URL, $url);
        curl_setopt($post, CURLOPT_POST, count($data));
        curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($post); //result from mobile seva server
        //echo $result; //output from server displayed
        curl_close($post);
        return $result;
    }
    function post_to_url_unicode($url, $data)
    {
        $fields = '';
        foreach ($data as $key => $value) {
            $fields .= $key . '=' . urlencode($value) . '&';
        }
        rtrim($fields, '&');
        $post = curl_init();
        curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($post, CURLOPT_URL, $url);
        curl_setopt($post, CURLOPT_POST, count($data));
        curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($post, CURLOPT_HTTPHEADER, array("ContentType:application/x-www-form-urlencoded"));
        curl_setopt($post, CURLOPT_HTTPHEADER, array("Content-length:". strlen($fields)));
        curl_setopt($post, CURLOPT_HTTPHEADER, array("User-Agent:Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt)"));
        curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($post); //result from mobile seva server
        //echo ($result); // to check errors generated from cdac.
        curl_close($post);
        return $result;
    }
    function string_to_finalmessage($message)
    {
        $finalmessage = "";
        $sss = "";
        for ($i = 0; $i < mb_strlen($message, "UTF-8"); $i++) {
            $sss = mb_substr($message, $i, 1, "utf-8");
            $a = 0;
            $abc = "&#" . $this->ordutf8($sss, $a) . ";";
            $finalmessage .= $abc;
        }
        return $finalmessage;
    }
    function ordutf8($string, &$offset)
    {
        $code = ord(substr($string, $offset, 1));
        if ($code >= 128) { //otherwise 0xxxxxxx
            if ($code < 224) $bytesnumber = 2; //110xxxxx
            else if ($code < 240) $bytesnumber = 3; //1110xxxx
            else if ($code < 248) $bytesnumber = 4; //11110xxx
            $codetemp = $code - 192 - ($bytesnumber > 2 ? 32 : 0) -
                ($bytesnumber > 3 ? 16 : 0);
            for ($i = 2; $i <= $bytesnumber; $i++) {
                $offset++;
                $code2 = ord(substr($string, $offset, 1)) - 128; //10xxxxxx
                $codetemp = $codetemp * 64 + $code2;
            }
            $code = $codetemp;
        }
        return $code;
    }
    function sendSingleSMS($username, $encryp_password, $senderid, $message, $mobileno, $deptSecureKey, $templateid)
    {
        $key = hash('sha512', trim($username) . trim($senderid) . trim($message) . trim($deptSecureKey));
        $data = array(
            "username" => trim($username),
            "templateid" => trim($templateid),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($message),
            "smsservicetype" => "singlemsg",
            "mobileno" => trim($mobileno),
            "key" => trim($key)
        );
        return $this->post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT", $data);
        //calling post_to_url to send sms
    }
    function sendOtpSMS($username, $encryp_password, $senderid, $message, $mobileno, $deptSecureKey, $templateid)
    {
        $key = hash('sha512', trim($username) . trim($senderid) . trim($message) . trim($deptSecureKey));
        $data = array(
            "username" => trim($username),
            "templateid" => trim($templateid),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($message),
            "smsservicetype" => "otpmsg",
            "mobileno" => trim($mobileno),
            "key" => trim($key)
        );
        return $this->post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT", $data);
        //calling post_to_url to send otp sms
    }
    function sendBulkSMS($username, $encryp_password, $senderid, $message, $mobileNos, $deptSecureKey, $templateid)
    {
        $key = hash(
            'sha512',
            trim($username) . trim($senderid) . trim($message) . trim($deptSecureKey)
        );
        $data = array(
            "username" => trim($username),
            "templateid" => trim($templateid),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($message),
            "smsservicetype" => "bulkmsg",
            "bulkmobno" => trim($mobileNos),
            "key" => trim($key)
        );
        return $this->post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT", $data);
        //calling post_to_url to send bulk sms
    }
    function sendSingleUnicode($username, $encryp_password, $senderid, $messageUnicode, $mobileno, $deptSecureKey, $templateid)
    {
        $finalmessage = $this->string_to_finalmessage(trim($messageUnicode));
        $key = hash('sha512', trim($username) . trim($senderid) . trim($finalmessage) . trim($deptSecureKey));
        $data = array(
            "username" => trim($username),
            "templateid" => trim($templateid),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($finalmessage),
            "smsservicetype" => "unicodemsg",
            "mobileno" => trim($mobileno),
            "key" => trim($key)
        );
        return $this->post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT", $data);
        //calling post_to_url_unicode to send single unicode sms
    }
    //function to send bulk unicode sms
    function sendBulkUnicode($username, $encryp_password, $senderid, $messageUnicode, $mobileNos, $deptSecureKey, $templateid)
    {
        $finalmessage = $this->string_to_finalmessage(trim($messageUnicode));
        $key = hash('sha512', trim($username) . trim($senderid) . trim($finalmessage) . trim($deptSecureKey));
        $data = array(
            "username" => trim($username),
            "templateid" => trim($templateid),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($finalmessage),
            "smsservicetype" => "unicodemsg",
            "bulkmobno" => trim($mobileNos),
            "key" => trim($key)
        );
        //print_r($data);exit;
        return $this->post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT", $data);
        //calling post_to_url_unicode to send bulk unicode sms
    }
    //function to send single unicode otp sms
    function sendUnicodeOtpSMS($username, $encryp_password, $senderid, $messageUnicode, $mobileno, $deptSecureKey, $templateid)
    {
        $finalmessage = $this->string_to_finalmessage(trim($messageUnicode));
        $key = hash('sha512', trim($username) . trim($senderid) . trim($finalmessage) . trim($deptSecureKey));
        $data = array(
            "username" => trim($username),
            "templateid" => trim($templateid),
            "password" => trim($encryp_password),
            "senderid" => trim($senderid),
            "content" => trim($finalmessage),
            "smsservicetype" => "unicodeotpmsg",
            "mobileno" => trim($mobileno),
            "key" => trim($key)
        );
        return $this->post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequestDLT", $data);
        //calling post_to_url_unicode to send single unicode sms
    }
    /** Helper Functions End **/

}
