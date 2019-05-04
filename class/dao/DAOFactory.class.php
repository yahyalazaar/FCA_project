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
	 * @return ActionDAO
	 */
	public static function getActionDAO(){
		return new ActionMySqlExtDAO();
	}

	/**
	 * @return AdAchtDAO
	 */
	public static function getAdAchtDAO(){
		return new AdAchtMySqlExtDAO();
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
	 * @return AttreamDAO
	 */
	public static function getAttreamDAO(){
		return new AttreamMySqlExtDAO();
	}

	/**
	 * @return AttreavDAO
	 */
	public static function getAttreavDAO(){
		return new AttreavMySqlExtDAO();
	}

	/**
	 * @return DispositionDAO
	 */
	public static function getDispositionDAO(){
		return new DispositionMySqlExtDAO();
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
	 * @return FrnSegDAO
	 */
	public static function getFrnSegDAO(){
		return new FrnSegMySqlExtDAO();
	}

	/**
	 * @return ObjetsDAO
	 */
	public static function getObjetsDAO(){
		return new ObjetsMySqlExtDAO();
	}

	/**
	 * @return PiecejointesDAO
	 */
	public static function getPiecejointesDAO(){
		return new PiecejointesMySqlExtDAO();
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
	 * @return SegementDAO
	 */
	public static function getSegementDAO(){
		return new SegementMySqlExtDAO();
	}

	/**
	 * @return WebmasterDAO
	 */
	public static function getWebmasterDAO(){
		return new WebmasterMySqlExtDAO();
	}


}
?>