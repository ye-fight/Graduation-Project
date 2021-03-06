<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">自我评测</h1>
            <ol class="breadcrumb">
                <li><a href="/">首页</a></li>
                <li class="active">自我评测</li>
            </ol>
        </div>
    </div>    
    <div class="row" id="exam_paper">
        <div class="col-lg-8 col-lg-offset-2">
            <form action="index.php?r=site/selfTest" method="post">
                <input type="hidden" name="r" value="site/selfTest">
                <input type="hidden" name="data" value="<?php echo base64_encode(serialize($data)) ?>">
                <?php foreach ($data as $key => $value) { ?>
                <div class="qu_content">
                    <h3>
                        <?php echo '<span>', $key+1, '、</span>', $value->quiz; ?>
                    </h3>
                    <div>
                        <?php echo $value->quiz_select ?>
                    </div>
                    <span>
                        <div class="qu_option">
                            <?php 
                                if ($status) {
                                    if (is_array($answer[$key])) {
                                        $answer[$key] = implode('', $answer[$key]);
                                    }

                                    echo '<span class="red">[正确答案]', $value->quiz_answer,'</span><br />';
                                    echo '<span class="blue">[您的答案]', $answer[$key],'</span>';

                                } else {
                                    switch ($value->quiztype_id) {
                                        case '2':
                                            $str = '<label>%s <input type="checkbox" name="question[%s][]" value="%s" autocomplete="off" %s></label>&nbsp;&nbsp;';
                                            break;
                                        default :
                                            $str = '<label>%s <input type="radio" name="question[%s]" value="%s" autocomplete="off" %s></label>&nbsp;&nbsp;';
                                            break;
                                    }

                                    $base = 65;
                                    for ($i = 0; $i < $value->quiz_select_number; $i++) {
                                        $char = chr($base++);
                                        printf($str, $char, $key, $char, '');
                                    }
                                }
                            ?>
                        </div>    
                    </span>
                </div> 
                <?php } 
                    if (!$status) {
                        echo '<button type="submit" class="btn btn-primary">提交</button>';
                    } else {
                        printf('<a href="%s" class="btn btn-primary">%s</a>', $this->createUrl('site/selfTest'), '重新测试');
                    }
                 ?>
                          
            </form>
     
        </div>     
  
    </div>
</div>
<script>
    $('.qu_content').mouseover(function () {
        this.className = 'qu_content_hover';
    });
    $('.qu_content').mouseout(function () {
        this.className = 'qu_content';
    })    
</script>
