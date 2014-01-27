<?php



       $t = new DateTime($datetime);
        }
        $t->setTimezone( new DateTimeZone('Asia/tokyo') );
        return $t->format($format);
    }

    function convertJstToUtc($datetime){
        if(substr($datetime, 0, 4) == LIMITLESS_END_YEAR){
            return LIMITLESS_END_DATETIME;
        }
        $t = new DateTime($datetime, new DateTimeZone('Asia/tokyo'));
        $t->setTimezone( new DateTimeZone('UTC') );
        return $t->format('Y/m/d H:i');





$t = new DateTime();
// UTCへ変換
$t->setTimezone( new Timezone('UTC') );
echo $t->format(DateTime::ISO8601);

// ロンドンのタイムゾーンへの変換
$t->setTimezone( new DateTimeZone('Europe/London') );
echo $t->format(DateTime::ISO8601);

// N.Y.のタイムゾーンへの変換
$t->setTimezone( new DateTimeZone('America/New_York') );
echo $t->format(DateTime::ISO8601);
?>