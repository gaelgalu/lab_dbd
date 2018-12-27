--
-- drop tables
--

DROP TABLE IF EXISTS Roles CASCADE;
DROP TABLE IF EXISTS User_role CASCADE;
DROP TABLE IF EXISTS Users CASCADE;
DROP TABLE IF EXISTS activities CASCADE;
DROP TABLE IF EXISTS activity_providers CASCADE;
DROP TABLE IF EXISTS adresses CASCADE;
DROP TABLE IF EXISTS airplane_stretch CASCADE;
DROP TABLE IF EXISTS airplanes CASCADE;
DROP TABLE IF EXISTS airports CASCADE;
DROP TABLE IF EXISTS flight_airport CASCADE;
DROP TABLE IF EXISTS flight_stretch CASCADE;
DROP TABLE IF EXISTS flights CASCADE;
DROP TABLE IF EXISTS insurances CASCADE;
DROP TABLE IF EXISTS lodgings CASCADE;
DROP TABLE IF EXISTS package_activity CASCADE;
DROP TABLE IF EXISTS package_flight CASCADE;
DROP TABLE IF EXISTS package_room CASCADE;
DROP TABLE IF EXISTS package_transfer CASCADE;
DROP TABLE IF EXISTS package_vehicle CASCADE;
DROP TABLE IF EXISTS packages CASCADE;
DROP TABLE IF EXISTS payment_methods CASCADE;
DROP TABLE IF EXISTS reserve_activity CASCADE;
DROP TABLE IF EXISTS reserve_flight CASCADE;
DROP TABLE IF EXISTS reserve_package CASCADE;
DROP TABLE IF EXISTS reserve_room CASCADE;
DROP TABLE IF EXISTS reserve_transfer CASCADE;
DROP TABLE IF EXISTS reserve_vehicle CASCADE;
DROP TABLE IF EXISTS reserves CASCADE;
DROP TABLE IF EXISTS room_schedules CASCADE;
DROP TABLE IF EXISTS rooms CASCADE;
DROP TABLE IF EXISTS seats CASCADE;
DROP TABLE IF EXISTS stretches CASCADE;
DROP TABLE IF EXISTS transfer_providers CASCADE;
DROP TABLE IF EXISTS transfer_schedules CASCADE;
DROP TABLE IF EXISTS transfer_schedules_adresses CASCADE;
DROP TABLE IF EXISTS transfers CASCADE;
DROP TABLE IF EXISTS vehicle_schedules CASCADE;
DROP TABLE IF EXISTS vehicle_suppliers CASCADE;
DROP TABLE IF EXISTS vehicles CASCADE;

-- tables
-- Table: Roles
CREATE TABLE IF NOT EXISTS Roles (
    id int  NOT NULL,
    name varchar(15)  NOT NULL,
    description text  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT Roles_pk PRIMARY KEY (id)
);

-- Table: User_role
CREATE TABLE IF NOT EXISTS User_role (
    id int  NOT NULL,
    role_id int  NOT NULL,
    user_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,  
    CONSTRAINT User_role_pk PRIMARY KEY (id)
);

-- Table: Users
CREATE TABLE IF NOT EXISTS Users (
    id int  NOT NULL,
    country varchar(80)  NOT NULL,
    email varchar(80)  NOT NULL,
    password varchar(80)  NOT NULL,
    name varchar(80)  NOT NULL,
    lastName varchar(80)  NOT NULL,
    bornDate timestamp  NOT NULL,
    phone varchar(80)  NOT NULL,
    documentOriginCountry varchar(80)  NOT NULL,
    typeOfDocument varchar(80)  NOT NULL,
    numberOfDocument int  NOT NULL,
    points int  NOT NULL,
    money decimal(20,2)  NOT NULL,
    email_verified_at timestamp,
    remember_token varchar(255),
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT id PRIMARY KEY (id)
);

