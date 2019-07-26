#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id        Int  Auto_increment  NOT NULL ,
        lastName  Varchar (200) NOT NULL ,
        firstName Varchar (200) NOT NULL ,
        mail      Varchar (200) NOT NULL ,
        gamerTag  Varchar (200) NOT NULL ,
        passWord  Varchar (200) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: eventRegistration
#------------------------------------------------------------

CREATE TABLE eventRegistration(
        id Int  Auto_increment  NOT NULL
	,CONSTRAINT eventRegistration_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Event
#------------------------------------------------------------

CREATE TABLE Event(
        id                   Int  Auto_increment  NOT NULL ,
        nameOfEvent          Varchar (200) NOT NULL ,
        eventMode            Varchar (200) NOT NULL ,
        entrance             Varchar (200) NOT NULL ,
        format               Varchar (200) NOT NULL ,
        round                Varchar (200) NOT NULL ,
        numberOfParticipants Int NOT NULL ,
        cashPrize            TinyINT NOT NULL ,
        amountOfCashPrize    Int NOT NULL ,
        nameOfTheOrganizer   Varchar (200) NOT NULL ,
        mailOfTheOrganizer   Varchar (200) NOT NULL ,
        eventDate            Datetime NOT NULL ,
        detailOfEvent        Varchar (200) NOT NULL ,
        verification         TinyINT NOT NULL ,
        id_eventRegistration Int NOT NULL
	,CONSTRAINT Event_PK PRIMARY KEY (id)

	,CONSTRAINT Event_eventRegistration_FK FOREIGN KEY (id_eventRegistration) REFERENCES eventRegistration(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: userRole
#------------------------------------------------------------

CREATE TABLE userRole(
        id       Int  Auto_increment  NOT NULL ,
        role     Varchar (10) NOT NULL ,
        id_users Int NOT NULL
	,CONSTRAINT userRole_PK PRIMARY KEY (id)

	,CONSTRAINT userRole_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: create
#------------------------------------------------------------

CREATE TABLE create(
        id       Int NOT NULL ,
        id_Event Int NOT NULL
	,CONSTRAINT create_PK PRIMARY KEY (id,id_Event)

	,CONSTRAINT create_users_FK FOREIGN KEY (id) REFERENCES users(id)
	,CONSTRAINT create_Event0_FK FOREIGN KEY (id_Event) REFERENCES Event(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: register
#------------------------------------------------------------

CREATE TABLE register(
        id       Int NOT NULL ,
        id_users Int NOT NULL
	,CONSTRAINT register_PK PRIMARY KEY (id,id_users)

	,CONSTRAINT register_eventRegistration_FK FOREIGN KEY (id) REFERENCES eventRegistration(id)
	,CONSTRAINT register_users0_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;

