<?php

namespace App\Models\Menu\Traits\Attribute;

/**
 * Class MenuAttribute.
 */
trait MenuAttribute
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                    '.$this->getEditButtonAttribute('edit-menu', 'admincp.menus.edit').'
                    '.$this->getDeleteButtonAttribute('delete-menu', 'admincp.menus.destroy').'
                </div>';
    }
}
