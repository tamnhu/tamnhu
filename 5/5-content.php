<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="style-5 my-5">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="column-inner">
                  <h3>
                    Discover new incredible features
                  </h3>
                  <div class="text-inner">
                    <p>
                      Fusce risus nisl, viverra et, tempor et, pretium in ,
                      sapien.Sed mollis, eros et ultrices tempus, mauris ipsum
                      aliquam libero, non adipiscing dolor urna a orci.Donec
                      pede justo, fringilla vel, aliquet nec, vulputate eget,
                      arcu.Nullam quis ante.Nunc nonummy metus.Maecenas
                      ullamcorper, dui et placerat feugiat, eros pede varius
                      nisi, condimentum viverra felis nunc et lorem.Praesent
                      blandit laoreet nibh.Aenean massa.Praesent nec nisl a
                      purus blandit viverra.Aenean imperdiet.Etiam imperdiet
                      imperdiet orci.Cras id dui.Praesent turpis.Quisque id
                      odio.Donec quamusa felis, ultricies nec.
                    </p>
                  </div>
                  <a href="/#" class="btn btn-readmore btn-lg">
                    <span> Read more </span>
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>
          </div>
        </div>
        <div class="prow-herder">
          <h3> Courses Categories </h3> <span class="arrow"> </span>
        </div>
        <div class="thumb-5">
          <div class="container">
            <div class="row">
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-1.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-1">
                    <h4 class="content-title"> Faculty of History </h4>
                    <div class="content-detail"> 2 Courses </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-2.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-2">
                    <h4 class="content-title"> Faculty of Finance </h4>
                    <div class="content-detail"> 1 Courses </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-3.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-3">
                    <h4 class="content-title"> Faculty of Chemistry </h4>
                    <div class="content-detail"> 2 Courses </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-4.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-4">
                    <h4 class="content-title"> Faculty of Medicine </h4>
                    <div class="content-detail"> 1 Courses </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-5.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-5">
                    <h4 class="content-title"> Faculty of Physics </h4>
                    <div class="content-detail"> 1 Courses </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-6.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-6">
                    <h4 class="content-title"> Faculty of Geography </h4>
                    <div class="content-detail"> 1 Courses </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-7.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-7">
                    <h4 class="content-title"> Faculty of Biology </h4>
                    <div class="content-detail"> 1 Courses </div>
                  </div>
                </div>
              </div>
              <div class = "col-md-6 col-xs-12 col-sm-6 col-lg-3 item-event">
                <div class="thumbs-p">
                  <div class="picture">
                    <a href="/#">
                      <img alt="thumbs" src="./images/img-8.jpg" />
                    </a>
                  </div>
                  <div class="content-thumb color-content-8">
                    <h4 class="content-title"> University </h4>
                    <div class="content-detail"> 3 Courses </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-center">
              <a href="/#" class="btn btn-readmore btn-lg">
                <span> View all categories </span>
              </a>
            </div>
          </div>
        </div>
      </div>