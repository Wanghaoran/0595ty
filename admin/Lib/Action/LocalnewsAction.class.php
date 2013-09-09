<?php
class LocalnewsAction extends CommonAction {
  //泉州篮球/足球/排球
  public function ball(){
    $Article = M('Article');
    $where = array();
    $where['cid'] = 1;
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    $count = $Article -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(!empty($_REQUEST ['listRows'])){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $Article -> field('id,title,ishot,isbold,isslide,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('listRows', $listRows);
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //市场资讯
  public function news(){
    $Article = M('Article');
    $where = array();
    $where['cid'] = 2;
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    $count = $Article -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(!empty($_REQUEST ['listRows'])){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $Article -> field('id,title,ishot,isbold,isslide,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('listRows', $listRows);
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //综合体育
  public function sport(){
    $Article = M('Article');
    $where = array();
    $where['cid'] = 3;
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    $count = $Article -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(!empty($_REQUEST ['listRows'])){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $Article -> field('id,title,ishot,isbold,isslide,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('listRows', $listRows);
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //体坛花絮
  public function fun(){
    $Article = M('Article');
    $where = array();
    $where['cid'] = 4;
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    $count = $Article -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(!empty($_REQUEST ['listRows'])){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $Article -> field('id,title,ishot,isbold,isslide,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('listRows', $listRows);
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //泉州制造
  public function made(){
    $Article = M('Article');
    $where = array();
    $where['cid'] = 5;
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    $count = $Article -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(!empty($_REQUEST ['listRows'])){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $Article -> field('id,title,ishot,isbold,isslide,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('listRows', $listRows);
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }


}
