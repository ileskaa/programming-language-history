DROP TABLE IF EXISTS designed_by;
CREATE TABLE IF NOT EXISTS designed_by (
    language VARCHAR(20),
    designer VARCHAR(30)
);

INSERT INTO designed_by VALUES ('Fortran','John Backus');
INSERT INTO designed_by VALUES ('Lisp','John McCarthy');
INSERT INTO designed_by VALUES ('COBOL','Grace Hopper');