<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>

<div class="wrap04">

    <section class="title">
        <div></div>
        <h2>공지사항</h2>
        <!-- <span>시크릿 필리핀에서 알려 드립니다.</span> -->
        <table class="table02">
            <tr>
                <td style="background-color:#e7ecf5;">
                    <figure>
                        <img src="<?php echo base_url('assets/images/temp/de_img/de_bell.png')?>" alt="sub01"> 
                        <figcaption>
                             공지사항
                        </figcaption>
                    </figure>
                </td>

                <td>
                    <a href="<?php echo element('document_board_url', $view); ?>" title="이벤트">
                        <figure>
                            <img src="<?php echo base_url('assets/images/temp/de_img/de_gift.png')?>" alt="sub01"> 
                            <figcaption>
                                이벤트
                            </figcaption>
                        </figure>
                    </a>
                </td>
            </tr>
        </table>
    </section>
    
    <section class="notice_list">
        <!-- <table >
            <thead>
                <tr>
                    <th class="px50">번 호</th>
                    <th>제 목</th>
                    <th class="px100">날 짜</th>
                </tr>
            </thead>
            <tbody>

            <?php
            if (element('list', element('data', $view))) {
                foreach (element('list', element('data', $view)) as $result) {
            ?>
                <tr>
                    <td><?php echo element('num', $result); ?></td> -->
                    <!-- <td style="padding:0px"><?php if (element('thumb_url', $result)) { ?><img class="media-object" src="<?php echo element('thumb_url', $result); ?>" alt="<?php echo html_escape(element('post_title', $result)); ?>" title="<?php echo html_escape(element('post_title', $result)); ?>" style="width:50px;height:40px;" /><?php } ?></td> -->
                    <!-- <td><a href="<?php echo element('post_url', $result); ?>" title="<?php echo html_escape(element('noti_title', $result)); ?>"><?php echo html_escape(element('noti_title', $result)); ?></a>
        
                    </td>
                    <td><?php echo element('display_datetime', $result); ?></td>
                </tr>
            <?php
                }
            }
            if ( ! element('list', element('data', $view))) {
            ?>
                <tr>
                    <td colspan="3" class="nopost">공지사항이 없습니다</td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table> -->

        <table>
            <tr>
                <td>
                    <h2><span>공지</span>공지사항제목영역입니다.공지사항제목영역입니다.공지사항제목영역입니다.공지사항제목영역입니다.공지사항제목영역입니다.공지사항제목영역입니다.</h2>
                    <p>2018.00.00</p>
                </td>
            </tr>
        </table>

    
    <nav><?php echo element('paging', $view); ?></nav>
    </section>
    <section class="ad" style="margin-bottom:0;">
        <h4>ad</h4>
        <?php echo banner("mypage_banner_1") ?>
    </section>

    
</div>
