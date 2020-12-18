<?php

namespace BladeComponentLibrary\Component\Comment;

class Comment extends \BladeComponentLibrary\Component\BaseController {
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid("", true);

        $this->isReply($is_reply);

        if($filterHtml) {
            $this->filterTags($text, $allowedTags);
        }
        
    }

    /**
	 * Check if comment is a reply
	 */
    public function isReply($is_reply) {
        if ($is_reply) {
            $this->data['classList'][] = $this->getBaseClass() . '__is-reply';
        }
    }

    public function filterTags($text, $allowedTextTags) {

        $allowedTextTags = '<b><strong><i><em><mark><small><del><ins><sub><sup>';

        if ($text !== strip_tags($text, $allowedTextTags)) {
            $this->data['text'] = strip_tags($text, $allowedTextTags); 
        }
    }
}
