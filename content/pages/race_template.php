<?php function TestBlockHTML ($replStr) {
	ob_start(); 

	class classInfo{
		public $fighter;
		public $cleric;
		public $sorcerer;
		public $rogue;

		public function construct(){
			$this->fighter =  (object)[
				'description' => 'Questing knights, conquering overlords, royal champions, elite foot soldiers, hardened mercenaries, 
					and bandit kings—as fighters, they all share an unparalleled mastery with weapons and armor, and a thorough knowledge of the skills of combat.',
				'weapons' => 'A fighter may use all weapons except Tasers, and only one type of grenade (HE).',
				'skills'=>array(
					"Level 1" => array(
						"Greater Weapon Fighting" => "A Fighter specializes in larger weapons. They gain 10% Bonus Damage"
					),
					"Level 3" => array(
						"Champion" => "Fighters pick up a cause and see it through to the end, with vigor. 5% increased chance to crit.",
						"Great Weapon Master" => "If the attack does crit, a nearby foe is Cleaved into for the normal damage."
					),
					"Level 5" => array(
						"Extra Attack" => "More attacks for more damage. 5% Extra Damage",
					),
					"Level 7" => array(
						"!cast Disarm" => "Disarm allows Fighter to make their opponents drop their primary weapon (slot 1). A successful Strength saving throw negates the effect. This ability toggles the effect on or off. A fighter starts with 1 charge of Disarm and gains multiple as they level.",
					),
					"Level 9" => array(
						"Indomitable" => "If the Fighter were to not save against an effect, they have an extra attempt at trying to resist it. The number of attempts increases as the Fighter gains levels.",
					),
					"Level 10" => array(
						"Parry" => "While a Fighter has armor, they have a 5% chance to parry an attack and take no damage. This does not work against spells.",
					),
					"Level 11" => array(
						"Extra Attack" => "Gain another 5% damage buff.",
					),
					"Level 15" => array(
						"Master Swordsman" => "Fighters at this level have a total of 15% chance to crit.",
					),
					"Level 20" => array(
						"Survivalist" => "Fighters that defeat a foe heal 10HP.",
					)
				)
			];

			$this->cleric =  (object)[
				'description' => 'Clerics are intermediaries between the mortal world and the distant planes of the gods. As varied as the gods they serve, they strive to embody the handiwork of their deities.',
				'weapons' => 'A Cleric may use all Pistols, Tasers, Shotguns, Machine Guns, and SMGs.',
				'skills'=>array(
					"Passive" => array(
						"Alignment" => "Clerics have a unique element to their gameplay. They can either be Good or Evil. Good Clerics heal 20% more with their healing spells, while Evil Clerics do 20% more damage with their Inflict spells. To change your alignment, while dead !cast {good/evil}"
					),
					"Level 1" => array(
						"Mana" => "Clerics gain mana to cast spells with. The amount of mana they have increases with level. See here for how to cast spells.",
						"!cast {Cure/Inflict} {amount}" => "Clerics first spell allows them to heal or to do damage. Use Cure to heal or Inflict to deal damage. A specialty of Clerics is they can decide how much mana to spend, and thus, heal or damage with these spells. To use 10 mana to heal someone you would place your crosshairs on them, and use your bind for !cast Cure 10 Clerics have a maximum amount of mana they can spend on these spells which you are notified by when you spawn."
					),
					"Level 3" => array(
						"!cast Sacred Flame" => "This spell deals damage to your target and then burns them. A successful Dexterity save prevents the burn and reduces the damage by half.",
						"!cast Bless" => "All nearby allies receive a buff to help them make saves against debilitating effects."
					),
					"Level 5" => array(
						"!cast Spiritual Weapon {weapon}" => "Give yourself a weapon of choice. !cast Spiritual Weapon m4a1",
						"!cast Curse" => "Whenever your target takes damage, they receive an extra 3d8. A Wisdom save prevents this debuff."
					),
					"Level 7" => array(
						"!cast Channel Divinity" => "Heals or damages in an AOE around you for 5d8. This spell does not use mana, you have a number of uses that increases with level.",
					),
					"Level 9" => array(
						"!cast Death Ward" => "If your target would be killed, they are instead reduced to 1HP and then lose this buff.",
					),
					"Level 11" => array(
						"!cast Banishment" => "Your target, on a failed Charisma save, is teleported back to where they spawned.",
					),
					"Level 15" => array(
						"!cast Spirit Guardians" => "For 3s, when you are attacked the attacker receives 3d8 damage in response. Wisdom save halves the damage.",
					),
					"Level 20" => array(
						"!cast True Resurrection" => "An ally (of your choice) is brought back from the dead.",
					)
				)
			];
			
			$this->sorcerer =  (object)[
				'description' => 'Sorcerers carry a magical birthright conferred upon them by an exotic bloodline, some otherworldly influence, or exposure to unknown cosmic forces. No one chooses sorcery; the power chooses the sorcerer.',
				'weapons' => 'A Sorcerer may use light Pistols, Tasers, and Grenades.',
				'skills'=>array(
					"Level 1" => array(
						"Mana" => "Sorcerers gain mana to cast spells with. The amount of mana they have increases with level. See here for how to cast spells.",
						"!cast Prestidigitation" => "Create a fake flashbang to freak out enemies.",
						"!cast Mage Armor" => "Give yourself a free suit of armor.",
					),
					"Level 2" => array(
						"!cast Magic Missile" => "This spell deals 3d4 + 5 damage to your target.",
						"!cast Thunder Wave" => "Pushes enemies away and deals 2d8 damage. Constitution save keeps enemy from being pushed and halves damage."
					),
					"Level 3" => array(
						"!cast Alter Self" => "Disguise yourself as an enemy.",
						"!cast Brightness" => "Create blinding lights that follow you (2.5s)."
					),
					"Level 4" => array(
						"!cast Acid Splash" => "Target an enemy. Removes all armor from enemies near them. Dexterity save negates this effect.",
					),
					"Level 5" => array(
						"!cast Misty Step" => "Teleport forward a short distance. Detection prevents you from being stuck in walls. If you can not teleport, try looking up a little bit more. Failed teleportations do not cost mana.",
						"!cast Fireball" => "Deals 5d8 damage to all people near a spot you are looking at. Dexterity save halves damage."
					),
					"Level 7" => array(
						"!cast Silence" => "All people near your target are unable to cast spells for 5s.",
						"!cast Confusion" => "All players have a random player model chosen for them. CTs can look like Ts and vice-versa.",
					),
					"Level 9" => array(
						"!cast Greater Invisibility" => "Become completely invisble for 3s.",
						"!cast Polymorph" => "Your target becomes a chicken and loses their guns for 3s. A Wisdom save negates this effect.",
					),
					"Level 11" => array(
						"!cast Wall of Fire" => "Create a Wall of Fire for 3s. Players that attempt to walk through or stand in are burned every .75s for 5d8 damage. A Dexterity save halves damage.",
						"!cast Stoneshape" => "Create a barrier where you are looking. The barrier has physics which can block players and shots. The barrier has 450HP.",
					),
					"Level 13" => array(
						"!cast True Seeing" => "You are able to find and reveal stealthed or invisible enemies.",
					),
					"Level 15" => array(
						"!cast Chain Lightning" => "Your target and 3 nearby enemies receive 7d8 damage. A Dexerity save halves damage.",
					),
					"Level 17" => array(
						"!cast Delayed Blast Fireball" => "You shoot out a missile. If the missile is not destroyed in 3s, all nearby players receive 10d8 damage. Dexterity save halves damage.<br>NOTE: The best success I have had with this is bouncing it off the floor into a direction. Shooting it straight at walls usually destroys the missile.",
					),
					"Level 20" => array(
						"!cast Fly" => "You float in the direction you are moving.<br>NOTE: You keep momentum as you fly. You can be caught on small edges.",
					)
				)
			];
			
			$this->rogue =  (object)[
				'description' => 'Rogues rely on skill, stealth, and their foes’ vulnerabilities to get the upper hand in any situation. They have a knack for finding the solution to just about any problem, bringing resourcefulness and versatility to their adventuring parties.',
				//'weapons' => 'A Sorcerer may use light Pistols, Tasers, and Grenades.',
				'skills'=>array(
					"Level 1" => array(
						"Stealth" => "A Rogue gains the benefit of being completely invisible. This benefit is lost for a short duration after shooting, jumping, dashing, and other actions. 
						They go back into Stealth after a short duration, which is reduced with higher levels. Rogues Stealth can be broken by people being close to them. This becomes harder 
						the higher level the Rogue is.",
						"Sneak Attack" => "If a Rogue is in Stealth, their next attack will deal bonus damage."
					),
					"Level 3" => array(
						"Dash" => "When a Rogue uses the walk key (SHIFT by default) they will start sprinting. They have 3s they can do this. After a short duration, their \"endurance\" will refill to 3s. They can Dash again when their endurance starts recharging.",
						"Thievery" => "When a Rogue attacks a target in a close range, they will try to take money and the main weapon from their victim. An opposed Dexterity vs. Wisdom determines whether the Rogue is successful."
					),
					"Level 5" => array(
						"Evasive" => "Rogues have advantage on Dexterity saving throws.",
					),
					"Level 11" => array(
						"Elusive" => "Rogues can not be the victim of a Critical Strike.",
					),
					"Level 20" => array(
						"Assassin" => "Rogues will always Sneak Attack a target if they are behind them.",
					)
				)
			];
		}
	};

	$classInfo = new classInfo;
	$classInfo->construct();

?>
	
<div class="main-content-content-left alone">
	<div class="dnd-classRace-banner <?php echo($replStr) ?>" style="background-color: #0f0f0f;">
		<div class="classRace-banner-title">
			<h2>The</h2>
			<h1>
				<?php echo(ucfirst($replStr)) ?>
			</h1>
		</div>
	</div>
	<div class="dnd-classRace-content">

		<h2>Description</h2>
		<span><?php echo($classInfo->$replStr->description); ?></span>

		<h2>Weapons</h2>
		<span><?php echo($classInfo->$replStr->weapons); ?></span>

		<h2>Mechanics</h2>
		<?php
			foreach($classInfo->$replStr->skills as $level => $listOfSkills){
				echo '<div class="dnd-mech">';
				echo "<h3>$level</h3>";
				foreach($listOfSkills as $skill => $description){
					echo "<h4>$skill</h4>";
					echo "<span class='classRaceSpan'>$description</span>";
				}
				echo '</div>';
			}
		?>
		<!-- sample html -->
		<!-- <div class="dnd-mech">
			<h3>Level 3</h3>
			<h4>Champion</h4>
			<span class="classRaceSpan">Fighters pick up a cause and see it through to the end, with vigor. 5% increased chance to crit.</span>
			<h4>Great Weapon Master</h4>
			<span class="classRaceSpan">If the attack does crit, a nearby foe is Cleaved into for the normal damage.</span>
		</div> -->


	</div>


</div>

<?php
    return ob_get_clean();
} 
return TestBlockHTML($passthrough);
?>