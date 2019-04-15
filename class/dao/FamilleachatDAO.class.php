<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
interface FamilleachatDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Familleachat 
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
 	 * @param familleachat primary key
 	 */
	public function delete($id_fa);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Familleachat familleachat
 	 */
	public function insert($familleachat);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Familleachat familleachat
 	 */
	public function update($familleachat);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNomFa($value);

	public function queryByCodeFa($value);

	public function queryByTypeFa($value);

	public function queryBySegement1Fa($value);

	public function queryBySegement2Fa($value);

	public function queryBySegement3Fa($value);

	public function queryBySegement4Fe($value);

	public function queryByServiceFa($value);

	public function queryByClasseFa($value);

	public function queryByLevierFa($value);


	public function deleteByNomFa($value);

	public function deleteByCodeFa($value);

	public function deleteByTypeFa($value);

	public function deleteBySegement1Fa($value);

	public function deleteBySegement2Fa($value);

	public function deleteBySegement3Fa($value);

	public function deleteBySegement4Fe($value);

	public function deleteByServiceFa($value);

	public function deleteByClasseFa($value);

	public function deleteByLevierFa($value);


}
?>