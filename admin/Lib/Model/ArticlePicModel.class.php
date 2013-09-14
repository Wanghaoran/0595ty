<?php
class ArticlePicModel extends Model {
  public function getPic($content, $aid){
    //正则提取图片
    $pattern = '/.*?<img\s+src="(.*?)".*?/is';
    preg_match_all($pattern, $content, $result);
    $add = array();
    $add['aid'] = $aid;
    //写入数据库
    foreach($result[1] as $value){
      $value = strstr($value, 'Upload');
      $add['pic'] = $value;
      $this -> add($add);
    }
  }

  //图片加水印
  public function water($aid){
    $content = M('ImagewaterSetting') -> getFieldByname('content', 'content');
    $pic = M('ImagewaterSetting') -> getFieldByname('pic', 'content');
    import('ORG.Util.Image');
    if($pic){
      $water_pic ='./Upload/' . $pic;
    }else{
      Image::buildString(iconv('UTF-8', 'GB2312', $content), array(), './Public/index/images/water.png', 'png', 0, false);
      $water_pic = './Public/index/images/water.png';
    }  
    $pic_arr = $this -> where(array('aid' => $aid)) -> getField('pic', true);
    foreach($pic_arr as $value){
      Image::water($value, $water_pic, null, 80);
    }    
  }
}
