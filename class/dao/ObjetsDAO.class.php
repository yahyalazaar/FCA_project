<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
interface ObjetsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Objets 
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
 	 * @param objet primary key
 	 */
	public function delete($idObj);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Objets objet
 	 */
	public function insert($objet);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Objets objet
 	 */
	public function update($objet);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByIdRec($value);

	public function queryByRetardObj($value);

	public function queryByQteNCObj($value);

	public function queryByQltNCObj($value);

	public function queryByAutreObj($value);


	public function deleteByIdRec($value);

	public function deleteByRetardObj($value);

	public function deleteByQteNCObj($value);

	public function deleteByQltNCObj($value);

	public function deleteByAutreObj($value);


}
?>