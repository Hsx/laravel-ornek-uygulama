<?php

class Question extends Eloquent {
        
        protected $fillable = array('title', 'content', 'created_at', 'created_ip');
        
        public function user() 
        {
            return $this->belongsTo('User', 'user_id');
        } 
        
        public function comments() 
        {
            return $this->hasMany('Comment', 'question_id');
        }
    
}
