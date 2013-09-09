<?php
class NewsAction extends CommonAction {
  public function local(){
    $Article = M('Article');
    $Notice = M('Notice');
    //幻灯显示
    $result_slide = $Article -> alias('a') -> field('a.id,a.pic') -> join('0595ty_two_column as tc ON a.cid = tc.id') -> join('0595ty_one_column as oc ON tc.oid = oc.id') -> where(array('oc.id' => 1, 'a.isslide' => 1)) -> order('a.addtime DESC') -> limit(5) -> select();
    $this -> assign('result_slide', $result_slide);
    //泉州篮球/足球/排球
    $result_ball = $Article -> field('id,title') -> where('cid=1') -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_ball', $result_ball);
    //市场资讯
    $result_news = $Article -> field('id,title') -> where('cid=2')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_news', $result_news);
    //综合体育
    $result_sport = $Article -> field('id,title') -> where('cid=3')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_sport', $result_sport);
    //体坛花絮
    $result_fun = $Article -> field('id,title') -> where('cid=4')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_fun', $result_fun);
    //泉州制造
    $result_made = $Article -> field('id,pic,title,content') -> where('cid=5') -> order('addtime DESC') -> find();
    $this -> assign('result_made', $result_made);
    //最新公告
    $result_notice = $Notice -> field('id,title') -> limit(9) -> order('addtime DESC') -> select();
    $this -> assign('result_notice', $result_notice);
    $this -> display();
  }

  public function international(){
    $Article = M('Article');
    $Notice = M('Notice');
    //幻灯显示
    $result_slide = $Article -> alias('a') -> field('a.id,a.pic') -> join('0595ty_two_column as tc ON a.cid = tc.id') -> join('0595ty_one_column as oc ON tc.oid = oc.id') -> where(array('oc.id' => 2, 'a.isslide' => 1)) -> order('a.addtime DESC') -> limit(5) -> select();
    $this -> assign('result_slide', $result_slide);
    //国际篮球
    $result_basketball = $Article -> field('id,title') -> where('cid=8') -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_basketball', $result_basketball);
    //国际足球/排球
    $result_ball = $Article -> field('id,title') -> where('cid=9') -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_ball', $result_ball);
    //国际综合体育
    $result_sport = $Article -> field('id,title') -> where('cid=10') -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_sport', $result_sport);
    //体坛花絮
    $result_fun = $Article -> field('id,title') -> where('cid=4')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_fun', $result_fun);
    //泉州制造
    $result_made = $Article -> field('id,pic,title,content') -> where('cid=5') -> order('addtime DESC') -> find();
    $this -> assign('result_made', $result_made);
    //最新公告
    $result_notice = $Notice -> field('id,title') -> limit(9) -> order('addtime DESC') -> select();
    $this -> assign('result_notice', $result_notice);
    $this -> display();
  }

  public function articlelist(){
    //栏目名称
    $TwoColumn = M('TwoColumn');
    $two_column_name = $TwoColumn -> getFieldByid($this -> _get('cid', 'intval'), 'name');
    $this -> assign('two_column_name', $two_column_name);
    //文章列表
    $Article = M('Article');
    import("ORG.Util.Page");
    $count = $Article -> where(array('cid' => $this -> _get('cid', 'intval'))) -> count('id');
    $page = new Page($count, 30);
    $page->setConfig('header','条新闻');
    $show = $page -> show();
    $this -> assign('show', $show);
    $result = $Article -> field('id,title,addtime') -> where(array('cid' => $this -> _get('cid', 'intval'))) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //体坛花絮
    $result_fun = $Article -> field('id,title') -> where('cid=4')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_fun', $result_fun);
    $this -> display();
  }

  public function articleinfo(){
    $Article = M('Article');
    $result = $Article -> alias('a') -> field('oc.name as ocname,tc.name as tcname,a.cid,a.title,a.content,a.addtime,a.clickcount') -> join('0595ty_two_column as tc ON a.cid = tc.id') -> join('0595ty_one_column as oc ON tc.oid = oc.id') -> where(array('a.id' => $this -> _get('id', 'intval'))) -> find();
    $this -> assign('result', $result);
    //add click
    $Article -> where(array('id' => $this -> _get('id', 'intval')))->setInc('clickcount');
    //click sort
    $result_clicksort = $Article -> field('id,title,clickcount') -> order('clickcount DESC') -> where(array('cid' => $result['cid'])) -> limit(10) -> select();
    $this -> assign('result_clicksort', $result_clicksort);
    $this -> display();
  }
}
