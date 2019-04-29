<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
interface AcheteurDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Acheteur 
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
 	 * @param acheteur primary key
 	 */
	public function delete($id_acht);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Acheteur acheteur
 	 */
	public function insert($acheteur);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Acheteur acheteur
 	 */
	public function update($acheteur);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNomAcht($value);

	public function queryByPrenomAcht($value);

	public function queryByEmailAcht($value);

	public function queryByMdpAcht($value);

	public function queryByTelAcht($value);

	public function queryByEtatAcht($value);


	public function deleteByNomAcht($value);

	public function deleteByPrenomAcht($value);

	public function deleteByEmailAcht($value);

	public function deleteByMdpAcht($value);

	public function deleteByTelAcht($value);

	public function deleteByEtatAcht($value);


}
?>