-- Table: activities
CREATE TABLE IF NOT EXISTS activities (
    id int  NOT NULL,
    adultPrice decimal(20,2)  NOT NULL,
    kidPrice decimal(20,2)  NOT NULL,
    startDate timestamp  NOT NULL,
    endDate timestamp  NOT NULL,
    name varchar(30)  NOT NULL,
    description text  NOT NULL,
    adultsCapacity int  NOT NULL,
    kidsCapacity int  NOT NULL,
    availability boolean  NOT NULL,
    activity_providers_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT activities_pk PRIMARY KEY (id)
);

-- Table: activity_providers
CREATE TABLE IF NOT EXISTS activity_providers (
    id int  NOT NULL,
    name varchar(80)  NOT NULL,
    email varchar(50)  NOT NULL,
    phone varchar(80)  NOT NULL,
    adresses_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT activity_providers_pk PRIMARY KEY (id)
);

-- Table: adresses
CREATE TABLE IF NOT EXISTS adresses (
    id int  NOT NULL,
    country varchar(80)  NOT NULL,
    city varchar(50)  NOT NULL,
    street varchar(80)  NOT NULL,
    number int NOT NULL,

    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT adresses_pk PRIMARY KEY (id)
);

-- Table: airplane_stretch
CREATE TABLE IF NOT EXISTS airplane_stretch (
    id int  NOT NULL,
    stretches_id int  NOT NULL,
    airplanes_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT airplane_stretch_pk PRIMARY KEY (id)
);

-- Table: airplanes
CREATE TABLE IF NOT EXISTS airplanes (
    id int  NOT NULL,
    name varchar(30)  NOT NULL,
    code varchar(10)  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT airplanes_pk PRIMARY KEY (id)
);

-- Table: airports
CREATE TABLE IF NOT EXISTS airports (
    id int  NOT NULL,
    name varchar(50)  NOT NULL,
    telephone varchar(20)  NOT NULL,
    mail varchar(50)  NOT NULL,
    adresses_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT airports_pk PRIMARY KEY (id)
);

-- Table: flight_airport
CREATE TABLE IF NOT EXISTS flight_airport (
    id int  NOT NULL,
    airports_id int  NOT NULL,
    flights_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT flight_airport_pk PRIMARY KEY (id)
);

-- Table: flight_stretch
CREATE TABLE IF NOT EXISTS flight_stretch (
    id int  NOT NULL,
    flights_id int  NOT NULL,
    stretches_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT flight_stretch_pk PRIMARY KEY (id)
);

-- Table: flights
CREATE TABLE IF NOT EXISTS flights (
    id int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    startDate timestamp  NOT NULL,
    endDate timestamp  NOT NULL,
    availability boolean  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT flights_pk PRIMARY KEY (id)
);

-- Table: insurances
CREATE TABLE IF NOT EXISTS insurances (
    id int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    description text  NOT NULL,
    availability boolean  NOT NULL,
    flight_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT insurances_pk PRIMARY KEY (id)
);

-- Table: lodgings
CREATE TABLE IF NOT EXISTS lodgings (
    id int  NOT NULL,
    name varchar(50)  NOT NULL,
    email varchar(50)  NOT NULL,
    phoneNumber varchar(80)  NOT NULL,
    evaluation smallint  NOT NULL,
    numberOfRooms smallint  NOT NULL,
    description text  NOT NULL,
    adresses_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT lodgings_pk PRIMARY KEY (id)
);

-- Table: package_activity
CREATE TABLE IF NOT EXISTS package_activity (
    id int  NOT NULL,
    packages_id int  NOT NULL,
    activities_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT package_activity_pk PRIMARY KEY (id)
);

-- Table: package_flight
CREATE TABLE IF NOT EXISTS package_flight (
    id int  NOT NULL,
    packages_id int  NOT NULL,
    flights_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT package_flight_pk PRIMARY KEY (id)
);

-- Table: package_room
CREATE TABLE IF NOT EXISTS package_room (
    id int  NOT NULL,
    rooms_id int  NOT NULL,
    packages_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT package_room_pk PRIMARY KEY (id)
);

-- Table: package_transfer
CREATE TABLE IF NOT EXISTS package_transfer (
    id int  NOT NULL,
    packages_id int  NOT NULL,
    transfers_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT package_transfer_pk PRIMARY KEY (id)
);

