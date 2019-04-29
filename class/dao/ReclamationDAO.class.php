<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface ReclamationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Reclamation 
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
 	 * @param reclamation primary key
 	 */
	public function delete($id_rec);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Reclamation reclamation
 	 */
	public function insert($reclamation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Reclamation reclamation
 	 */
	public function update($reclamation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdAcht($value);

	public function queryByIdFrn($value);

	public function queryByNcmdRec($value);

	public function queryByContactRec($value);

	public function queryByDateRec($value);

	public function queryByDateRepRec($value);

	public function queryByDescriptionRec($value);

	public function queryByEtatRec($value);


	public function deleteByIdAcht($value);

	public function deleteByIdFrn($value);

	public function deleteByNcmdRec($value);

	public function deleteByContactRec($value);

	public function deleteByDateRec($value);

	public function deleteByDateRepRec($value);

	public function deleteByDescriptionRec($value);

	public function deleteByEtatRec($value);


}
?>