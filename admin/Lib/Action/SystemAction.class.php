<?php
class SystemAction extends CommonAction {
  public function notice(){
    $Notice = M('Notice');
    $where = array();
    if(!empty($_POST['title'])){
      $where['title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    $count = $Notice -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(!empty($_REQUEST ['listRows'])){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $Notice -> field('id,title,addtime') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    $this -> assign('listRows', $listRows);
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  public function addnotice(){
    if(!empty($_POST['title'])){
      $Notice = M('Notice');
      if(!$Notice -> create()){
	$this -> error($Notice -> getError());
      }
      $Notice -> addtime = time();
      if($Notice -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  public function delnotice(){
    $Notice = M('Notice');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($Notice -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  public function editnotice(){
    $Notice = M('Notice');
    if(!empty($_POST['title'])){
      if(!$Notice -> create()){
	$this -> error($Notice -> getError());
      }
      if($Notice -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $Notice -> field('title,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

}
