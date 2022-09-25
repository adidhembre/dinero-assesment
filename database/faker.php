<?php

$MIGRATION = [
    /**
     * For users table
     * For applicants password = first_name
     * For admin password = 'admin'
     */
    "INSERT INTO users (id, email, password, role) VALUES 
    (1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 0),
    (2, 'kondauthkarsh@yahoo.com', '835b71752b9f5b631d20d90f952801fd', 1),
    (3, 'ebanerjee@hotmail.com', 'b96d69fda53845a205151613a9c4cc93', 1),
    (4, 'oorja31@yahoo.com', 'a39b4472f3a21ae6837818d32039909a', 1),
    (5, 'pbanik@hotmail.com', '37f09215dc23173a35c3760e00f96cc2', 1),
    (6, 'vedikamani@yahoo.com', 'acb460a21ef232c7f0a2e7bd07ea1718', 1),
    (7, 'mamootyagrawal@yahoo.com', 'cecb6911f5bc764963faac01b0c2bfb2', 1),
    (8, 'hiranwadhwa@gmail.com', 'd19aab293f180759de0fb645110e2524', 1),
    (9, 'fchoudhury@gmail.com', 'ebd6ba6dc404f4a13ebd11a1e427f3ed', 1),
    (10, 'barmanprerak@hotmail.com', '2698cdee6ace7de1ec2b8591b512c805', 1),
    (11, 'ghoshbiju@yahoo.com', '6abd5ec2da726a401728503a4903d081', 1),
    (12, 'vaibhavbedi@gmail.com', '2590e6442ad231e4e4e78dc410f05765', 1),
    (13, 'nirvide@hotmail.com', '2a41f5abff4eeba892bf8d0a72cd9702', 1),
    (14, 'biswaskaira@gmail.com', 'f5e8a20d7c1fd3ed6f3cc8abe3107c1a', 1),
    (15, 'pari34@hotmail.com', 'ac837a0a45a4900a7134261fa0a038d3', 1),
    (16, 'seherrattan@hotmail.com', 'b2526d2f90051574521109c5d5412e0f', 1),
    (17, 'somhimmat@gmail.com', 'dd5cd5bab88c61e9dedf84f5ea59b147', 1),
    (18, 'arnavkanda@gmail.com', '8fc95a69adbc08a22bb90e19e66b389d', 1),
    (19, 'prastogi@yahoo.com', '2a37deb0bba34458a1be750e803aec9f', 1),
    (20, 'devanshkhosla@yahoo.com', '35c4e47289867b1f099229a2669ef743', 1),
    (21, 'jdeshpande@gmail.com', '4519950e48f1ad890f1f4a5cfdde5f0a', 1),
    (22, 'hbhatia@gmail.com', 'f2189be4343e040b135ae255bc7c1157', 1),
    (23, 'yuvraj-hans@yahoo.com', 'cb9349821ae472997e12750cea08493a', 1),
    (24, 'krishnamurthyzain@yahoo.com', '386283eb1e9d732ee3a8e5710e128f76', 1),
    (25, 'kamdarvivaan@hotmail.com', '42c7f43dae18730f17fcbb14912de11c', 1),
    (26, 'raunakuppal@hotmail.com', 'cecb6911f5bc764963faac01b0c2bfb2', 1),
    (27, 'raghav60@hotmail.com', '68f99558566004ded2d9d6ff1ff355a4', 1),
    (28, 'alia75@gmail.com', '4733a44073c81970cccbca6e1ede188b', 1),
    (29, 'aniruddhmannan@hotmail.com', '4afd74d229faca992caa8169471e3f97', 1),
    (30, 'sainidrishya@hotmail.com', '2a7955fe34d8c64d8d0cd015216698db', 1),
    (31, 'rswamy@yahoo.com', '23d6a1865b8ee50c89b1324790e1b825', 1),
    (32, 'adahkakar@gmail.com', '7c96927dc0aeba9e1c9890a241ff1e31', 1),
    (33, 'prerak48@hotmail.com', '0c97e1b9f17af62c470139e2c774742c', 1),
    (34, 'battayuvraj@gmail.com', 'a1e69ad46cc9069421ffb07e91aa97b8', 1),
    (35, 'lkothari@gmail.com', '3afbb9e9205840fd262e3141a299ac91', 1),
    (36, 'lbhatt@gmail.com', 'b3f2dd2288d2707fda69c761c231b29a', 1),
    (37, 'mallickseher@gmail.com', '4733a44073c81970cccbca6e1ede188b', 1),
    (38, 'tchawla@gmail.com', '23d6a1865b8ee50c89b1324790e1b825', 1),
    (39, 'rananeysa@yahoo.com', 'a6ee01584f494219d2d578b694b1165e', 1),
    (40, 'manntejas@yahoo.com', '3f05e83bc9bb64b93e832e7233a231ec', 1),
    (41, 'chokshisaanvi@yahoo.com', '961ca99d88aa942b6945f9641f3816a4', 1),
    (42, 'arhaanvohra@yahoo.com', 'af15ec0dccdd4f8ede53dfd8dc614eaf', 1),
    (43, 'rattaanay@yahoo.com', '65c26c2985fe23dbca5805d2dc8ca25a', 1),
    (44, 'tejassarin@hotmail.com', '71057a2b9452ff016abdf5c1ff09aa8b', 1),
    (45, 'fmane@hotmail.com', '06bdff206751ca26abc51aaf01023204', 1),
    (46, 'rashabobal@yahoo.com', 'bbb5cf117df1a6f13b0b6148174face2', 1),
    (47, 'sairavarty@yahoo.com', '8bddc7db57110a0d39b46f5c09668651', 1),
    (48, 'kiaragrover@hotmail.com', 'b809fa62ef88652f1d294c88b95dbcbf', 1),
    (49, 'shayakyogi@yahoo.com', '2a7955fe34d8c64d8d0cd015216698db', 1),
    (50, 'myrasrinivasan@hotmail.com', '0144538f123fcf1d1b0ded25ce44590e', 1),
    (51, 'shray21@yahoo.com', '458f3c721523919ccdd75b917e82a919', 1),
    (52, 'sehgalyuvraj@hotmail.com', '3a2fda08afe1a4fc2e894905da9fde9f', 1),
    (53, 'tararao@gmail.com', '70c53b6849370266c2cb3c39c2f17b0d', 1),
    (54, 'pbalan@hotmail.com', '2698cdee6ace7de1ec2b8591b512c805', 1),
    (55, 'planka@gmail.com', '254647d27ad9ed49a42c46d29820a153', 1),
    (56, 'drajan@gmail.com', 'a180430e81dff0e44d2151a740882eb8', 1),
    (57, 'kashvi39@gmail.com', 'bbb5cf117df1a6f13b0b6148174face2', 1),
    (58, 'shaan01@hotmail.com', '8f8b2f543d681e1d14e78a9911172d49', 1),
    (59, 'ira22@hotmail.com', 'af15ec0dccdd4f8ede53dfd8dc614eaf', 1),
    (60, 'tanyachatterjee@gmail.com', 'c307f160ff91109814376f7bb494d8ca', 1),
    (61, 'ysarkar@hotmail.com', '0a3156f2ccd627a459d6d4cf2f953c82', 1),
    (62, 'shlok39@hotmail.com', '762f39d2b81672fe8d03d45db0cd4e40', 1),
    (63, 'ldhar@gmail.com', 'effdb6b274d571e2c6a5828c245792dd', 1),
    (64, 'tsem@gmail.com', '386283eb1e9d732ee3a8e5710e128f76', 1),
    (65, 'jkalita@yahoo.com', '68f99558566004ded2d9d6ff1ff355a4', 1),
    (66, 'hbhat@yahoo.com', '6cd847fd3bdfbf0a4eec4bd9a5d9872d', 1),
    (67, 'sekhonshamik@gmail.com', '51c28bd171d43e6148f6188d9b07de6c', 1),
    (68, 'dharmajan91@hotmail.com', '4163d678e68f506fc9cfb79ef4292a03', 1),
    (69, 'heer43@gmail.com', '4163d678e68f506fc9cfb79ef4292a03', 1),
    (70, 'pari45@gmail.com', '2a37deb0bba34458a1be750e803aec9f', 1),
    (71, 'myra67@hotmail.com', '6abd5ec2da726a401728503a4903d081', 1),
    (72, 'madanshaan@gmail.com', '9976bb794ab034d02f4a1c32737d6f07', 1),
    (73, 'mahajanumang@yahoo.com', '6a7d6f3f449e58c63ab188c7ec2e51c8', 1),
    (74, 'vaibhav64@yahoo.com', '8692328114d2f72f989fc699724ed0ac', 1),
    (75, 'yogisamiha@hotmail.com', '26de6b87349fae7c5afb6698d0f86543', 1),
    (76, 'buchreyansh@hotmail.com', '4733a44073c81970cccbca6e1ede188b', 1),
    (77, 'udivan@yahoo.com', 'c314ee592ef7d39f6d5551eed24da363', 1),
    (78, 'bobalpari@hotmail.com', '0c97e1b9f17af62c470139e2c774742c', 1),
    (79, 'tarini01@yahoo.com', '3f05e83bc9bb64b93e832e7233a231ec', 1),
    (80, 'aaina67@gmail.com', '4557211e405e15d3a57707115179e6c8', 1),
    (81, 'farhanbawa@yahoo.com', '67944b79eb69f8f7f16fa9240abe80fc', 1),
    (82, 'sachdevaanya@yahoo.com', 'bbb5cf117df1a6f13b0b6148174face2', 1),
    (83, 'anahitakibe@hotmail.com', 'cc352a9d0be31d4ee6e933f8e75b849f', 1),
    (84, 'darshit04@yahoo.com', '961ca99d88aa942b6945f9641f3816a4', 1),
    (85, 'mohanlal39@yahoo.com', 'ebd6ba6dc404f4a13ebd11a1e427f3ed', 1),
    (86, 'kashvi65@gmail.com', '710afe103160774588b41d9de5712776', 1),
    (87, 'biju76@yahoo.com', '8f4e979ea65af8d9f74f780e06a88ff7', 1),
    (88, 'ldass@gmail.com', '292ba539b50fb79817755d66aedf3d9f', 1),
    (89, 'dhanushvarughese@yahoo.com', '4733a44073c81970cccbca6e1ede188b', 1),
    (90, 'eghose@yahoo.com', '0a3156f2ccd627a459d6d4cf2f953c82', 1),
    (91, 'tkala@yahoo.com', 'cecb6911f5bc764963faac01b0c2bfb2', 1),
    (92, 'tiya46@hotmail.com', '0b5d17424af1320c0ea4d6235ffebab5', 1),
    (93, 'msarkar@yahoo.com', 'bb44018295682e03ca6362687468c9a4', 1),
    (94, 'oorja86@gmail.com', 'b96d69fda53845a205151613a9c4cc93', 1),
    (95, 'vkapadia@gmail.com', '7c20b7224b875773393aab6075b4b600', 1),
    (96, 'jainrhea@yahoo.com', '73a29d936134a77c117c0d02ab46b119', 1),
    (97, 'ekarnik@hotmail.com', 'a249fcf2666e3b81ea54468ea6b0e55a', 1),
    (98, 'mallmanjari@gmail.com', '961ca99d88aa942b6945f9641f3816a4', 1),
    (99, 'dyalaarna@gmail.com', '6f3e510b27c1a27042164e8ebc9e1695', 1),
    (100, 'beraaniruddh@yahoo.com', '2f0453bdf6cf11829231ef8afb3f5cb9', 1),
    (101, 'bkhalsa@yahoo.com', 'effdb6b274d571e2c6a5828c245792dd', 1)",

    /**
     * For applications
     */
    "INSERT INTO application (user_id, first_name, last_name, full_name, dob, phone, address_line_1, address_line_2, city, state, pincode, skills, certification, experience, reference_id) VALUES 
    (2, 'Divij', 'Bora', 'Divij Bora', '1928-05-23', '+91-6288915174', '97', '090
    Date Chowk', 'Tiruppur', 'West Bengal', '773503', 'c++ python python php java ', 'php codeigniter laravel javascript laravel laravel python php ', 3, 5),
    (3, 'Sana', 'Balan', 'Sana Balan', '2015-06-04', '+91-6383531312', '48', 'H.No. 16, Goel Marg', 'Munger', 'Bihar', '613950', 'php c++ python go javascript c++ java c ', '', 3, 7),
    (4, 'Tiya', 'Chandra', 'Tiya Chandra', '1976-06-12', '+91-9510214643', '59/340', '00/28, Ahluwalia', 'Warangal', 'Tripura', '405659', 'node javascript javascript codeigniter go laravel node codeigniter c++ nodejs ', 'java go go c javascript go java ', 9, 2),
    (5, 'Baiju', 'Edwin', 'Baiju Edwin', '2015-07-20', '+91-6015724664', 'H.No. 165', '51, Deep Ganj', 'Ballia', 'Tripura', '816009', 'laravel python java laravel php laravel laravel c ', 'java c++ ', 5, 4),
    (6, 'Miraya', 'Bawa', 'Miraya Bawa', '1974-05-27', '+91-0439404598', 'H.No. 63', '57/85, Varty Marg', 'Mysore', 'Odisha', '056699', 'c++ laravel javascript laravel node laravel c codeigniter javascript ', 'c javascript c c javascript php ', 0, 1),
    (7, 'Vidur', 'Som', 'Vidur Som', '1978-01-14', '+91-3501453390', '37', 'H.No. 093
    Sha Street', 'Kalyan-Dombivli', 'Mizoram', '191207', 'java java java php ', 'python c javascript go laravel python php ', 2, 5),
    (8, 'Piya', 'Mahajan', 'Piya Mahajan', '2001-05-07', '+91-8010361773', 'H.No. 41', '30, Subramanian Road', 'Danapur', 'Bihar', '511182', 'codeigniter python python python c php codeigniter python ', 'c ', 2, 6),
    (9, 'Vritika', 'Bhavsar', 'Vritika Bhavsar', '1953-10-25', '+91-0476210140', 'H.No. 95', '345, Dixit Ganj', 'Gorakhpur', 'Haryana', '856957', 'c++ c++ php ', 'python php c c java c ', 1, 6),
    (10, 'Umang', 'Chaudhari', 'Umang Chaudhari', '2005-11-27', '+91-5928735669', '86', '12
    Acharya Circle', 'Sasaram', 'Jharkhand', '163003', 'python php python c python ', '', 3, 2),
    (11, 'Divyansh', 'Kala', 'Divyansh Kala', '1912-05-08', '+91-6833869688', '44/919', '29/25, Vasa Nagar', 'Chittoor', 'Mizoram', '252547', 'c c ', 'php c++ c c++ java ', 9, 7),
    (12, 'Zain', 'Iyer', 'Zain Iyer', '1989-11-17', '+91-2149035757', '02', '69/082
    Rao Chowk', 'Bally', 'Gujarat', '934105', 'c++ c c++ php c++ laravel c c++ c javascript ', 'java php nodejs c++ nodejs node python javascript c node ', 1, 3),
    (13, 'Amani', 'Kota', 'Amani Kota', '1921-12-17', '+91-9493659734', 'H.No. 825', '92
    Thaman Street', 'Tiruchirappalli', 'Kerala', '604785', 'c++ go php java python javascript ', 'c c ', 0, 1),
    (14, 'Inaaya', '', 'Inaaya ', '1919-09-23', '+91-7444127149', '449', '38/68
    Krishna', 'Karawal Nagar', 'Sikkim', '216482', 'python php java c php ', 'c c c++ python python java php ', 4, 2),
    (15, 'Yakshit', 'Baral', 'Yakshit Baral', '1916-07-06', '+91-5687692370', '55/35', '22/750
    Bir Road', 'Maheshtala', 'Nagaland', '580392', 'python php c c laravel c++ java node node c++ ', 'nodejs laravel node javascript javascript c c c python c++ ', 4, 2),
    (16, 'Abram', 'Singh', 'Abram Singh', '2006-01-05', '+91-3251671481', 'H.No. 05', '34/941
    Dara Ganj', 'Bathinda', 'Arunachal Pradesh', '262270', 'c++ c++ c++ python java ', 'java java c ', 6, 5),
    (17, 'Shlok', 'Chaudhuri', 'Shlok Chaudhuri', '1980-11-24', '+91-2210745304', 'H.No. 828', 'H.No. 549
    Sekhon Circle', 'Siwan', 'Karnataka', '286827', 'c++ ', 'c java ', 2, 5),
    (18, 'Tushar', 'Vig', 'Tushar Vig', '1981-08-01', '+91-8941731624', '91/768', '764
    Gaba Road', 'Ajmer', 'Madhya Pradesh', '225001', '', 'python python c++ java ', 6, 2),
    (19, 'Dhruv', 'Chaudhuri', 'Dhruv Chaudhuri', '1933-11-01', '+91-0344432014', '208', '58/116
    Keer Road', 'Mau', 'Mizoram', '286371', 'c++ ', 'c c++ java ', 5, 5),
    (20, 'Lagan', 'Bhargava', 'Lagan Bhargava', '1994-02-18', '+91-9637206852', '68/33', 'H.No. 32
    Chanda Path', 'Tiruppur', 'Jharkhand', '196550', 'codeigniter c go python php nodejs node codeigniter php java ', 'java python c++ c php ', 4, 5),
    (21, 'Parinaaz', 'Biswas', 'Parinaaz Biswas', '2016-07-21', '+91-5701026124', '536', '99/545, Buch', 'Gorakhpur', 'Assam', '203447', 'c++ java c++ ', 'c++ ', 4, 1),
    (22, 'Kabir', 'Dash', 'Kabir Dash', '1964-06-16', '+91-0208235603', '65', 'H.No. 744
    Bakshi Path', 'Amroha', 'Rajasthan', '308011', 'c ', 'javascript c++ codeigniter codeigniter python codeigniter codeigniter javascript ', 2, 3),
    (23, 'Mamooty', 'Bir', 'Mamooty Bir', '1922-08-14', '+91-0889032037', '94/26', '70
    Batra Path', 'Darbhanga', 'Maharashtra', '963954', 'go laravel c++ laravel node laravel c++ c++ python ', 'java c ', 9, 5),
    (24, 'Adah', 'Dass', 'Adah Dass', '2006-09-03', '+91-2907166935', '110', '603
    Sarkar Nagar', 'Shimoga', 'Tripura', '549528', 'c++ python javascript php javascript c c++ ', 'java php java ', 7, 1),
    (25, 'Oorja', 'Yadav', 'Oorja Yadav', '1963-09-07', '+91-7384364650', '47', '24
    Soman Street', 'Bharatpur', 'Karnataka', '893916', 'java javascript python c c laravel javascript php ', 'java python c++ java go c++ python go ', 7, 4),
    (26, 'Vidur', 'Keer', 'Vidur Keer', '1993-10-13', '+91-9873906580', '787', 'H.No. 894
    Kashyap Road', 'Haridwar', 'Karnataka', '205847', 'codeigniter c codeigniter javascript python laravel node c nodejs node ', 'go c++ c go c ', 7, 4),
    (27, 'Aaryahi', 'Dhawan', 'Aaryahi Dhawan', '1944-04-07', '+91-5526502309', '81', '10
    Sem Ganj', 'Dharmavaram', 'Tamil Nadu', '174912', 'javascript go go laravel c python python php ', 'java java ', 6, 3),
    (28, 'Sara', 'Kunda', 'Sara Kunda', '1909-07-22', '+91-2940726519', 'H.No. 067', '71/62, Sur', 'Anantapur', 'Karnataka', '313662', 'c++ c c c++ javascript c ', 'c++ c ', 8, 1),
    (29, 'Shamik', 'Choudhry', 'Shamik Choudhry', '1937-04-04', '+91-3645888616', 'H.No. 994', 'H.No. 56
    Gaba Ganj', 'Bhind', 'West Bengal', '135280', 'c c php ', 'java c++ c ', 0, 3),
    (30, 'Bhamini', 'Ganesan', 'Bhamini Ganesan', '1958-05-26', '+91-6642176465', '58/080', '06, Hans Path', 'Bellary', 'Manipur', '551805', 'laravel javascript php php c javascript javascript ', 'java c++ ', 0, 6),
    (31, 'Adira', 'Dhillon', 'Adira Dhillon', '1943-10-03', '+91-4217579838', '20', '08/133, Sahota Road', 'Navi Mumbai', 'Sikkim', '271933', 'c++ c++ ', 'java php java python c go ', 3, 6),
    (32, 'Dharmajan', 'Rama', 'Dharmajan Rama', '2001-03-26', '+91-1391795691', '287', 'H.No. 49
    Manne Street', 'Thanjavur', 'Andhra Pradesh', '442359', 'node laravel c++ javascript c++ javascript codeigniter php python ', 'java c ', 5, 4),
    (33, 'Ritvik', 'Grewal', 'Ritvik Grewal', '1965-11-22', '+91-8757446584', 'H.No. 918', 'H.No. 03
    Bail Chowk', 'Nagaon', 'Odisha', '377925', 'laravel go codeigniter node node c java python go ', 'c java php go c++ go c++ ', 2, 5),
    (34, 'Trisha', 'Majumdar', 'Trisha Majumdar', '1922-06-11', '+91-8916916703', '20', '14
    Biswas Circle', 'Raurkela Industrial Township', 'West Bengal', '495671', '', 'php c c++ ', 5, 5),
    (35, 'Myra', 'Choudhury', 'Myra Choudhury', '1957-03-08', '+91-9052384406', '79/80', 'H.No. 03, Singh', 'Akola', 'Telangana', '375436', 'php php laravel laravel php go java ', 'c++ c java ', 2, 2),
    (36, 'Zeeshan', 'Atwal', 'Zeeshan Atwal', '1920-06-08', '+91-3550007384', '32/421', 'H.No. 02
    Andra Road', 'Amroha', 'Gujarat', '336555', 'go php go c c++ c++ ', 'laravel java laravel c++ php javascript php laravel go ', 10, 5),
    (37, 'Sara', 'Bhalla', 'Sara Bhalla', '1938-05-27', '+91-4387900291', 'H.No. 566', '40
    Toor Road', 'Solapur', 'Tripura', '968491', 'java php php ', 'node c++ javascript codeigniter node php java c laravel ', 7, 5),
    (38, 'Adira', 'Ratti', 'Adira Ratti', '1986-03-11', '+91-3798741545', '88', '59/171, Dar Nagar', 'Singrauli', 'Mizoram', '416466', 'php c java ', 'python c++ javascript go python go ', 5, 3),
    (39, 'Mahika', 'Garg', 'Mahika Garg', '1935-09-08', '+91-6070651372', 'H.No. 89', '53/723
    Manda Ganj', 'Narasaraopet', 'Maharashtra', '411765', 'node nodejs nodejs laravel python go laravel codeigniter c javascript ', 'c++ python python c c javascript php javascript ', 4, 6),
    (40, 'Ishaan', 'Sahota', 'Ishaan Sahota', '1916-08-27', '+91-4728620923', '21/91', 'H.No. 88
    Lad Path', 'Guntur', 'Himachal Pradesh', '858879', 'codeigniter c c++ java php go laravel c ', 'php c node c++ node c++ php codeigniter python ', 4, 5),
    (41, 'Devansh', 'Bhagat', 'Devansh Bhagat', '1965-02-25', '+91-9343392117', '88/14', '29/796
    Sha Zila', 'Junagadh', 'Odisha', '922861', 'c++ ', 'c++ c ', 4, 6),
    (42, 'Kismat', 'Sidhu', 'Kismat Sidhu', '1929-03-22', '+91-4598129735', '863', '949
    Mangal Path', 'Siliguri', 'Gujarat', '275383', '', '', 5, 7),
    (43, 'Onkar', 'Bandi', 'Onkar Bandi', '1965-08-06', '+91-6915313325', '66', 'H.No. 46, Tailor Zila', 'Vijayawada', 'Nagaland', '770407', 'node c javascript c go laravel java laravel codeigniter ', 'java c++ c c++ ', 3, 3),
    (44, 'Anvi', 'Gill', 'Anvi Gill', '2009-02-18', '+91-3286472035', 'H.No. 943', '49, Walia Zila', 'Bathinda', 'Madhya Pradesh', '522336', 'go go c c python php go ', 'java go c php c++ ', 9, 2),
    (45, 'Akarsh', 'Kuruvilla', 'Akarsh Kuruvilla', '1932-11-29', '+91-9470448950', '18', '49/91
    Batra Path', 'Haridwar', 'Tamil Nadu', '421772', 'c c++ c php ', 'javascript laravel laravel javascript go php javascript ', 0, 2),
    (46, 'Indrajit', 'Luthra', 'Indrajit Luthra', '1973-12-01', '+91-3190288373', '169', 'H.No. 59, Sidhu Circle', 'Coimbatore', 'Mizoram', '083036', 'javascript php c++ codeigniter c java codeigniter c ', 'c c++ c++ ', 3, 7),
    (47, 'Manjari', 'Gole', 'Manjari Gole', '1987-12-31', '+91-7460243964', '228', 'H.No. 25, Kapadia Nagar', 'Raebareli', 'Telangana', '905308', 'c java javascript codeigniter go javascript java codeigniter ', 'python java c c++ python ', 6, 5),
    (48, 'Zaina', 'Grover', 'Zaina Grover', '1970-12-10', '+91-6808093630', '03', '03/08
    Magar Street', 'Thrissur', 'Andhra Pradesh', '902277', 'javascript java java go java java java ', 'c++ c++ ', 6, 3),
    (49, 'Bhamini', 'Mangat', 'Bhamini Mangat', '1929-11-08', '+91-2027085578', 'H.No. 39', '55/37, Mand Circle', 'Belgaum', 'Sikkim', '055523', 'php php codeigniter laravel c php node node c ', 'c c php python laravel laravel javascript ', 7, 2),
    (50, 'Shayak', 'Aurora', 'Shayak Aurora', '1908-12-31', '+91-9492794538', '81/39', '897
    Sibal Zila', 'Nashik', 'Maharashtra', '223095', 'c python java php ', 'codeigniter javascript laravel java c laravel python java ', 4, 2),
    (51, 'Hiran', 'Dara', 'Hiran Dara', '1933-01-20', '+91-0307869246', '47/912', '31/953, Dyal Circle', 'Gurgaon', 'West Bengal', '626409', '', 'c ', 4, 1),
    (52, 'Rania', 'Chhabra', 'Rania Chhabra', '1937-03-12', '+91-7032804967', 'H.No. 900', '90/772
    Datta Circle', 'Tirupati', 'Assam', '095488', 'c c++ c++ codeigniter java laravel java node python ', 'c++ java c c++ python javascript javascript go python ', 9, 4),
    (53, 'Vedika', 'Badal', 'Vedika Badal', '2014-10-19', '+91-4511069565', '65/270', 'H.No. 617, Saraf Circle', 'Ambarnath', 'Uttarakhand', '915216', 'python java php python php java ', 'python php python go node node laravel go c ', 2, 5),
    (54, 'Umang', 'Din', 'Umang Din', '1948-03-03', '+91-6126403695', '60/99', '01/843
    Salvi Zila', 'Jammu', 'Manipur', '880973', 'c++ php c python ', 'java java go c++ javascript c go go ', 7, 3),
    (55, 'Ahana', '', 'Ahana ', '2005-09-09', '+91-1328749362', 'H.No. 775', 'H.No. 82, Sami Path', 'Panipat', 'Kerala', '419775', 'c++ php c++ ', 'php php php ', 8, 4),
    (56, 'Azad', 'Bir', 'Azad Bir', '1929-12-01', '+91-5148345443', 'H.No. 35', '71/518
    Srivastava Circle', 'Gwalior', 'Bihar', '612343', 'java c c javascript python codeigniter c node c++ c++ ', 'node java codeigniter nodejs javascript php python php c java ', 5, 3),
    (57, 'Indrajit', 'Bahl', 'Indrajit Bahl', '1966-04-30', '+91-8920591628', 'H.No. 51', 'H.No. 91
    Grewal Path', 'Amravati', 'Kerala', '010085', 'php python php c ', 'java java java ', 8, 4),
    (58, 'Saanvi', 'Garde', 'Saanvi Garde', '1969-06-01', '+91-8226354472', '29/94', 'H.No. 840, Seshadri', 'Kavali', 'Arunachal Pradesh', '991026', 'c go c c++ java ', 'c php php c c++ ', 4, 5),
    (59, 'Kismat', 'Babu', 'Kismat Babu', '1917-11-02', '+91-4108361854', '565', 'H.No. 00
    Chana', 'Alwar', 'Tamil Nadu', '674251', 'javascript go python c++ c go ', '', 1, 5),
    (60, 'Saira', 'Gulati', 'Saira Gulati', '1909-02-22', '+91-2072110438', '30/839', 'H.No. 943
    Grover Nagar', 'Aurangabad', 'Chhattisgarh', '910876', '', 'c++ c++ ', 8, 4),
    (61, 'Jayan', 'Bir', 'Jayan Bir', '2013-09-15', '+91-9828127226', 'H.No. 039', '40/33, Dubey Ganj', 'Salem', 'Mizoram', '897587', 'c laravel codeigniter go c++ java c c ', 'c java python php ', 3, 1),
    (62, 'Zoya', 'Devi', 'Zoya Devi', '1961-11-07', '+91-7896901347', '181', '83/749, Deol Road', 'Tirupati', 'Goa', '144803', '', 'javascript python javascript c c++ java ', 7, 6),
    (63, 'Heer', 'Sule', 'Heer Sule', '1961-05-17', '+91-1709655840', '28/549', '67, Grover Street', 'Korba', 'Rajasthan', '495046', 'c++ java c c php c++ javascript java ', 'php go go php javascript java laravel java ', 2, 3),
    (64, 'Adah', 'Wable', 'Adah Wable', '1921-09-04', '+91-5508418549', '75/303', '07/78, Chandra', 'Bally', 'Uttar Pradesh', '004359', 'node java go codeigniter c++ laravel python php go ', 'java php go c c ', 4, 2),
    (65, 'Aaryahi', 'Sen', 'Aaryahi Sen', '2001-01-05', '+91-2743124972', '52/788', 'H.No. 31, Kakar Marg', 'Amritsar', 'Arunachal Pradesh', '291796', 'java python c++ python ', 'c++ c c++ c php ', 7, 1),
    (66, 'Anaya', 'Dada', 'Anaya Dada', '1978-06-06', '+91-3057123356', '21', '58/95
    Ghose Zila', 'Eluru', 'Himachal Pradesh', '259477', 'c php c++ c codeigniter python codeigniter c++ ', 'c++ ', 5, 7),
    (67, 'Pranay', 'Grover', 'Pranay Grover', '1988-01-10', '+91-4446643542', '77/07', '621
    Wali Chowk', 'Amritsar', 'Odisha', '689330', 'c++ c ', 'go laravel javascript c++ java laravel php ', 3, 2),
    (68, 'Tanya', 'Sridhar', 'Tanya Sridhar', '1938-02-12', '+91-6120353576', 'H.No. 21', 'H.No. 33
    Bhatt Ganj', 'Bardhaman', 'Haryana', '384415', 'python c php node node laravel java laravel java ', 'c go laravel c++ c c javascript ', 6, 5),
    (69, 'Tanya', 'Buch', 'Tanya Buch', '1924-03-01', '+91-2517212022', 'H.No. 48', '87/191, Dugar Path', 'Ballia', 'Haryana', '984481', 'go go javascript c++ c codeigniter python php ', 'java c++ php c++ ', 6, 6),
    (70, 'Dhruv', 'Sura', 'Dhruv Sura', '2005-12-09', '+91-3478309458', '572', '54/64, Sehgal Circle', 'Nadiad', 'Kerala', '750562', 'laravel go c++ javascript go php go node javascript ', 'java c java ', 3, 6),
    (71, 'Divyansh', 'Bhalla', 'Divyansh Bhalla', '2021-08-08', '+91-0333373980', '12/13', '83/479
    Chahal Road', 'Jalna', 'Andhra Pradesh', '244685', 'c c c go php ', 'php c++ c ', 6, 5),
    (72, 'Samiha', 'Wagle', 'Samiha Wagle', '1967-06-11', '+91-9684634644', '95/15', '28, Swamy Nagar', 'Anand', 'Himachal Pradesh', '557880', 'go c++ c go c ', 'go python python go c++ ', 7, 7),
    (73, 'Shaan', 'Arya', 'Shaan Arya', '1941-12-26', '+91-5420871500', 'H.No. 16', 'H.No. 96
    Divan Chowk', 'Siwan', 'Tripura', '389526', 'c++ java ', 'python java c python python ', 4, 7),
    (74, 'Nehmat', 'Tara', 'Nehmat Tara', '1994-01-11', '+91-1109400484', '33/635', '26/439, Bala', 'Chandigarh', 'Mizoram', '841605', 'c c++ laravel python python java php ', 'c++ java c ', 2, 1),
    (75, 'Pihu', 'Mannan', 'Pihu Mannan', '1993-11-29', '+91-6996999128', '454', '42/415, Cheema Road', 'Saharanpur', 'Kerala', '913425', 'c java ', 'python c++ go c++ python ', 4, 2),
    (76, 'Sara', 'Sheth', 'Sara Sheth', '1929-12-03', '+91-3914411143', 'H.No. 62', '141, Ramaswamy Marg', 'Jalgaon', 'Bihar', '200238', 'php c java ', 'c++ php python python c++ java node laravel java ', 0, 7),
    (77, 'Anay', 'Swamy', 'Anay Swamy', '2007-07-22', '+91-2737395667', 'H.No. 70', 'H.No. 35, Anne', 'Aurangabad', 'Telangana', '581681', 'php c++ java javascript php c++ java ', 'go laravel c++ go php java java java php ', 6, 3),
    (78, 'Ritvik', 'Suri', 'Ritvik Suri', '1950-09-01', '+91-4804657958', '461', 'H.No. 26
    Khosla Ganj', 'Bathinda', 'Punjab', '522424', '', 'c ', 8, 3),
    (79, 'Ishaan', 'Borah', 'Ishaan Borah', '1998-12-05', '+91-0587485329', '48', '56/007, Boase Marg', 'Tiruvottiyur', 'Jharkhand', '563176', 'c++ c++ c++ php ', 'php c c++ ', 7, 7),
    (80, 'Nitara', 'Seth', 'Nitara Seth', '2013-08-16', '+91-5984750809', 'H.No. 607', '41
    Chakraborty Zila', 'Kochi', 'Assam', '794158', 'c c++ ', 'javascript laravel php c javascript javascript python laravel ', 7, 3),
    (81, 'Nakul', 'Chauhan', 'Nakul Chauhan', '1921-03-08', '+91-8415178072', '57/44', 'H.No. 98
    Iyer Ganj', 'Madurai', 'Andhra Pradesh', '355865', 'c ', 'go c codeigniter javascript java javascript java go ', 0, 3),
    (82, 'Indrajit', 'Ravel', 'Indrajit Ravel', '1984-09-11', '+91-1694835743', 'H.No. 64', 'H.No. 64, Dash Ganj', 'Tenali', 'Manipur', '613939', 'c++ c++ ', 'c c php ', 1, 4),
    (83, 'Nishith', 'Mander', 'Nishith Mander', '1999-12-06', '+91-2264950869', '88/770', '29/19
    Subramanian Road', 'Satna', 'Goa', '489246', 'c++ ', 'c++ c java javascript codeigniter php go laravel laravel ', 0, 7),
    (84, 'Devansh', 'Kohli', 'Devansh Kohli', '1934-10-19', '+91-2354860090', '96/84', 'H.No. 83, Wadhwa Circle', 'Medininagar', 'Uttar Pradesh', '209286', 'laravel go go php java c c++ ', 'java php php ', 7, 1),
    (85, 'Vritika', 'Manda', 'Vritika Manda', '1966-11-24', '+91-5415856707', '216', 'H.No. 72, Vora Chowk', 'Kanpur', 'Chhattisgarh', '935285', 'c python php php node java laravel codeigniter codeigniter ', 'python php java java c++ php php laravel laravel ', 0, 3),
    (86, 'Ehsaan', 'Buch', 'Ehsaan Buch', '1910-10-28', '+91-6455214692', 'H.No. 892', 'H.No. 77
    Bala', 'Siwan', 'Assam', '388531', 'c ', 'c++ go python c++ java ', 10, 2),
    (87, 'Urvi', 'Bobal', 'Urvi Bobal', '1980-11-28', '+91-8355852468', 'H.No. 91', '34/291
    Dua Ganj', 'Bhagalpur', 'Nagaland', '537022', 'java c java php ', 'php java python python node java php javascript codeigniter ', 2, 5),
    (88, 'Romil', 'Mann', 'Romil Mann', '1971-09-28', '+91-2807046242', '554', 'H.No. 737
    Garg Zila', 'Thoothukudi', 'Nagaland', '619380', 'java go c php python ', 'node javascript c java php java laravel nodejs codeigniter c ', 5, 5),
    (89, 'Sara', 'Konda', 'Sara Konda', '1969-08-20', '+91-7094761213', '53/97', 'H.No. 820
    Deshmukh Road', 'Ajmer', 'Andhra Pradesh', '351771', 'php c++ java codeigniter c codeigniter php java c ', 'php python c python python ', 2, 6),
    (90, 'Jayan', 'Wali', 'Jayan Wali', '1999-11-17', '+91-8402582554', '45/77', '45/844, Wali Street', 'Dewas', 'Jharkhand', '633930', 'java c++ java python c ', 'c laravel python c laravel codeigniter c++ go javascript ', 7, 4),
    (91, 'Vidur', 'Tailor', 'Vidur Tailor', '1932-02-08', '+91-8034431429', '48/686', 'H.No. 468
    Dyal Zila', 'Morbi', 'Madhya Pradesh', '524968', 'go java c++ python c c++ c++ laravel ', 'python laravel c c laravel javascript c laravel ', 3, 2),
    (92, 'Jayant', 'Gopal', 'Jayant Gopal', '2004-09-12', '+91-7290751920', 'H.No. 36', 'H.No. 950, Khurana Nagar', 'Moradabad', 'Goa', '419181', 'c c++ python python ', 'c++ go c java go python javascript ', 3, 3),
    (93, 'Tarini', 'Magar', 'Tarini Magar', '1966-05-23', '+91-8243650336', '71', '19/236, Edwin Street', 'Ozhukarai', 'Uttar Pradesh', '089225', 'c++ c python c++ ', 'php java java c c c++ ', 6, 4),
    (94, 'Sana', 'Yohannan', 'Sana Yohannan', '2007-01-25', '+91-3249879959', '876', 'H.No. 51
    Gaba Street', 'Amaravati', 'West Bengal', '894131', 'php php go php php java ', 'java c++ go c python php ', 4, 5),
    (95, 'Pari', 'Barad', 'Pari Barad', '1936-08-31', '+91-4245224539', '47', '76/791, Mahal Nagar', 'Bellary', 'Karnataka', '651125', 'go c++ c++ java python ', 'codeigniter php c++ go python laravel java java ', 9, 4),
    (96, 'Hridaan', 'Kannan', 'Hridaan Kannan', '1955-03-12', '+91-1549888108', 'H.No. 525', '50/75, Rajagopal Chowk', 'Kottayam', 'Gujarat', '988859', 'c++ go python php java ', 'c++ c++ ', 7, 6),
    (97, 'Saksham', 'Doctor', 'Saksham Doctor', '2008-11-02', '+91-0754922290', '11/23', 'H.No. 04, Johal Nagar', 'Kulti', 'Telangana', '583102', 'python go java php java ', 'c go c go node go laravel go java php ', 8, 2),
    (98, 'Devansh', 'Lanka', 'Devansh Lanka', '1995-06-12', '+91-5552058313', 'H.No. 208', 'H.No. 89
    Dua Road', 'Bareilly', 'West Bengal', '166299', 'php c++ java c++ go java ', 'php java java node laravel php php node php javascript ', 1, 7),
    (99, 'Samaira', 'Kurian', 'Samaira Kurian', '1908-05-30', '+91-4916206072', 'H.No. 819', '07
    Cherian Circle', 'Vadodara', 'Odisha', '768537', '', 'laravel javascript php python python php php ', 2, 6),
    (100, 'Advika', 'Kapoor', 'Advika Kapoor', '1972-11-10', '+91-3031148871', '94/507', '723, Tailor Chowk', 'Buxar', 'Rajasthan', '325861', 'c++ ', 'java python node node java c++ php node javascript ', 5, 3),
    (101, 'Heer', 'Buch', 'Heer Buch', '1976-01-27', '+91-3148136690', 'H.No. 50', 'H.No. 506
    Sundaram Road', 'Nashik', 'Kerala', '174606', 'javascript c++ laravel php c++ c++ javascript ', 'codeigniter php python c++ nodejs nodejs python codeigniter nodejs go ', 4, 7)",
];