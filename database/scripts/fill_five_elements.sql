--Fill with 5 "statics" elements on the database.

INSERT INTO "public"."adresses" ("id", "country", "city", "street", "number", "created_at", "updated_at") VALUES ('1', 'Mali', 'Schneiderburgh', '7Vsjytmz0PzlY6vg8DqEUylyM', '466', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', 'Saint Barthelemy', 'Giovannychester', '5VkryBmoRBs5Naqlm8nCB8fi7', '259', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', 'Netherlands', 'Hellerfort', 'ql1LT3noBCjAUhdZZmhCFUoP1', '105', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', 'Guyana', 'Jaredchester', '0zQAelXjow0msFDy3C7DQ63Ck', '799', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('5', 'Central African Republic', 'Elisafort', 'n6oLkVUITTPv942OcRyjsvN8X', '401', '2018-12-27 02:21:20', '2018-12-27 02:21:20');

INSERT INTO "public"."vehicle_suppliers" ("id", "name", "email", "phonenumber", "adresses_id", "created_at", "updated_at") VALUES ('1', 'Mante-Skiles', 'xdaugherty@domain.com', '(844) 608-8365', '1', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', 'Miller-Green', 'weldon.daugherty@domain.com', '(844) 781-6790', '3', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', 'Sporer-Herzog', 'jast.lessie@domain.com', '877.680.9175', '2', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', 'Boyle-Kuhn', 'stamm.kaya@domain.com', '1-866-605-2706', '1', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('5', 'Mitchell, Morar and Reynolds', 'edmund17@domain.com', '1-866-673-2608', '3', '2018-12-27 02:21:20', '2018-12-27 02:21:20');

INSERT INTO "public"."vehicles" ("id", "price", "date", "availability", "capacity", "patent", "brand", "model", "description", "vehicle_suppliers_id", "created_at", "updated_at") VALUES ('1', '5331.00', '2011-03-14 06:13:03', 't', '10', 'fprD77', 'Chevrolet', 'Modelo2', 'Hatter added.', '5', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', '9544.00', '1976-10-09 17:35:36', 'f', '1', 'bucx72', 'Audi', 'Modelo1', 'By the.', '3', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', '11593.00', '1980-09-02 15:09:04', 'f', '4', 'sT8m30', 'Chevrolet', 'Modelo1', 'Alice. ''I''ve.', '5', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', '14625.00', '2014-07-11 07:42:05', 'f', '8', '3dQf96', 'Subaru', 'Modelo3', 'Alice, and her.', '4', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('5', '7127.00', '1995-07-16 01:33:24', 't', '6', 'bUG327', 'BMW', 'Modelo2', 'He trusts.', '4', '2018-12-27 02:21:20', '2018-12-27 02:21:20');

INSERT INTO "public"."activity_providers" ("id", "name", "email", "phone", "adresses_id", "created_at", "updated_at") VALUES ('1', 'Wisozk, Bosco and Bauch', 'triston.jenkins@example.com', '855-373-4415', '2', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', 'Pagac and Sons', 'jast.richmond@example.com', '888-549-1794', '3', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', 'Reilly LLC', 'schamberger.sabryna@example.org', '888.237.3963', '2', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', 'Goodwin Ltd', 'abby.hauck@example.org', '1-855-645-8625', '1', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('5', 'Hermann-Wunsch', 'pamela25@example.net', '(877) 556-7390', '5', '2018-12-27 02:21:20', '2018-12-27 02:21:20');

INSERT INTO "public"."activities" ("id", "adultprice", "kidprice", "startdate", "enddate", "name", "description", "adultscapacity", "kidscapacity", "availability", "activity_providers_id", "created_at", "updated_at") VALUES ('1', '181841.00', '142881.00', '2018-12-31 15:11:31', '2019-01-15 21:56:52', 'G4j0K5bi8dqlaEppwUnfBhbUco82aG', 'Alice.', '58', '32', 'f', '2', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', '241179.00', '126367.00', '2018-12-27 20:17:35', '2019-01-18 08:06:50', 'DVrxvHbMBRZdciQuK3q9CqpSNOhAi7', 'How I wonder if.', '68', '46', 'f', '5', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', '251558.00', '82619.00', '2019-01-02 09:12:02', '2019-01-14 12:41:06', 'SzDfyTtfiKUWuR7Zi4Buw54txCqjFJ', 'Magpie.', '78', '32', 'f', '1', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', '293831.00', '92794.00', '2019-01-09 02:39:25', '2019-01-19 23:30:45', '7N8WYYGktQKX4Z7mfCKMljk9IvBpXc', 'Queen was.', '45', '18', 'f', '1', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('5', '174488.00', '166225.00', '2018-12-29 01:52:26', '2019-01-10 07:42:27', 'FjlTyC0qwKe2zQsFtZwopwAhTnW5XY', 'She soon.', '17', '24', 'f', '1', '2018-12-27 02:21:20', '2018-12-27 02:21:20');

INSERT INTO "public"."flights" ("id", "price", "startdate", "enddate", "availability", "created_at", "updated_at") VALUES ('1', '798741.00', '2018-12-27 06:19:31', '2019-01-21 04:49:05', 'f', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', '357305.00', '2018-12-27 14:15:34', '2019-01-15 13:44:05', 't', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', '789231.00', '2018-12-27 06:32:35', '2019-01-19 22:37:00', 'f', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', '1039803.00', '2019-01-03 21:00:29', '2019-01-23 01:03:04', 't', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('5', '253898.00', '2019-01-01 18:27:08', '2019-01-13 05:12:47', 't', '2018-12-27 02:21:20', '2018-12-27 02:21:20');

INSERT INTO "public"."insurances" ("id", "price", "description", "availability", "created_at", "updated_at", "flight_id") VALUES ('1', '186032.00', 'Alice said to.', 'f', '2018-12-27 02:21:20', '2018-12-27 02:21:20', '5'),
('2', '113079.00', 'And when.', 'f', '2018-12-27 02:21:20', '2018-12-27 02:21:20', '5'),
('3', '256579.00', 'I ever saw.', 't', '2018-12-27 02:21:20', '2018-12-27 02:21:20', '2'),
('4', '106958.00', 'The.', 'f', '2018-12-27 02:21:20', '2018-12-27 02:21:20', '2'),
('5', '251416.00', 'Lobster.', 't', '2018-12-27 02:21:20', '2018-12-27 02:21:20', '3');

INSERT INTO "public"."stretches" ("id", "origin", "destiny", "airline", "platform", "risetime", "created_at", "updated_at") VALUES ('1', 'Kiehnshire', 'South Sadyeview', 'Mante, Feeney and Aufderhar', '2', '2019-01-02 18:33:05', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('2', 'West Wilfredo', 'New Tessie', 'Halvorson-Kunde', '6', '2019-01-06 04:12:23', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('3', 'South Manleyland', 'Christiansenberg', 'Mraz Inc', '8', '2018-12-31 21:46:44', '2018-12-27 02:21:20', '2018-12-27 02:21:20'),
('4', 'Kaelynchester', 'Rempelbury', 'Durgan LLC', '10', '2018-12-31 21:26:39', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', 'East Jermeybury', 'Ewaldport', 'O''Reilly and Sons', '3', '2019-01-04 08:50:32', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."airplanes" ("id", "name", "code", "created_at", "updated_at") VALUES ('1', '5ovJ2LWjhmEF8i4GVnmFJcrwv8qNfb', '2890', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', '9KKNI7kvz0kSIZPT93nXO5KQDojvZz', '3254', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', 'JHoqgKyljtDbKbYh1AoCcPjWfMVYpU', '8241', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', 'cifaJhr8TecWwooIlykcSuBYCDSGfv', '6113', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', '88Btfih8894GRVSh6D24MmXLmAledw', '7999', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."airports" ("id", "name", "telephone", "mail", "adresses_id", "created_at", "updated_at") VALUES ('1', 'Hansen-Kertzmann', '(855) 705-4581', 'robel.melisa@example.net', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', 'Bogan LLC', '(888) 925-6332', 'bhansen@example.net', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', 'Prohaska Inc', '(877) 370-2048', 'paul.dooley@example.net', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', 'Reinger, Gutkowski and King', '888.316.2432', 'tosinski@example.net', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', 'Murray, Jacobi and Kohler', '(877) 434-5514', 'yboehm@example.net', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."lodgings" ("id", "name", "email", "phonenumber", "evaluation", "numberofrooms", "description", "adresses_id", "created_at", "updated_at") VALUES ('1', 'Purdy-Miller', 'raleigh.batz@example.net', '877-774-1100', '1', '47', 'Duchess sang.', '2', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', 'Bahringer-Lebsack', 'cathrine.olson@example.net', '1-866-843-1962', '5', '20', 'Alice.', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', 'Rath PLC', 'frami.bernard@example.org', '844.368.9713', '3', '29', 'For, you.', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', 'Heathcote Inc', 'emory32@example.net', '1-888-481-4962', '5', '29', 'The Queen had.', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', 'Stoltenberg-Beer', 'gmurray@example.com', '1-877-984-8293', '3', '34', 'The Dormouse.', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."packages" ("id", "price", "name", "discount", "description", "created_at", "updated_at") VALUES ('1', '657520.00', 'Rabbit asked.', '0.00', 'Alice put down.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', '903956.00', 'Luckily for Alice, the little crocodile.', '58.00', 'Bill''s got.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', '830129.00', 'Rabbit coming to look over.', '33.00', 'But at any.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', '918672.00', 'I beg your pardon!''.', '30.00', 'Duck: ''it''s.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', '739888.00', 'I don''t take this child away with me,'' thought.', '10.00', 'Hush!'' said the.', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."rooms" ("id", "price", "doornumber", "kidscapacity", "adultscapacity", "type", "description", "availability", "lodgings_id", "created_at", "updated_at") VALUES ('1', '61550.00', '12', '2', '4', '5', 'Gryphon.', 't', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', '23341.00', '37', '1', '4', '4', 'Good-bye.', 't', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', '79520.00', '40', '0', '1', '2', 'Rabbit''s voice.', 'f', '4', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', '46153.00', '11', '2', '3', '5', 'Alice, as she.', 't', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', '55526.00', '45', '1', '1', '1', 'I shan''t.', 'f', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."room_schedules" ("id", "startdate", "enddate", "rooms_id", "created_at", "updated_at") VALUES ('1', '2018-12-28 04:27:13', '2019-01-11 02:40:34', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', '2019-01-02 15:11:05', '2019-01-19 21:54:19', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', '2018-12-30 13:12:27', '2019-01-16 14:36:43', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', '2019-01-09 08:54:26', '2019-01-19 05:51:45', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', '2018-12-28 20:49:01', '2019-01-21 03:05:16', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."seats" ("id", "seatnumber", "availability", "checkin", "type", "airplanes_id", "created_at", "updated_at") VALUES ('1', '186', 'f', 't', 'Economy', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', '12', 't', 'f', 'Premium Business', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', '36', 'f', 't', 'Economy', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', '34', 'f', 'f', 'Premium Economy', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', '134', 't', 'f', 'Premium Economy', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."roles" ("id", "name", "description", "created_at", "updated_at") VALUES ('1', 'User', 'But she waited.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', 'User', 'I''ll try if.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', 'Admin', 'Alice was soon.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', 'User', 'I''LL soon.', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', 'User', 'Mock.', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."users" ("id", "country", "email", "email_verified_at", "password", "name", "lastname", "borndate", "phone", "documentorigincountry", "typeofdocument", "numberofdocument", "points", "money", "remember_token", "created_at", "updated_at") VALUES ('1', 'Western Sahara', 'mlubowitz@example.com', '2018-12-27 02:21:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Issac', 'Olson', '1941-11-10 03:56:50', '(866) 365-5206', 'Ukraine', 'Pasaporte', '124802944', '1074', '71429.00', 'uyZnWDGJ0B', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', 'Myanmar', 'leffler.winnifred@example.com', '2018-12-27 02:21:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Everette', 'Aufderhar', '1987-03-13 09:56:52', '855.576.8370', 'Guinea', 'Pasaporte', '220682461', '1248', '1669061.00', '2OHPGfEMOF', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', 'Dominican Republic', 'hackett.kariane@example.com', '2018-12-27 02:21:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Wallace', 'McClure', '1981-01-11 22:54:22', '888-299-2037', 'Monaco', 'Cedula de Identidad', '326174636', '312', '1071547.00', 'OPsnLK4Tik', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', 'Palestinian Territories', 'aufderhar.keith@example.com', '2018-12-27 02:21:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Morgan', 'Zboncak', '1941-10-26 14:24:37', '866.973.9104', 'Norfolk Island', 'Pasaporte', '503968469', '635', '767606.00', 'rJIJ5OCygu', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', 'Bahrain', 'wbrekke@example.net', '2018-12-27 02:21:21', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Edgardo', 'Paucek', '1943-05-23 11:34:58', '877.898.7971', 'Niue', 'Cedula de Identidad', '762760720', '772', '1874797.00', 'dLmHo7XNWR', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."reserves" ("id", "date", "product", "amount", "price", "users_id", "created_at", "updated_at") VALUES ('1', '2018-12-13 23:54:49', 'nzUncHN1kBc8ocGwtl1LeCvH3KpjEjFFzfAfTrtLRK1FzaVdql', '2', '600245.00', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', '2018-12-24 19:04:29', 'LPLuxyM2TfMVBUIVBJc0L7R2ihAlg1TxTHdmfpeaKdknzuAJRZ', '1', '570972.00', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', '2018-12-10 20:55:47', '0TZRry5Ootbioqi5jJuD4ehksmsU8760Zs7yZWdXhkc0kqGCqT', '4', '1666832.00', '1', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', '2018-11-28 12:09:02', 'blPkp4XVqsJMVx8OXh1mT930aPKms8ftmTVVDlKcFhHPJ2RR4N', '1', '103388.00', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', '2018-12-03 20:02:45', 'z4ptFLrVCESso1gBEdCYHEY1bySt00PhkP72ivOohztxpkd9Me', '3', '1636471.00', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."payment_methods" ("id", "bankaccountnumber", "typeofaccount", "bank", "created_at", "updated_at", "reserves_id") VALUES ('1', '9494600165', 'Cuenta corriente', 'Littel LLC', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '1'),
('2', '585413838561', 'Cuenta corriente', 'Mann, Dicki and Boyer', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '4'),
('3', '3730132579612', 'Cuenta vista', 'Reichel-Auer', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '5'),
('4', '70308', 'Cuenta vista', 'Kuhn Group', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '3'),
('5', '652876371', 'Cuenta vista', 'Will and Sons', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '2');

INSERT INTO "public"."transfer_providers" ("id", "name", "telephone", "mail", "adresses_id", "created_at", "updated_at") VALUES ('1', 'Sanford-Kovacek', '866-569-4653', 'therese68@example.com', '4', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('2', 'Bartoletti Group', '(855) 615-8320', 'kling.noe@example.com', '2', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('3', 'D''Amore Inc', '(844) 438-0159', 'chaim.baumbach@example.com', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('4', 'Grady Group', '(855) 531-0531', 'harber.bella@example.net', '5', '2018-12-27 02:21:21', '2018-12-27 02:21:21'),
('5', 'Kris-Collins', '1-800-378-6451', 'zfeeney@example.com', '3', '2018-12-27 02:21:21', '2018-12-27 02:21:21');

INSERT INTO "public"."transfers" ("id", "price", "capacity", "description", "brand", "model", "type", "availability", "created_at", "updated_at", "transfer_providers_id") VALUES ('1', '54744', '7', 'The Dormouse had.', 'Tesla', 'Modelo3', '4', 'f', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '2'),
('2', '20939', '3', 'Alice to herself.', 'Volvo', 'Modelo2', '4', 'f', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '1'),
('3', '86518', '2', 'Seven flung.', 'Pagani', 'Modelo3', '4', 't', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '5'),
('4', '16223', '5', 'By this time.', 'Audi', 'Modelo1', '5', 't', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '1'),
('5', '41971', '3', 'Hatter, ''or.', 'Alfa romeo', 'Modelo1', '4', 't', '2018-12-27 02:21:21', '2018-12-27 02:21:21', '2');

INSERT INTO "public"."transfer_schedules" ("id", "startdate", "enddate", "created_at", "updated_at", "transfers_id") VALUES ('1', '2019-01-09 01:27:12', '2019-01-20 16:40:20', '2018-12-27 02:21:22', '2018-12-27 02:21:22', '3'),
('2', '2018-12-29 23:42:54', '2019-01-14 03:28:30', '2018-12-27 02:21:22', '2018-12-27 02:21:22', '2'),
('3', '2019-01-01 17:43:43', '2019-01-15 10:16:25', '2018-12-27 02:21:22', '2018-12-27 02:21:22', '1'),
('4', '2019-01-06 13:19:42', '2019-01-24 01:36:02', '2018-12-27 02:21:22', '2018-12-27 02:21:22', '4'),
('5', '2018-12-28 17:01:10', '2019-01-18 09:44:29', '2018-12-27 02:21:22', '2018-12-27 02:21:22', '1');

INSERT INTO "public"."vehicle_schedules" ("id", "startdate", "enddate", "vehicles_id", "created_at", "updated_at") VALUES ('1', '2019-01-09 15:48:51', '2019-01-12 03:55:36', '5', '2018-12-27 02:21:22', '2018-12-27 02:21:22'),
('2', '2019-01-06 09:42:01', '2019-01-10 06:27:45', '1', '2018-12-27 02:21:22', '2018-12-27 02:21:22'),
('3', '2018-12-30 10:09:34', '2019-01-14 02:25:06', '2', '2018-12-27 02:21:22', '2018-12-27 02:21:22'),
('4', '2019-01-06 11:51:19', '2019-01-11 17:25:01', '5', '2018-12-27 02:21:22', '2018-12-27 02:21:22'),
('5', '2018-12-29 09:31:34', '2019-01-23 06:30:44', '5', '2018-12-27 02:21:22', '2018-12-27 02:21:22');
