<?php
/**
 * Class that operate on table 'webmaster'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-14 22:17
 */
class WebmasterMySqlDAO implements WebmasterDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WebmasterMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM webmaster WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM webmaster';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM webmaster ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param webmaster primary key
 	 */
	public function delete($id_admin){
		$sql = 'DELETE FROM webmaster WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_admin);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WebmasterMySql webmaster
 	 */
	public function insert($webmaster){
		$sql = 'INSERT INTO webmaster (nom_wm, prenom_wm, email_wm, mdp_wm, tel_wm) VALUES (?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($webmaster->nomWm);
		$sqlQuery->set($webmaster->prenomWm);
		$sqlQuery->set($webmaster->emailWm);
		$sqlQuery->set($webmaster->mdpWm);
		$sqlQuery->set($webmaster->telWm);

		$id = $this->executeInsert($sqlQuery);	
		$webmaster->idAdmin = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WebmasterMySql webmaster
 	 */
	public function update($webmaster){
		$sql = 'UPDATE webmaster SET nom_wm = ?, prenom_wm = ?, email_wm = ?, mdp_wm = ?, tel_wm = ? WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($webmaster->nomWm);
		$sqlQuery->set($webmaster->prenomWm);
		$sqlQuery->set($webmaster->emailWm);
		$sqlQuery->set($webmaster->mdpWm);
		$sqlQuery->set($webmaster->telWm);

		$sqlQuery->setNumber($webmaster->idAdmin);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM webmaster';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNomWm($value){
		$sql = 'SELECT * FROM webmaster WHERE nom_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrenomWm($value){
		$sql = 'SELECT * FROM webmaster WHERE prenom_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailWm($value){
		$sql = 'SELECT * FROM webmaster WHERE email_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMdpWm($value){
		$sql = 'SELECT * FROM webmaster WHERE mdp_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelWm($value){
		$sql = 'SELECT * FROM webmaster WHERE tel_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNomWm($value){
		$sql = 'DELETE FROM webmaster WHERE nom_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrenomWm($value){
		$sql = 'DELETE FROM webmaster WHERE prenom_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailWm($value){
		$sql = 'DELETE FROM webmaster WHERE email_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMdpWm($value){
		$sql = 'DELETE FROM webmaster WHERE mdp_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelWm($value){
		$sql = 'DELETE FROM webmaster WHERE tel_wm = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WebmasterMySql 
	 */
	protected function readRow($row){
		$webmaster = new Webmaster();
		
		$webmaster->idAdmin = $row['id_admin'];
		$webmaster->nomWm = $row['nom_wm'];
		$webmaster->prenomWm = $row['prenom_wm'];
		$webmaster->emailWm = $row['email_wm'];
		$webmaster->mdpWm = $row['mdp_wm'];
		$webmaster->telWm = $row['tel_wm'];

		return $webmaster;
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
	 * @return WebmasterMySql 
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