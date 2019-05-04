<?php
/**
 * Class that operate on table 'admin_admin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-05-04 16:44
 */
class AdminAdminMySqlDAO implements AdminAdminDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AdminAdminMySql 
	 */
	public function load($idAdmin, $admIdAdmin){
		$sql = 'SELECT * FROM admin_admin WHERE id_admin = ?  AND Adm_id_admin = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($admIdAdmin);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM admin_admin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM admin_admin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param adminAdmin primary key
 	 */
	public function delete($idAdmin, $admIdAdmin){
		$sql = 'DELETE FROM admin_admin WHERE id_admin = ?  AND Adm_id_admin = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idAdmin);
		$sqlQuery->setNumber($admIdAdmin);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminAdminMySql adminAdmin
 	 */
	public function insert($adminAdmin){
		$sql = 'INSERT INTO admin_admin (date_admin_admin, type, id_admin, Adm_id_admin) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($adminAdmin->dateAdminAdmin);
		$sqlQuery->set($adminAdmin->type);

		
		$sqlQuery->setNumber($adminAdmin->idAdmin);

		$sqlQuery->setNumber($adminAdmin->admIdAdmin);

		$this->executeInsert($sqlQuery);	
		//$adminAdmin->id = $id;
		//return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminAdminMySql adminAdmin
 	 */
	public function update($adminAdmin){
		$sql = 'UPDATE admin_admin SET date_admin_admin = ?, type = ? WHERE id_admin = ?  AND Adm_id_admin = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($adminAdmin->dateAdminAdmin);
		$sqlQuery->set($adminAdmin->type);

		
		$sqlQuery->setNumber($adminAdmin->idAdmin);

		$sqlQuery->setNumber($adminAdmin->admIdAdmin);

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM admin_admin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDateAdminAdmin($value){
		$sql = 'SELECT * FROM admin_admin WHERE date_admin_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM admin_admin WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDateAdminAdmin($value){
		$sql = 'DELETE FROM admin_admin WHERE date_admin_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM admin_admin WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AdminAdminMySql 
	 */
	protected function readRow($row){
		$adminAdmin = new AdminAdmin();
		
		$adminAdmin->idAdmin = $row['id_admin'];
		$adminAdmin->admIdAdmin = $row['Adm_id_admin'];
		$adminAdmin->dateAdminAdmin = $row['date_admin_admin'];
		$adminAdmin->type = $row['type'];

		return $adminAdmin;
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
	 * @return AdminAdminMySql 
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