-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:8889
-- 生成日期： 2024-02-06 04:30:03
-- 服务器版本： 5.7.39
-- PHP 版本： 7.4.33

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： portfolio_db
--

-- --------------------------------------------------------

--
-- 表的结构 tbl_contact
--

CREATE TABLE tbl_contact (
  contact_id int(11) NOT NULL,
  user_id int(11) DEFAULT NULL,
  first_name varchar(100) NOT NULL,
  last_name varchar(100) NOT NULL,
  email varchar(255) NOT NULL,
  content text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 tbl_media
--

CREATE TABLE tbl_media (
  media_id int(11) NOT NULL,
  file_name varchar(255) NOT NULL,
  project_id int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tbl_media
--

INSERT INTO tbl_media (media_id, file_name, project_id) VALUES
(1, 'mg_p1.png', 1),
(2, 'mg_p2.png', 1),
(3, 'mg_p3.jpg', 1),
(4, 'mg_p4.jpg', 1),
(5, 'mg_5.jpg', 1),
(6, 'mg_p6.jpg', 1),
(7, 'elin_bg.jpg', 2),
(8, 'elin_dp.jpg', 2),
(9, 'elin_cs.jpg', 2),
(10, 'elin_re.jpg', 2),
(11, 'elin_learned.jpg', 2),
(12, 'voco_bg.jpg', 3),
(13, 'voco_dp.jpg', 3),
(14, 'voco_re.jpg', 3),
(15, 'voco_cs.jpg', 3),
(16, 'voco_learned.jpg', 3);

-- --------------------------------------------------------

--
-- 表的结构 tbl_projects
--

CREATE TABLE tbl_projects (
  project_id int(11) NOT NULL,
  image_url varchar(255) NOT NULL,
  case_study varchar(255) NOT NULL,
  project_background text,
  design_process text,
  challenges_solutions text,
  results text,
  reflection_lessons_learned text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 tbl_projects
--

INSERT INTO tbl_projects (project_id, image_url, case_study, project_background, design_process, challenges_solutions, results, reflection_lessons_learned) VALUES
(1, 'pf04.jpg', 'Motion Graphic/World of Warcraft Arena', 'This is an exciting project, as designing dynamic 3D graphics is always interesting and challenging. The task involves utilizing Cinema 4D software to construct a personalized arena showcase and capturing an exhilarating video for it.', 'The process of choosing a theme can be quite a dilemma, but once the theme is established, everything progresses smoothly. This is also a very interesting part because electronic games often offer more imaginative possibilities than real-world competitive sports.\r\nAfter receiving the task requirements, what came to my mind was not just a grand and expansive scene with intricate structures and scattered lights but the content of the video. This implies that the arena must have an engaging theme.\r\nAfter receiving assistance from the professor, I confirmed my idea to create content with a competitive nature. While many people choose sports similar to instructional videos—competitive sports being a great option—I first thought of the competitive game I enjoy, World of Warcraft.', 'As a widely popular online game that has been around for many years, its resources are abundant. However, the distinctive art design and the vast, expansive game background posed challenges for this task.\r\n\r\nThe logos of both factions are overly complex. It\'s challenging to determine the timing of key events in the promotional video. Artistic requirements for lighting and material textures pose difficulties in this task.\r\n\r\nEspecially concerning the issue of material textures, it\'s crucial to strike a balance between realism and the virtual scale. The lighting should not be too dim, yet excessive brightness might compromise its distinctive features.', 'After repeatedly examining the game textures and content, I had a research direction, particularly studying some scenes that professionals recreated using Unreal Engine 5. The stunning realism achieved through Unreal\'s reset effect provided excellent affirmation and inspiration for my ideas.', '1.Insufficient understanding of material textures.\r\n\r\n2.Adequate preparation and research are necessary before initiating the object creation process to ensure a well- thought-out approach at each step.\r\n\r\n3.Perfect handling of lighting is essential; different lighting setups can create drastically different effects for the same object.'),
(2, 'pf02.png', 'Elin', 'In this project, we embarked on an exciting journey to redefine the essence of beauty products with Elin Cosmetics. Our goal was to create a line of makeup that not only enhances natural beauty but also adheres to the principles of sustainability and ethical sourcing. The project involved extensive research into organic ingredients, innovative packaging solutions, and a marketing strategy that aligns with modern consumer values.', 'The design process for Elin Cosmetics was centered around the concept of \'Nature Meets Elegance\'. We worked closely with graphic designers and product developers to create a visual identity that reflects simplicity and sophistication. Key elements included minimalist packaging, a subtle color palette, and a logo that embodies the brand\'s ethos. Each product was carefully formulated to ensure it meets our high standards for quality and environmental responsibility.', 'One of the significant challenges was differentiating Elin Cosmetics in a saturated market. To tackle this, we focused on unique selling propositions such as organic ingredients, cruelty-free testing, and eco-friendly packaging. Another challenge was ensuring supply chain transparency. We partnered with verified suppliers and implemented rigorous quality checks to maintain product integrity.', 'The launch of Elin Cosmetics was a resounding success. The brand was well-received for its commitment to sustainability and quality. Sales exceeded projections by 30% in the first quarter, and the feedback from customers has been overwhelmingly positive. The project has set a new benchmark in the beauty industry for combining luxury with responsibility.', 'The Elin Cosmetics project was not just a venture into beauty products, but a deep dive into the ethos of modern consumerism. We learned that aligning a brand with social and environmental values is not just ethically rewarding but also commercially viable. The challenge of maintaining high-quality standards while adhering to sustainable practices taught us the importance of innovation in product development. Balancing aesthetics with functionality in packaging design was a crucial lesson, emphasizing that beauty and practicality can coexist. This project reaffirmed our belief in the power of mindful branding and its impact on consumer choices. It highlighted the necessity for continuous learning and adaptation in an ever-evolving market, where consumer awareness and expectations are constantly changing. The success of Elin Cosmetics is a testament to the potential of brands that prioritize both purpose and profit.'),
(3, 'pf01.jpg', 'VOCO - Redefining Wireless Sound', 'The VOCO project was an ambitious endeavor to revolutionize the wireless audio experience. Our objective was to design and develop a set of Bluetooth earbuds that not only deliver superior sound quality but also boast an ergonomic design and long-lasting battery life. The challenge was to integrate advanced audio technology within a compact and user-friendly form factor, catering to the needs of audiophiles and casual listeners alike.', 'The design journey of VOCO Earbuds focused on achieving a balance between aesthetic appeal and functional utility. Collaborating with sound engineers and design specialists, we explored various shapes and materials to achieve optimal comfort and sound isolation. The interface of the earbuds was meticulously designed to be intuitive, allowing seamless control over audio playback and calls. Special attention was given to the durability of the materials to ensure they withstand daily wear and tear.', 'One of the primary challenges was embedding high-fidelity sound in a small device. We overcame this by utilizing cutting-edge audio drivers and noise-cancellation technology. Another significant hurdle was ensuring the earbuds remain securely in place during various activities. This led to the development of customizable ear tips and a unique design that contours to the ear\'s shape. Market differentiation was achieved by focusing on the product\'s sleek design and its ability to offer an immersive audio experience in a wireless format.', 'The launch of VOCO Earbuds marked a significant milestone in the wireless audio market. The product received accolades for its exceptional sound quality, comfort, and innovative design. Sales figures surpassed expectations, reflecting a strong market demand for high-quality wireless earbuds. The positive customer feedback highlighted the success of our design and technological choices, cementing VOCO\'s position as a leader in the audio industry.', 'The VOCO project reinforced the importance of user-centric design in technology products. We learned that understanding the end-user\'s lifestyle and preferences is crucial in creating a product that resonates with them. Balancing technical excellence with usability emerged as a key factor for success. The project also highlighted the need for continual innovation in a rapidly evolving tech market. It taught us that staying ahead of consumer trends and technological advancements is vital for maintaining a competitive edge.');

--
-- 转储表的索引
--

--
-- 表的索引 tbl_contact
--
ALTER TABLE tbl_contact
  ADD PRIMARY KEY (contact_id),
  ADD KEY user_id (user_id);

--
-- 表的索引 tbl_media
--
ALTER TABLE tbl_media
  ADD PRIMARY KEY (media_id),
  ADD KEY project_id (project_id);

--
-- 表的索引 tbl_projects
--
ALTER TABLE tbl_projects
  ADD PRIMARY KEY (project_id);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT tbl_contact
--
ALTER TABLE tbl_contact
  MODIFY contact_id int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT tbl_media
--
ALTER TABLE tbl_media
  MODIFY media_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT tbl_projects
--
ALTER TABLE tbl_projects
  MODIFY project_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 限制导出的表
--

--
-- 限制表 tbl_contact
--
ALTER TABLE tbl_contact
  ADD CONSTRAINT tbl_contact_ibfk_1 FOREIGN KEY (user_id) REFERENCES tbl_users (user_id);

--
-- 限制表 tbl_media
--
ALTER TABLE tbl_media
  ADD CONSTRAINT tbl_media_ibfk_1 FOREIGN KEY (project_id) REFERENCES tbl_projects (project_id);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
