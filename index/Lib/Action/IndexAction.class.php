<?php

class IndexAction extends CommonAction {
  public function index(){
    $Article = M('Article');
    $Notice = M('Notice');
    //首页幻灯
    $result_slide = $Article -> field('id,title,pic,link') -> where(array('isslide' => 1)) -> order('addtime DESC') -> limit(10) -> select();
    $this -> assign('result_slide', $result_slide);
    //今日要闻
    $result_hot = $Article -> field('id,title,isbold,link') -> where(array('ishot' => 1)) -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_hot', $result_hot);
    //市场资讯
    $result_news = $Article -> field('id,title,link') -> where('cid=2')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_news', $result_news);
    //公告/预告
    $result_notice = $Notice -> field('id,title') -> limit(7) -> order('addtime DESC') -> select();
    $this -> assign('result_notice', $result_notice);
    $this -> display();
  }
}
