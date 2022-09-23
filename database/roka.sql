CREATE TABLE `fallecido`(
    `iddfunto` int(11) NOT NULL,
    `name1` varchar(110) NOT NULL,
    `name2` varchar(110) NOT NULL,
    `ap1`   varchar(110) NOT NULL,
    `ap2` varchar(110) NOT NULL,
    `fchnc` date NOT NULL COMMENT 'fecha nacimiento',
    `age` int(11) NOT NULL ,
    `ci` int(11) NOT NULL ,
    `estdcivil` varchar (110) COMMENT 'estado civil',
    `drccion` int(11) NOT NULL,
    `lgrnc` varchar(110)  NOT NULL COMMENT 'fecha nacimiento',
    `lgrfll` varchar(110) NOT NULL COMMENT 'fecha de fallecimiento',
    `fchdfun` date  NOT NULL COMMENT 'fecha defuncion ',
    `numfun` int(11) NOT NULL COMMENT 'numero defuncion ',
    `hijos` varchar(5) NOT NULL,
    `numhijos` int(11) NOT NULL,
    `tpmuerte` varchar(110) NOT NULL COMMENT 'tipo de muerte ',
    `csomuerte` varchar(110) NOT NULL COMMENT'caso de muerte',
    `protesis` varchar(5) NOT NULL COMMENT'protesis o implante',
    `observaciones` varchar(200) NOT NULL COMMENT 'observacion en caso de tener protesis'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `fallecido`
        ADD PRIMARY KEY (`iddfunto`);
    ALTER TABLE `fallecido`
        MODIFY `iddfunto` int(11) NOT NULL AUTO_INCREMENT;