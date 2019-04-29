<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface PiecejointesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Piecejointes 
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
 	 * @param piecejointe primary key
 	 */
	public function delete($idPj);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Piecejointes piecejointe
 	 */
	public function insert($piecejointe);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Piecejointes piecejointe
 	 */
	public function update($piecejointe);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRec($value);

	public function queryByPhotoPj($value);

	public function queryByEmailPj($value);

	public function queryByBcPj($value);

	public function queryByBlPj($value);

	public function queryByRiPj($value);

	public function queryByAutrePj($value);


	public function deleteByIdRec($value);

	public function deleteByPhotoPj($value);

	public function deleteByEmailPj($value);

	public function deleteByBcPj($value);

	public function deleteByBlPj($value);

	public function deleteByRiPj($value);

	public function deleteByAutrePj($value);


}
?>