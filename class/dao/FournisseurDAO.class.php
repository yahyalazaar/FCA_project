<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface FournisseurDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Fournisseur 
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
 	 * @param fournisseur primary key
 	 */
	public function delete($id_frn);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Fournisseur fournisseur
 	 */
	public function insert($fournisseur);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Fournisseur fournisseur
 	 */
	public function update($fournisseur);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNomFrn($value);

	public function queryByPrenomFrn($value);

	public function queryByEmailFrn($value);

	public function queryByMdpFrn($value);

	public function queryByTelFrn($value);

	public function queryByEtatFrn($value);


	public function deleteByNomFrn($value);

	public function deleteByPrenomFrn($value);

	public function deleteByEmailFrn($value);

	public function deleteByMdpFrn($value);

	public function deleteByTelFrn($value);

	public function deleteByEtatFrn($value);


}
?>