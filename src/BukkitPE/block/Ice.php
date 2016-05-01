<?php
/*
 *
 *  ____            _        _   __  __ _                  __  __ ____  
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \ 
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/ 
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_| 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author BukkitPE Team
 * @link http://www.BukkitPE.net/
 * 
 *
*/
namespace BukkitPE\block;
use BukkitPE\item\Item;
use BukkitPE\item\Tool;
use BukkitPE\level\Level;
class Ice extends Transparent{
	protected $id = self::ICE;
	public function __construct(){
	}
	public function getName(){
		return "Ice";
	}
	public function getHardness(){
		return 0.5;
	}
	public function getToolType(){
		return Tool::TYPE_PICKAXE;
	}
	public function onBreak(Item $item){
		$this->getLevel()->setBlock($this, new Water(), true);
		return true;
	}
	public function getDrops(Item $item){
		return [];
	}
	
	public function onUpdate($type){
		if($type === Level::BLOCK_UPDATE_RANDOM){
			if($this->getLevel()->getBlockLightAt($this->x, $this->y, $this->z) >= 12){
				$this->getLevel()->setBlock($this, new Water(), true);
				return Level::BLOCK_UPDATE_NORMAL;
			}
		}
		return false;
	}
}