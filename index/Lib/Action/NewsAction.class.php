<?php
class NewsAction extends CommonAction {
  //本地新闻列表
  public function localnewslist(){
    $LocalNews = M('LocalNews');
    import("ORG.Util.Page");// 导入分页类
    $count = $LocalNews -> count('id');
    $page = new Page($count, 10);//每页10条
    $page->setConfig('header','条新闻');
    $show = $page -> show();
    $result = $LocalNews -> alias('n') -> field('n.id,n.title,n.addtime,nc.name') -> join('0595ty_local_news_category as nc ON n.cid = nc.id') -> order('n.addtime DESC') -> limit($page -> firstRow . ',' . $page -> listRows) -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  //国际新闻列表
  public function internationalnewslist(){
    $InternationalNews = M('InternationalNews');
    import("ORG.Util.Page");// 导入分页类
    $count = $InternationalNews -> count('id');
    $page = new Page($count, 10);//每页10条
    $page->setConfig('header','条新闻');
    $show = $page -> show();
    $result = $InternationalNews -> alias('n') -> field('n.id,n.title,n.addtime,nc.name') -> join('0595ty_international_news_category as nc ON n.cid = nc.id') -> order('n.addtime DESC') -> limit($page -> firstRow . ',' . $page -> listRows) -> select();
    $this -> assign('result', $result);
    $this -> assign('show', $show);
    $this -> display();
  }

  //本地新闻详情页
  public function localinfo(){
    $LocalNews = M('LocalNews');
    $result = $LocalNews -> alias('n') -> field('n.title,n.addtime,n.content,nc.name,n.cid') -> join('0595ty_local_news_category as nc ON n.cid = nc.id') -> where(array('n.id' => $this -> _get('id', 'intval'))) -> find();
    $this -> assign('result', $result);
    $this -> display();
  }

  //国际新闻详情页
  public function internationalinfo(){
    $InternationalNews = M('InternationalNews');
    $result = $InternationalNews -> alias('n') -> field('n.title,n.addtime,n.content,nc.name,n.cid') -> join('0595ty_international_news_category as nc ON n.cid = nc.id') -> where(array('n.id' => $this -> _get('id', 'intval'))) -> find();
    $this -> assign('result', $result);
    $this -> display();
  }
}
