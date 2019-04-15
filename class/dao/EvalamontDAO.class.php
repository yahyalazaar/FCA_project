<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
interface EvalamontDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Evalamont 
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
 	 * @param evalamont primary key
 	 */
	public function delete($id_eam);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Evalamont evalamont
 	 */
	public function insert($evalamont);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Evalamont evalamont
 	 */
	public function update($evalamont);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>