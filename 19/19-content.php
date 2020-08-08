<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="style-19">
                <div class="top-banner">
                    <a href="/">
                        <div class="banner-bg"></div>
                    </a>
                    <div class="banner-title">
                        <div class="container ctn-md-19">
                            <Row>
                                <div class="col-md-12">
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
								<div class="col-md-12">
                                    <div class="breadcrumb">
                                        <nav role="navigation" aria-label="Navigation bar">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="/">Home</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="/">Courses</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="/">Theme</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="/" title="Theme elements">Theme elements</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="/">Elements</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="/">Tabs</a>
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
                        <h2>Tabs</h2>
                    </div>
                    <div class="content-19">
                        <p class="content-top">
                        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus
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
                    <div class="title-2">
                        <h4><span>Tabs with icons</span></h4>
                    </div>
                    <div class="row">
						<div class="col-md-6">	
                            <div class="tabs-left">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link active show" href="#tab1" data-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true">
                                        <i class="fas fa-info"></i> Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab2" data-toggle="tab" role="tab" aria-controls="tab2" aria-selected="false"><i class="fa fa-coffee"></i> Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab3" data-toggle="tab" role="tab" aria-controls="tab3" aria-selected="false"><i class="fa fa-umbrella"></i> Tab 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab1" role="tabpanel" aria-labelledby="tab1">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras
    ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                    <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Quisque velit
    nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</div>
                                    <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan
    tincidunt. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                    	<div class="col-md-6">
                        	<div class="tabs-right">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link active show" href="#tab4" data-toggle="tab" role="tab" aria-controls="tab4" aria-selected="true">
                                            <i class="fas fa-piggy-bank"></i> Tab 4
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab5" data-toggle="tab" role="tab" aria-controls="tab5" aria-selected="false">
                                        <i class="far fa-gem"></i> Tab 5
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab6" data-toggle="tab" role="tab" aria-controls="tab6" aria-selected="false">
                                        <i class="fas fa-rocket"></i> Tab 6
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="tab4" role="tabpanel" aria-labelledby="tab4">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras
    ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                    <div class="tab-pane" id="tab5" role="tabpanel" aria-labelledby="tab5">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Quisque velit
    nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</div>
                                    <div class="tab-pane" id="tab6" role="tabpanel" aria-labelledby="tab6">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Lorem consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title-2">
                        <h4><span>Tabs left</span></h4>
                    </div>
                    <Row>
						<div class="col-md-12">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link active"href="#tab_left_1" data-toggle="tab" role="tab" aria-controls="tab_left_1" aria-selected="true">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab_left_2" data-toggle="tab" role="tab" aria-controls="tab_left_2" aria-selected="false">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab_left_3" data-toggle="tab" role="tab" aria-controls="tab_left_3" aria-selected="false">Tab 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_left_1" role="tabpanel" aria-labelledby="tab_left_1">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras
    ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed,
    convallis at tellus.xt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum
    dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="tab-pane" id="tab_left_2" role="tabpanel" aria-labelledby="tab_left_2">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium
    ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris blandit aliquet
    elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div><div class="tab-pane" id="tab_left_3" role="tabpanel" aria-labelledby="tab_left_3">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras
    ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo,
    lacinia eget consectetur sed, convallis at tellus.xt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt
    nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                    </Row>

                    <div class="title-2">
                        <h4><span>Tabs right</span></h4>
                    </div>
                    <Row>
						<div class="col-md-12">
                            <div class="tabs tabs_right">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item active">
                                        <a class="nav-link active"href="#tab_right_3" data-toggle="tab" role="tab" aria-controls="tab_right_1" aria-selected="true">Tab 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab_right_2" data-toggle="tab" role="tab" aria-controls="tab_right_2" aria-selected="false">Tab 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab_right_3" data-toggle="tab" role="tab" aria-controls="tab_right_3" aria-selected="false">Tab 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_right_1" role="tabpanel" aria-labelledby="tab_right_1">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras
    ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed,
    convallis at tellus.xt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum
    dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div>
                                    <div class="tab-pane" id="tab_right_2" role="tabpanel" aria-labelledby="tab_right_2">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat. Quisque velit nisi, pretium
    ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet,
    consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris blandit aliquet
    elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </div><div class="tab-pane" id="tab_right_3" role="tabpanel" aria-labelledby="tab_right_3">Content teVivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Pellentesque in ipsum id orci porta dapibus. Nulla porttitor accumsan tincidunt. Cras
    ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo,
    lacinia eget consectetur sed, convallis at tellus.xt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt
    nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </div>
                        </div>
                    </Row>
                    <div class="modified">Last modified: Thursday, 12 March 2020, 3:37 PM</div>
                    <div class="pagination">
                        <Row class="w-100 mx-0">
                            <div class="col">
                                <div class="pull-left">
                                    <a href="/" class="btn-link">◄ Accordions</a>
                                </div>
                            </div>
                            <div class ="col">
                                <select class="custom-select w-50">
                                    <option value="0">Jump to...</option>
                                    <option value="1">Accordions</option>
                                    <option value="2">Buttons</option>
                                    <option value="3">Highlights</option>
                                    <option value="4">Icon Boxes</option>
                                    <option value="5">Image Boxes</option>
                                    <option value="6">Headers</option>
                                    <option value="7">Slider</option>
                                    <option value="8">Videos</option>
                                    <option value="9">Features</option>
                                </select>
                            </div>
                            <div class ="col">
                                <div class="pull-right">
                                    <a href="/" class="btn-link">Buttons ►</a>
                                </div>
                            </div>
                        </Row>
                    </div>
                </div>
            </div>
        