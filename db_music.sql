-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 01:38 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_listitems`
--

CREATE TABLE `tbl_listitems` (
  `listId` int(11) NOT NULL,
  `listEntry` varchar(100) NOT NULL,
  `listPosition` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_listitems`
--

INSERT INTO `tbl_listitems` (`listId`, `listEntry`, `listPosition`) VALUES
(1, 'Bad', 1),
(1, 'Earth Song', 2),
(1, 'Beat It', 4),
(1, 'Man in the Mirror', 3),
(1, 'Billie Jean', 5),
(1, 'Smooth Criminal', 6),
(1, 'The Way You Make Me Feel', 7),
(1, 'Thriller', 8),
(1, 'They Don\'t Care About Us', 9),
(1, 'Black or White', 10),
(3, 'Kadhal Rojave', 1),
(3, 'Pettai Rap', 2),
(3, 'Mustafa Mustafa', 4),
(3, 'Anjali Anjali', 3),
(3, 'Vidai Kodu Engal Naade', 5),
(3, 'Veerapandi Kottaiyile', 6),
(3, 'Uyire Uyire', 7),
(3, 'Thaiyya Thaiyya', 8),
(3, 'Strawberry Kanne', 9),
(3, 'New York Nagaram', 10),
(13, 'j', 10),
(13, 'i', 9),
(13, 'h', 8),
(13, 'g', 7),
(13, 'f', 6),
(13, 'd', 4),
(13, 'e', 5),
(13, 'c', 3),
(13, 'b', 2),
(13, 'a', 1),
(15, 'b', 2),
(15, 'c', 3),
(15, 'd', 4),
(15, 'e', 5),
(15, 'Dancing Queen', 1),
(15, 'f', 6),
(15, 'h', 7),
(15, 'j', 8),
(15, 'k', 9),
(15, 'l', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lists`
--

CREATE TABLE `tbl_lists` (
  `listId` int(11) NOT NULL,
  `listName` varchar(200) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lists`
--

INSERT INTO `tbl_lists` (`listId`, `listName`, `userId`) VALUES
(1, 'The Best Michael Jackson Songs', 1),
(3, 'Top Ten A. R. Rahman Songs', 1),
(14, '', 1),
(13, 'sample', 1),
(15, 'demo', 1),
(16, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `qID` int(11) NOT NULL,
  `question` longtext,
  `option1` varchar(50) DEFAULT NULL,
  `option2` varchar(50) DEFAULT NULL,
  `option3` varchar(50) DEFAULT NULL,
  `option4` varchar(50) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`qID`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'Complete the sentence from the song \'\'Blank Space\'\': Boys only one love if it\'s...', 'Peace ', 'Torture ', 'War', 'A kiss', 'Torture '),
(2, 'Which song was sung by Selena Gomez?', 'All about that bass', 'Shake it off ', 'The heart wants what it wants', 'Love you', 'The heart wants what it wants'),
(3, 'Taio Cruz is a singer from which country?', 'UK', 'USA', 'Australia', 'Columbia', 'UK'),
(4, 'Freddie Mercury was famous for playing which instrument?', 'Drums', 'Keyboard', 'Guitar', 'Bass Guitar', 'Keyboard'),
(5, 'Smilers is the collective name for fans of which artist or band?', 'Justin Bieber', 'Michael Jackson', 'Rihanna', 'Miley Cyrus', 'Miley Cyrus'),
(6, 'It will rain 2011 is by which artist?', 'Bruno Mars', 'Kelly Clarkson', 'Lady Gaga', 'Justin Timberlake', 'Bruno Mars'),
(7, 'The band Fun (from the hit We are young) is from which country?', 'USA', 'Australia', 'UK', 'South Africa', 'USA'),
(8, 'I look to you a 2009 studio album is by which Artist?', 'Mariah Carrey', 'Rihanna', 'Justin Bieber', 'Whitney Houston', 'Whitney Houston'),
(9, 'Madonna Was born in what year?', '1970', '1982', '1958', '1943', '1958'),
(10, 'Taking Chance is a 2007 album by which Aritist?', 'Mariah Carrey', 'Celine Dion', 'Adele', 'Sia', 'Celine Dion'),
(11, 'The video for the song \'just can\'t get enough by Black eyed Peas was whot in which country?', 'India', 'Indonesia', 'Thailand', 'Japan', 'Japan'),
(12, 'The video for the song \'Bounce\' by artist Iggy Azalea was shot in which country?', 'USA', 'Japan', 'India', 'Thailand', 'India'),
(13, 'Teenage Dream is a 2010 album by which artist?', 'Katy Perry', 'Selena Gomez', 'Rihanna', 'Miley Cyrus', 'Katy Perry'),
(14, 'Taylor Swift was born in which year?', '1992', '1989', '1975', '1968', '1989'),
(15, '\'We found love\' is a 2011 song by which artist?', 'Katy Perry', 'Madonna', 'Rihanna', 'Lady Gaga', 'Rihanna'),
(16, 'Lata Mangeshkar is considered as the doyenne of Hindi film music. But she has not sung a single song for one particular music director, do you know his name?', 'O P Nayyar', 'Khemchand Prakash', 'Jaidev', 'R D Burman', 'O P Nayyar'),
(17, 'One of the films that revolutionized Hindi film music was \'Teesri Manzil\'. This film marked the first big hit of a great music director, can you name him?', 'S D Burman', 'Kalyanji-Anandji', 'R D Burman', 'Shankar-Jaikishan', 'R D Burman'),
(18, 'The films of Raj Kapoor were known for their super hit songs. One of the classic Raj Kapoor films was \'Bobby\'. Who was the music director of this film?', 'Madan Mohan', 'Laxmikant-Pyarelal', 'Shankar-Jaikishan', 'Ravindra Jain', 'Laxmikant-Pyarelal'),
(19, 'One of the superstars of Bollywood was Rajesh Khanna. Who was the famous singer who was known as the voice of Rajesh Khanna?', 'Mohammed Rafi', 'Mukesh', 'Kishore Kumar', 'Talat Mahmood', 'Kishore Kumar'),
(21, '\'Mughal-E-Azam\' was one of the greatest films made in Bollywood, featuring many hit songs. Who was the music director of this film?', 'Naushad', 'S D Burman', 'Salil Chowdhury', 'O P Nayyar', 'Naushad'),
(22, 'Which of these music directors was NOT a singer?', 'R D Burman', 'S D Burman', 'C Ramachandra', 'Roshan', 'Roshan'),
(23, 'The megastar of Bollywood, Amitabh Bachchan has also sung a number of hit songs. Which of these films featured a song sung by Bachchan?', 'Don', 'Silsila', 'Sholay', 'Hum', 'Silsila'),
(24, 'Many feel that the 1980\'s saw a gradual decline of melody in Hindi film music. During this time a Rajshree Productions film \'Maine Pyar Kiya\' was a musical hit and saw the revival of melody in Hindi film music. Who was the music director of this film?', 'Ram Laxman', 'Jatin Lalit', 'Nadeem Shravan', 'Anand Milind', 'Ram Laxman'),
(25, 'The superstar of the late 90\'s and 2000\'s was Shah Rukh Khan. \'Dilwale Dulhaniya Le Jayenge (DDLJ)\' was a musical hit starring Shahrukh and Kajol. Which of these songs is from the film DDLJ?', 'Yeh Kaali Kaali Ankhen', 'Chak De India', 'Dard E Disco', 'Mehndi Laga Ke Rakhna', 'Mehndi Laga Ke Rakhna'),
(20, 'Who has won the maximum number of Grammy Awards?', 'Georg Solti', 'Quincy Jones', 'Alison Krauss', 'Pierre Boulez', 'Georg Solti'),
(26, 'What movie is the song \'Kajra Re\' from?', 'Kabhi Khushi Kabhie Gham', 'Salaam Namaste', 'Dus', 'Bunty Aur Babli', 'Bunty Aur Babli'),
(27, '\'Where\'s the Party Tonight\', \'Rock and Roll Soniye\', and \'Mitwa\' are songs from what popular movie?', 'Dhoom 2', 'Kal Ho Naa Ho', 'Kabhi Alvida Naa Kehna', 'Don ', 'Kabhi Alvida Naa Kehna'),
(28, 'Which of these is a song from the movie "Veer-Zaara"?', 'Main Yahaan Hoon', 'Chand Sifarish', 'Chup Chup Ke', 'Silsila Ye Chahaat Ka', 'Main Yahaan Hoon'),
(29, 'Which of these people sang a part in the song \'Maahi Ve\'?', 'Loy Mendosa', 'Alka Yagnik', 'Sadhana Sargam', 'Shaan', 'Sadhana Sargam'),
(30, 'Who starred in the song \'You Are My Soniya\'?', 'Abhishek & Aishwarya', 'Shahrukh & Preity', 'Saif & Rani', 'Hrithik & Kareena', 'Hrithik & Kareena'),
(31, 'The song \'Salaam Namaste\' took place where?', 'a dance club', 'a beach', 'a party', 'in the mountains', 'a beach'),
(32, 'What movie is the song \'Ladki Kyon\' from?', 'Fanaa', 'Devdas', 'Bunty Aur Babli', 'Hum Tum', 'Hum Tum'),
(33, 'The song \'Crazy Kiya Re\' is sung by what popular singer?', 'Alka Yagnik', 'Sunidhi Chauhan', 'Shreya Ghoshal', 'Alisha Chinnai', 'Sunidhi Chauhan'),
(34, 'The movie "Saathiya" included which of the following songs?', 'Aao Na', 'Tere Liye', 'Chhalka Re', 'Dola Re Dola', 'Chhalka Re'),
(35, 'The song \'Tumhe Jo Maine Dekha\' starred which of these people?', 'Shahrukh and Aishwarya', 'Shahrukh & Sushmita', 'Shahrukh & Rani', 'Shahrukh & Preity', 'Shahrukh & Sushmita'),
(36, 'This guitarist, originally named "Johnny," was born in 1942 in Seattle, Washington. He would go on to be arguably the greatest guitarist of all time, though he only lived to be twenty-seven. If I told you what band he was in, it would be way too obvious.', 'Jimmy Page', 'Jimi Hendrix', 'Chuck Berry', 'Angus Young', 'Jimi Hendrix'),
(37, 'This drummer died young, at age 32 in 1978. He was known for his intense style of playing and destructive behavior. On the "Smothers Brothers Comedy Hour", he overloaded his drums with explosives. They went off at the end of the performance, leaving Pete Townshend with permanent hearing damage.', 'Lars Ulrich', 'Keith Moon', 'John Bonham', 'Ringo Starr', 'Keith Moon'),
(38, 'This singer, originally named Stephen Tallarico, was part of the band who made hits such as "Dream On" and "Sweet Emotion."', 'Robert Plant', 'Axl Rose', 'Jim Morrison', 'Steven Tyler', 'Steven Tyler'),
(39, 'This frontman was knighted in 2003 for "services to popular music." His bandmate Keith Richards criticized the honor, though this singer suspected that Richards was actually a bit jealous.', 'Roger Daltrey', 'Bono', 'Mick Jagger', 'Sting', 'Mick Jagger'),
(40, 'This guitarist started with The Yardbirds, then moved on to become the lead guitarist of arguably the greatest rock band of all-time. Every rock fan should know this man, who played with Robert Plant, John Paul Jones, and John Bonham.', 'Angus Young', 'Jimmy Page', 'George Harrison', 'David Gilmour', 'Jimmy Page'),
(41, 'This Beatle was born in 1942, had a successful career after the band broke up, and played bass.', 'Paul McCartney', 'Ringo Starr', 'George Harrison', 'John Lennon', 'Paul McCartney'),
(42, 'This singer began as a member of Black Sabbath, and also had a great solo career. He is one of the most famous men in rock and roll.', 'Kurt Cobain', 'Bono', 'James Hetfield', 'Ozzy Osbourne', 'Ozzy Osbourne'),
(43, 'This lead singer led the singing of Lynyrd Skynyrd from its beginnings in 1964 to 1977, when a plane crash killed three of the band members. His brother Johnny took over in 1987 when the band reunited.', 'Freddie Mercury', 'Ronnie Van Zant', 'Bon Scott', 'Robert Plant', 'Ronnie Van Zant'),
(44, 'This punk rocker was the guitarist for The Ramones throughout their twenty-two years. He died in 2004.', 'Johnny Ramone', 'Joey Ramone', 'Dee Dee Ramone', 'Tommy Ramone', 'Johnny Ramone'),
(45, 'This guitarist and co-founder of Van Halen was ranked at seventh on Rolling Stone\'s best guitar solos list for "Eruption."', 'Slash', 'Alex Van Halen', 'The Edge', 'Eddie Van Halen', 'Eddie Van Halen');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ratings`
--

CREATE TABLE `tbl_ratings` (
  `userId` int(11) NOT NULL,
  `songId` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ratings`
--

INSERT INTO `tbl_ratings` (`userId`, `songId`, `rating`) VALUES
(1, 78, 3),
(14, 42, 4),
(1, 66, 4),
(14, 89, 4),
(14, 111, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_songs`
--

CREATE TABLE `tbl_songs` (
  `sNo` int(11) NOT NULL,
  `songTitle` varchar(50) DEFAULT NULL,
  `releaseYear` year(4) DEFAULT NULL,
  `album` varchar(50) DEFAULT NULL,
  `artist` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `totalPoints` int(11) DEFAULT '0',
  `noOfVotes` int(11) DEFAULT '0',
  `rating` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_songs`
--

INSERT INTO `tbl_songs` (`sNo`, `songTitle`, `releaseYear`, `album`, `artist`, `genre`, `totalPoints`, `noOfVotes`, `rating`) VALUES
(1, 'Dancing Queen', 1976, 'Arrival', 'ABBA', 'Pop', 280, 65, 4.3),
(3, 'Attention', 2017, 'Voice Notes', 'Charlie Puth', 'Pop', 333, 74, 4.5),
(4, 'Animals', 2014, 'V', 'Maroon 5', 'Pop', 437, 112, 3.9),
(5, 'Maps', 2014, 'V', 'Maroon 5', 'Pop', 624, 156, 4),
(6, 'Sugar', 2014, 'V', 'Maroon 5', 'Dance', 273, 65, 4.2),
(7, 'Rehab', 2006, 'Back to Black', 'Amy Winehouse', 'R&B', 622, 148, 4.2),
(8, 'Back to Black', 2006, 'Back to Black', 'Amy Winehouse', 'Pop', 401, 89, 4.5),
(9, 'You Know I\'m No Good', 2006, 'Back to Black', 'Amy Winehouse', 'R&B', 545, 121, 4.5),
(10, 'Mere Rashk-e-Qamar', 2017, 'Baadshaho', 'Rahat Fateh Ali Khan', 'Bollywood', 616, 140, 4.4),
(12, 'Oonchi Hai Building', 2017, 'Judwaa 2', 'Anu Malik', 'Bollywood', 477, 129, 3.7),
(15, 'Wake Up the City', 1981, 'Jazz Funk', 'Incognito', 'Contemporary Jazz', 335, 93, 3.6),
(16, 'Ko-Ko', 1945, '-', 'Charlie Parker', 'Jazz', 460, 121, 3.8),
(17, 'Now\'s the Time', 1945, '-', 'Charlie Parker', 'Jazz', 351, 78, 4.5),
(18, 'Numb', 2003, 'Meteora', 'Linkin Park', 'Alternative Metal', 613, 146, 4.2),
(19, 'Crawling', 2000, 'Hybrid Theory', 'Linkin Park', 'Alternative Metal', 529, 129, 4.1),
(20, 'What I\'ve Done', 2007, 'Minutes to Midnight', 'Linkin Park', 'Alternative Rock', 348, 81, 4.3),
(21, 'The Catalyst', 2010, 'A Thousand Suns', 'Linkin Park', 'Electronic Rock', 557, 159, 3.5),
(22, 'Burn It Down', 2012, 'Living Things', 'Linkin Park', 'Electronic Rock', 655, 156, 4.2),
(23, 'Lost in the Echo', 2012, 'Living Things', 'Linkin Park', 'Alternative Rock', 324, 81, 4),
(24, 'Castle of Glass', 2012, 'Living Things', 'Linkin Park', 'Electronic Rock', 241, 65, 3.7),
(25, 'Powerless', 2012, 'Living Things', 'Linkin Park', 'Alternative Rock', 335, 78, 4.3),
(30, 'Is This Love', 1978, 'Kaya', 'Bob Marley', 'Reggae', 529, 129, 4.1),
(27, 'Same Old Love', 2015, 'Revival', 'Selena Gomez', 'Electropop', 504, 112, 4.5),
(28, 'Could you be Loved', 1980, 'Uprising', 'Bob Marley', 'Reggae', 296, 74, 4),
(31, 'Fireflies', 2009, 'Ocean Eyes', 'Owl City', 'Electropop', 480, 148, 3.3),
(32, 'Buffalo Soldier', 1983, 'Confrontation', 'Bob Marley', 'Reggae', 347, 89, 3.9),
(33, 'One Love', 1984, 'Exodus', 'Bob Marley', 'Reggae', 353, 107, 3.3),
(34, 'No Woman No Cry', 1975, 'Live!', 'Bob Marley', 'Reggae', 602, 140, 4.3),
(36, 'Let You Go', 2017, 'Bloom', 'Machine Gun Kelly', 'Hip-hop', 296, 78, 3.8),
(39, 'Black Beatles', 2016, 'StremmLife 2', 'Rae Sremmurd', 'Hip-hop', 332, 81, 4.1),
(40, 'Starboy', 2016, 'Starboy', 'The Weeknd', 'R&B', 449, 107, 4.2),
(42, 'Work', 2016, 'Anti', 'Rihanna', 'Dancehall', 585, 130, 4.5),
(43, 'One Dance', 2016, 'Views', 'Drake', 'Dancehall', 252, 68, 3.7),
(44, 'Masakali', 2009, 'Delhi-6', 'Mohit Chauhan', 'Bollywood', 417, 107, 3.9),
(45, 'Hotline Bling', 2015, 'VIews', 'Drake', 'R&B', 346, 96, 3.6),
(46, 'Get Busy', 2003, 'Dutty Rock', 'Sean Paul', 'Dancehall', 273, 78, 3.5),
(47, 'Thriller', 1984, 'Thriller', 'Michael Jackson', 'Pop', 568, 129, 4.4),
(48, 'Closer', 2016, 'Collage', 'The Chainsmokers', 'EDM', 254, 65, 3.9),
(49, 'What Do You Mean?', 2015, 'Purpose', 'Justin Bieber', 'Pop', 311, 74, 4.2),
(50, 'Billie Jean', 1983, 'Thriller', 'Michael Jackson', 'Pop', 459, 148, 3.1),
(51, 'Sexual Healing', 1982, 'Midnight Love', 'Marvin Gaye', 'Funk', 303, 89, 3.4),
(52, 'Sorry', 2015, 'Purpose', 'Justin Bieber', 'Dancehall', 493, 112, 4.4),
(53, '24K Magic', 2016, '24K Magic', 'Bruno Mars', 'Funk', 297, 78, 3.8),
(54, 'The Lazy Song', 2011, 'Doo-Wops & Hooligans', 'Bruno Mars', 'Reggae', 515, 156, 3.3),
(55, 'This Is What You Came For', 2016, '- ', 'Calvin Harris', 'EDM', 555, 129, 4.3),
(56, 'There For You', 2017, '-', 'Martin Garrix', 'EDM', 472, 121, 3.9),
(57, 'Animals', 2013, 'Gold Skies', 'Martin Garrix', 'EDM', 448, 140, 3.2),
(58, 'Don\'t Let Me Down', 2015, 'Collage', 'The Chainsmokers', 'EDM', 607, 148, 4.1),
(59, 'Boyfriend', 2012, 'Believe', 'Justin Bieber', 'Pop', 306, 68, 4.5),
(60, 'As Long As You Love Me', 2012, 'Believe', 'Justin Bieber', 'Electropop', 449, 107, 4.2),
(61, 'Tik Tok', 2010, 'Animal', 'Kesha', 'Electropop', 316, 81, 3.9),
(62, 'Demons', 2013, 'Night Visions', 'Imagine Dragons', 'Alternative Rock', 208, 65, 3.2),
(63, 'Radioactive', 2012, 'Night Visions', 'Imagine Dragons', 'Electronic Rock', 409, 93, 4.4),
(64, 'Hawayein', 2017, 'Jab Harry Met Sejal', 'Arijit Singh', 'Bollywood ', 389, 111, 3.5),
(65, 'Phurrr', 2017, 'Jab Harry Met Sejal', 'Diplo', 'Bollywood', 464, 129, 3.6),
(66, 'Ae Dil Hai Mushkil', 2016, 'Ae Dil Hai Mushkil', 'Arijit Singh', 'Bollywood', 486, 113, 4.3),
(67, 'Beat It', 1983, 'Thriller', 'Michael Jackson', 'Pop', 286, 68, 4.2),
(68, 'Channa Mereya', 2016, 'Ae Dil Hai Mushkil', 'Arijit Singh', 'Bollywood', 548, 148, 3.7),
(69, 'Dangal', 2016, 'Dangal', 'Daler Mehandi', 'Bollywood', 217, 68, 3.2),
(70, 'Naina', 2016, 'Dangal', 'Arijit Singh', 'Bollywood', 616, 140, 4.4),
(71, 'Tere Sang Yaara', 2016, 'Rustom ', 'Atif Aslam', 'Bollywood', 338, 89, 3.8),
(72, 'Jeena Jeena', 2015, 'Badlapur', 'Atif Aslam', 'Bollywood', 324, 81, 4),
(73, 'Tu Chahiye', 2015, 'Bajrangi Bhaijaan', 'Atif Aslam', 'Bollywood', 432, 96, 4.5),
(74, 'Tu Jaane Na', 2009, 'Ajab Prem Ki Gazab Kahani', 'Atif Aslam', 'Bollywood', 265, 78, 3.4),
(75, 'Ude Dil Befikre', 2016, 'Befikre', 'Benny Dayal', 'Bollywood', 520, 121, 4.3),
(76, 'The Disco Song', 2012, 'Student of The Year', 'Benny Dayal', 'Bollywood', 303, 74, 4.1),
(77, 'Badtameez Dil', 2013, 'Ye Jawaani Hai Deewani', 'Benny Dayal', 'Bollywood', 364, 107, 3.4),
(78, 'Aao Raja', 2015, 'Gabbar', 'Neha Kakkar', 'Bollywood', 494, 150, 3.29),
(79, 'Badri Ki Dulhania', 2017, 'Badrinath Ki Dulhania', 'Neha Kakkar', 'Bollywood', 286, 65, 4.4),
(80, 'London Thumakda', 2015, 'Queen', 'Neha Kakkar', 'Bollywood', 608, 156, 3.9),
(81, 'Aashiq Surrender Hua', 2017, 'Badrinath Ki Dulhania', 'Shreya Ghosal', 'Bollywood', 284, 81, 3.5),
(82, 'Thodi Der', 2017, 'Half Girlfriend', 'Shreya Ghosal', 'Bollywood', 503, 129, 3.9),
(83, 'Baarish', 2017, 'Half Girlfriend', 'Arijit Singh', 'Bollywood', 602, 140, 4.3),
(84, 'Chikni Chameli', 2011, 'Agneepath', 'Shreya Ghosal', 'Bollywood', 289, 78, 3.7),
(85, 'Tu Tu Wahi', 1982, 'Yeh Vaada raha', 'Asha Bhosle', 'Bollywood', 340, 81, 4.2),
(86, 'Mere Mehboob Qayamat Hogi', 1962, 'Mr X in Bombay', 'Kishore Kumar', 'Bollywood', 493, 112, 4.4),
(87, 'Koi Humdum Na Raha', 1961, 'Jhumroo', 'Kishore Kumar', 'Bollywood', 560, 140, 4),
(88, 'Nainon Mein Sapna', 1983, 'Himmatwala', 'Lata Mangeshkar', 'Bollywood', 381, 93, 4.1),
(89, 'Didi Tera Dewar Deewana', 1994, 'Hum Aapke Hai Kaun', 'Lata Mangeshkar', 'Bollywood', 670, 149, 4.5),
(90, 'Pyar Kiya Toh Darna Kya', 1960, 'Mughal-E-Azam', 'Lata Mangeshkar', 'Bollywood', 281, 78, 3.6),
(91, 'Mere Khwabon Mein', 1995, 'Dilwale Dulhaniya Le Jayenge', 'Lata Mangeshkar', 'Bollywood', 422, 111, 3.8),
(92, 'Ae Mere Humsafar', 1988, 'Qayamat Se Qayamat Tak', 'Udit Narayan', 'Bollywood', 383, 89, 4.3),
(93, 'Hookah Bar', 2012, 'Khiladi 786', 'Himesh Reshamiya', 'Bollywood', 490, 129, 3.8),
(94, 'Ashiq Banaya Apne', 2005, 'Aashiq Banaya Apne', 'Himesh Reshamiya', 'Bollywood', 265, 78, 3.4),
(95, 'Jhalak Dikhlaja', 2006, 'Aksar', 'Himesh Reshamiya', 'Bollywood', 422, 96, 4.4),
(96, 'Mein Sharabi', 2012, 'Cocktail', 'Yo Yo Honey Singh', 'Bollywood', 417, 107, 3.9),
(97, 'Lungi Dance', 2013, 'Chennai Express', 'Yo Yo Honey Singh', 'Bollywood', 424, 121, 3.5),
(98, 'Yaar Na Miley', 2014, 'Kick', 'Yo Yo Honey Singh', 'Bollywood', 293, 65, 4.5),
(99, 'Agar Main Kahoon', 2007, 'Om Shanti Om', 'Sonu Nigam', 'Bollywood', 529, 129, 4.1),
(100, 'Abhi Mujh Mein Kahin', 2011, 'Agneepath', 'Sonu Nigam', 'Bollywood', 671, 156, 4.3),
(101, 'Sandese Aate Hai', 1997, 'Border', 'Sonu Nigam', 'Bollywood', 622, 148, 4.2),
(2, 'Baby', 2010, 'My World 2.0', 'Justin Bieber', 'Pop', 422, 96, 4.4),
(29, 'One Step Closer', 2000, 'Hybrid Theory', 'Linkin Park', 'Alternative Metal', 381, 112, 3.4),
(111, 'Everything At Once', 2011, 'Two', 'Lenka', 'Pop', 4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trivia`
--

CREATE TABLE `tbl_trivia` (
  `tID` int(11) NOT NULL,
  `fact` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trivia`
--

INSERT INTO `tbl_trivia` (`tID`, `fact`) VALUES
(1, 'The song \'Rap God\' sung by Eminem set the world record in 2013 for the most words used in a song.'),
(2, 'The song \'Despacito\' by Luis Fonsi is the most viewed music video on YouTube with 3.9 billion views.'),
(3, 'Taylor Swift is the world\'s highest paid musician having earned $170 million in 2016.'),
(4, 'Michael Jackson\'s \'Thriller\' which released in 1982 is the highest selling album of all time with 66 million copies sold worldwide.'),
(5, 'K-pop singer Psy\'s single \'Gangnam Style\' holds the Guinness World Record for being the first video to hit one billion views on YouTube.'),
(6, 'Bob Dylan is the only person to win an Oscar for Best Original Song as well as a Nobel Prize.'),
(7, 'Michael Jackson holds the record for having won the most number of grammys in one night(8).'),
(8, 'Taylor Swift is the youngest artist to win Album of the Year(Grammy). She was 20 years old when she won in 2010 for her album \'Fearless\'.'),
(9, 'Chester Bennington was the one who came up with the name Linkin Park for his band (taken from the name of a park in Santa Monica, CA). It was originally supposed to be spelled "Lincoln" but since the band couldn\'t afford to buy the domain name lincolnpark.com from its owner, they changed the spelling in order to buy linkinpark.com.'),
(10, 'A. R. Rahman\'s original name is Dileep Kumar and his wife\'s name is Saira Banu. Veteran Hindi superstar Yusuf Khan\'s screen name is Dilip Kumar and his actress wife\'s name is Saira Banu!'),
(15, 'A. R. Rahman likes to record music only in the night, but he makes an exception for the legendary Lata Mangeshkar.'),
(12, 'Saint Vincent, an island in the Caribbean, once issued Michael Jackson stamps.'),
(14, 'The Guinness World Records list Madonna as the world\'s most successful female recording artist of all time; she has sold over 200 million records worldwide.'),
(17, 'Lady Gaga\'s stage name is a reference to the song "Radio Ga-Ga" by Queen.'),
(18, '"Despacito" means "Slowly" in Spanish.'),
(19, 'Sample trivia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `sNo` int(10) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `emailId` varchar(50) DEFAULT NULL,
  `passWord` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`sNo`, `userName`, `emailId`, `passWord`) VALUES
(1, 'joe019', 'epic7joe@gmail.com', '4eae18cf9e54a0f62b44176d074cbe2f'),
(2, 'prateek', 'prateekkembhavi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'john', 'john@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'tom', 'tom@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_listitems`
--
ALTER TABLE `tbl_listitems`
  ADD PRIMARY KEY (`listId`,`listEntry`);

--
-- Indexes for table `tbl_lists`
--
ALTER TABLE `tbl_lists`
  ADD PRIMARY KEY (`listId`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`qID`);

--
-- Indexes for table `tbl_ratings`
--
ALTER TABLE `tbl_ratings`
  ADD PRIMARY KEY (`userId`,`songId`);

--
-- Indexes for table `tbl_songs`
--
ALTER TABLE `tbl_songs`
  ADD PRIMARY KEY (`sNo`);

--
-- Indexes for table `tbl_trivia`
--
ALTER TABLE `tbl_trivia`
  ADD PRIMARY KEY (`tID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`sNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_lists`
--
ALTER TABLE `tbl_lists`
  MODIFY `listId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `qID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tbl_songs`
--
ALTER TABLE `tbl_songs`
  MODIFY `sNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `tbl_trivia`
--
ALTER TABLE `tbl_trivia`
  MODIFY `tID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `sNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
