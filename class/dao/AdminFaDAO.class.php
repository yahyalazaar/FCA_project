<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface AdminFaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AdminFa 
	 */
	public function load($idAdmin, $idFa);

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
 	 * @param adminFa primary key
 	 */
	public function delete($idAdmin, $idFa);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminFa adminFa
 	 */
	public function insert($adminFa);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminFa adminFa
 	 */
	public function update($adminFa);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>