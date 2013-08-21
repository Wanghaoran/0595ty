<?php
class NewsAction extends CommonAction {
  //本地新闻栏目管理 
  public function localnewscategory(){
    $LocalNewsCategory = M('LocalNewsCategory');
    $where = array();
    if(!empty($_POST['name'])){
      $where['name'] = array('LIKE', '%' . $this -> _post('name') . '%');
    }
    //记录总数
    $count = $LocalNewsCategory -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(! empty ( $_REQUEST ['listRows'] )){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    //当前页数
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $LocalNewsCategory -> field('id,name,addtime,remark') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //增加本地新闻栏目
  public function addlocalnewscategory(){
    if(!empty($_POST['name'])){
      $LocalNewsCategory = M('LocalNewsCategory');
      if(!$LocalNewsCategory -> create()){
	$this -> error($LocalNewsCategory -> getError());
      }
      $LocalNewsCategory -> addtime = time();
      if($LocalNewsCategory -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  //删除本地新闻栏目
  public function dellocalnewscategory(){
    $LocalNewsCategory = M('LocalNewsCategory');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($LocalNewsCategory -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑本地新闻栏目
  public function editlocalnewscategory(){
    $LocalNewsCategory = M('LocalNewsCategory');
    if(!empty($_POST['name'])){
      if(!$LocalNewsCategory -> create()){
	$this -> error($LocalNewsCategory -> getError());
      }
      if($LocalNewsCategory -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $LocalNewsCategory -> field('name,remark') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //本地新闻管理
  public function localnews(){
    $LocalNews = M('LocalNews');
    $where = array();
    if(!empty($_POST['title'])){
      $where['n.title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    //记录总数
    $count = $LocalNews -> alias('n') -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(! empty ( $_REQUEST ['listRows'] )){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    //当前页数
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $LocalNews -> alias('n') -> field('n.id,n.title,nc.name as ncname,n.addtime,n.ishot,n.isbold') -> join('0595ty_local_news_category as nc ON n.cid = nc.id') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('n.addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //添加本地新闻
  public function addlocalnews(){
    if(!empty($_POST['title'])){
      $LocalNews = M('LocalNews');
      if(!$LocalNews -> create()){
	$this -> error($LocalNews -> getError());
      }
      $LocalNews -> addtime = time();
      if($LocalNews -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }   
    $LocalNewsCategory = M('LocalNewsCategory');
    $result_category = $LocalNewsCategory -> field('id,name') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }

  //删除本地新闻
  public function dellocalnews(){
    $LocalNews = M('LocalNews');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($LocalNews -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑本地新闻
  public function editlocalnews(){
    $LocalNews = M('LocalNews');
    if(!empty($_POST['title'])){
      if(!$LocalNews -> create()){
	$this -> error($LocalNews -> getError());
      }
      if($LocalNews -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $LocalNews -> field('cid,title,ishot,isbold,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $LocalNewsCategory = M('LocalNewsCategory');
    $result_category = $LocalNewsCategory -> field('id,name') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }

  //国际新闻栏目管理 
  public function internationalnewscategory(){
    $InternationalNewsCategory = M('InternationalNewsCategory');
    $where = array();
    if(!empty($_POST['name'])){
      $where['name'] = array('LIKE', '%' . $this -> _post('name') . '%');
    }
    //记录总数
    $count = $InternationalNewsCategory -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(! empty ( $_REQUEST ['listRows'] )){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    //当前页数
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $InternationalNewsCategory -> field('id,name,addtime,remark') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //增加国际新闻栏目
  public function addinternationalnewscategory(){
    if(!empty($_POST['name'])){
      $InternationalNewsCategory = M('InternationalNewsCategory');
      if(!$InternationalNewsCategory -> create()){
	$this -> error($InternationalNewsCategory -> getError());
      }
      $InternationalNewsCategory -> addtime = time();
      if($InternationalNewsCategory -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }
    $this -> display();
  }

  //删除国际新闻栏目
  public function delinternationalnewscategory(){
    $InternationalNewsCategory = M('InternationalNewsCategory');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($InternationalNewsCategory -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑国际新闻栏目
  public function editinternationalnewscategory(){
    $InternationalNewsCategory = M('InternationalNewsCategory');
    if(!empty($_POST['name'])){
      if(!$InternationalNewsCategory -> create()){
	$this -> error($InternationalNewsCategory -> getError());
      }
      if($InternationalNewsCategory -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $InternationalNewsCategory -> field('name,remark') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $this -> display();
  }

  //国际新闻管理
  public function internationalnews(){
    $InternationalNews = M('InternationalNews');
    $where = array();
    if(!empty($_POST['title'])){
      $where['n.title'] = array('LIKE', '%' . $this -> _post('title') . '%');
    }
    //记录总数
    $count = $InternationalNews -> alias('n') -> where($where) -> count('id');
    import('ORG.Util.Page');
    if(! empty ( $_REQUEST ['listRows'] )){
      $listRows = $_REQUEST ['listRows'];
    } else {
      $listRows = 15;
    }
    $page = new Page($count, $listRows);
    //当前页数
    $pageNum = !empty($_REQUEST['pageNum']) ? $_REQUEST['pageNum'] : 1;
    $page -> firstRow = ($pageNum - 1) * $listRows;
    $result = $InternationalNews -> alias('n') -> field('n.id,n.title,nc.name as ncname,n.addtime,n.ishot,n.isbold') -> join('0595ty_international_news_category as nc ON n.cid = nc.id') -> where($where) -> limit($page -> firstRow . ',' . $page -> listRows) -> order('n.addtime DESC') -> select();
    $this -> assign('result', $result);
    //每页条数
    $this -> assign('listRows', $listRows);
    //当前页数
    $this -> assign('currentPage', $pageNum);
    $this -> assign('count', $count);
    $this -> display();
  }

  //添加国际新闻
  public function addinternationalnews(){
    if(!empty($_POST['title'])){
      $InternationalNews = M('InternationalNews');
      if(!$InternationalNews -> create()){
	$this -> error($InternationalNews -> getError());
      }
      $InternationalNews -> addtime = time();
      if($InternationalNews -> add()){
	$this -> success(L('DATA_ADD_SUCCESS'));
      }else{
	$this -> error(L('DATA_ADD_ERROR'));
      }
    }   
    $InternationalNewsCategory = M('InternationalNewsCategory');
    $result_category = $InternationalNewsCategory -> field('id,name') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }

  //删除国际新闻
  public function delinternationalnews(){
    $InternationalNews = M('InternationalNews');
    $where_del = array();
    $where_del['id'] = array('in', $_POST['ids']);
    if($InternationalNews -> where($where_del) -> delete()){
      $this -> success(L('DATA_DELETE_SUCCESS'));
    }else{
      $this -> error(L('DATA_DELETE_ERROR'));
    }
  }

  //编辑国际新闻
  public function editinternationalnews(){
    $InternationalNews = M('InternationalNews');
    if(!empty($_POST['title'])){
      if(!$InternationalNews -> create()){
	$this -> error($InternationalNews -> getError());
      }
      if($InternationalNews -> save()){
	$this -> success(L('DATA_UPDATE_SUCCESS'));
      }else{
        $this -> error(L('DATA_UPDATE_ERROR'));
      }
    }
    $result = $InternationalNews -> field('cid,title,ishot,isbold,content') -> find($this -> _get('id', 'intval'));
    $this -> assign('result', $result);
    $InternationalNewsCategory = M('InternationalNewsCategory');
    $result_category = $InternationalNewsCategory -> field('id,name') -> select();
    $this -> assign('result_category', $result_category);
    $this -> display();
  }
    
}
