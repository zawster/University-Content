CREATE DATABASE university;
use university;
CREATE TABLE `student` (
  `roll_no` varchar(10) NOT NULL,
  `st_name` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(16) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `Students` (`roll_no`, `st_name`, `f_name`, `gender`, `contact`, `address`) VALUES
('P19-6015', 'Ali Zafar', 'Zafar Khan', 'Male', '03339104258', 'Peshawar'),
('P20-6005', 'Shakeel', 'Kamran', 'Male', '03459871234', 'Karachi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`roll_no`);
COMMIT;


CREATE TABLE cources ( 
	code VARCHAR(10) PRIMARY KEY,
	cource_name VARCHAR(50),
	credits INT
);
	


CREATE TABLE RegCources(
	code VARCHAR(10) NOT NULL,
	roll_no VARCHAR(10) NOT NULL,
	PRIMARY KEY(code,roll_no)
);
	
	
