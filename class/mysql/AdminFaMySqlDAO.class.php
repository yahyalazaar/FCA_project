<?php
/**
 * Class that operate on table 'admin_fa'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class AdminFaMySqlDAO implements AdminFaDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AdminFaMySql 
	 */
	public function load($idAdmin, $idFa){
		$sql = 'SELECT * FROM admin_fa WHERE id_admin = ?  AND id_fa = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($idFa);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM admin_fa';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM admin_fa ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param adminFa primary key
 	 */
	public function delete($idAdmin, $idFa){
		$sql = 'DELETE FROM admin_fa WHERE id_admin = ?  AND id_fa = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($idFa);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminFaMySql adminFa
 	 */
	public function insert($adminFa){
		$sql = 'INSERT INTO admin_fa ( id_admin, id_fa) VALUES ( ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($adminFa->idAdmin);

		$sqlQuery->setNumber($adminFa->idFa);

		$this->executeInsert($sqlQuery);	
		//$adminFa->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminFaMySql adminFa
 	 */
	public function update($adminFa){
		$sql = 'UPDATE admin_fa SET  WHERE id_admin = ?  AND id_fa = ? ';
		$sqlQuery = new SqlQuery($sql);
		

		
		$sqlQuery->setNumber($adminFa->idAdmin);

		$sqlQuery->setNumber($adminFa->idFa);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM admin_fa';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}



	
	/**
	 * Read row
	 *
	 * @return AdminFaMySql 
	 */
	protected function readRow($row){
		$adminFa = new AdminFa();
		
		$adminFa->idAdmin = $row['id_admin'];
		$adminFa->idFa = $row['id_fa'];

		return $adminFa;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return AdminFaMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>