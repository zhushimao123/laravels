<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class WeixinController extends Controller
{
    public function index()
    {
        echo $_GET['echostr'];
    }

//     /**
//      *接受微信的推送事件
//      */
//     public function wxEven()
//     {
//         //接受微信服务器推送
//         $text = file_get_contents('php://input');
//         // echo $text;
//         $time = date('Y-m-d H:i:s');
//         $str = $time . $text . "\n";
//         is_dir('logs') or mkdir('logs', 0777, true);
//         file_put_contents("logs/wx_event.log", $str, FILE_APPEND);

//         $data = simplexml_load_string($text);
//         $openid = $data-> FromUserName;//用户的openid
//         //获取用户信息
//         $result = $this -> userinfo($openid);
//         //用户信息入库
//         $usersinfo = [
//             'openid'=>$result['openid'],
//             'nickname'=> $result['nickname'],
//             'sex'=> $result['sex'],
//             'headimgurl'=> $result['headimgurl'],
//             'subscribe_time'=> $result['subscribe_time']
//         ];
//         $insert = DB::table('w_weixin')->insert($usersinfo);
//         print_r($insert);
    
//     }

//     /*
//      *获取微信accesstoken
//      * 
//      */
//     public function token()
//     {
//         $key = "access_token";
//         $data = redis::get($key);
//         if($data){

//         }else{
//             $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx48451c201710dbcd&secret=f583f90f3aed8ec33ae6dd30eceebe5f";
//             $response = file_get_contents($url);
//             $arr = json_decode($response, true);

// //        print_r($arr);

//             redis::set($key, $arr['access_token']); //存入access_token
//             redis::expire($key, 3600);
//             $data = $arr['access_token'];
//         }
//         return $data;


//     }
//     //获取微信用户信息
//     public function userinfo($openid)
//     {
//         $url = 'https://api.weixin.qq.com/cgi-bin/user/info?access_token='.$this->token().'&openid='.$openid.'&lang=zh_CN';
//         $res =  file_get_contents($url);
//         $info = json_decode($res,true);
//         return $info;
//     }
//     //创建微信公众号菜单
//     public function menu(){
//         $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$this->token();
//         //接口数据
//         $post_arr = [
//             'button' =>[
//                 [
//                     'type'=> 'click',
//                     'name'=> '点我',
//                     'key'=>"V1001_TODAY_MUSIC"
//                 ],
//                 [
//                     "type"=>"view",
//                     "name"=>"搜索",
//                     "url"=>"http://www.soso.com/"
//                 ]
//             ]
//         ];
//         //格式JSON
//         $json = json_encode($post_arr,JSON_UNESCAPED_UNICODE); //JSON_UNESCAPED_UNICODE 处理中文
//         //发送请求
//         $client = new Client();
//         $response = $client->request('POST',$url,[
//             'body' => $json
//         ]);
//         //处理响应
//         $res = $response->getBody();
//         echo $res;
//     }
}