
create table admin(
          login_ID varchar(20),
          password varchar(50),
          primary key(login_id)
		   );
create table officer_login(
            case_id varchar(20),
            officer_ID varchar (20),
            password varchar(50),
            primary key(case_id));
create table Cases(
             Case_id  varchar(20),
             Case_name  varchar(20),
             officer_id varchar (20),
             Oname  varchar(50),
             note varchar(500),
             primary key(case_id));
             
create table Officer(
           Oname  varchar(50),
           address varchar(50),
           contact_no  int ,
           Officer_Id varchar(20),
           Area varchar(50),
           Image_link  varchar(100),
           Email_ID varchar(50),
           primary key(officer_id));
          
create table suspects (
			 Case_ID    varchar(20),
            SName		varchar(20)		not null,
            BDate		date			not null,
            Relation    varchar(50),
            mobile_no   int,
            Ranks   int,
            Address		varchar(50)		        ,
            Sex			char(1)			not null,
		    check (Sex = 'M' OR Sex = 'F'),
            image_link varchar(100),
            Note varchar(500));
 create table Evidence(
           Case_id varchar(15),
           officer_id  varchar(10),
           suspect  varchar(20),
          evidence  varchar(30),
           type  varchar(20),
           points  int,
           date date   not null,
           Note varchar(100));
create table History(
          Case_id varchar(20),
          history varchar(500),
          date date ,
          officer_id varchar(20));

insert into admin values
("AHAR1001","1001"),
("ANSH812","812");

INSERT INTO officer_login values
("1001","0AKS1","1001"),
("212","1ANS1","212"),
("5004","50SK","5004"),
("8111","TMN2","8111");

insert into Cases values
("1001","Talwar Family","0AKS1","Jack","A dead body  of a young girl has been found at her home"),
("212","SBI Robbery","1ANS1","Rick","four men robbed SBI bank and scene has been caught in CCTV"),
("5004","Scam 1992","50SK","Andy","5000 Crores scam in stock market has beeen reported"),
("8111","PVR Murder","TMN2","Levi","After the movie a dead body has been found siting at a seat");

insert into officer values
("Jack","C-42,Ring Road","0102422","0AKS1","Gouregaon",Null,"Jack01@gmial.com"),
("Rick","M-20,B/7 Delhi","421024","1ANS1","New Delhi",Null,"Rick11@hotmail.com"),
("Andy","A-10,40 feet Road Delhi","102400","50SK","Pitampura",null,"Andy50@gmail.com"),
("Levi","L-44,Battlefield Japan","84591","TMN2","shiganchina",null,"Levi2@hotmail.com");



insert into suspects values
("1001","Veer kaushik","1998-02-10","Housekeeper","98765","8","A-64,power house","M",null,"Veer is missing at the time of murder"),
("1001","John Snow","2000-10-10","Security guard","54321","4","M-82,near DLF mall","M",null,"He said he is sleeping while CCTV recording has been destroyed"),
("212","Ashish Gupta","1990-12-05","Security guard","22100","5","C-18 NEW MALL","M",null,"His face has been similar to one of the four robber as told by a person"),
("212","Millie brown","2004-05-02","Employee","58432","14","Z-01 society apartment","F",null,"She has a decent motto of taking revenge from bank"),
("5004","Paul heyman","1980-10-01","Stock marcket invester","60812","7","B-001 ABZ market","M",null,"He recently got into Stock market and recieve huge amount of profit"),
("5004","Payal aggarwal","2001-11-08","Market member","11111","10","E-71 climax cinema","F",null,"She had a huge loss due to gambling and stock market"),
("8111","Ranjeet Rome","2000-12-08","Friend","71182","2","G-101 duplex road","M",null,"He had a knife with no  blood on it"),
("8111","Zee Patrick","2001-01-03","Rceptionist","98921","12","H-007 bond mansion","F",null,"She discovered body first but did not call  police");

insert into Evidence values
("1001","0AKS1","Veer kaushik","Affair","Logical","8","2016-10-02","Got information from family"),
("1001","0AKS1","John Snow","Knife","Physical","4","2016-11-01","Got from his house"),
("212","1ANS1","Ashish Gupta","Gun","Physical","5","2015-12-12","Got from his cabin"),
("212","1ANS1","Millie brown","Revenge form bank","Logical","14","2015-12-10","Bank fired her"),
("5004","50SK","Paul Heyman","Got huge profit","Logical","7","2018-01-03","Even when he is new comer,not have estimate either"),
("5004","50SK","Payal aggarwal","Loan of 1000 crores","Logical","10","2018-05-05","Loan suddenly paid"),
("8111","TMN2","Ranjeet Rome","Knife","Physical","2","2019-06-06","Got from his pocket"),
("8111","TMN2","Zee Patrick","Hairs of dead body","Physical","12","2019-07-02","Got from her nails");

insert into History values
("1001","New suspect added-Veer","2016-10-02","0AKS1"),
("212","New evidence added-Gun","2015-01-03","1ANS1"),
("5004","New evidence added-Profit","2018-01-03","50SK"),
("8111","New suspect added-Zee","2019-07-02","TMN02");






          
          