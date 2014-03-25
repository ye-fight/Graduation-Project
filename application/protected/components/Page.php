<?php 

/**
* 	
*/
class Page
{
	const SIZE = 5;

	static function go($pages)
	{
		return array(
            'header' => '',  
            'firstPageLabel' => '首页',  
            'lastPageLabel' => '最后一页',  
            'firstPageCssClass' => '',  
            'lastPageCssClass' => '',  
            'maxButtonCount' => 8,  
            'nextPageCssClass' => '',  
            'previousPageCssClass' => '',  
            'prevPageLabel' => '上一页',  
            'nextPageLabel' => '下一页',  
            'selectedPageCssClass' => 'active',  
            'pages' => $pages,  
            'internalPageCssClass' => '',  
            'hiddenPageCssClass' => 'disabled',  
            'cssFile' => false,  
            'htmlOptions' => array(  
                'class' => 'pager'  
            ),  
		);
	}
}
?>