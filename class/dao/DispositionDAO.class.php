<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface DispositionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Disposition 
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
 	 * @param disposition primary key
 	 */
	public function delete($idDisp);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Disposition disposition
 	 */
	public function insert($disposition);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Disposition disposition
 	 */
	public function update($disposition);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRec($value);

	public function queryByActionDisp($value);

	public function queryByQuiDisp($value);

	public function queryByQuandDisp($value);

	public function queryByCommDisp($value);


	public function deleteByIdRec($value);

	public function deleteByActionDisp($value);

	public function deleteByQuiDisp($value);

	public function deleteByQuandDisp($value);

	public function deleteByCommDisp($value);


}
?>