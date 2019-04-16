<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-16 19:38
 */
interface WebmasterDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Webmaster 
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
 	 * @param webmaster primary key
 	 */
	public function delete($id_admin);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Webmaster webmaster
 	 */
	public function insert($webmaster);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Webmaster webmaster
 	 */
	public function update($webmaster);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNomWm($value);

	public function queryByPrenomWm($value);

	public function queryByEmailWm($value);

	public function queryByMdpWm($value);

	public function queryByTelWm($value);


	public function deleteByNomWm($value);

	public function deleteByPrenomWm($value);

	public function deleteByEmailWm($value);

	public function deleteByMdpWm($value);

	public function deleteByTelWm($value);


}
?>