<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface AttreamDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Attream 
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
 	 * @param attream primary key
 	 */
	public function delete($idAttrEam);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Attream attream
 	 */
	public function insert($attream);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Attream attream
 	 */
	public function update($attream);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdEam($value);

	public function queryByDomaineEam($value);

	public function queryByPoidsEam($value);

	public function queryByCritereEam($value);

	public function queryByIndicateurEam($value);

	public function queryByPriseEam($value);

	public function queryByImportanceEam($value);

	public function queryByPonderationEam($value);

	public function queryByNotationEam($value);

	public function queryByNoteEam($value);


	public function deleteByIdEam($value);

	public function deleteByDomaineEam($value);

	public function deleteByPoidsEam($value);

	public function deleteByCritereEam($value);

	public function deleteByIndicateurEam($value);

	public function deleteByPriseEam($value);

	public function deleteByImportanceEam($value);

	public function deleteByPonderationEam($value);

	public function deleteByNotationEam($value);

	public function deleteByNoteEam($value);


}
?>