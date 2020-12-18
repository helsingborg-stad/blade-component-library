<?php

namespace BladeComponentLibrary\Component\Pagination;

class Pagination extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Default to page one
        if(!$current) {
            $this->data['current'] = 1; 
        }

        //Anchor
        if(isset($this->data['list']) && is_array($this->data['list']) && !empty($this->data['list'])) {
            foreach($this->data['list'] as &$item) {
                if(isset($item['href'])) {
                    $item['href'] = $item['href'] . $anchorTag; 
                }
            }
        }

        //Previous data
        if($this->data['current'] != 1) {
            $this->data['previous'] = $linkPrefix . ($this->data['current'] - 1) . $anchorTag; 
        } else {
            $this->data['previous'] = ''; 
            $this->data['previousDisabled'] = 'true'; 
        }

        //Next data
        if((count($this->data['list'])) != $this->data['current']) {
            $this->data['next'] = $linkPrefix . ($this->data['current'] + 1) . $anchorTag; 
        } else {
            $this->data['next'] = ''; 
            $this->data['nextDisabled'] = 'true'; 
        }

        $this->tmpList = $this->data['list'];
        $this->data['list'] = $this->overflow();
        $this->data['firstItem'] = $this->firstItem();
        $this->data['lastItem'] = $this->lastItem();

        if($this->data['useJS']) {
            $this->data['attributeList']['js-pagination'] = '';
            $this->data['attributeList']['js-pagination-per-page'] = $this->data['perPage'];
            $this->data['attributeList']['js-pagination-max-pages'] = $this->data['maxPages'];
        }

    }

    public function overflow()
    {
        $allowedItems = 5;
        $itemsLength = count($this->data['list']);

        if($itemsLength <= $allowedItems) {
            return $this->data['list'];
        }

        $currentItem = $this->data['current'];
        $currentIndex = $currentItem -1;
        $offset = 2;
        $firstIndex = $currentIndex - $offset < 0 ? 0 : $currentIndex - $offset;

        if($itemsLength - $currentItem < $offset) {
            $offset = $offset - ($itemsLength - $currentItem );
            $firstIndex = $firstIndex - $offset;
        }

        return array_slice($this->data['list'],  $firstIndex, $allowedItems, true);
    }

    public function firstItem()
    {
        if(array_key_exists(0, $this->data['list'])) {
            return false;
        }

        if(array_key_exists(1, $this->data['list'])) {
            array_unshift($this->data['list'], $this->tmpList[0]);
            return false;
        }

        $item = $this->tmpList[0];
        $item['key'] = 0;

        return $item;
    }

    public function lastItem()
    {
        $lastKey = count($this->tmpList) - 1;
        
        if(array_key_exists($lastKey, $this->data['list'])) {
            return false;
        }

        if(array_key_exists($lastKey -1, $this->data['list'])) {
            $this->data['list'][] = end($this->tmpList);
            return false;
        }

        $item = end($this->tmpList);
        $item['key'] = $lastKey;
        
        return $item;
    }
}