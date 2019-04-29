<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface SegementDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Segement 
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
 	 * @param segement primary key
 	 */
	public function delete($id_seg);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Segement segement
 	 */
	public function insert($segement);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Segement segement
 	 */
	public function update($segement);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdAdmin($value);

	public function queryByIdFa($value);

	public function queryByNomSeg($value);


	public function deleteByIdAdmin($value);

	public function deleteByIdFa($value);

	public function deleteByNomSeg($value);


}
?>