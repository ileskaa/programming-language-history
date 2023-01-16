DROP TABLE IF EXISTS prog_langs;
CREATE TABLE IF NOT EXISTS prog_langs (
    lang_id SERIAL PRIMARY KEY,
    language VARCHAR(20) UNIQUE NOT NULL,
    release_year INTEGER,
    type_system VARCHAR(20),
    description TEXT
);

INSERT INTO prog_langs VALUES (DEFAULT, 'Fortran',1957,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Lisp',1958,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'COBOL',1959,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'BASIC',1964,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Algol 68',1968,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Pascal',1970,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Smalltalk',1972,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'C',1972,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'C++',1983,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Objective-C',1984, 'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Perl',1988,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'Haskell',1990,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Python',1991,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'Lua', 1993,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'PHP',1995,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'Java',1995,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Javascript',1995,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'Ruby',1995,'Dynamic');
INSERT INTO prog_langs VALUES (DEFAULT, 'C#', 2000,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Scala',2004,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Go',2009,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Rust', 2010,'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Kotlin', 2011, 'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Dart', 2011, 'Static');
INSERT INTO prog_langs VALUES (DEFAULT, 'Swift',2014,'Static');

/* Add descriptions */
/* UPDATE prog_langs SET description = 'blabla' WHERE language = 'Fortran'; */