-- Table: package_vehicle
CREATE TABLE IF NOT EXISTS package_vehicle (
    id int  NOT NULL,
    packages_id int  NOT NULL,
    vehicles_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT package_vehicle_pk PRIMARY KEY (id)
);

-- Table: packages
CREATE TABLE IF NOT EXISTS packages (
    id int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    name varchar(50)  NOT NULL,
    discount decimal(20,2)  NOT NULL,
    description text  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT packages_pk PRIMARY KEY (id)
);

-- Table: payment_methods
CREATE TABLE IF NOT EXISTS payment_methods (
    id int  NOT NULL,
    bankAccountNumber varchar(40)  NOT NULL,
    typeOfAccount varchar(20)  NOT NULL,
    bank varchar(80)  NOT NULL,
    reserves_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT payment_methods_pk PRIMARY KEY (id)
);

-- Table: reserve_activity
CREATE TABLE IF NOT EXISTS reserve_activity (
    id int  NOT NULL,
    reserves_id int  NOT NULL,
    activities_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserve_activity_pk PRIMARY KEY (id)
);

-- Table: reserve_flight
CREATE TABLE IF NOT EXISTS reserve_flight (
    id int  NOT NULL,
    reserves_id int  NOT NULL,
    flight_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserve_flight_pk PRIMARY KEY (id)
);

-- Table: reserve_package
CREATE TABLE IF NOT EXISTS reserve_package (
    id int  NOT NULL,
    reserves_id int  NOT NULL,
    packages_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserve_package_pk PRIMARY KEY (id)
);

-- Table: reserve_room
CREATE TABLE IF NOT EXISTS reserve_room (
    id int  NOT NULL,
    reserves_id int  NOT NULL,
    rooms_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserve_room_pk PRIMARY KEY (id)
);

-- Table: reserve_transfer
CREATE TABLE IF NOT EXISTS reserve_transfer (
    id int  NOT NULL,
    reserves_id int  NOT NULL,
    transfers_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserve_transfer_pk PRIMARY KEY (id)
);

-- Table: reserve_vehicle
CREATE TABLE IF NOT EXISTS reserve_vehicle (
    id int  NOT NULL,
    reserves_id int  NOT NULL,
    vehicles_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserve_vehicle_pk PRIMARY KEY (id)
);

-- Table: reserves
CREATE TABLE IF NOT EXISTS reserves (
    id int  NOT NULL,
    date timestamp  NOT NULL,
    product varchar(50)  NOT NULL,
    amount int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    users_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT reserves_pk PRIMARY KEY (id)
);

-- Table: room_schedules
CREATE TABLE IF NOT EXISTS room_schedules (
    id int  NOT NULL,
    startDate timestamp  NOT NULL,
    endDate timestamp  NOT NULL,
    rooms_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT room_schedules_pk PRIMARY KEY (id)
);

-- Table: rooms
CREATE TABLE IF NOT EXISTS rooms (
    id int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    doorNumber int  NOT NULL,
    kidsCapacity int  NOT NULL,
    adultsCapacity int  NOT NULL,
    type int  NOT NULL,
    description text  NOT NULL,
    availability boolean  NOT NULL,
    lodgings_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT rooms_pk PRIMARY KEY (id)
);

-- Table: seats
CREATE TABLE IF NOT EXISTS seats (
    id int  NOT NULL,
    seatNumber int  NOT NULL,
    availability boolean  NOT NULL,
    checkIn boolean  NOT NULL,
    type varchar(20)  NOT NULL,
    airplanes_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT seats_pk PRIMARY KEY (id)
);

-- Table: stretches
CREATE TABLE IF NOT EXISTS stretches (
    id int  NOT NULL,
    origin varchar(60)  NOT NULL,
    destiny varchar(60)  NOT NULL,
    airline varchar(60)  NOT NULL,
    platform int  NOT NULL,
    risetime timestamp NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT stretches_pk PRIMARY KEY (id)
);

