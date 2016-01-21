<?php namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent; 

/**
 * 
 */
//fillable fields for a songs  
 class Song extends Eloquent
 {
 	
 	protected $fillable =[
 		'title', 'lyrics'
 	];
 
 	



 } 