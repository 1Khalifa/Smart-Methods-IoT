SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE directions (
  ID int(6) NOT NULL,
  Direction varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE motors (
  ID int(6) NOT NULL,
  Engine1 int(3) NOT NULL,
  Engine2 int(3) NOT NULL,
  Engine3 int(3) NOT NULL,
  Engine4 int(3) NOT NULL,
  Engine5 int(3) NOT NULL,
  Engine6 int(3) NOT NULL,
  Switch tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE directions
  ADD PRIMARY KEY (ID);

ALTER TABLE motors
  ADD PRIMARY KEY (ID);


ALTER TABLE directions
  MODIFY ID int(6) NOT NULL AUTO_INCREMENT;

ALTER TABLE motors
  MODIFY ID int(6) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
