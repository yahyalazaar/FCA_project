<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
interface RfiDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Rfi 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param rfi primary key
 	 */
	public function delete($id_rfi);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Rfi rfi
 	 */
	public function insert($rfi);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Rfi rfi
 	 */
	public function update($rfi);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>