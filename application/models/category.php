<?php
class Category extends ActiveRecord\Model {

	static $has_many = array(
		array('products')
    );

    /**
    * Return values of database with pagination
    *	
    * @return mixed
    */
	static function paginate($limit, $page){

		$offset = $limit * ( $page - 1) ;

		$result = Category::find('all', array('limit' => $limit, 'offset' => $offset ) );

		if ($result) {
			return $result;
		}else{
			return FALSE;
		}
	}


}