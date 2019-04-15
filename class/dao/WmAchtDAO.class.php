<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
interface WmAchtDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WmAcht 
	 */
	public function load($idAdmin, $idAcht);

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
 	 * @param wmAcht primary key
 	 */
	public function delete($idAdmin, $idAcht);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WmAcht wmAcht
 	 */
	public function insert($wmAcht);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WmAcht wmAcht
 	 */
	public function update($wmAcht);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDateWmAcht($value);

	public function queryByType($value);


	public function deleteByDateWmAcht($value);

	public function deleteByType($value);


}
?>