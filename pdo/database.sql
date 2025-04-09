SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

INSERT INTO `student` (`id`, `name`, `birthday`) VALUES
(1, 'Ahmed', '2004-02-19'),
(2, 'Houssem', '2004-11-08'),
(3, 'Sonia', '2004-12-01'),
(4, 'Islem', '2004-12-07'),
(5, 'Afra', '2008-04-18'),
(5, 'Ala', '2008-04-10'),
(6, 'Ilyes', '2004-05-02');

ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
