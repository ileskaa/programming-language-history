DROP TABLE IF EXISTS paradigm;
CREATE TABLE IF NOT EXISTS paradigm (
    language VARCHAR(20),
    paradigm VARCHAR(20)
);

INSERT INTO paradigm VALUES ('Fortran','Procedural');
INSERT INTO paradigm VALUES ('Fortran','Object-oriented');