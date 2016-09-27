CREATE TABLE bisounours (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL ,
  color VARCHAR(255) NOT NULL ,
  signe_distinctif VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
)

INSERT INTO bisounours (name, color, signe_distinctif)
VALUES ('Grognon', 'bleu', 'un nuage avec de la pluie et un éclair'),
('Grosbisou', 'rouge foncé', 'un coeur'),
('Groschéri', 'rose vif', 'deux coeurs'),
('Groscopain', 'orange clair', 'deux fleurs'),
('Grosdodo', 'bleu clair', 'une lune et une étoile'),
('Grosfarceur', 'rose pâle', 'un arc-en-ciel'),
('Grosgâteau', 'jaune pâle', 'un gros gâteau'),
('Grojojo', 'jaune citron', 'un soleil'),
('Grostaquin', 'bleu-vert pastel', 'une étoile filante jaune orangé'),
('Grosveinard', 'verte', 'un trèfle');