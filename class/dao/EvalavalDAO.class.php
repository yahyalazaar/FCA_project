<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface EvalavalDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Evalaval 
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
 	 * @param evalaval primary key
 	 */
	public function delete($id_eav);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Evalaval evalaval
 	 */
	public function insert($evalaval);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Evalaval evalaval
 	 */
	public function update($evalaval);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>