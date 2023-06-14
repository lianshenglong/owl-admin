<?php

namespace Slowlyo\OwlAdmin\Renderers;

/**
 * ConditionGroupValue
 * 
 * @author slowlyo
 * @version v3.1.1
 * @since 2023-06-06
 */
class ConditionGroupValue extends BaseRenderer
{
    public function __construct()
    {
        $this->set('conjunction', 'and');

    }

    public function children($value = '')
    {
        return $this->set('children', $value);
    }

    /**
     *  可选值: and | or
     */
    public function conjunction($value = '')
    {
        return $this->set('conjunction', $value);
    }

    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    public function not($value = true)
    {
        return $this->set('not', $value);
    }

}