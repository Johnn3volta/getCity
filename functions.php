<?php


require_once $_SERVER['DOCUMENT_ROOT'].'/getCity/SxGeo22_API/SxGeo.php';


/**
 * @param $ip
 *
 * @return array|bool
 */
function getCity($ip){
    $sxGeo = new SxGeo($_SERVER['DOCUMENT_ROOT'] . '/getCity/SxGeo22_API/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);

    return $sxGeo->getCityFull($ip);
}


/**
 * @param $ip
 *
 * @return string
 */
function getCityBlock($ip){
    $city = getCity($ip);
    $cName = iconv('UTF-8','cp1251',$city['city']['name_ru']);
    $number = '8 (495) 587-44-80';
    $mNumber = '+7(495)5874480';
    $mail = 'msk@price-etiketka.ru';
    $comparison = iconv('UTF-8','cp1251',$city['region']['name_ru']);
    if($comparison == 'Астраханская область'){
        $number = '8 (8512) 442-592';
        $mNumber = '+7(8512)442592';
        $mail = 'astrahn@price-etiketka.ru';
    }
    if($comparison == 'Алтайский край'){
        $number = '8 (385) 255-64-65';
        $mNumber = '+7(385)2556465';
        $mail = 'barn@price-etiketka.ru';
    }
    if($comparison == 'Брянская область'){
        $number = '8 (4832) 729-736';
        $mNumber = '+7(4832)729736';
        $mail = 'brynsk@price-etiketka.ru';
    }
    if($comparison == 'Воронежская область'){
        $number = '8 (473) 210-60-15';
        $mNumber = '+7(473)2106015';
        $mail = 'voroneg@price-etiketka.ru';
    }
    if($comparison == 'Волгоградская область'){
        $number = '8 (844) 296-88-02';
        $mNumber = '+7(844)2968802';
        $mail = 'info@price-etiketka.ru';
    }
    if($comparison == 'Иркутская область'){
        $number = '8 (395) 243-67-06';
        $mNumber = '+7(395)2436706';
        $mail = 'info@price-etiketka.ru';
    }
    if($comparison == 'Краснодарский край'){
        if($cName == 'Сочи'){
            $number = '8 (862) 444-05-71';
            $mNumber = '+7(862)4440571';
            $mail = ' sochi@price-etiketka.ru';
        }else{
            $number = '8 (861) 991-46-47';
            $mNumber = '+7(861)9914647';
            $mail = 'krasnodar@price-etiketka.ru';
        }
    }
    if($comparison == 'Курская область'){
        $number = '8 (4712) 349-542';
        $mNumber = '+7(4712)349542';
        $mail = 'kursk@price-etiketka.ru';
    }
    if($comparison == 'Красноярский край'){
        $number = '8 (391) 234-71-79';
        $mNumber = '+7(391)2347179';
        $mail = 'krasnoy@price-etiketka.ru';
    }
    if($comparison == 'Пермский край'){
        $number = '8 (342) 258-43-22';
        $mNumber = '+7(342)2584322';
        $mail = 'perm@price-etiketka.ru';
    }
    if($comparison == 'Липецкая область'){
        $number = '8 (4742) 286-752';
        $mNumber = '+7(4742)286752';
        $mail = 'lipeck@price-etiketka.ru';
    }
    if($comparison == 'Кемеровская область'){
        if($cName == 'Новокузнецк'){
            $number = '8 (384) 332-80-70';
            $mNumber = '+7(384)3328070';
            $mail = 'novk@price-etiketka.ru';
        }else{
            $number = '8 (384) 278-00-28';
            $mNumber = '+7(384)2780028';
            $mail = 'kem@price-etiketka.ru';
        }
    }
    if($comparison == 'Рязанская область'){
        $number = '8 (4912) 202-215';
        $mNumber = '+7(4912)202215';
        $mail = 'ryzan@price-etiketka.ru';
    }
    if($comparison == 'Ростовская область'){
        $number = '8 (863) 285-06-34';
        $mNumber = '+7(863)2850634';
        $mail = 'rostov-nd@price-etiketka.ru';
    }
    if($comparison == 'Саратовская область'){
        $number = '8 (8452) 694-216';
        $mNumber = '+7(8452)694216';
        $mail = 'saratov@price-etiketka.ru';
    }
    if($comparison == 'Ставропольский край'){
        $number = '8 (8652) 257-352';
        $mNumber = '+7(8652)257352';
        $mail = 'stavropol@price-etiketka.ru';
    }
    if($comparison == 'Самарская область'){
        if($cName == 'Тольятти'){
            $number = '8 (848) 237-94-58';
            $mNumber = '+7(848)2379458';
            $mail = 'tol@price-etiketka.ru';
        }else{
            $number = '8 (846) 250-04-12';
            $mNumber = '+7(846)2500412';
            $mail = 'sam@price-etiketka.ru';
        }
    }
    if($comparison == 'Томская область'){
        $number = '8 (382) 260-95-61';
        $mNumber = '+7(382)2609561';
        $mail = 'tomsk@price-etiketka.ru';
    }
    if($comparison == 'Тульская область'){
        $number = '8 (4872) 770-054';
        $mNumber = '+7(4872)770054';
        $mail = 'tula@price-etiketka.ru';
    }
    if($comparison == 'Челябинская область'){
        $number = '8 (351) 214-95-02';
        $mNumber = '+7(351)2149502';
        $mail = 'chel@price-etiketka.ru';
    }
    if($comparison == 'Московская область' || $comparison == 'Москва'){
        if($cName == 'Балашиха'){
            $number = '8 (498) 681-98-56';
            $mNumber = '+7(498)6819856';
            $mail = 'balashiha@price-etiketka.ru';
        }elseif($cName == 'Королёв'){
            $number = '8 (498) 681-98-18';
            $mNumber = '+7(498)6819818';
            $mail = 'korolev@price-etiketka.ru';
        }elseif($cName == 'Мытищи'){
            $number = '8 (498) 681-58-27';
            $mNumber = '+7(498)6815827';
            $mail = 'mitishi@price-etiketka.ru';
        }else{
            $number = '8 (495) 587-44-80';
            $mNumber = '+7(495)5874480';
            $mail = 'msk@price-etiketka.ru';
        }
    }
    if($comparison == 'Нижегородская область'){
        $number = '8 (831) 435-13-88';
        $mNumber = '+7(831)4351388';
        $mail = 'nn@price-etiketka.ru';
    }
    if($comparison == 'Новосибирская область'){
        $number = '8 (383) 349-91-82';
        $mNumber = '+7(833)3499182';
        $mail = 'nsk@price-etiketka.ru';
    }
    if($comparison == 'Ленинградская область' || $comparison == 'Санкт-Петербург'){
        $number = '8 (812) 678-95-20';
        $mNumber = '+7(812)6789520';
        $mail = 'spb@price-etiketka.ru';
    }
    if($comparison == 'Свердловская область'){
        $number = '8 (343) 227-95-38';
        $mNumber = '+7(343)2279538';
        $mail = 'ekb@price-etiketka.ru';
    }
    if($comparison == 'Белгородская область'){
        $number = '8 (4722) 256-916';
        $mNumber = '+7(4722)256916';
        $mail = 'bel@price-etiketka.ru';
    }
    if($comparison == 'Татарстан'){
        $number = '8 (855) 225-30-75';
        $mNumber = '+7(855)2253075';
        $mail = 'cheln@price-etiketka.ru';
    }
    if($comparison == 'Удмуртия'){
        $number = '8 (3412) 271-230';
        $mNumber = '+7(3412)271230';
        $mail = 'izh@price-etiketka.ru';
    }
    if($comparison == 'Пензенская область'){
        $number = '8 (841) 245-88-31';
        $mNumber = '+7(841)2458831';
        $mail = 'penza@price-etiketka.ru';
    }
    if($comparison == 'Кировская область'){
        $number = '8 (843) 225-58-16';
        $mNumber = '+7(843)2255816';
        $mail = 'kirov@price-etiketka.ru';
    }
    if($comparison == 'Ярославская область'){
        $number = '8 (485) 220-86-22';
        $mNumber = '+7(485)2208622 ';
        $mail = 'yaroslavl@price-etiketka.ru';
    }
    if($comparison == 'Ульяновская область'){
        $number = '8 (842) 221-42-10';
        $mNumber = '+7(842)2214210 ';
        $mail = 'ulyanovsk@price-etiketka.ru';
    }
    if($comparison == 'Оренбургская область'){
        $number = '8 (353) 238-78-12';
        $mNumber = '+7(353)2387812 ';
        $mail = 'orenburg@price-etiketka.ru';
    }
    if($comparison == 'Тверская область'){
        $number = '8 (482) 245-27-03';
        $mNumber = '+7(482)2452703 ';
        $mail = 'tver@price-etiketka.ru';
    }
    if($comparison == 'Омская область'){
        $number = '8 (381) 279-02-57';
        $mNumber = '+7(381)2790257 ';
        $mail = 'omsk@price-etiketka.ru';
    }
    if($comparison == 'Тюменская область'){
        $number = '8 (345) 256-82-87';
        $mNumber = '+7(345)2568287 ';
        $mail = 'tumen@price-etiketka.ru';
    }
    if($comparison == 'Забайкальский край'){
        $number = '8 (302) 221-76-06';
        $mNumber = '+7(302)2217606 ';
        $mail = 'info@price-etiketka.ru';
    }
    if($comparison == 'Бурятия'){
        $number = '8 (301) 237-95-01';
        $mNumber = '+7(301)2379501 ';
        $mail = 'info@price-etiketka.ru';
    }
    if($comparison == 'Саха (Якутия)'){
        $number = '8 (411) 231-86-77';
        $mNumber = '+7(411)2318677 ';
        $mail = 'info@price-etiketka.ru';
    }
    if($comparison == 'Хабаровский край'){
        $number = '8 (421) 235-86-20';
        $mNumber = '+7(421)2358620 ';
        $mail = 'info@price-etiketka.ru';
    }
    if($comparison == 'Приморский край'){
        $number = '8 (423) 239-09-68';
        $mNumber = '+7(423)2390968 ';
        $mail = 'info@price-etiketka.ru';
    }


    $fblock = "<div id='your-city'>";
    $fblock .= "<span>Ваш город: </span>";
    $fblock .= "<strong id='city-name'>$cName</strong><a href='tel:$mNumber'>$number</a>";
    $fblock .= "<a id='your-city-email' style='border-bottom: dotted .5px black;' href='mailto:$mail' onclick=\"yaCounter20773207.reachGoal('MAILpost'); return true;\"><i>$mail</i></a>";
    $fblock .= "</div>";


    return $fblock;
}


/**
 * @return mixed
 */
function getIp(){
    $IP = $_SERVER['REMOTE_ADDR'];
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
        $IP = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
    }
    return $IP;
}



