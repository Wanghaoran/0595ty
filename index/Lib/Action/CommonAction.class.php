<?php

class CommonAction extends Action {
  public function _initialize(){
    //本地新闻
    if(S('index_nav_localnews')){
      $this -> assign('index_nav_localnews', S('index_nav_localnews'));
    }else{
      $index_nav_localnews = M('LocalNewsCategory') -> field('id,name') -> select();
      $this -> assign('index_nav_localnews', $index_nav_localnews);
      S('index_nav_localnews', $index_nav_localnews);   
    }
    //国际新闻
    if(S('index_nav_internationalnews')){
      $this -> assign('index_nav_internationalnews', S('index_nav_internationalnews'));
    }else{
      $index_nav_internationalnews = M('InternationalNewsCategory') -> field('id,name') -> select();
      $this -> assign('index_nav_internationalnews', $index_nav_internationalnews);
      S('index_nav_internationalnews', $index_nav_internationalnews);   
    }
  }
}
