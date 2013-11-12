<?php

class Comment extends Eloquent {
        
        protected $fillable = array('comment', 'created_at', 'created_ip');
        
        public function user() 
        {
            return $this->belongsTo('User', 'user_id');
        } 
        
        public function questions() 
        {
            return $this->belongsTo('Question', 'question_id');
        } 
    
}
