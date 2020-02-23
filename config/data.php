<?php

   $places = array("北海道","青森県","岩手県","宮城県","秋田県","山形県","福島県","茨城県","栃木県","群馬県","埼玉県","千葉県","東京都","神奈川県","新潟県","富山県","石川県","福井県","山梨県","長野県","岐阜県","静岡県","愛知県","三重県","滋賀県","京都府","大阪府","兵庫県","奈良県","和歌山県","鳥取県","島根県","岡山県","広島県","山口県","徳島県","香川県","愛媛県","高知県","福岡県","佐賀県","長崎県","熊本県","大分県","宮崎県","鹿児島県","沖縄県");

   $key = array_rand($places, 1);

   $getPlace = $places[$key];


   $kanto = array_slice($places, 7, 7);

   $key1 =  array_rand($kanto, 1);

   $getKanto = $kanto[$key1];

   // echo $getKanto;


   $tohoku = array_slice($places, 0, 6);

   $key2 = array_rand($tohoku, 1);

   $getTohoku = $tohoku[$key2];

   // echo $getTohokuhokkaido;

   $tyubu= array_slice($places, 14, 9);

   $key3 = array_rand($tyubu, 1);

   $getTyubu = $tyubu[$key3];

   // echo $getTyubu;

   $kinki = array_slice($places, 23, 7);

   $key4 = array_rand($kinki, 1);

   $getKinki = $kinki[$key4];

   // echo $getKinki;

   $tyugoku = array_slice($places, 30, 5);

   $key5 = array_rand($tyugoku, 1);

   $getTyugoku = $tyugoku[$key5];

   // echo $getTyugoku;

   $shikoku = array_slice($places, 35, 4);

   $key6 = array_rand($shikoku, 1);

   $getShikoku = $shikoku[$key6];

   // echo $getShikoku;

   $kyusyu = array_slice($places, 39, 8);

   $key7 = array_rand($kyusyu, 1);

   $getKyusyu = $kyusyu[$key7];

   // echo $getKyusyu;


?>
