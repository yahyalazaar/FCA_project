<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-16 19:38
 */
interface AdminAdminDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AdminAdmin 
	 */
	public function load($idAdmin, $admIdAdmin);

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
 	 * @param adminAdmin primary key
 	 */
	public function delete($idAdmin, $admIdAdmin);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminAdmin adminAdmin
 	 */
	public function insert($adminAdmin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminAdmin adminAdmin
 	 */
	public function update($adminAdmin);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDateAdminAdmin($value);

	public function queryByType($value);


	public function deleteByDateAdminAdmin($value);

	public function deleteByType($value);


}
?>