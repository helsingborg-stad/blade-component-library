<?php

namespace BladeComponentLibrary\Component\Twogrid;

class Twogrid extends \BladeComponentLibrary\Component\BaseController
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if($col) {
            $this->data['col'] =  $this->supplementColumns($col);
            $this->colClasses();
        }

        if($isRow) {
            $this->data['classList'][] = $this->getBaseClass() . '__row';
        }

        if(!$isRow && !$col) {
            $this->data['classList'][] = $this->getBaseClass() . '__container';
        }
    }

    public function colClasses()
    {
        foreach ($this->data['col'] as $size => $value) {
            $this->data['classList'][] = $this->getBaseClass() . '--' . $value .'@'.$size;
        }
    }

    public function supplementColumns($col)
    {
        $eCol = [
            'xs' => 'auto',
            'sm' => 'auto',
            'md' => 'auto',
            'lg' => 'auto',
            'xl' => 'auto',
        ];

        $prevKey = false;

        foreach ($eCol as $size => $value) {
            if(!is_array($col)) {
                $eCol[$size] = $col;
                $prevKey = $size;
                continue;
            }

            if(isset($col[$size])) {
                $eCol[$size] = $col[$size];
                $prevKey = $size;
                continue;
            }

            if($prevKey) {
                $eCol[$size] = $eCol[$prevKey];
                $prevKey = $size;
            }
        }

        return $eCol;
    }
}
