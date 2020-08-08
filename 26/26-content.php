<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="style-26">
                <div class ="container my-5">
                    <div class="title">
                        <h2>Slider</h2>
                    </div>
                    <div class="content-26">
                        <p class="content-top">
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.
                        </p>
                        <div class="items">
                            <div class="item-notify">
                                <div class="box-icon">
                                    <i class="fa fa-info"></i>
                                </div>
                                <div class="box-content">To know how to use it 
                                    <a href="/#"> check documentation.</a>
                                </div>
                            </div>

                            <div class="item-notify-2">
                                <div class="box-content">
                                    <div class="box-icon">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    Use code generator to insert it or&nbsp;
                                    <a href="/#">get full code from here</a>. 
                                    Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus.</div>
                            </div>
                        </div>
                        <div class="title-2">
                            <h4><span>Single image</span></h4>
                        </div>
                    </div>
                    <div class="box-slider">
                        <Row>
                        <div class="Col-md-6">
                                <Swiper spaceBetween={50} slidesPerView={1} loop={true}>
                                    {slideLeft}
                                </Swiper>
                            </div>
                            <div class="Col-md-6" class="mt-md-0 mt-sm-3">
                                <Swiper spaceBetween={50} slidesPerView={1} loop={true}>
                                    {slideRight}
                                </Swiper>
                            </div>
                        </Row>
                    </div>
                    <p class="content-bottom">
                    Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna
    dictum porta. Nulla porttitor accumsan tincidunt.
                    </p>
                </div>
            </div>