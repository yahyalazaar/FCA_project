<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
interface HistoriquerfiDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Historiquerfi 
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
 	 * @param historiquerfi primary key
 	 */
	public function delete($id_hrfi);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Historiquerfi historiquerfi
 	 */
	public function insert($historiquerfi);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Historiquerfi historiquerfi
 	 */
	public function update($historiquerfi);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>