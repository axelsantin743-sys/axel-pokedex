-- Active: 1772795269981@@bruno-pokemon-brunopaul1412-baa0.d.aivencloud.com@24379@bruno_pokedex_bdd
CREATE TABLE type(
   type_id INT,
   type_nom VARCHAR(50),
   PRIMARY KEY(type_id)
);

CREATE TABLE stats(
   stats_id INT,
   stats_pv INT,
   stats_attaque INT,
   stats_defense INT,
   stats_attaque_speciale INT,
   stats_defense_speciale INT,
   stats_vitesse INT,
   PRIMARY KEY(stats_id)
);

CREATE TABLE pokemon(
   pokemon_id INT,
   pokemon_nom VARCHAR(50),
   pokemon_img VARCHAR(2048),
   pokemon_description TEXT,
   pokemon_taille DECIMAL(15,2),
   pokemon_poids DECIMAL(15,2),
   stats_id INT NOT NULL,
   PRIMARY KEY(pokemon_id),
   FOREIGN KEY(stats_id) REFERENCES stats(stats_id)
);

CREATE TABLE assoc_pokemon_type(
   pokemon_id INT,
   type_id INT,
   PRIMARY KEY(pokemon_id, type_id),
   FOREIGN KEY(pokemon_id) REFERENCES pokemon(pokemon_id),
   FOREIGN KEY(type_id) REFERENCES type(type_id)
);
