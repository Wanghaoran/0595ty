<?php
class NoticeAction extends CommonAction {
  public function lists(){
    $Notice = M('Notice');
    $Article = M('Article');
    import("ORG.Util.Page");
    $count = $Notice -> count('id');
    $page = new Page($count, 30);
    $page->setConfig('header','条公告');
    $show = $page -> show();
    $this -> assign('show', $show);
    $result = $Notice -> field('id,title,addtime') -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //体坛花絮
    $result_fun = $Article -> field('id,title') -> where('cid=4')  -> limit(10) -> order('addtime DESC') -> select();
    $this -> assign('result_fun', $result_fun);
    $this -> display();
  }

  public function info(){
    $Notice = M('Notice');
    $result = $Notice -> field('title,content,addtime') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    //new
    $result_new = $Notice -> field('id,title,addtime') -> order('addtime DESC') -> limit(10) -> select();
    $this -> assign('result_new', $result_new);
    $this -> display();
  }
}
