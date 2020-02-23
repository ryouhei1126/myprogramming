<?php

require_once(__DIR__ . '/../config/config.php');
require_once(__DIR__ . '/../config/data.php');


// var_dump($_SESSION['me']);
$app = new MyApp\Controller\Index();

$app->run();

?>

<DOCTYPE html>
<html lang="ja">
<head>
  <meta chrset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function validateRecaptcha ( code ) {
      if ( !!code ) {
        var form = document.querySelector(".recaptcha");
        form.removeAttribute('disabled');
      }
    }
  </script>
</head>
<body>
  <div id="container">
    <form action="logout.php" method="post" id="logout">
      <?= h($app->me()->email); ?> <input type="submit" value="Log Out">
    </form>

    <!-- user表示 -->
    <!-- <h1>Users <span class="fs12">(<?= count($app->getValues()->users) ?>)</span></h1>
    <ul>
      <?php foreach ($app->getValues()->users as $user) : ?>
        <li><?= h($user->email); ?></li>
      <?php endforeach; ?>

    </ul> -->
  </div>
  <h2>47都道府県の旅</h2>
  <p>みなさんは旅行に行こうと思った時にどこに行くか迷うことってありませんか？そんな時<br>
に行き先をルーレットにお任せしちゃおうっていうサービスです。
  </p>
  <div class="box">
    <select name="select">
      <option value="選択してください">選択してください</option>
      <option id="zenbu" value="全部">全部</option>
      <option id="tohoku" value="北海道・東北">北海道・東北</option>
      <option id="kanto" value="関東">関東</option>
      <option id="tyubu" value="中部">中部</option>
      <option id="kinki" value="近畿">近畿</option>
      <option id="tyugoku" value="中国">中国</option>
      <option id="shikoku" value="四国">四国</option>
      <option id="kyusyu" value="九州・沖縄">九州・沖縄</option>
    </select>
  </div>

  <input id="ok" value="決定！" type="button" onclick="clickBtn()">
  <input id="back" value="やり直し！" type="button">
  <input id="search" value="ここで決めて観光地を探す" type="button">

  <div id="btn">?</div>

  <div id="confirmation">
  <form action="check.php" method="POST" id="inquiry">
  <table>
  <tr>
  <th><label for="name">お名前</label></th>
  <td><input type="text" name="name" size="20" id="name" class="text1"></td>
  </tr>
  <tr>
  <th><label for="email2">メールアドレス</label></th>
  <td><input type="text" name="email2" size="50" id="email2" class="text2"></td>
  </tr>
  <tr>
  <th><label for="message">ご意見</label></th>
  <td><textarea name="message" cols="50" rows="5" class="text3" id="message"></textarea></td>
  </tr>
  </table>
  <div class="g-recaptcha" data-callback="validateRecaptcha"
  data-sitekey="6LfHatsUAAAAAKyTzHy-h9vS2NXyEDrf8rExNEp2"></div>
  <input type="submit" value="確認画面へ" name="ACMS_POST_Form_Submit" id="btnSubmit"
  class="recaptcha btn-attention-block-large" disabled>
  </form>
  </div>




  <script>

     const btn = document.getElementById('btn');
     const start = document.getElementById('start');
     const ok = document.getElementById('ok');

     function clickBtn() {
       const zenbu = document.getElementById('zenbu');
       const tohoku = document.getElementById('tohoku');
       const kanto = document.getElementById('kanto');
       const tyubu = document.getElementById('tyubu');
       const kinki = document.getElementById('kinki');
       const tyugoku = document.getElementById('tyugoku');
       const shikoku = document.getElementById('shikoku');
       const kyusyu = document.getElementById('kyusyu');

       if(zenbu.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getPlace ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getPlace) {
                    case "北海道":
                      echo "https://tabichannel.com/article/338/hokkaido";
                      break;
                    case "青森県":
                      echo "https://tabichannel.com/article/116/aomori";
                      break;
                    case "岩手県":
                      echo "https://tabichannel.com/article/85/iwate";
                      break;
                    case "宮城県":
                      echo "https://tabichannel.com/article/104/miyagi";
                      break;
                    case "秋田県":
                      echo "https://tabichannel.com/article/150/akita";
                      break;
                    case "山形県":
                      echo "https://tabichannel.com/article/117/yamagata";
                      break;
                    case "福島県":
                      echo "https://tabichannel.com/article/77/fukushima";
                      break;
                    case "茨城県":
                      echo "https://tabichannel.com/article/63/ibaraki_kanko";
                      break;
                    case "栃木県":
                      echo "https://tabichannel.com/article/91/tochigi";
                      break;
                    case "群馬県":
                      echo "https://tabichannel.com/article/143/gunma";
                      break;
                    case "埼玉県":
                      echo "https://tabichannel.com/article/105/saitama";
                      break;
                    case "千葉県":
                      echo "https://tabichannel.com/article/89/chiba";
                      break;
                    case "東京都":
                      echo "https://tabichannel.com/article/36/tokyo_kanko";
                      break;
                    case "神奈川県":
                      echo "https://tabichannel.com/article/113/kanagawa";
                      break;
                    case "新潟県":
                      echo "https://tabichannel.com/article/131/niigata_kanko";
                      break;
                    case "富山県":
                      echo "https://tabichannel.com/article/54/toyama";
                      break;
                    case "石川県":
                      echo "https://tabichannel.com/article/111/ishikawa";
                      break;
                    case "福井県":
                      echo "https://tabichannel.com/article/92/fukui";
                      break;
                    case "山梨県":
                      echo "https://tabichannel.com/article/95/yamanashi";
                      break;
                    case "長野県":
                      echo "https://tabichannel.com/article/100/nagano";
                      break;
                    case "岐阜県":
                      echo "https://tabichannel.com/article/149/gifu";
                      break;
                    case "静岡県":
                      echo "https://tabichannel.com/article/137/shizuoka";
                      break;
                    case "愛知県":
                      echo "https://tabichannel.com/article/168/nagoya";
                      break;
                    case "三重県":
                      echo "https://tabichannel.com/article/86/mie";
                      break;
                    case "滋賀県":
                      echo "https://tabichannel.com/article/84/shiga";
                      break;
                    case "京都府":
                      echo "https://tabichannel.com/article/22/travel_kyoto";
                      break;
                    case "大阪府":
                      echo "https://tabichannel.com/article/277/osaka";
                      break;
                    case "兵庫県":
                      echo "https://tabichannel.com/article/94/hyogo";
                      break;
                    case "奈良県":
                      echo "https://tabichannel.com/article/157/nara";
                      break;
                    case "和歌山県":
                      echo "https://tabichannel.com/article/134/wakayama_kanko";
                      break;
                    case "鳥取県":
                      echo "https://tabichannel.com/article/58/tottori_kanko";
                      break;
                    case "島根県":
                      echo "https://tabichannel.com/article/87/shimane";
                      break;
                    case "岡山県":
                      echo "https://tabichannel.com/article/76/okayama";
                      break;
                    case "広島県":
                      echo "https://tabichannel.com/article/307/hiroshima";
                      break;
                    case "山口県":
                      echo "https://tabichannel.com/article/81/yamaguchi";
                      break;
                    case "徳島県":
                      echo "https://tabichannel.com/article/159/tokushima";
                      break;
                    case "香川県":
                      echo "https://tabichannel.com/article/74/kagawa_kanko";
                      break;
                    case "愛媛県":
                      echo "https://tabichannel.com/article/151/ehime";
                      break;
                    case "高知県":
                      echo "https://tabichannel.com/article/64/kochi";
                      break;
                    case "福岡県":
                      echo "https://tabichannel.com/article/155/fukuoka";
                      break;
                    case "佐賀県":
                      echo "https://tabichannel.com/article/161/saga";
                      break;
                    case "長崎県":
                      echo "https://tabichannel.com/article/115/nagasaki";
                      break;
                    case "熊本県":
                      echo "https://tabichannel.com/article/145/kumamoto";
                      break;
                    case "大分県":
                      echo "https://tabichannel.com/article/158/oita";
                      break;
                    case "宮崎県":
                      echo "https://tabichannel.com/article/98/miyazaki";
                      break;
                    case "鹿児島県":
                      echo "https://tabichannel.com/article/32/kagoshima";
                      break;
                    case "沖縄県":
                      echo "https://tabichannel.com/article/127/okinawa_kanko";
                      break;
                    }; ?>';
           });
       }


       if(tohoku.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getTohoku ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getTohoku) {
                    case "北海道":
                      echo "https://tabichannel.com/article/338/hokkaido";
                      break;
                    case "青森県":
                      echo "https://tabichannel.com/article/116/aomori";
                      break;
                    case "岩手県":
                      echo "https://tabichannel.com/article/85/iwate";
                      break;
                    case "宮城県":
                      echo "https://tabichannel.com/article/104/miyagi";
                      break;
                    case "秋田県":
                      echo "https://tabichannel.com/article/150/akita";
                      break;
                    case "山形県":
                      echo "https://tabichannel.com/article/117/yamagata";
                      break;
                    case "福島県":
                      echo "https://tabichannel.com/article/77/fukushima";
                      break;
                    }; ?>';
           });
       }


       if(kanto.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getKanto ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getKanto) {
                    case "茨城県":
                      echo "https://tabichannel.com/article/63/ibaraki_kanko";
                      break;
                    case "栃木県":
                      echo "https://tabichannel.com/article/91/tochigi";
                      break;
                    case "群馬県":
                      echo "https://tabichannel.com/article/143/gunma";
                      break;
                    case "埼玉県":
                      echo "https://tabichannel.com/article/105/saitama";
                      break;
                    case "千葉県":
                      echo "https://tabichannel.com/article/89/chiba";
                      break;
                    case "東京都":
                      echo "https://tabichannel.com/article/36/tokyo_kanko";
                      break;
                    case "神奈川県":
                      echo "https://tabichannel.com/article/113/kanagawa";
                      break;
                    }; ?>';
           });
       }


       if(tyubu.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getTyubu ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getTyubu) {
                    case "新潟県":
                      echo "https://tabichannel.com/article/131/niigata_kanko";
                      break;
                    case "富山県":
                      echo "https://tabichannel.com/article/54/toyama";
                      break;
                    case "石川県":
                      echo "https://tabichannel.com/article/111/ishikawa";
                      break;
                    case "福井県":
                      echo "https://tabichannel.com/article/92/fukui";
                      break;
                    case "山梨県":
                      echo "https://tabichannel.com/article/95/yamanashi";
                      break;
                    case "長野県":
                      echo "https://tabichannel.com/article/100/nagano";
                      break;
                    case "岐阜県":
                      echo "https://tabichannel.com/article/149/gifu";
                      break;
                    case "静岡県":
                      echo "https://tabichannel.com/article/137/shizuoka";
                      break;
                    case "愛知県":
                      echo "https://tabichannel.com/article/168/nagoya";
                      break;
                    }; ?>';
           });
       }


       if(kinki.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getKinki ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getKinki) {
                    case "三重県":
                      echo "https://tabichannel.com/article/86/mie";
                      break;
                    case "滋賀県":
                      echo "https://tabichannel.com/article/84/shiga";
                      break;
                    case "京都府":
                      echo "https://tabichannel.com/article/22/travel_kyoto";
                      break;
                    case "大阪府":
                      echo "https://tabichannel.com/article/277/osaka";
                      break;
                    case "兵庫県":
                      echo "https://tabichannel.com/article/94/hyogo";
                      break;
                    case "奈良県":
                      echo "https://tabichannel.com/article/157/nara";
                      break;
                    case "和歌山県":
                      echo "https://tabichannel.com/article/134/wakayama_kanko";
                      break;
                    }; ?>';
           });
       }


       if(tyugoku.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getTyugoku ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getPlace) {
                    case "鳥取県":
                      echo "https://tabichannel.com/article/58/tottori_kanko";
                      break;
                    case "島根県":
                      echo "https://tabichannel.com/article/87/shimane";
                      break;
                    case "岡山県":
                      echo "https://tabichannel.com/article/76/okayama";
                      break;
                    case "広島県":
                      echo "https://tabichannel.com/article/307/hiroshima";
                      break;
                    case "山口県":
                      echo "https://tabichannel.com/article/81/yamaguchi";
                      break;
                    }; ?>';
           });
       }


       if(shikoku.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getShikoku ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getShikoku) {
                    case "徳島県":
                      echo "https://tabichannel.com/article/159/tokushima";
                      break;
                    case "香川県":
                      echo "https://tabichannel.com/article/74/kagawa_kanko";
                      break;
                    case "愛媛県":
                      echo "https://tabichannel.com/article/151/ehime";
                      break;
                    case "高知県":
                      echo "https://tabichannel.com/article/64/kochi";
                      break;
                    }; ?>';
           });
       }


       if(kyusyu.selected){
         ok.addEventListener('click', () => {
           btn.textContent ='<?php echo $getKyusyu ?>' ;
         });
         search.addEventListener('click', () => {
             window.location.href = '<?php switch($getKyusyu) {
                    case "福岡県":
                      echo "https://tabichannel.com/article/155/fukuoka";
                      break;
                    case "佐賀県":
                      echo "https://tabichannel.com/article/161/saga";
                      break;
                    case "長崎県":
                      echo "https://tabichannel.com/article/115/nagasaki";
                      break;
                    case "熊本県":
                      echo "https://tabichannel.com/article/145/kumamoto";
                      break;
                    case "大分県":
                      echo "https://tabichannel.com/article/158/oita";
                      break;
                    case "宮崎県":
                      echo "https://tabichannel.com/article/98/miyazaki";
                      break;
                    case "鹿児島県":
                      echo "https://tabichannel.com/article/32/kagoshima";
                      break;
                    case "沖縄県":
                      echo "https://tabichannel.com/article/127/okinawa_kanko";
                      break;
                    }; ?>';
           });
       }
     }

     back.addEventListener('click', () => {
         window.location.reload();
       });

  </script>



</body>
</html>
