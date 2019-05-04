<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface AttreavDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Attreav 
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
 	 * @param attreav primary key
 	 */
	public function delete($idAttrEav);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Attreav attreav
 	 */
	public function insert($attreav);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Attreav attreav
 	 */
	public function update($attreav);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdEav($value);

	public function queryByDomaineEav($value);

	public function queryByPoidsEav($value);

	public function queryByCritereEav($value);

	public function queryByIndicateurEav($value);

	public function queryByPriseEav($value);

	public function queryByImportanceEav($value);

	public function queryByPonderationEav($value);

	public function queryByNotationEav($value);

	public function queryByNoteEav($value);


	public function deleteByIdEav($value);

	public function deleteByDomaineEav($value);

	public function deleteByPoidsEav($value);

	public function deleteByCritereEav($value);

	public function deleteByIndicateurEav($value);

	public function deleteByPriseEav($value);

	public function deleteByImportanceEav($value);

	public function deleteByPonderationEav($value);

	public function deleteByNotationEav($value);

	public function deleteByNoteEav($value);


}
?>