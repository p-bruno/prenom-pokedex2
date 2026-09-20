-- Active: 1789910333922@@gateway01.eu-central-1.prod.aws.tidbcloud.com@4000@prenom_pokedex_bdd
-- Active: 1772795269981@@bruno-pokemon-brunopaul1412-baa0.d.aivencloud.com@24379@bruno_pokedex_bdd
SELECT p.pokemon_id, p.pokemon_nom, p.pokemon_img, 
          GROUP_CONCAT(t.type_nom SEPARATOR ',') AS types_list
          FROM pokemon p
          LEFT JOIN assoc_pokemon_type apt ON p.pokemon_id = apt.pokemon_id
          LEFT JOIN type t ON apt.type_id = t.type_id
          GROUP BY p.pokemon_id
          ORDER BY p.pokemon_id ASC