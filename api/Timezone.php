<?php
class Timezone {
    private static $timezone_list = array(array("id" => "UTC", "name" => "UTC"),
                                          array("id" => "Asia/Tokyo", "name" => "日本"),
                                          array("id" => "Asia/Shanghai", "name" => "中国（上海）"),
                                          array("id" => "Asia/Hong_Kong", "name"  => "香港"),
                                          array("id" => "Asia/Taipei", "name"  => "台湾"),
                                          array("id" => "Asia/Seoul", "name"  => "韓国"),
                                          array("id" => "Asia/Singapore", "name"  => "シンガポール共和国"),
                                          array("id" => "Asia/Kuching", "name"  => "マレーシア"),
                                          array("id" => "Asia/Bangkok", "name"  => "タイ"),
                                          array("id" => "Asia/Manila", "name"  => "フィリピン"),
                                          array("id" => "Asia/Jakarta", "name"  => "インドネシア"),
                                          array("id" => "Europe/London", "name"  => "イギリス"),
                                          array("id" => "America/New_York", "name"  => "アメリカ（ニュージャージー、ニューヨーク、コネティカット）"),
                                          array("id" => "America/Los_Angeles", "name"  => "アメリカ（カリフォルニア）"),
                                          array("id" => "Europe/Paris", "name"  => "フランス"),
                                          array("id" => "Europe/Moscow", "name"  => "ロシア(モスクワ)"),
                                          array("id" => "Australia/Melbourne", "name"  => "オーストラリア（メルボルン）"));
    public static function getList(){
        return self::$timezone_list;
    }

    public static function getConvTimeList($datetime, $base_timezone){
        $t = new DateTime($datetime, new DateTimeZone($base_timezone));
        $conv_time_list = array();
        foreach(self::$timezone_list as $timezone){
            $t->setTimezone( new DateTimeZone($timezone['id']) );
            $conv_time = $timezone;
            $conv_time['time'] = $t->format('Y/m/d H:i');
            if($timezone['id'] == $base_timezone){
                $conv_time['base_flg'] = true;
            }
            $conv_time_list[] = $conv_time;
        }
        return $conv_time_list;
    }
}
