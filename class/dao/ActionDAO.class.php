<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface ActionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Action 
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
 	 * @param action primary key
 	 */
	public function delete($idAct);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Action action
 	 */
	public function insert($action);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Action action
 	 */
	public function update($action);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRec($value);

	public function queryByActionAct($value);

	public function queryByQuiAct($value);

	public function queryByQuandAct($value);

	public function queryByCommAct($value);


	public function deleteByIdRec($value);

	public function deleteByActionAct($value);

	public function deleteByQuiAct($value);

	public function deleteByQuandAct($value);

	public function deleteByCommAct($value);


}
?>