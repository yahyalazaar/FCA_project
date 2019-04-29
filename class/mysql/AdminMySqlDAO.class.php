<?php
/**
 * Class that operate on table 'admin'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2019-04-28 13:14
 */
class AdminMySqlDAO implements AdminDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return AdminMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM admin WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM admin';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM admin ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param admin primary key
 	 */
	public function delete($id_admin){
		$sql = 'DELETE FROM admin WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id_admin);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AdminMySql admin
 	 */
	public function insert($admin){
		$sql = 'INSERT INTO admin (nom_admin, prenom_admin, email_admin, mdp_admin, tel_admin, etat_admin) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($admin->nomAdmin);
		$sqlQuery->set($admin->prenomAdmin);
		$sqlQuery->set($admin->emailAdmin);
		$sqlQuery->set($admin->mdpAdmin);
		$sqlQuery->set($admin->telAdmin);
		$sqlQuery->setNumber($admin->etatAdmin);

		$id = $this->executeInsert($sqlQuery);	
		$admin->idAdmin = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param AdminMySql admin
 	 */
	public function update($admin){
		$sql = 'UPDATE admin SET nom_admin = ?, prenom_admin = ?, email_admin = ?, mdp_admin = ?, tel_admin = ?, etat_admin = ? WHERE id_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($admin->nomAdmin);
		$sqlQuery->set($admin->prenomAdmin);
		$sqlQuery->set($admin->emailAdmin);
		$sqlQuery->set($admin->mdpAdmin);
		$sqlQuery->set($admin->telAdmin);
		$sqlQuery->setNumber($admin->etatAdmin);

		$sqlQuery->setNumber($admin->idAdmin);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM admin';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNomAdmin($value){
		$sql = 'SELECT * FROM admin WHERE nom_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPrenomAdmin($value){
		$sql = 'SELECT * FROM admin WHERE prenom_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmailAdmin($value){
		$sql = 'SELECT * FROM admin WHERE email_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMdpAdmin($value){
		$sql = 'SELECT * FROM admin WHERE mdp_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelAdmin($value){
		$sql = 'SELECT * FROM admin WHERE tel_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEtatAdmin($value){
		$sql = 'SELECT * FROM admin WHERE etat_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNomAdmin($value){
		$sql = 'DELETE FROM admin WHERE nom_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPrenomAdmin($value){
		$sql = 'DELETE FROM admin WHERE prenom_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmailAdmin($value){
		$sql = 'DELETE FROM admin WHERE email_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMdpAdmin($value){
		$sql = 'DELETE FROM admin WHERE mdp_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelAdmin($value){
		$sql = 'DELETE FROM admin WHERE tel_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEtatAdmin($value){
		$sql = 'DELETE FROM admin WHERE etat_admin = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return AdminMySql 
	 */
	protected function readRow($row){
		$admin = new Admin();
		
		$admin->idAdmin = $row['id_admin'];
		$admin->nomAdmin = $row['nom_admin'];
		$admin->prenomAdmin = $row['prenom_admin'];
		$admin->emailAdmin = $row['email_admin'];
		$admin->mdpAdmin = $row['mdp_admin'];
		$admin->telAdmin = $row['tel_admin'];
		$admin->etatAdmin = $row['etat_admin'];

		return $admin;
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
	 * @return AdminMySql 
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