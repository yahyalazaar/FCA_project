<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AcheteurDAO
	 */
	public static function getAcheteurDAO(){
		return new AcheteurMySqlExtDAO();
	}

	/**
	 * @return AchtFrnDAO
	 */
	public static function getAchtFrnDAO(){
		return new AchtFrnMySqlExtDAO();
	}

	/**
	 * @return AdminDAO
	 */
	public static function getAdminDAO(){
		return new AdminMySqlExtDAO();
	}

	/**
	 * @return AdminAdminDAO
	 */
	public static function getAdminAdminDAO(){
		return new AdminAdminMySqlExtDAO();
	}

	/**
	 * @return AdminFaDAO
	 */
	public static function getAdminFaDAO(){
		return new AdminFaMySqlExtDAO();
	}

	/**
	 * @return EvalamontDAO
	 */
	public static function getEvalamontDAO(){
		return new EvalamontMySqlExtDAO();
	}

	/**
	 * @return EvalavalDAO
	 */
	public static function getEvalavalDAO(){
		return new EvalavalMySqlExtDAO();
	}

	/**
	 * @return FamilleachatDAO
	 */
	public static function getFamilleachatDAO(){
		return new FamilleachatMySqlExtDAO();
	}

	/**
	 * @return FournisseurDAO
	 */
	public static function getFournisseurDAO(){
		return new FournisseurMySqlExtDAO();
	}

	/**
	 * @return HistoriquerfiDAO
	 */
	public static function getHistoriquerfiDAO(){
		return new HistoriquerfiMySqlExtDAO();
	}

	/**
	 * @return ReclamationDAO
	 */
	public static function getReclamationDAO(){
		return new ReclamationMySqlExtDAO();
	}

	/**
	 * @return RfiDAO
	 */
	public static function getRfiDAO(){
		return new RfiMySqlExtDAO();
	}

	/**
	 * @return WebmasterDAO
	 */
	public static function getWebmasterDAO(){
		return new WebmasterMySqlExtDAO();
	}

	/**
	 * @return WmAchtDAO
	 */
	public static function getWmAchtDAO(){
		return new WmAchtMySqlExtDAO();
	}


}
?>