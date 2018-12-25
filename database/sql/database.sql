-- convert Laravel migrations to raw SQL scripts --

-- migration:2014_10_12_000000_create_users_table --
create table "users" (
  "id" serial primary key not null, 
  "country" varchar(255) not null, 
  "email" varchar(255) not null, 
  "email_verified_at" timestamp(0) without time zone null, 
  "password" varchar(255) not null, 
  "name" varchar(255) not null, 
  "lastName" varchar(255) not null, 
  "bornDate" timestamp(0) without time zone not null, 
  "phone" varchar(255) not null, 
  "documentOriginCountry" varchar(255) not null, 
  "typeOfDocument" varchar(255) not null, 
  "numberOfDocument" integer not null, 
  "points" integer not null, 
  "money" decimal(20, 2) not null, 
  "remember_token" varchar(100) null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "users" 
add 
  constraint "users_email_unique" unique ("email");

-- migration:2014_10_12_100000_create_password_resets_table --
create table "password_resets" (
  "email" varchar(255) not null, 
  "token" varchar(255) not null, 
  "created_at" timestamp(0) without time zone null
);
create index "password_resets_email_index" on "password_resets" ("email");

-- migration:2017_11_26_213231_create_adresses_table --
create table "adresses" (
  "id" serial primary key not null, 
  "country" varchar(80) not null, 
  "city" varchar(80) not null, 
  "street" varchar(25) not null, 
  "number" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);

-- migration:2017_11_27_214505_create_transfer_providers_table --
create table "transfer_providers" (
  "id" serial primary key not null, 
  "name" varchar(255) not null, 
  "telephone" varchar(255) not null, 
  "mail" varchar(50) not null, 
  "adresses_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "transfer_providers" 
add 
  constraint "transfer_providers_adresses_id_foreign" foreign key ("adresses_id") references "adresses" ("id") on delete cascade;

-- migration:2017_11_29_213654_create_vehicle_suppliers_table --
create table "vehicle_suppliers" (
  "id" serial primary key not null, 
  "name" varchar(255) not null, 
  "email" varchar(50) not null, 
  "phoneNumber" varchar(255) not null, 
  "adresses_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "vehicle_suppliers" 
add 
  constraint "vehicle_suppliers_adresses_id_foreign" foreign key ("adresses_id") references "adresses" ("id") on delete cascade;

-- migration:2017_11_30_213708_create_vehicles_table --
create table "vehicles" (
  "id" serial primary key not null, 
  "price" decimal(20, 2) not null, 
  "date" timestamp(0) without time zone not null, 
  "availability" boolean not null, 
  "capacity" smallint not null, 
  "patent" varchar(10) not null, 
  "brand" varchar(25) not null, 
  "model" varchar(25) not null, 
  "description" text not null, 
  "vehicle_suppliers_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "vehicles" 
add 
  constraint "vehicles_vehicle_suppliers_id_foreign" foreign key ("vehicle_suppliers_id") references "vehicle_suppliers" ("id") on delete cascade;

-- migration:2018_11_28_213321_create_vehicle_schedules_table --
create table "vehicle_schedules" (
  "id" serial primary key not null, 
  "startDate" timestamp(0) without time zone not null, 
  "endDate" timestamp(0) without time zone not null, 
  "vehicle_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "vehicle_schedules" 
add 
  constraint "vehicle_schedules_vehicle_id_foreign" foreign key ("vehicle_id") references "vehicles" ("id") on delete cascade;

-- migration:2018_11_28_213402_create_roles_table --
create table "roles" (
  "id" serial primary key not null, 
  "name" varchar(15) not null, 
  "description" text not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);

-- migration:2018_11_28_213507_create_airports_table --
create table "airports" (
  "id" serial primary key not null, 
  "name" varchar(50) not null, 
  "telephone" varchar(255) not null, 
  "mail" varchar(50) not null, 
  "adress_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "airports" 
add 
  constraint "airports_adress_id_foreign" foreign key ("adress_id") references "adresses" ("id") on delete cascade;

-- migration:2018_11_28_214151_create_flights_table --
create table "flights" (
  "id" serial primary key not null, 
  "price" decimal(20, 2) not null, 
  "startDate" timestamp(0) without time zone not null, 
  "endDate" timestamp(0) without time zone not null, 
  "availability" boolean not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);

-- migration:2018_11_28_214208_create_stretches_table --
create table "stretches" (
  "id" serial primary key not null, 
  "origin" varchar(60) not null, 
  "destiny" varchar(60) not null, 
  "airline" varchar(255) not null, 
  "platform" integer not null, 
  "riseTime" timestamp(0) without time zone not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);

-- migration:2018_11_28_214237_create_activity_providers_table --
create table "activity_providers" (
  "id" serial primary key not null, 
  "name" varchar(255) not null, 
  "email" varchar(50) not null, 
  "phone" varchar(255) not null, 
  "adresses_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "activity_providers" 
add 
  constraint "activity_providers_adresses_id_foreign" foreign key ("adresses_id") references "adresses" ("id") on delete cascade;

-- migration:2018_11_28_214250_create_activities_table --
create table "activities" (
  "id" serial primary key not null, 
  "adultPrice" decimal(20, 2) not null, 
  "kidPrice" decimal(20, 2) not null, 
  "startDate" timestamp(0) without time zone not null, 
  "endDate" timestamp(0) without time zone not null, 
  "name" varchar(30) not null, 
  "description" text not null, 
  "adultsCapacity" integer not null, 
  "kidsCapacity" integer not null, 
  "availability" boolean not null, 
  "activity_providers_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "activities" 
add 
  constraint "activities_activity_providers_id_foreign" foreign key ("activity_providers_id") references "activity_providers" ("id") on delete cascade;

-- migration:2018_11_28_214259_create_reserves_table --
create table "reserves" (
  "id" serial primary key not null, 
  "date" timestamp(0) without time zone not null, 
  "product" varchar(50) not null, 
  "amount" integer not null, 
  "price" decimal(20, 2) not null, 
  "user_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "reserves" 
add 
  constraint "reserves_user_id_foreign" foreign key ("user_id") references "users" ("id") on delete cascade;

-- migration:2018_11_28_214314_create_insurances_table --
create table "insurances" (
  "id" serial primary key not null, 
  "price" decimal(20, 2) not null, 
  "description" text not null, 
  "availability" boolean not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "flight_id" integer not null
);
alter table 
  "insurances" 
add 
  constraint "insurances_flight_id_foreign" foreign key ("flight_id") references "flights" ("id") on delete cascade;

-- migration:2018_11_28_214325_create_airplanes_table --
create table "airplanes" (
  "id" serial primary key not null, 
  "name" varchar(30) not null, 
  "code" varchar(10) not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);

-- migration:2018_11_28_214356_create_lodgings_table --
create table "lodgings" (
  "id" serial primary key not null, 
  "name" varchar(50) not null, 
  "email" varchar(50) not null, 
  "phoneNumber" varchar(255) not null, 
  "evaluation" smallint not null, 
  "numberOfRooms" smallint not null, 
  "description" text not null, 
  "adresses_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "lodgings" 
add 
  constraint "lodgings_adresses_id_foreign" foreign key ("adresses_id") references "adresses" ("id") on delete cascade;

-- migration:2018_11_28_214405_create_rooms_table --
create table "rooms" (
  "id" serial primary key not null, 
  "price" decimal(20, 2) not null, 
  "doorNumber" integer not null, 
  "kidsCapacity" integer not null, 
  "adultsCapacity" integer not null, 
  "type" integer not null, 
  "description" text not null, 
  "availability" boolean not null, 
  "lodgings_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "rooms" 
add 
  constraint "rooms_lodgings_id_foreign" foreign key ("lodgings_id") references "lodgings" ("id") on delete cascade;

-- migration:2018_11_28_214417_create_packages_table --
create table "packages" (
  "id" serial primary key not null, 
  "price" decimal(20, 2) not null, 
  "name" varchar(50) not null, 
  "discount" decimal(20, 2) not null, 
  "description" text not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);

-- migration:2018_11_28_214439_create_transfers_table --
create table "transfers" (
  "id" serial primary key not null, 
  "price" double precision not null, 
  "capacity" integer not null, 
  "description" text not null, 
  "brand" varchar(30) not null, 
  "model" varchar(30) not null, 
  "type" integer not null, 
  "availability" boolean not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "transferProvider_id" integer not null
);
alter table 
  "transfers" 
add 
  constraint "transfers_transferprovider_id_foreign" foreign key ("transferProvider_id") references "transfer_providers" ("id") on delete cascade;

-- migration:2018_11_28_214514_create_seats_table --
create table "seats" (
  "id" serial primary key not null, 
  "seatNumber" integer not null, 
  "availability" boolean not null, 
  "checkIn" boolean not null, 
  "type" varchar(255) not null, 
  "airplane_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "seats" 
add 
  constraint "seats_airplane_id_foreign" foreign key ("airplane_id") references "airplanes" ("id") on delete cascade;

-- migration:2018_11_28_214535_create_room_schedules_table --
create table "room_schedules" (
  "id" serial primary key not null, 
  "startDate" timestamp(0) without time zone not null, 
  "endDate" timestamp(0) without time zone not null, 
  "room_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "room_schedules" 
add 
  constraint "room_schedules_room_id_foreign" foreign key ("room_id") references "rooms" ("id") on delete cascade;

-- migration:2018_11_28_214554_create_transfer_schedules_table --
create table "transfer_schedules" (
  "id" serial primary key not null, 
  "startDate" timestamp(0) without time zone not null, 
  "endDate" timestamp(0) without time zone not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "transfer_id" integer not null
);
alter table 
  "transfer_schedules" 
add 
  constraint "transfer_schedules_transfer_id_foreign" foreign key ("transfer_id") references "transfers" ("id") on delete cascade;

-- migration:2018_11_29_004917_create_payment_methods_table --
create table "payment_methods" (
  "id" serial primary key not null, 
  "bankAccountNumber" varchar(255) not null, 
  "typeOfAccount" varchar(255) not null, 
  "bank" varchar(255) not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "reserve_id" integer not null
);
alter table 
  "payment_methods" 
add 
  constraint "payment_methods_reserve_id_foreign" foreign key ("reserve_id") references "reserves" ("id") on delete cascade;
alter table 
  "payment_methods" 
add 
  constraint "payment_methods_bankaccountnumber_unique" unique ("bankAccountNumber");

-- migration:2018_11_29_011941_create_airport_flight_table --
create table "airport_flight" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "flight_id" integer not null, 
  "airport_id" integer not null
);
alter table 
  "airport_flight" 
add 
  constraint "airport_flight_flight_id_foreign" foreign key ("flight_id") references "flights" ("id") on delete cascade;
alter table 
  "airport_flight" 
add 
  constraint "airport_flight_airport_id_foreign" foreign key ("airport_id") references "airports" ("id") on delete cascade;

-- migration:2018_11_29_012434_create_flight_stretch_table --
create table "flight_stretch" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "flight_id" integer not null, 
  "stretch_id" integer not null
);
alter table 
  "flight_stretch" 
add 
  constraint "flight_stretch_flight_id_foreign" foreign key ("flight_id") references "flights" ("id") on delete cascade;
alter table 
  "flight_stretch" 
add 
  constraint "flight_stretch_stretch_id_foreign" foreign key ("stretch_id") references "stretches" ("id") on delete cascade;

-- migration:2018_11_29_012517_create_flight_reserve_table --
create table "flight_reserve" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "flight_id" integer not null, 
  "reserve_id" integer not null
);
alter table 
  "flight_reserve" 
add 
  constraint "flight_reserve_flight_id_foreign" foreign key ("flight_id") references "flights" ("id") on delete cascade;
alter table 
  "flight_reserve" 
add 
  constraint "flight_reserve_reserve_id_foreign" foreign key ("reserve_id") references "reserves" ("id") on delete cascade;

-- migration:2018_11_29_012555_create_user_role_table --
create table "user_role" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "user_id" integer not null, 
  "role_id" integer not null
);
alter table 
  "user_role" 
add 
  constraint "user_role_user_id_foreign" foreign key ("user_id") references "users" ("id") on delete cascade;
alter table 
  "user_role" 
add 
  constraint "user_role_role_id_foreign" foreign key ("role_id") references "roles" ("id") on delete cascade;

-- migration:2018_11_29_012654_create_reserve_transfer_table --
create table "reserve_transfer" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "reserve_id" integer not null, 
  "transfer_id" integer not null
);
alter table 
  "reserve_transfer" 
add 
  constraint "reserve_transfer_reserve_id_foreign" foreign key ("reserve_id") references "reserves" ("id") on delete cascade;
alter table 
  "reserve_transfer" 
add 
  constraint "reserve_transfer_transfer_id_foreign" foreign key ("transfer_id") references "transfers" ("id") on delete cascade;

-- migration:2018_11_29_013020_create_reserve_vehicle_table --
create table "reserve_vehicle" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "vehicle_id" integer not null, 
  "reserve_id" integer not null
);
alter table 
  "reserve_vehicle" 
add 
  constraint "reserve_vehicle_vehicle_id_foreign" foreign key ("vehicle_id") references "vehicles" ("id") on delete cascade;
alter table 
  "reserve_vehicle" 
add 
  constraint "reserve_vehicle_reserve_id_foreign" foreign key ("reserve_id") references "reserves" ("id") on delete cascade;

-- migration:2018_11_29_013100_create_reserve_activity_table --
create table "reserve_activity" (
  "id" serial primary key not null, 
  "reserve_id" integer not null, 
  "activity_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "reserve_activity" 
add 
  constraint "reserve_activity_reserve_id_foreign" foreign key ("reserve_id") references "reserves" ("id") on delete cascade;
alter table 
  "reserve_activity" 
add 
  constraint "reserve_activity_activity_id_foreign" foreign key ("activity_id") references "activities" ("id") on delete cascade;

-- migration:2018_11_29_013145_create_reserve_package_table --
create table "reserve_package" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "reserve_id" integer not null, 
  "package_id" integer not null
);
alter table 
  "reserve_package" 
add 
  constraint "reserve_package_reserve_id_foreign" foreign key ("reserve_id") references "reserves" ("id") on delete cascade;
alter table 
  "reserve_package" 
add 
  constraint "reserve_package_package_id_foreign" foreign key ("package_id") references "packages" ("id") on delete cascade;

-- migration:2018_11_29_013219_create_reserve_room_table --
create table "reserve_room" (
  "id" serial primary key not null, 
  "reserves_id" integer not null, 
  "rooms_id" integer not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
alter table 
  "reserve_room" 
add 
  constraint "reserve_room_reserves_id_foreign" foreign key ("reserves_id") references "reserves" ("id") on delete cascade;
alter table 
  "reserve_room" 
add 
  constraint "reserve_room_rooms_id_foreign" foreign key ("rooms_id") references "rooms" ("id") on delete cascade;

-- migration:2018_11_29_013438_create_package_vehicle_table --
create table "package_vehicle" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "package_id" integer not null, 
  "vehicle_id" integer not null
);
alter table 
  "package_vehicle" 
add 
  constraint "package_vehicle_package_id_foreign" foreign key ("package_id") references "packages" ("id") on delete cascade;
alter table 
  "package_vehicle" 
add 
  constraint "package_vehicle_vehicle_id_foreign" foreign key ("vehicle_id") references "vehicles" ("id") on delete cascade;

-- migration:2018_11_29_013600_create_package_room_table --
create table "package_room" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "package_id" integer not null, 
  "room_id" integer not null
);
alter table 
  "package_room" 
add 
  constraint "package_room_package_id_foreign" foreign key ("package_id") references "packages" ("id") on delete cascade;
alter table 
  "package_room" 
add 
  constraint "package_room_room_id_foreign" foreign key ("room_id") references "rooms" ("id") on delete cascade;

-- migration:2018_11_29_013641_create_package_activity_table --
create table "package_activity" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "package_id" integer not null, 
  "activity_id" integer not null
);
alter table 
  "package_activity" 
add 
  constraint "package_activity_package_id_foreign" foreign key ("package_id") references "packages" ("id") on delete cascade;
alter table 
  "package_activity" 
add 
  constraint "package_activity_activity_id_foreign" foreign key ("activity_id") references "activities" ("id") on delete cascade;

-- migration:2018_11_29_013704_create_package_flight_table --
create table "package_flight" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "package_id" integer not null, 
  "flight_id" integer not null
);
alter table 
  "package_flight" 
add 
  constraint "package_flight_package_id_foreign" foreign key ("package_id") references "packages" ("id") on delete cascade;
alter table 
  "package_flight" 
add 
  constraint "package_flight_flight_id_foreign" foreign key ("flight_id") references "flights" ("id") on delete cascade;

-- migration:2018_11_29_013743_create_package_transfer_table --
create table "package_transfer" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "package_id" integer not null, 
  "transfer_id" integer not null
);
alter table 
  "package_transfer" 
add 
  constraint "package_transfer_package_id_foreign" foreign key ("package_id") references "packages" ("id") on delete cascade;
alter table 
  "package_transfer" 
add 
  constraint "package_transfer_transfer_id_foreign" foreign key ("transfer_id") references "transfers" ("id") on delete cascade;

-- migration:2018_12_08_133828_create_transfer_schedule_adresses_table --
create table "transfer_schedule_adresses" (
  "id" serial primary key not null, 
  "type" boolean not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null, 
  "adress_id" integer not null, 
  "transfer_schedule_id" integer not null
);
alter table 
  "transfer_schedule_adresses" 
add 
  constraint "transfer_schedule_adresses_adress_id_foreign" foreign key ("adress_id") references "adresses" ("id") on delete cascade;
alter table 
  "transfer_schedule_adresses" 
add 
  constraint "transfer_schedule_adresses_transfer_schedule_id_foreign" foreign key ("transfer_schedule_id") references "transfer_schedules" ("id") on delete cascade;

-- migration:2018_12_22_210655_create_airplane_stretch_table --
create table "airplane_stretch" (
  "id" serial primary key not null, 
  "created_at" timestamp(0) without time zone null, 
  "updated_at" timestamp(0) without time zone null
);
