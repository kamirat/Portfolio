<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <!-- Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://use.fontawesome.com/55400ddc92.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <title>Kami R - Portfolio</title>
</head>
<body>


<!-- title area -->
<main class="valign-wrapper">
    <div class="container center-align">
        <div class="valign">
            <h3 class="white-text">Kami Rattray</h3>
            <p class="white-text">
              PORTFOLIO WEBSITE
            </p>
        </div>
    </div>

</main>

<!--  diagonal separator  -->
<div class="image above">
  <section class="vertical">
    <div class="separator"></div>
  </section>
</div>

<!-- WORKS -->
<div class="white">
  <div class="row container">
     <div class="col s12">
          <h3>Works</h3>
            <p class="subtitle">最近制作したもの</p>
          <div class="section" id="mix-wrapper">
              <div class="search">
                <form action="#">
                  <ul>
                    <li>
                      <input type="checkbox" id="design" checked="checked" class="filter-btn" data-filter=".cat--design">
                      <label for="design">DESIGN</label>
                    </li>
                    <li>
                      <input type="checkbox" id="photos" checked="checked" class="filter-btn" data-filter=".cat--photo">
                      <label for="photos">PHOTO</label>
                    </li>
                    <li>
                      <input type="checkbox" id="logos" checked="checked" class="filter-btn" data-filter=".cat--logos">
                      <label for="logos">LOGOS</label>
                    </li>
                    <li>
                      <input type="checkbox" id="misc" checked="checked" class="filter-btn" data-filter=".cat--misc">
                      <label for="misc">MISC</label>
                    </li>
                  </ul>
                </form>
              </div>


                <div class="works mix cat--design">
                  <a href="#">
                    <div class="thumbnail" style="background-image:url()"></div>
                    <div class="caption">
                      <p>DESIGN</p>
                    </div>
                  </a>
                </div>


                <div class="works mix cat--logo">
                  <a href="#">
                    <div class="thumbnail" style="background-image:url()"></div>
                    <div class="caption">
                      <p>LOGO</p>
                    </div>
                  </a>
                </div>

                <div class="works mix cat--photo">
                  <a href="#">
                    <div class="thumbnail" style="background-image:url()"></div>
                    <div class="caption">
                      <p>PHOTO</p>
                    </div>
                  </a>
                </div>

                <div class="works mix cat--photo">
                  <a href="#modal1" class="modal-trigger">
                    <div class="thumbnail" style="background-image:url()"></div>
                    <div class="caption">
                      <p>PHOTO</p>
                    </div>
                  </a>
                </div>
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <h4>Modal Header</h4>
                    <p>A bunch of text</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-blue btn-flat">CLOSE</a>
                  </div>
                </div>
                <!-- FIX:: MODAL NOT WORKING -->
                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                  <div class="modal-content">
                    <h4>Modal Header</h4>
                    <p>A bunch of text</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                  </div>
                </div>

                <!-- /. End Works -->
              </div>
          </div>
      </div>
    </div>


<!--  diagonal separator 2  -->
<div class="image above">
  <section class="vertical">
    <div class="separatorEnd"></div>
  </section>
</div>


<div class="">
  <div class="row container">
     <div class="col s12 right-align">
          <h3>something</h3>
            <p class="subtitleB">なにか別のコンテンツ</p>
          <div class="section">
              <div class="">
                123...
              </div>
          </div>

      </div>
    </div>
</div>


<!--  diagonal separator  -->
<div class="image above">
  <section class="vertical">
    <div class="separator"></div>
  </section>
</div>





<!--  BIO  -->
<footer class="page-footer white">
    <div class="row container">
       <div class="col s12 right-align">
            <h3>Kami Rattray</h3>
            <div class="mytags">
                <ul>
                  <li><i class="material-icons tiny bluish">label</i>Graphic Designer</li>
                  <li><i class="material-icons tiny bluish">label</i>Web Developer</li>
                </ul>
            </div>
            <div class="section">
                ゲームが好きな生粋の日本人オタク｡<br>
                フロントエンドエンジニアめざして勉強中｡
            </div>
            <div class="sns-list">
              <ul>
                <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
        <div class="footer-copyright white">
          <div class="container grey-text right-align">
            © 2017 Kami Rattray
          </div>
        </div>
</footer>


  <script src="plugin/mixitup.min.js"></script>
</body>
</html>
