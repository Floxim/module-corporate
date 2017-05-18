<?php
namespace Floxim\Corporate\Logo;

use Floxim\Floxim\System\Fx as fx;

class Entity extends \Floxim\Main\Content\Entity
{
    public function getDefaultBoxFields()
    {
        return array(
            array(
                array(
                    'keyword' => 'image', 
                    'template' => 'image_value',
                    'field_link' => 1
                ),
            )
        );
    }
    
    public function _getUrl()
    {
        return  '/';
    }
    
    public function fake($level = 0)
    {
        parent::fake($level);
        $this['image'] = '/module/Floxim/Corporate/Logo/fake.png';
        $this['name'] = 'Супер-компания';
        $this['tagline'] = 'Мысли иначе!';
    }
    
    public function hasPage() {
        return false;
    }
}