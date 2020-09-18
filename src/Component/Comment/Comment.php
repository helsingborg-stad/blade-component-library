<?php

namespace BladeComponentLibrary\Component\Comment;

class Comment extends \BladeComponentLibrary\Component\BaseController {
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['id'] = uniqid("", true);

        $this->isReply($is_reply);
        $this->hasHtml($text);
    }

    /**
	 * Check if comment is a reply
	 */
    public function isReply($is_reply) {
        if ($is_reply) {
            $this->data['classList'][] = $this->getBaseClass() . '__is-reply';
        }
    }

    public function hasHtml($text) {

        $allowedTextTags = '<b><strong><i><em><mark><small><del><ins><sub><sup>';

        if ($text !== strip_tags($text, $allowedTextTags)) {
            $this->data['text'] = false; 
            $this->data['slot'] = $text;
        } else {
            $this->data['slot'] = false;
        }
    }
}
