-- Active: 1789910333922@@gateway01.eu-central-1.prod.aws.tidbcloud.com@4000@prenom_pokedex_bdd
-- Active: 1772795269981@@bruno-pokemon-brunopaul1412-baa0.d.aivencloud.com@24379@bruno_pokedex_bdd
SELECT 
    p.pokemon_id, 
    p.pokemon_nom, 
    p.pokemon_img, 
    p.pokemon_description, 
    p.pokemon_taille, 
    p.pokemon_poids,
    s.stats_pv, 
    s.stats_attaque, 
    s.stats_defense, 
    s.stats_attaque_speciale, 
    s.stats_defense_speciale, 
    s.stats_vitesse
FROM pokemon p
JOIN stats s ON p.stats_id = s.stats_id
JOIN assoc_pokemon_type apt ON p.pokemon_id = apt.pokemon_id
JOIN type t ON apt.type_id = t.type_id
WHERE p.pokemon_id = 1;