<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="style-20">
    <div class="top-banner">
        <a href="/">
            <div class="banner-bg"></div>
        </a>
        <div class="banner-title">
            <div class="container">
                <Row>
                    <div class="Col-md-12">
                    <h1 class="h4">
                        <a href="/">Theme elements</a>
                    </h1>
                    </div>
                </Row>
            </div>
        </div>
    </div>
    <div class="link-herder">
        <div class="inner">
        <div class="container">
            <Row>
                <div class="Col-md-12">
                    <div class="breadcrumb">
                        <nav role="navigation" aria-label="Navigation bar">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/">Courses
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/">Theme
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/" title="Theme elements">Theme elements</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/">Elements</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/">Icon Boxes</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    </div>
                </Row>
        </div>
        </div>
    </div>
    <div class ="container my-5">
        <div class="title">
            <h2>Icon Boxes</h2>
        </div>
        <div class="content-20">
            <p class="content-top">
                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta
                dapibus. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                Vestibulum ante ipsum primis in faucibus orci luctus
                et ultrices posuere cubilia Curae.
            </p>
            <div class="items">
                <div class="item-notify">
                    <div class="box-icon">
                        <i class="fa fa-info"></i>
                    </div>
                    <div class="box-content">To know how to use it
                        <a href="/"> check documentation.</a>
                    </div>
                </div>

                <div class="item-notify item-notify2">
                    <div class="box-icon">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="box-content">Use code generator to insert it or
                        <a href="/"> get full code from here.</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>