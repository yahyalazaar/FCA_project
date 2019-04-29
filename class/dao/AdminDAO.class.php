<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface AdminDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Admin 
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
 	 * @param admin primary key
 	 */
	public function delete($id_admin);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Admin admin
 	 */
	public function insert($admin);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Admin admin
 	 */
	public function update($admin);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNomAdmin($value);

	public function queryByPrenomAdmin($value);

	public function queryByEmailAdmin($value);

	public function queryByMdpAdmin($value);

	public function queryByTelAdmin($value);

	public function queryByEtatAdmin($value);


	public function deleteByNomAdmin($value);

	public function deleteByPrenomAdmin($value);

	public function deleteByEmailAdmin($value);

	public function deleteByMdpAdmin($value);

	public function deleteByTelAdmin($value);

	public function deleteByEtatAdmin($value);


}
?>