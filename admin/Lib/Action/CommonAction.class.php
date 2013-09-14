<?php
class CommonAction extends Action {
  public function _initialize(){
    if(!$_SESSION[C('USER_AUTH_KEY')]){
      redirect(PHP_FILE . C('USER_AUTH_GATEWAY'));
    }
  }

  //增加文章
  public function addarticle(){
    if(!empty($_POST['title'])){
      $Article = D('Article');
      
      if(!$Article -> create()){
	$this -> error($Article -> getError());
      }
      if($_FILES['pic']['size'] != 0){
	$info = R('Public/pic_upload');
	$Article -> pic = $info[0]['savename']; 
      }
      if($aid = $Article -> add()){
	$ArticlePic = D('ArticlePic');
	$ArticlePic -> getPic($_POST['content'], $aid);
	if($_POST['iswater'] == 1){
	  $ArticlePic -> water($aid);
	}
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    //imagewater
    $ImagewaterSetting = M('ImagewaterSetting');
    $iswater = $ImagewaterSetting -> getFieldByname('iswater', 'content');
    $this -> assign('iswater', $iswater);
    $this -> display();
  }

  //删除文章
  public function delarticle(){
    $Article = D('Article');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($Article -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑文章
  public function editarticle(){
    $Article = D('Article');
    if(!empty($_POST['title'])){
      if(!$Article -> create()){
	$this -> error($Article -> getError());
      }
      if(empty($_POST['isbold'])){
	$Article -> isbold = 0;
      }
      if(empty($_POST['ishot'])){
	$Article -> ishot = 0;
      }
      if(empty($_POST['isslide'])){
	$Article -> isslide = 0;
      }
      if($_FILES['pic']['size'] != 0){
	$info = R('Public/pic_upload');
	$Article -> pic = $info[0]['savename']; 
      }
      if($Article -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $Article -> field('title,content,ishot,isbold,isslide,author,source,link') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }
}