-- Table: transfer_providers
CREATE TABLE IF NOT EXISTS transfer_providers (
    id int  NOT NULL,
    name varchar(60)  NOT NULL,
    telephone varchar(80)  NOT NULL,
    mail varchar(50)  NOT NULL,
    adresses_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT transfer_providers_pk PRIMARY KEY (id)
);

-- Table: transfer_schedules
CREATE TABLE IF NOT EXISTS transfer_schedules (
    id int  NOT NULL,
    startDate timestamp  NOT NULL,
    endDate timestamp  NOT NULL,
    transfers_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT transfer_schedules_pk PRIMARY KEY (id)
);

-- Table: transfer_schedules_adresses
CREATE TABLE IF NOT EXISTS transfer_schedules_adresses (
    id int  NOT NULL,
    type boolean  NOT NULL,
    transfer_schedules_id int  NOT NULL,
    adresses_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT transfer_schedules_adresses_pk PRIMARY KEY (id)
);

-- Table: transfers
CREATE TABLE IF NOT EXISTS transfers (
    id int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    capacity int  NOT NULL,
    description text  NOT NULL,
    brand varchar(30)  NOT NULL,
    model varchar(30)  NOT NULL,
    type int  NOT NULL,
    availability boolean  NOT NULL,
    transfer_providers_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT transfers_pk PRIMARY KEY (id)
);

-- Table: vehicle_schedules
CREATE TABLE IF NOT EXISTS vehicle_schedules (
    id int  NOT NULL,
    startDate timestamp  NOT NULL,
    endDate timestamp  NOT NULL,
    vehicles_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT vehicle_schedules_pk PRIMARY KEY (id)
);

-- Table: vehicle_suppliers
CREATE TABLE IF NOT EXISTS vehicle_suppliers (
    id int  NOT NULL,
    name varchar(80)  NOT NULL,
    email varchar(50)  NOT NULL,
    phoneNumber varchar(80)  NOT NULL,
    adresses_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT vehicle_suppliers_pk PRIMARY KEY (id)
);

