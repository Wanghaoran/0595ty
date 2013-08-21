<?php

class IndexAction extends CommonAction {
  public function index(){
    //今日要闻
    $result_hot = M('LocalNews') -> field('id,title,isbold,"1" as type') -> where('ishot=1') -> union('SELECT id,title,isbold,"2" as type FROM 0595ty_international_news WHERE ishot=1', true) -> select();
    $this -> assign('result_hot', $result_hot);
    $this -> display();
  }
}
