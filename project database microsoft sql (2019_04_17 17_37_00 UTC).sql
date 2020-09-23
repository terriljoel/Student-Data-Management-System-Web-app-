create database project;
use project;

create table login(
login     int,
password  varchar(50),
primary key(login,password)
);

select * from login;
create table student
( 
 usn        varchar(50) not null,
 name       varchar(50)not null,
 age        int not null,
 section    varchar(50) not null,
 sex        varchar(50) not null,
 department varchar(50) not null,
 birthdate  varchar(50) not null,
 sem        varchar(50) not null,
 primary key(usn));

 select * from student;

 create table course(
 course_no    int,
 course_name  varchar(50),
 primary key(course_no));

select * from course;

create table enroll(
usn          varchar(50),
course_no    int,
course_name  varchar(50),
primary key(usn),
foreign key(usn) references student(usn) on delete cascade on update cascade,
foreign key(course_no) references course(course_no) on delete cascade on update cascade);


select * from enroll;

create table admission(
usn                 varchar(50),
admission_date      varchar(50),
admission_through   varchar(50),
fee                 float,
primary key(usn)
);

create table exam(
    usn    varchar(50) not null,
    marks  float default '0',
    primary key(usn),
    foreign key(usn) references student(usn) on delete cascade on update cascade);


insert into login values('1001','nmamit1');
insert into login values('1002','nmamit2');
insert into login values('1003','nmamit3');


insert into course values('1','Web development');
insert into course values('2','Android development');
insert into course values('3','Operating system');
insert into course values('4','Compliter design');
insert into course values('5','Data structures and algorithms');
insert into course values('6','Python');
insert into course values('7','Java');
insert into course values('8','Relational database management');
insert into course values('9','C programming');
insert into course values('10','Unix programming');
insert into course values('11','Mechanical vibrators');
insert into course values('12','Power plant engg');
insert into course values('13','Industrial robotics');
insert into course values('14','Mecatronics');
insert into course values('15','Controll engg');
insert into course values('16','Thermodynamics');
insert into course values('17','Automation');
insert into course values('18','Hydrolics');
insert into course values('19','Turbines');
insert into course values('20','Engines');
insert into course values('21','Electromagnetism');
insert into course values('22','Power engineering');
insert into course values('23','Electric vehicals');
insert into course values('24','Signal processing');
insert into course values('25','Power controll engg');
insert into course values('26','Instrumentation');
insert into course values('27','Transformers');
insert into course values('28','Semiconductor');
insert into course values('29','Amplifiers');
insert into course values('30','Generators');
insert into course values('31','Digital signals');
insert into course values('32','Semiconductor devices');
insert into course values('33','RF devices');
insert into course values('34','Diodes');
insert into course values('35','Analog engg');
insert into course values('36','Electromagnetic theory');
insert into course values('37','Control sysem');
insert into course values('38','Signal and system');
insert into course values('39','Network analysis');
insert into course values('40','CRO');