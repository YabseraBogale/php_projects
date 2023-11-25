create table User(
    -- thinking of making it varchar with 15 charaters with 0-9a-zA-Z
    Id int not null,
    TypeOfUser varchar(10) not null,
    NumberOfCar int not null

);


create table location(

    DriverID
);

create table Driver(

    FirstName varchar(20) not null,
    LastName varchar(20) not null,
    UserId int not null,
    PlateNumberId varchar(10) not null 

);

create table PlateNumber(

    UserId int not null,
    PlateNumberId varchar(10) not null

);

create table PrivateOwner(
    
    Id int not null,
    TypeofCar text not null,
    -- thinking of limiting it
    NumberOfCar int not null,
    DriverId int not null

);

create table Company(

    Id int not null,
    TypeofCar text not null,
    -- thinking of limiting it
    NumberOfCar int not null,
    DriverId int not null,

);