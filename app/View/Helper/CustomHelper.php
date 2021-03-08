<?php

 App::uses('Helper', 'View');
 
class CustomHelper extends Helper {

/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
    public $helpers = array();
    
    public function GetImgUrl($post_id = null)
    {
        $img_url = ClassRegistry::init('Post')->find('first', array('conditions'=>array('Post.ID'=>$post_id),'fields'=>array('Post.guid')));
  	return $img_url['Post']['guid'];
		
    }
    public function GetPropertyType ($post_id = null)
    {
        $exist=false;
        $jasontype= ClassRegistry::init('postmeta')->find('first',array(
            'conditions'=>array('postmeta.post_id'=>$post_id,'postmeta.meta_key'=>'hf_property_type')
            ,'fields'=>array('meta_value')));
        
        if (strpos($jasontype['postmeta']['meta_value'], ";i:"))
        {
            $typedraft=substr($jasontype['postmeta']['meta_value'],strpos($jasontype['postmeta']['meta_value'], ";i:")+3);
            $type=substr($typedraft,0,strpos($typedraft, ";}"));

            $typetitle = ClassRegistry::init('Term')->find('first',array('conditions'=>array('Term.term_id'=>$type),
                        'fields'=>array('Term.name')));
            $exist=true;
        }
         if (strpos($jasontype['postmeta']['meta_value'], 's:3:"'))
        {
            $typedraft=substr($jasontype['postmeta']['meta_value'],strpos($jasontype['postmeta']['meta_value'], 's:3:"')+5);
            $type=substr($typedraft,0,strpos($typedraft, '";}'));

            $typetitle = ClassRegistry::init('Term')->find('first',array('conditions'=>array('Term.term_id'=>$type),
                        'fields'=>array('Term.name')));
            $exist=true;
        }
        if ($exist)
        {
            return $typetitle['Term']['name'];    
        }
        else
        {
            return ' --- ';
        }
    }


}
