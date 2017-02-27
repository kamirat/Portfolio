<?php

function h($s)
{
    return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

// エラーメッセージ
$err_msg = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    require_once('functions.php');
    $dbh = connectDb();

    // var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sendAt = date('Y-m-d H:i:s');

    $sql = "insert into contacts (received,name,email,comments) values (:received, :name, :email, :comments)";

    $stmt = $dbh->prepare($sql);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":comments", $comment);
    $stmt->bindParam(":received", $sendAt);

    $stmt->execute();

    exit;
  }

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <script type="text/javascript" src="js/materialize.min.js"></script>

  <title>Kami R - Portfolio</title>
</head>
<body>

<!--  TODO // put background vid  -->
    <div class="container valign-wrapper" style="height:40em;" id="topvid">
            <h3 class="valign white">Kami Rattray</h3><br>
    </div>


<!--  Parallax  -->
    <div class="parallax-container">
        <div class="container right-align">
<!--            <a href="">Bio</a> <a href="">Works</a> <a href="">Contact</a>-->
        </div>
<!--
        <div class="parallax"><img src="bg_slight.png">
        </div>
-->
    </div>


<!--  diagonal separator  -->
<a name="bio"></a>
<div class="image above">
  <section class="vertical">
      <header><p>Bio</p></header>
    <div class="separator"></div>
    <footer></footer>
  </section>
</div>

<!--  BIO  -->
<div class="section white">
    <div class="row container">
      <div class="col s4">
        <img src="icon.jpg" style="width:100%; height:100%;">
      </div>
       <div class="col s8">
            <h3>Kami Rattray</h3>
            <i class="material-icons tiny bluish">label</i>Graphic Designer <i class="material-icons tiny bluish">label</i>Web Developer
       </div>
        <div class="col s8">
            <div class="section">
                ゲームが好きな生粋の日本人オタク:D
            </div>
            <div class="divider"></div>
            <div class="section">
                   <p>
                    <span class="lime accent-2">グラフィックデザイン</span> WEBバナーから印刷物まで<br>
                    <span class="light-green accent-2">翻訳</span> 日英の簡単な翻訳､校正<br>
                    <span class="cyan accent-1">コーディング</span> HTML5/CSS/PHP WEBサイトの構築･修正､簡単なプログラミング
                   </p>
            </div>
        </div>
    </div>
</div>

<!--  diagonal separator END  -->
<div class="image above">
  <section class="vertical">
    <header></header>
    <div class="separatorEnd"></div>
    <footer></footer>
  </section>
</div>


    <div class="parallax-container">
<!--
        <div class="parallax"><img src="bg_slight.png">
        </div>
-->
    </div>



<!--  diagonal separator  -->
<a name="works"></a>
<div class="image above">
  <section class="vertical">
    <header><p>Works</p></header>
    <div class="separator"></div>
    <footer></footer>
  </section>
</div>

  <div class="section white">
    <div class="row container">
    under construction...
    </div>
  </div>

<!--
/* WORKS */
  <div class="section white">
    <div class="row container">
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/logos/thmb.jpg" alt="">
              </div>
              <div class="card-content">ロゴ</div>
          </div>
      </div>
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/posters/thmb.jpg" alt="">
              </div>
              <div class="card-content">ポスター</div>
          </div>
      </div>
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/photos/thmb.jpg" alt="">
              </div>
              <div class="card-content">写真</div>
          </div>
      </div>
    </div>

/*  2nd row  */
    <div class="row container">

      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/photos/thmb2.jpg" alt="">
              </div>
              <div class="card-content">写真</div>
          </div>
      </div>
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/ads/thmb.jpg" alt="">
              </div>
              <div class="card-content">求人広告</div>
          </div>
      </div>
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/web/thmb.jpg" alt="">
              </div>
              <div class="card-content">会社案内用HP</div>
          </div>
      </div>
    </div>


/* 3rd row */
    <div class="row container">

      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/misc/thmb2.jpg" alt="">
              </div>
              <div class="card-content">イラスト</div>
          </div>
      </div>
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/misc/thmb.jpg" alt="">
              </div>
              <div class="card-content">名刺</div>
          </div>
      </div>
      <div class="col s4">
          <div class="card hoverable small">
              <div class="card-image">
                  <img src="works/ads/thmb2.jpg" alt="">
              </div>
              <div class="card-content">求人広告</div>
          </div>
      </div>
    </div>

/* hide button
    <div class="container">
       <div class="center-align">
        <a class="waves-effect waves-light btn" href="works.html">more<i class="material-icons right">view_module</i></a>
       </div>
    </div>
*/

  </div>

-->

<!--  diagonal separator END  -->
<div class="image above">
  <section class="vertical">
    <header></header>
    <div class="separatorEnd"></div>
    <footer></footer>
  </section>
</div>



    <div class="parallax-container">
<!--
        <div class="parallax"><img src="bg_slight.png">
        </div>
-->
    </div>



<!--  diagonal separator  -->
<a name="contact"></a>
<div class="image above">
  <section class="vertical">
    <header><p>Contact</p></header>
    <div class="separator"></div>
    <footer></footer>
  </section>
</div>


<!--  TODO / make php-form work proper  -->

<!--  CONTACT form  -->
  <div class="section white">
    <div class="row container">
       <p>*全て必須項目です</p>
        <form class="col s12" method="post">
          <div class="row">
            <div class="input-field col s12">
              <input id="first_name" type="text" class="validate" name="name">
              <label for="first_name">Name <?php if(isset($_POST["name"])){ echo h($_POST['name']);}?></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email">
              <label for="email">Email<?php if(isset($_POST["email"])){echo h($_POST['email']);} ?></label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" class="materialize-textarea" name="comment"><?php if(isset($_POST["comment"])){ echo h($_POST["comment"]);} ?></textarea>
              <label for="textarea1">Comments</label>
            </div>
          </div>
                      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
        <div class="center-align">

        </div>
    </div>
  </div>

<!--  diagonal separator END  -->
<div class="image above">
  <section class="vertical">
    <header></header>
    <div class="separatorEnd"></div>
    <footer></footer>
  </section>
</div>


      <div class="parallax-container">
<!--
        <div class="parallax"><img src="bg_slight.png">
        </div>
-->
    </div>


<!--  FOOTER  -->
    <footer class="page-footer cyan darken-3">
    <div class="footer-copyright">
            <div class="container">
            &copy; <?php echo date('Y'); ?> Kami Rattray
            </div>
          </div>
    </footer>


<script>
    $(document).ready(function(){
      $('.parallax').parallax();
    });
</script>
</body>
</html>
