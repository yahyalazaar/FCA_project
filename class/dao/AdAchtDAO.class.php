<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface AdAchtDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AdAcht 
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
 	 * @param adAcht primary key
 	 */
	public function delete($idAdmin, $idAcht);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdAcht adAcht
 	 */
	public function insert($adAcht);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdAcht adAcht
 	 */
	public function update($adAcht);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDateAdAcht($value);

	public function queryByType($value);


	public function deleteByDateAdAcht($value);

	public function deleteByType($value);


}
?>