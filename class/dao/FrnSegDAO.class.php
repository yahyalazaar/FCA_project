<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface FrnSegDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return FrnSeg 
	 */
	public function load($idFrn, $idSeg);

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
 	 * @param frnSeg primary key
 	 */
	public function delete($idFrn, $idSeg);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FrnSeg frnSeg
 	 */
	public function insert($frnSeg);
	
	/**
 	 * Update record in table
 	 *
 	 * @param FrnSeg frnSeg
 	 */
	public function update($frnSeg);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>