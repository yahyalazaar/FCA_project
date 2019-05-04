<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface AchtFrnDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AchtFrn 
	 */
	public function load($idAcht, $idFrn);

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
 	 * @param achtFrn primary key
 	 */
	public function delete($idAcht, $idFrn);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AchtFrn achtFrn
 	 */
	public function insert($achtFrn);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AchtFrn achtFrn
 	 */
	public function update($achtFrn);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDateAchtFrn($value);

	public function queryByType($value);


	public function deleteByDateAchtFrn($value);

	public function deleteByType($value);


}
?>