<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<div class="style-16">
    <div class="container my-5">
        <div class="category">
            <div class="showCate">
                <a href="#" id="showAll"><i class="fas fa-caret-right"></i> Collapse all</a>
                <a href="#" id="closeAll" class="close"><i class="fas fa-caret-right"></i> Expand all</a>
            </div>
            <div class="subCategory">
                <div id="accordion">
                    <div class="card-cate">

                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne"></button>
                                <a class="cate-name" href="#">Faculty of History</a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Boxed Layout</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                    <li>
                                        <a href="#">Acropolis ligula sed magna</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="false" aria-controls="collapse2"></button>
                                <a class="cate-name" href="#">Faculty of Finance</a>
                            </h5>
                        </div>

                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Monetary policy</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading3">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3"></button>
                                <a class="cate-name" href="#">Faculty of Chemistry</a>
                            </h5>
                        </div>

                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Chemistry ante ipsum</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                    <li>
                                        <a href="#">Organic chemistry</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading4">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapse4"></button>
                                <a class="cate-name" href="#">Faculty of Medicine</a>
                            </h5>
                        </div>

                        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Physiotherapy</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading5">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5"
                                    aria-expanded="false" aria-controls="collapse5"></button>
                                <a class="cate-name" href="#">Faculty of Physics</a>
                            </h5>
                        </div>

                        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Physics quis lorem ut</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading6">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6"
                                    aria-expanded="false" aria-controls="collapse6"></button>
                                <a class="cate-name" href="#">Faculty of Geography</a>
                            </h5>
                        </div>

                        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Climate pretium ut lacinia</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading6">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9"
                                    aria-expanded="false" aria-controls="collapse9"></button>
                                <a class="cate-name" href="#">Faculty of Biology</a>
                            </h5>
                        </div>

                        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Biology lacinia eget consectetur</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading7">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7"
                                    aria-expanded="false" aria-controls="collapse7"></button>
                                <a class="cate-name" href="#">University</a>
                            </h5>
                        </div>

                        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Swimming dolor sit amet</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                    <li>
                                        <a href="#">Library tortor risus</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                    <li>
                                        <a href="#">360 deegree</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-cate">
                        <div class="card-header" id="heading8">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8"
                                    aria-expanded="false" aria-controls="collapse8"></button>
                                <a class="cate-name" href="#">Theme</a>
                            </h5>
                        </div>

                        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <a href="#">Header light style</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                    <li>
                                        <a href="#">Theme elements</a>
                                        <span><i class="fa fa-unlock-alt fa-fw"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>