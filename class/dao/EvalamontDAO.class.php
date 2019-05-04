<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
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

	public function queryByIdAdmin($value);

	public function queryByIdAcht($value);

	public function queryByIdFrn($value);

	public function queryByEtatEam($value);

	public function queryByDateEam($value);

	public function queryByScoreEam($value);

	public function queryByClasseEam($value);


	public function deleteByIdAdmin($value);

	public function deleteByIdAcht($value);

	public function deleteByIdFrn($value);

	public function deleteByEtatEam($value);

	public function deleteByDateEam($value);

	public function deleteByScoreEam($value);

	public function deleteByClasseEam($value);


}
?>