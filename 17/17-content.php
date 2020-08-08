<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div id="style-17" class="style-17 pt-5 mb-5">
                <div class="container">
                    <ul class="alphabet">
                        <li>
                            <a href="#key_a">A</a>
                        </li>
                        <li>
                            <a href="#key_b">B</a>
                        </li>
                        <li>
                            <a href="#key_c">C</a>
                        </li>
                        <li class="disable">
                            <a href="#key_d">D</a>
                        </li>
                        <li class="disable">
                            <a href="#key_e">E</a>
                        </li>
                        <li class="disable">
                            <a href="#key_f">F</a>
                        </li>
                        <li class="disable">
                            <a href="#key_g">G</a>
                        </li>
                        <li>
                            <a href="#key_h">H</a>
                        </li>
                        <li class="disable">
                            <a href="#key_i">I</a>
                        </li>
                        <li class="disable">
                            <a href="#key_j">J</a>
                        </li>
                        <li class="disable">
                            <a href="#key_k">K</a>
                        </li>
                        <li>
                            <a href="#key_l">L</a>
                        </li>
                        <li>
                            <a href="#key_m">M</a>
                        </li>
                        <li class="disable">
                            <a href="#key_n">N</a>
                        </li>
                        <li>
                            <a href="#key_o">O</a>
                        </li>
                        <li>
                            <a href="#key_p">P</a>
                        </li>
                        <li class="disable">
                            <a href="#key_q">Q</a>
                        </li>
                        <li class="disable">
                            <a href="#key_r">R</a>
                        </li>
                        <li>
                            <a href="#key_s">S</a>
                        </li>
                        <li>
                            <a href="#key_t">T</a>
                        </li>
                        <li class="disable">
                            <a href="#key_u">U</a>
                        </li>
                        <li class="disable">
                            <a href="#key_v">V</a>
                        </li>
                        <li class="disable">
                            <a href="#key_w">W</a>
                        </li>
                        <li class="disable">
                            <a href="#key_x">X</a>
                        </li>
                        <li class="disable">
                            <a href="#key_y">Y</a>
                        </li>
                        <li class="disable">
                            <a href="#key_z">Z</a>
                        </li>
                        <li>
                            <a href="#key_more">#</a>
                        </li>
                    </ul>
                    <div class="clr"></div>
                    <ul id="key_a" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>A</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Acropolis ligula sed magna</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_b" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>B</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Biology lacinia eget consectetur</a>
                                </li>
                                <li>
                                    <a href="/#">Boxed Layout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_c" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>C</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Chemistry ante ipsum</a>
                                </li>
                                <li>
                                    <a href="/#">Climate pretium ut lacinia</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_h" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>H</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Chemistry ante ipsum</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_l" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>L</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Library tortor risus</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_m" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>M</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Monetary policy</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_o" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>O</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Organic chemistry</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_p" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>P</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Physics quis lorem ut</a>
                                </li>
                                <li>
                                    <a href="/#">Physiotherapy</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_s" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>S</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Swimming dolor sit amet</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_t" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>T</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">Theme elements</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul id="key_more" class="letters">
                        <li class="li-letters">
                            <div class="item-let">
                                <h4>#</h4>
                                <a class="to-top" href="#style-17">↑ Back to top</a>
                                <div class="clr"></div>
                            </div>
                            <ul>
                                <li>
                                    <a href="/#">360 deegree</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pagination">
                        <Row class="w-100 mx-0">
                            <Col>
                                <div class="pull-left">
                                    <a href="/" class="btn-link">◄ Accordions</a>
                                </div>
                            </Col>
                            <Col>
                                <select class="custom-select w-50">
                                    <option value="0">Jump to...</option>
                                    <option value="1">Site announcements</option>
                                </select>
                            </Col>
                            <Col>
                                <div class="pull-right">
                                    <a href="/#" class="btn-link">Site announcements ►</a>
                                </div>
                            </Col>
                        </Row>
                    </div>
                </div>
            </div>