-- Table: vehicles
CREATE TABLE IF NOT EXISTS vehicles (
    id int  NOT NULL,
    price decimal(20,2)  NOT NULL,
    availability boolean  NOT NULL,
    date timestamp  NOT NULL,
    capacity smallint  NOT NULL,
    patent varchar(10)  NOT NULL,
    brand varchar(25)  NOT NULL,
    model varchar(25)  NOT NULL,
    description text  NOT NULL,
    vehicle_suppliers_id int  NOT NULL,
    created_at timestamp,
    updated_at timestamp,
    CONSTRAINT vehicles_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Reserves_Users (table: reserves)
ALTER TABLE reserves ADD CONSTRAINT Reserves_Users
    FOREIGN KEY (users_id)
    REFERENCES Users (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: User_role_Roles (table: User_role)
ALTER TABLE User_role ADD CONSTRAINT User_role_Roles
    FOREIGN KEY (role_id)
    REFERENCES Roles (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: User_role_Users (table: User_role)
ALTER TABLE User_role ADD CONSTRAINT User_role_Users
    FOREIGN KEY (user_id)
    REFERENCES Users (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: activities_activity_providers (table: activities)
ALTER TABLE activities ADD CONSTRAINT activities_activity_providers
    FOREIGN KEY (activity_providers_id)
    REFERENCES activity_providers (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: activity_providers_adresses (table: activity_providers)
ALTER TABLE activity_providers ADD CONSTRAINT activity_providers_adresses
    FOREIGN KEY (adresses_id)
    REFERENCES adresses (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: airplane_stretch_airplanes (table: airplane_stretch)
ALTER TABLE airplane_stretch ADD CONSTRAINT airplane_stretch_airplanes
    FOREIGN KEY (airplanes_id)
    REFERENCES airplanes (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: airplane_stretch_stretches (table: airplane_stretch)
ALTER TABLE airplane_stretch ADD CONSTRAINT airplane_stretch_stretches
    FOREIGN KEY (stretches_id)
    REFERENCES stretches (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: airports_adresses (table: airports)
ALTER TABLE airports ADD CONSTRAINT airports_adresses
    FOREIGN KEY (adresses_id)
    REFERENCES adresses (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: flight_airport_airports (table: flight_airport)
ALTER TABLE flight_airport ADD CONSTRAINT flight_airport_airports
    FOREIGN KEY (airports_id)
    REFERENCES airports (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: flight_airport_flights (table: flight_airport)
ALTER TABLE flight_airport ADD CONSTRAINT flight_airport_flights
    FOREIGN KEY (flights_id)
    REFERENCES flights (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: flight_stretch_flights (table: flight_stretch)
ALTER TABLE flight_stretch ADD CONSTRAINT flight_stretch_flights
    FOREIGN KEY (flights_id)
    REFERENCES flights (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: flight_stretch_stretches (table: flight_stretch)
ALTER TABLE flight_stretch ADD CONSTRAINT flight_stretch_stretches
    FOREIGN KEY (stretches_id)
    REFERENCES stretches (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: insurances_flights (table: insurances)
ALTER TABLE insurances ADD CONSTRAINT insurances_flights
    FOREIGN KEY (flight_id)
    REFERENCES flights (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: lodgings_adresses (table: lodgings)
ALTER TABLE lodgings ADD CONSTRAINT lodgings_adresses
    FOREIGN KEY (adresses_id)
    REFERENCES adresses (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_activity_activities (table: package_activity)
ALTER TABLE package_activity ADD CONSTRAINT package_activity_activities
    FOREIGN KEY (activities_id)
    REFERENCES activities (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_activity_packages (table: package_activity)
ALTER TABLE package_activity ADD CONSTRAINT package_activity_packages
    FOREIGN KEY (packages_id)
    REFERENCES packages (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_flight_flights (table: package_flight)
ALTER TABLE package_flight ADD CONSTRAINT package_flight_flights
    FOREIGN KEY (flights_id)
    REFERENCES flights (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_flight_packages (table: package_flight)
ALTER TABLE package_flight ADD CONSTRAINT package_flight_packages
    FOREIGN KEY (packages_id)
    REFERENCES packages (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_room_packages (table: package_room)
ALTER TABLE package_room ADD CONSTRAINT package_room_packages
    FOREIGN KEY (packages_id)
    REFERENCES packages (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_room_rooms (table: package_room)
ALTER TABLE package_room ADD CONSTRAINT package_room_rooms
    FOREIGN KEY (rooms_id)
    REFERENCES rooms (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_transfer_packages (table: package_transfer)
ALTER TABLE package_transfer ADD CONSTRAINT package_transfer_packages
    FOREIGN KEY (packages_id)
    REFERENCES packages (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_transfer_transfers (table: package_transfer)
ALTER TABLE package_transfer ADD CONSTRAINT package_transfer_transfers
    FOREIGN KEY (transfers_id)
    REFERENCES transfers (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_vehicle_packages (table: package_vehicle)
ALTER TABLE package_vehicle ADD CONSTRAINT package_vehicle_packages
    FOREIGN KEY (packages_id)
    REFERENCES packages (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: package_vehicle_vehicles (table: package_vehicle)
ALTER TABLE package_vehicle ADD CONSTRAINT package_vehicle_vehicles
    FOREIGN KEY (vehicles_id)
    REFERENCES vehicles (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: payment_methods_Reserves (table: payment_methods)
ALTER TABLE payment_methods ADD CONSTRAINT payment_methods_Reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_activity_Reserves (table: reserve_activity)
ALTER TABLE reserve_activity ADD CONSTRAINT reserve_activity_Reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_activity_activities (table: reserve_activity)
ALTER TABLE reserve_activity ADD CONSTRAINT reserve_activity_activities
    FOREIGN KEY (activities_id)
    REFERENCES activities (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_flight_Reserves (table: reserve_flight)
ALTER TABLE reserve_flight ADD CONSTRAINT reserve_flight_Reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_flight_flights (table: reserve_flight)
ALTER TABLE reserve_flight ADD CONSTRAINT reserve_flight_flights
    FOREIGN KEY (flight_id)
    REFERENCES flights (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_package_packages (table: reserve_package)
ALTER TABLE reserve_package ADD CONSTRAINT reserve_package_packages
    FOREIGN KEY (packages_id)
    REFERENCES packages (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_package_reserves (table: reserve_package)
ALTER TABLE reserve_package ADD CONSTRAINT reserve_package_reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_room_Reserves (table: reserve_room)
ALTER TABLE reserve_room ADD CONSTRAINT reserve_room_Reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_room_rooms (table: reserve_room)
ALTER TABLE reserve_room ADD CONSTRAINT reserve_room_rooms
    FOREIGN KEY (rooms_id)
    REFERENCES rooms (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_transfer_Reserves (table: reserve_transfer)
ALTER TABLE reserve_transfer ADD CONSTRAINT reserve_transfer_Reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_transfer_transfers (table: reserve_transfer)
ALTER TABLE reserve_transfer ADD CONSTRAINT reserve_transfer_transfers
    FOREIGN KEY (transfers_id)
    REFERENCES transfers (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_vehicle_Reserves (table: reserve_vehicle)
ALTER TABLE reserve_vehicle ADD CONSTRAINT reserve_vehicle_Reserves
    FOREIGN KEY (reserves_id)
    REFERENCES reserves (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: reserve_vehicle_vehicles (table: reserve_vehicle)
ALTER TABLE reserve_vehicle ADD CONSTRAINT reserve_vehicle_vehicles
    FOREIGN KEY (vehicles_id)
    REFERENCES vehicles (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: room_schedules_rooms (table: room_schedules)
ALTER TABLE room_schedules ADD CONSTRAINT room_schedules_rooms
    FOREIGN KEY (rooms_id)
    REFERENCES rooms (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: rooms_lodgings (table: rooms)
ALTER TABLE rooms ADD CONSTRAINT rooms_lodgings
    FOREIGN KEY (lodgings_id)
    REFERENCES lodgings (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: seats_airplanes (table: seats)
ALTER TABLE seats ADD CONSTRAINT seats_airplanes
    FOREIGN KEY (airplanes_id)
    REFERENCES airplanes (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: transfer_providers_adresses (table: transfer_providers)
ALTER TABLE transfer_providers ADD CONSTRAINT transfer_providers_adresses
    FOREIGN KEY (adresses_id)
    REFERENCES adresses (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: transfer_schedules_adresses_adresses (table: transfer_schedules_adresses)
ALTER TABLE transfer_schedules_adresses ADD CONSTRAINT transfer_schedules_adresses_adresses
    FOREIGN KEY (adresses_id)
    REFERENCES adresses (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: transfer_schedules_adresses_transfer_schedules (table: transfer_schedules_adresses)
ALTER TABLE transfer_schedules_adresses ADD CONSTRAINT transfer_schedules_adresses_transfer_schedules
    FOREIGN KEY (transfer_schedules_id)
    REFERENCES transfer_schedules (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: transfer_schedules_transfers (table: transfer_schedules)
ALTER TABLE transfer_schedules ADD CONSTRAINT transfer_schedules_transfers
    FOREIGN KEY (transfers_id)
    REFERENCES transfers (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: transfers_transfer_providers (table: transfers)
ALTER TABLE transfers ADD CONSTRAINT transfers_transfer_providers
    FOREIGN KEY (transfer_providers_id)
    REFERENCES transfer_providers (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: vehicle_schedules_vehicles (table: vehicle_schedules)
ALTER TABLE vehicle_schedules ADD CONSTRAINT vehicle_schedules_vehicles
    FOREIGN KEY (vehicles_id)
    REFERENCES vehicles (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: vehicle_suppliers_adresses (table: vehicle_suppliers)
ALTER TABLE vehicle_suppliers ADD CONSTRAINT vehicle_suppliers_adresses
    FOREIGN KEY (adresses_id)
    REFERENCES adresses (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: vehicles_vehicle_suppliers (table: vehicles)
ALTER TABLE vehicles ADD CONSTRAINT vehicles_vehicle_suppliers
    FOREIGN KEY (vehicle_suppliers_id)
    REFERENCES vehicle_suppliers (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

