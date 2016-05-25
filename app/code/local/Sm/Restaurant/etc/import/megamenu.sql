
INSERT INTO `sm_menu_groups` (`id`, `title`, `content`, `status`, `created_time`, `update_time`) VALUES
(1, 'Group - Horizontal', '', 1, '2015-03-06 04:29:36', '2015-03-06 04:29:36'),
(3, 'Group - Vertical', '', 1, '2015-03-12 01:40:33', '2015-03-12 01:40:33');

INSERT INTO `sm_menu_items` (`id`, `title`, `show_title`, `description`, `status`, `align`, `show_as_group`, `rgt`, `lft`, `depth`, `group_id`, `cols_nb`, `item_width`, `cols_width`, `icon_url`, `target`, `type`, `data_type`, `content`, `created_time`, `update_time`, `custom_class`) VALUES
(1, 'Root[Group - Horizontal]', 1, '', 1, 1, 1, 160, 1, 0, 1, 6, 0, 0, '', '1', 0, '', '', '2015-03-06 04:29:36', '2015-03-06 04:29:36', ''),
(2, 'Shop by Department', 1, '', 1, 1, 1, 111, 2, 1, 1, 6, 0, 0, '', '3', 1, '', 'this is content', '2015-03-06 06:47:10', '2015-03-06 06:47:10', 'group-cat'),
(3, 'Fashion', 1, '', 1, 1, 1, 127, 114, 1, 1, 1, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9uZXctaWNvbi1oLnBuZyJ9fQ,,/key/db8d1c66e0b77e6b8082263f7d309afe/', '3', 4, 'category/69', '', '2015-06-23 08:03:45', '2015-06-23 08:03:45', ''),
(4, 'Electronic', 1, '', 1, 1, 1, 131, 128, 1, 1, 6, 0, 0, '', '3', 4, 'category/61', '', '2015-06-23 08:03:17', '2015-06-23 08:03:17', ''),
(5, 'Best Seller', 1, '', 1, 1, 1, 157, 132, 1, 1, 6, 0, 0, '', '3', 1, '', '', '2015-03-06 04:39:01', '2015-03-06 04:39:01', ''),
(6, 'Staff Picks', 1, '', 1, 1, 1, 159, 158, 1, 1, 1, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9mZWF0dXJlLWljb24taC5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/75', '', '2015-05-14 09:12:45', '2015-05-14 09:12:45', ''),
(7, 'Column 1', 2, '', 1, 1, 1, 22, 3, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-04-24 04:32:14', '2015-04-24 04:32:14', ''),
(8, 'Column 2', 2, '', 1, 1, 1, 42, 23, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-06 08:16:45', '2015-03-06 08:16:45', ''),
(9, 'Column 3', 2, '', 1, 1, 1, 58, 43, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-06 08:16:58', '2015-03-06 08:16:58', ''),
(10, 'Column 4', 2, '', 1, 1, 1, 78, 59, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-06 08:17:11', '2015-03-06 08:17:11', ''),
(11, 'Column 5', 2, '', 1, 1, 1, 94, 79, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-06 08:17:25', '2015-03-06 08:17:25', ''),
(12, 'Column 6', 2, '', 1, 1, 1, 110, 95, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-06 08:17:38', '2015-03-06 08:17:38', ''),
(13, 'Electronics', 1, '', 1, 1, 1, 21, 6, 3, 1, 6, 0, 0, '', '3', 1, '', '', '2015-03-06 07:36:10', '2015-03-06 07:36:10', ''),
(14, 'Computers', 1, '', 1, 1, 1, 8, 7, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/62', '', '2015-03-06 08:38:40', '2015-03-06 08:38:40', ''),
(15, 'Cameras & Cams', 1, '', 1, 1, 1, 10, 9, 4, 1, 6, 0, 0, '', '3', 4, 'category/63', '', '2015-03-06 07:38:27', '2015-03-06 07:38:27', ''),
(16, 'Televisions', 1, '', 1, 1, 1, 12, 11, 4, 1, 6, 0, 0, '', '3', 4, 'category/64', '', '2015-03-06 07:38:57', '2015-03-06 07:38:57', ''),
(17, 'Audio & Videos', 1, '', 1, 1, 1, 14, 13, 4, 1, 6, 0, 0, '', '3', 4, 'category/65', '', '2015-03-06 07:39:42', '2015-03-06 07:39:42', ''),
(18, 'Gaming', 1, '', 1, 1, 1, 16, 15, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/66', '', '2015-03-06 09:14:26', '2015-03-06 09:14:26', ''),
(19, 'HealthCare Devices', 1, '', 1, 1, 1, 18, 17, 4, 1, 6, 0, 0, '', '3', 4, 'category/67', '', '2015-05-14 04:32:22', '2015-05-14 04:32:22', ''),
(20, 'Software & Antivirus', 1, '', 1, 1, 1, 20, 19, 4, 1, 6, 0, 0, '', '3', 4, 'category/68', '', '2015-03-06 07:41:18', '2015-03-06 07:41:18', ''),
(21, 'Fashion & Accessories', 1, '', 1, 1, 1, 41, 26, 3, 1, 6, 0, 0, '', '3', 1, '', '', '2015-05-14 04:30:57', '2015-05-14 04:30:57', ''),
(22, 'Men', 1, '', 1, 1, 1, 28, 27, 4, 1, 6, 0, 0, '', '3', 4, 'category/5', '', '2015-05-14 04:33:43', '2015-05-14 04:33:43', ''),
(23, 'Women', 1, '', 1, 1, 1, 30, 29, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/4', '', '2015-05-14 04:33:08', '2015-05-14 04:33:08', ''),
(24, 'Children & Babies', 1, '', 1, 1, 1, 32, 31, 4, 1, 6, 0, 0, '', '3', 4, 'category/70', '', '2015-03-06 07:49:32', '2015-03-06 07:49:32', ''),
(25, 'Shoes', 1, '', 1, 1, 1, 34, 33, 4, 1, 6, 0, 0, '', '3', 4, 'category/71', '', '2015-03-06 07:50:10', '2015-03-06 07:50:10', ''),
(26, 'Dresses', 1, '', 1, 1, 1, 36, 35, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/72', '', '2015-03-06 09:15:22', '2015-03-06 09:15:22', ''),
(27, 'Jewelries', 1, '', 1, 1, 1, 38, 37, 4, 1, 6, 0, 0, '', '3', 4, 'category/73', '', '2015-05-14 04:35:15', '2015-05-14 04:35:15', ''),
(28, 'Caps & Hats', 1, '', 1, 1, 1, 40, 39, 4, 1, 6, 0, 0, '', '3', 4, 'category/74', '', '2015-03-06 07:52:18', '2015-03-06 07:52:18', ''),
(29, 'Home & kitchens', 1, '', 1, 1, 1, 57, 46, 3, 1, 6, 0, 0, '', '3', 1, '', '', '2015-03-06 07:54:09', '2015-03-06 07:54:09', ''),
(30, 'Cookware', 1, '', 1, 1, 1, 48, 47, 4, 1, 6, 0, 0, '', '3', 4, 'category/76', '', '2015-03-06 07:54:52', '2015-03-06 07:54:52', ''),
(31, 'Dinnerware & Crockery', 1, '', 1, 1, 1, 50, 49, 4, 1, 6, 0, 0, '', '3', 4, 'category/77', '', '2015-03-06 07:55:32', '2015-03-06 07:55:32', ''),
(32, 'Bar & Glassware', 1, '', 1, 1, 1, 52, 51, 4, 1, 6, 0, 0, '', '3', 4, 'category/78', '', '2015-03-06 07:56:05', '2015-03-06 07:56:05', ''),
(33, 'Tableware & Cutlery', 1, '', 1, 1, 1, 54, 53, 4, 1, 6, 0, 0, '', '3', 4, 'category/79', '', '2015-03-06 07:56:35', '2015-03-06 07:56:35', ''),
(34, 'Storage', 1, '', 1, 1, 1, 56, 55, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/80', '', '2015-03-06 09:15:44', '2015-03-06 09:15:44', ''),
(35, 'Sport & Fitness', 1, '', 1, 1, 1, 77, 62, 3, 1, 6, 0, 0, '', '3', 1, '', '', '2015-03-06 07:58:07', '2015-03-06 07:58:07', ''),
(36, 'Yoga Mats', 1, '', 1, 1, 1, 64, 63, 4, 1, 6, 0, 0, '', '3', 4, 'category/82', '', '2015-03-06 07:58:38', '2015-03-06 07:58:38', ''),
(37, 'Ab Exercisers', 1, '', 1, 1, 1, 66, 65, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/83', '', '2015-03-06 09:18:42', '2015-03-06 09:18:42', ''),
(38, 'Gym Gloves', 1, '', 1, 1, 1, 68, 67, 4, 1, 6, 0, 0, '', '3', 4, 'category/84', '', '2015-03-06 07:59:46', '2015-03-06 07:59:46', ''),
(39, 'Support', 1, '', 1, 1, 1, 70, 69, 4, 1, 6, 0, 0, '', '3', 4, 'category/85', '', '2015-03-06 08:01:03', '2015-03-06 08:01:03', ''),
(40, 'Gym Balls', 1, '', 1, 1, 1, 72, 71, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/86', '', '2015-03-06 09:19:12', '2015-03-06 09:19:12', ''),
(41, 'Bars', 1, '', 1, 1, 1, 74, 73, 4, 1, 6, 0, 0, '', '3', 4, 'category/87', '', '2015-03-06 08:02:18', '2015-03-06 08:02:18', ''),
(42, 'Indoor', 1, '', 1, 1, 1, 76, 75, 4, 1, 6, 0, 0, '', '3', 4, 'category/88', '', '2015-03-06 08:02:47', '2015-03-06 08:02:47', ''),
(43, 'Outdoor adventure', 1, '', 1, 1, 1, 93, 82, 3, 1, 6, 0, 0, '', '3', 1, '', '', '2015-03-06 08:04:04', '2015-03-06 08:04:04', ''),
(44, 'Camping & Hiking', 1, '', 1, 1, 1, 84, 83, 4, 1, 6, 0, 0, '', '3', 4, 'category/90', '', '2015-03-06 08:04:48', '2015-03-06 08:04:48', ''),
(45, 'Cycling', 1, '', 1, 1, 1, 86, 85, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/91', '', '2015-03-06 09:19:37', '2015-03-06 09:19:37', ''),
(46, 'Motorsports', 1, '', 1, 1, 1, 88, 87, 4, 1, 6, 0, 0, '', '3', 4, 'category/92', '', '2015-03-06 08:06:16', '2015-03-06 08:06:16', ''),
(47, 'Running', 1, '', 1, 1, 1, 90, 89, 4, 1, 6, 0, 0, '', '3', 4, 'category/93', '', '2015-03-06 08:06:47', '2015-03-06 08:06:47', ''),
(48, 'Other Sports', 1, '', 1, 1, 1, 92, 91, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/94', '', '2015-03-06 09:20:07', '2015-03-06 09:20:07', ''),
(49, 'Beauty & Health', 1, '', 1, 1, 1, 109, 98, 3, 1, 6, 0, 0, '', '3', 1, '', '', '2015-03-06 08:11:22', '2015-03-06 08:11:22', ''),
(50, 'Mind & Body', 1, '', 1, 1, 1, 100, 99, 4, 1, 6, 0, 0, '', '3', 4, 'category/96', '', '2015-03-06 08:11:57', '2015-03-06 08:11:57', ''),
(51, 'Yoga & Pilates', 1, '', 1, 1, 1, 102, 101, 4, 1, 6, 0, 0, '', '3', 4, 'category/97', '', '2015-03-06 08:12:40', '2015-03-06 08:12:40', ''),
(52, 'Get Stronger', 1, '', 1, 1, 1, 104, 103, 4, 1, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/89f77519d787ac5681625e31b7e0dd4e/', '3', 4, 'category/98', '', '2015-03-06 09:20:37', '2015-03-06 09:20:37', ''),
(53, 'Hair &  Makeup', 1, '', 1, 1, 1, 106, 105, 4, 1, 6, 0, 0, '', '3', 4, 'category/99', '', '2015-03-06 08:14:38', '2015-03-06 08:14:38', ''),
(54, 'Lose Weight', 1, '', 1, 1, 1, 108, 107, 4, 1, 6, 0, 0, '', '3', 4, 'category/100', '', '2015-03-06 08:15:38', '2015-03-06 08:15:38', ''),
(55, 'Black friday', 2, '', 1, 1, 1, 5, 4, 3, 1, 6, 0, 0, '', '3', 7, '', '<a class="static-link-top" title="Black friday" href="#">Black friday</a>', '2015-04-24 04:32:17', '2015-04-24 04:32:17', ''),
(56, '2015 fashion trend', 2, '', 1, 1, 1, 25, 24, 3, 1, 6, 0, 0, '', '3', 7, '', '<a class="static-link-top" title="2015 fashion trend" href="#">2015 fashion trend</a>', '2015-03-06 08:21:41', '2015-03-06 08:21:41', ''),
(57, 'Top rated products 2014', 2, '', 1, 1, 1, 45, 44, 3, 1, 6, 0, 0, '', '3', 7, '', '<a class="static-link-top" title="Top rate products 2014" href="#">Top rated products 2014</a>', '2015-05-14 04:27:35', '2015-05-14 04:27:35', ''),
(58, 'Iphone 6', 2, '', 1, 1, 1, 61, 60, 3, 1, 6, 0, 0, '', '3', 7, '', '<a class="static-link-top" title="Iphone 6" href="#">Iphone 6</a>', '2015-03-06 08:23:18', '2015-03-06 08:23:18', ''),
(59, 'Best laptop for gaming', 2, '', 1, 1, 1, 81, 80, 3, 1, 6, 0, 0, '', '3', 7, '', '<a class="static-link-top" title="Best latop for gaming" href="#">Best laptop for gaming</a>', '2015-05-14 04:28:32', '2015-05-14 04:28:32', ''),
(60, 'Best Business Laptops', 2, '', 1, 1, 1, 97, 96, 3, 1, 6, 0, 0, '', '3', 7, '', '<a class="static-link-top" title="Best Business Laptops" href="#">Best Business Laptops</a>', '2015-05-20 09:07:28', '2015-05-20 09:07:28', ''),
(61, 'New Arrivals Product', 2, '', 1, 1, 1, 130, 129, 2, 1, 6, 0, 0, '', '3', 7, '', '<div class="product-megamenu">\r\n{{block type="basicproducts/list" name="basicproducts.list.default" template="sm/basicproducts/product-menu.phtml" }}\r\n</div>', '2015-03-09 02:42:08', '2015-03-09 02:42:08', ''),
(62, 'Column 1', 2, '', 1, 1, 1, 136, 133, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-09 04:14:48', '2015-03-09 04:14:48', ''),
(63, 'Column 2', 2, '', 1, 1, 1, 140, 137, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-09 04:15:16', '2015-03-09 04:15:16', ''),
(64, 'Column 3', 2, '', 1, 1, 1, 144, 141, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-09 04:15:44', '2015-03-09 04:15:44', ''),
(65, 'Column 4', 2, '', 1, 1, 1, 148, 145, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-09 04:15:59', '2015-03-09 04:15:59', ''),
(66, 'Column 5', 2, '', 1, 1, 1, 152, 149, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-09 04:18:43', '2015-03-09 04:18:43', ''),
(67, 'Column 6', 2, '', 1, 1, 1, 156, 153, 2, 1, 1, 0, 0, '', '3', 1, '', '', '2015-03-09 04:17:00', '2015-03-09 04:17:00', ''),
(68, 'Static Men', 2, '', 1, 1, 1, 135, 134, 3, 1, 6, 0, 0, '', '3', 7, '', '<div class="static-category">\r\n     <div class="image-cat-st">\r\n          <a title="Men" href="#"><img src="{{media url="wysiwyg/image-cat/men-image-menu.jpg"}}" alt="Men" /></a>\r\n     </div>\r\n\r\n     <div class="title-cat-st">\r\n          <h2><a title="Men" href="#">Men</a></h2>\r\n     </div>\r\n\r\n     <div class="des-cat-st">\r\n         <p>Veritatis officia expedita excepteur labore etiam leo class</p>\r\n     </div>\r\n\r\n</div>', '2015-05-14 08:49:12', '2015-05-14 08:49:12', ''),
(69, 'Static Womens & Accesories', 2, '', 1, 1, 1, 139, 138, 3, 1, 6, 0, 0, '', '3', 7, '', '<div class="static-category">\r\n     <div class="image-cat-st">\r\n          <a title="Women & Accessories" href="#"><img src="{{media url="wysiwyg/image-cat/women-image-menu.jpg"}}" alt="Women & Accessories" /></a>\r\n     </div>\r\n\r\n     <div class="title-cat-st">\r\n          <h2><a title="Women & Accessories" href="#">Women & Accessories</a></h2>\r\n     </div>\r\n\r\n     <div class="des-cat-st">\r\n         <p>Morbi laboriosam recusandae iure</p>\r\n     </div>\r\n\r\n</div>', '2015-05-14 08:49:28', '2015-05-14 08:49:28', ''),
(70, 'Static Out Door & Sports', 2, '', 1, 1, 1, 143, 142, 3, 1, 6, 0, 0, '', '3', 7, '', '<div class="static-category">\r\n     <div class="image-cat-st">\r\n          <a title="Out Door & Sports" href="#"><img src="{{media url="wysiwyg/image-cat/sport-image-menu.jpg"}}" alt="Out Door & Sports" /></a>\r\n     </div>\r\n\r\n     <div class="title-cat-st">\r\n          <h2><a title="Out Door & Sports" href="#">Out Door & Sports</a></h2>\r\n     </div>\r\n\r\n     <div class="des-cat-st">\r\n         <p>Veritatis officia expedita excepteur labore etiam leo class</p>\r\n     </div>\r\n\r\n</div>', '2015-05-14 08:49:45', '2015-05-14 08:49:45', ''),
(71, 'Health Care Devices', 2, '', 1, 1, 1, 147, 146, 3, 1, 6, 0, 0, '', '3', 7, '', '<div class="static-category">\r\n     <div class="image-cat-st">\r\n          <a title="Health Care Devices" href="#"><img src="{{media url="wysiwyg/image-cat/health-image-menu.jpg"}}" alt="Health Care Devices" /></a>\r\n     </div>\r\n\r\n     <div class="title-cat-st">\r\n          <h2><a title="Health Care Devices" href="#">Health Care Devices</a></h2>\r\n     </div>\r\n\r\n     <div class="des-cat-st">\r\n         <p>Phasellus semper quaerat nullam vulputate phasellus augue modi</p>\r\n     </div>\r\n\r\n</div>', '2015-05-14 08:50:02', '2015-05-14 08:50:02', ''),
(72, 'Home & Kitchen', 2, '', 1, 1, 1, 151, 150, 3, 1, 6, 0, 0, '', '3', 7, '', '<div class="static-category">\r\n     <div class="image-cat-st">\r\n          <a title="Home & Kitchen" href="#"><img src="{{media url="wysiwyg/image-cat/home-kitchen-image-menu.jpg"}}" alt="Home & Kitchen" /></a>\r\n     </div>\r\n\r\n     <div class="title-cat-st">\r\n          <h2><a title="Home & Kitchen" href="#">Home & Kitchen</a></h2>\r\n     </div>\r\n\r\n     <div class="des-cat-st">\r\n         <p>Semper quaerat nullam vulputate phasellus augue modi</p>\r\n     </div>\r\n\r\n</div>', '2015-05-14 08:50:20', '2015-05-14 08:50:20', ''),
(73, 'Fishing', 2, '', 1, 1, 1, 155, 154, 3, 1, 6, 0, 0, '', '3', 7, '', '<div class="static-category">\r\n     <div class="image-cat-st">\r\n          <a title="Fishing" href="#"><img src="{{media url="wysiwyg/image-cat/fishing-image-menu.jpg"}}" alt="Fishing" /></a>\r\n     </div>\r\n\r\n     <div class="title-cat-st">\r\n          <h2><a title="Fishing" href="#">Fishing</a></h2>\r\n     </div>\r\n\r\n     <div class="des-cat-st">\r\n         <p>Phasellus semper quaerat nullam vulputate phasellus augue modi</p>\r\n     </div>\r\n\r\n</div>', '2015-05-14 08:50:39', '2015-05-14 08:50:39', ''),
(75, 'Root[Group - Vertical]', 1, '', 1, 1, 1, 128, 1, 0, 3, 6, 0, 0, '', '1', 0, '', '', '2015-03-12 01:40:33', '2015-03-12 01:40:33', ''),
(76, 'Electronics', 1, '', 1, 1, 1, 73, 2, 1, 3, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/255d2069faa3a99a6e0a2716be244faf/', '3', 4, 'category/61', '', '2015-03-17 09:44:28', '2015-03-17 09:44:28', 'fa fa-laptop'),
(77, 'Apparel', 1, '', 1, 1, 1, 75, 74, 1, 3, 6, 0, 0, '', '3', 4, 'category/103', '', '2015-03-17 09:46:28', '2015-03-17 09:46:28', 'fa fa-female'),
(78, 'Auto & Bike', 1, '', 1, 1, 1, 117, 76, 1, 3, 6, 0, 0, '', '3', 4, 'category/109', '', '2015-03-17 09:45:29', '2015-03-17 09:45:29', 'fa fa-car'),
(79, 'Home & Kitchens', 1, '', 1, 1, 1, 119, 118, 1, 3, 6, 0, 0, '', '3', 4, 'category/75', '', '2015-03-12 02:42:15', '2015-03-12 02:42:15', 'fa fa-home'),
(80, 'Beauty & Health', 1, '', 1, 1, 1, 121, 120, 1, 3, 6, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant1910/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi5wbmcifX0,/key/255d2069faa3a99a6e0a2716be244faf/', '3', 4, 'category/95', '', '2015-03-12 03:00:27', '2015-03-12 03:00:27', 'fa fa-leaf'),
(81, 'Fashion & Accesories', 1, '', 1, 1, 1, 123, 122, 1, 3, 6, 0, 0, '', '3', 4, 'category/69', '', '2015-03-16 06:52:06', '2015-03-16 06:52:06', 'fa fa-scissors'),
(82, 'Sport & Fitness', 1, '', 1, 1, 1, 125, 124, 1, 3, 6, 0, 0, '', '3', 4, 'category/81', '', '2015-03-16 06:52:45', '2015-03-16 06:52:45', 'fa fa-trophy'),
(83, 'Outdoor adventure', 1, '', 1, 1, 1, 127, 126, 1, 3, 6, 0, 0, '', '3', 4, 'category/89', '', '2015-03-16 06:53:44', '2015-03-16 06:53:44', 'fa fa-compass'),
(84, 'Column 1', 2, '', 1, 1, 1, 92, 77, 2, 3, 2, 0, 0, '', '3', 1, '', '', '2015-03-17 09:22:23', '2015-03-17 09:22:23', 'column-fix'),
(85, 'Column 2', 2, '', 1, 1, 1, 112, 93, 2, 3, 2, 0, 0, '', '3', 1, '', '', '2015-03-17 09:37:29', '2015-03-17 09:37:29', 'column-fix'),
(86, 'Column 3', 2, '', 1, 1, 1, 116, 113, 2, 3, 2, 0, 0, '', '3', 1, '', '', '2015-03-17 09:39:28', '2015-03-17 09:39:28', 'column-fix-2'),
(87, 'Style', 1, '', 1, 1, 1, 79, 78, 3, 3, 6, 0, 0, '', '3', 1, '', '', '2015-03-17 08:43:58', '2015-03-17 08:43:58', ''),
(88, 'Sedan', 1, '', 1, 1, 1, 83, 82, 3, 3, 6, 0, 0, '', '3', 4, 'category/112', '', '2015-03-17 08:45:21', '2015-03-17 08:45:21', ''),
(89, 'Minival', 1, '', 1, 1, 1, 85, 84, 3, 3, 6, 0, 0, '', '3', 4, 'category/113', '', '2015-03-17 08:46:47', '2015-03-17 08:46:47', ''),
(90, 'Pickup', 1, '', 1, 1, 1, 81, 80, 3, 3, 6, 0, 0, '', '3', 4, 'category/114', '', '2015-03-17 08:47:24', '2015-03-17 08:47:24', ''),
(91, 'Convertible', 1, '', 1, 1, 1, 87, 86, 3, 3, 6, 0, 0, '', '3', 4, 'category/115', '', '2015-03-17 08:48:30', '2015-03-17 08:48:30', ''),
(92, 'Hatchback', 1, '', 1, 1, 1, 89, 88, 3, 3, 6, 0, 0, '', '3', 4, 'category/116', '', '2015-03-17 08:49:33', '2015-03-17 08:49:33', ''),
(93, 'SUV', 1, '', 1, 1, 1, 91, 90, 3, 3, 6, 0, 0, '', '3', 4, 'category/117', '', '2015-03-17 08:50:08', '2015-03-17 08:50:08', ''),
(94, 'Brand', 1, '', 1, 1, 1, 95, 94, 3, 3, 6, 0, 0, '', '3', 1, '', '', '2015-03-17 08:50:48', '2015-03-17 08:50:48', ''),
(95, 'Volvo', 1, '', 1, 1, 1, 97, 96, 3, 3, 6, 0, 0, '', '3', 4, 'category/118', '', '2015-03-17 08:51:28', '2015-03-17 08:51:28', ''),
(96, 'KIA', 1, '', 1, 1, 1, 99, 98, 3, 3, 6, 0, 0, '', '3', 4, 'category/119', '', '2015-03-17 08:52:04', '2015-03-17 08:52:04', ''),
(97, 'Mercedes', 1, '', 1, 1, 1, 101, 100, 3, 3, 6, 0, 0, '', '3', 4, 'category/120', '', '2015-03-17 08:53:12', '2015-03-17 08:53:12', ''),
(98, 'BMW', 1, '', 1, 1, 1, 103, 102, 3, 3, 6, 0, 0, '', '3', 4, 'category/121', '', '2015-03-17 08:53:49', '2015-03-17 08:53:49', ''),
(99, 'Porche', 1, '', 1, 1, 1, 105, 104, 3, 3, 6, 0, 0, '', '3', 4, 'category/122', '', '2015-03-17 08:54:36', '2015-03-17 08:54:36', ''),
(100, 'Hyundai', 1, '', 1, 1, 1, 107, 106, 3, 3, 6, 0, 0, '', '3', 4, 'category/123', '', '2015-03-17 08:55:44', '2015-03-17 08:55:44', ''),
(101, 'Audi', 1, '', 1, 1, 1, 109, 108, 3, 3, 6, 0, 0, '', '3', 4, 'category/124', '', '2015-03-17 08:56:21', '2015-03-17 08:56:21', ''),
(102, 'Volkwagen', 1, '', 1, 1, 1, 111, 110, 3, 3, 6, 0, 0, '', '3', 4, 'category/125', '', '2015-03-17 08:56:52', '2015-03-17 08:56:52', ''),
(103, 'Image', 2, '', 1, 1, 1, 115, 114, 3, 3, 6, 0, 0, '', '3', 7, '', '<div class="cat-image">\r\n<a title="Static Image" href="#"><img src="{{media url="wysiwyg/image-cat/img-cart-item.jpg"}}" alt="Static Image" /></a>\r\n</div>', '2015-05-14 08:57:40', '2015-05-14 08:57:40', ''),
(104, 'Column 1', 2, '', 1, 1, 1, 36, 3, 2, 3, 3, 0, 0, '', '3', 1, '', '', '2015-03-19 02:35:26', '2015-03-19 02:35:26', 'remove-padding'),
(105, 'Column 2', 2, '', 1, 1, 1, 70, 37, 2, 3, 3, 0, 0, '', '3', 1, '', '', '2015-03-19 02:35:49', '2015-03-19 02:35:49', 'remove-padding'),
(106, 'Column 1', 2, '', 1, 1, 1, 19, 4, 3, 3, 3, 0, 0, '', '3', 1, '', '', '2015-03-19 01:42:05', '2015-03-19 01:42:05', ''),
(107, 'Column 2', 2, '', 1, 1, 1, 35, 20, 3, 3, 3, 0, 0, '', '3', 1, '', '', '2015-03-19 02:38:16', '2015-03-19 02:38:16', 'add-padding'),
(108, 'Style', 1, '', 1, 1, 1, 6, 5, 4, 3, 6, 0, 0, '', '3', 1, '', '', '2015-03-19 01:43:45', '2015-03-19 01:43:45', ''),
(109, 'Sedan', 1, '', 1, 1, 1, 12, 11, 4, 3, 6, 0, 0, '', '3', 4, 'category/112', '', '2015-03-19 01:46:19', '2015-03-19 01:46:19', ''),
(110, 'Minival', 1, '', 1, 1, 1, 10, 9, 4, 3, 6, 0, 0, '', '3', 4, 'category/113', '', '2015-03-19 01:47:43', '2015-03-19 01:47:43', ''),
(111, 'Pickup', 1, '', 1, 1, 1, 14, 13, 4, 3, 6, 0, 0, '', '3', 4, 'category/114', '', '2015-03-19 01:50:13', '2015-03-19 01:50:13', ''),
(112, 'Convertible', 1, '', 1, 1, 1, 16, 15, 4, 3, 6, 0, 0, '', '3', 4, 'category/115', '', '2015-03-19 01:51:35', '2015-03-19 01:51:35', ''),
(113, 'Hatchback', 1, '', 1, 1, 1, 18, 17, 4, 3, 6, 0, 0, '', '3', 4, 'category/116', '', '2015-03-19 01:52:43', '2015-03-19 01:52:43', ''),
(114, 'SUV', 1, '', 1, 1, 1, 8, 7, 4, 3, 6, 0, 0, '', '3', 4, 'category/117', '', '2015-03-19 01:53:18', '2015-03-19 01:53:18', ''),
(115, 'Brands', 1, '', 1, 1, 1, 22, 21, 4, 3, 6, 0, 0, '', '3', 1, '', '', '2015-03-19 01:54:44', '2015-03-19 01:54:44', ''),
(116, 'Volvo', 1, '', 1, 1, 1, 26, 25, 4, 3, 6, 0, 0, '', '3', 4, 'category/118', '', '2015-03-19 01:55:19', '2015-03-19 01:55:19', ''),
(117, 'KIA', 1, '', 1, 1, 1, 28, 27, 4, 3, 6, 0, 0, '', '3', 4, 'category/119', '', '2015-03-19 01:56:21', '2015-03-19 01:56:21', ''),
(118, 'Mercedes', 1, '', 1, 1, 1, 24, 23, 4, 3, 6, 0, 0, '', '3', 4, 'category/120', '', '2015-03-19 01:57:41', '2015-03-19 01:57:41', ''),
(119, 'BMW', 1, '', 1, 1, 1, 30, 29, 4, 3, 6, 0, 0, '', '3', 4, 'category/119', '', '2015-03-19 01:58:34', '2015-03-19 01:58:34', ''),
(120, 'Porche', 1, '', 1, 1, 1, 32, 31, 4, 3, 6, 0, 0, '', '3', 4, 'category/122', '', '2015-03-19 01:59:34', '2015-03-19 01:59:34', ''),
(121, 'Hyundai', 1, '', 1, 1, 1, 34, 33, 4, 3, 6, 0, 0, '', '3', 4, 'category/123', '', '2015-03-19 02:00:33', '2015-03-19 02:00:33', ''),
(122, 'Column 1', 2, '', 1, 1, 1, 53, 38, 3, 3, 3, 0, 0, '', '3', 1, '', '', '2015-03-19 02:11:01', '2015-03-19 02:11:01', ''),
(123, 'Column 2', 2, '', 1, 1, 1, 69, 54, 3, 3, 3, 0, 0, '', '3', 1, '', '', '2015-03-19 02:38:52', '2015-03-19 02:38:52', 'add-padding'),
(124, 'Orther', 1, '', 1, 1, 1, 40, 39, 4, 3, 6, 0, 0, '', '3', 1, '', '', '2015-03-19 02:12:41', '2015-03-19 02:12:41', ''),
(125, 'Computers', 1, '', 1, 1, 1, 42, 41, 4, 3, 6, 0, 0, '', '3', 4, 'category/62', '', '2015-03-19 02:13:48', '2015-03-19 02:13:48', ''),
(126, 'Cameras & Cams', 1, '', 1, 1, 1, 44, 43, 4, 3, 6, 0, 0, '', '3', 4, 'category/63', '', '2015-03-19 02:14:29', '2015-03-19 02:14:29', ''),
(127, 'Televisions', 1, '', 1, 1, 1, 46, 45, 4, 3, 6, 0, 0, '', '3', 4, 'category/64', '', '2015-03-19 02:15:29', '2015-03-19 02:15:29', ''),
(128, 'Audio & Videos', 1, '', 1, 1, 1, 48, 47, 4, 3, 6, 0, 0, '', '3', 4, 'category/65', '', '2015-03-19 02:16:12', '2015-03-19 02:16:12', ''),
(129, 'Gaming', 1, '', 1, 1, 1, 50, 49, 4, 3, 6, 0, 0, '', '3', 4, 'category/66', '', '2015-03-19 02:17:52', '2015-03-19 02:17:52', ''),
(130, 'HelthCare Devices', 1, '', 1, 1, 1, 52, 51, 4, 3, 6, 0, 0, '', '3', 4, 'category/67', '', '2015-03-19 02:19:01', '2015-03-19 02:19:01', ''),
(131, 'Devices', 1, '', 1, 1, 1, 56, 55, 4, 3, 6, 0, 0, '', '3', 1, '', '', '2015-03-19 02:20:23', '2015-03-19 02:20:23', ''),
(132, 'Software & Antivirus', 1, '', 1, 1, 1, 58, 57, 4, 3, 6, 0, 0, '', '3', 4, 'category/68', '', '2015-03-19 02:21:24', '2015-03-19 02:21:24', ''),
(133, 'Microwave Ovens', 1, '', 1, 1, 1, 60, 59, 4, 3, 6, 0, 0, '', '3', 4, 'category/104', '', '2015-03-19 02:22:02', '2015-03-19 02:22:02', ''),
(134, 'Air Coolers', 1, '', 1, 1, 1, 62, 61, 4, 3, 6, 0, 0, '', '3', 4, 'category/105', '', '2015-03-19 02:22:35', '2015-03-19 02:22:35', ''),
(135, 'PC Components', 1, '', 1, 1, 1, 64, 63, 4, 3, 6, 0, 0, '', '3', 4, 'category/106', '', '2015-03-19 02:23:08', '2015-03-19 02:23:08', ''),
(136, 'Static Image', 2, '', 1, 1, 1, 72, 71, 2, 3, 6, 0, 0, '', '3', 7, '', '<div class="static-bottom-menu">\r\n<a href="#" title="Static Image"><img src="{{media url="wysiwyg/image-cat/image-megamenu.jpg"}}" alt="Static Image" /></a>\r\n</div>', '2015-05-14 08:57:16', '2015-05-14 08:57:16', ''),
(137, 'Insural Services', 1, '', 1, 1, 1, 66, 65, 4, 3, 6, 0, 0, '', '3', 4, 'category/126', '', '2015-03-19 02:51:08', '2015-03-19 02:51:08', ''),
(138, 'SecondHand', 1, '', 1, 1, 1, 68, 67, 4, 3, 6, 0, 0, '', '3', 4, 'category/127', '', '2015-03-19 02:51:44', '2015-03-19 02:51:44', ''),
(139, 'Features', 2, '', 1, 1, 1, 113, 112, 1, 1, 4, 0, 0, 'http://dev.ytcvn.com/ytc_templates/magento/sm-restaurant/index.php/admin/cms_wysiwyg/directive/___directive/e3ttZWRpYSB1cmw9Ind5c2l3eWcvaWNvbi1tZWdhbWVudS9ob3QtaWNvbi1oLnBuZyJ9fQ,,/key/db8d1c66e0b77e6b8082263f7d309afe/', '3', 7, '', '<div class="home-menu-dropdown">\r\n	<ul class="item-home-store layout-home">\r\n		<li class="title-menu-home">Layouts</li>\r\n		<li><a title="Home Style 1" href="{{store url="?___store=default&amp;___from_store=belgium"}}">Home Style 1</a></li>\r\n		<li><a title="Home Style 2" href="{{store url="?___store=belgium&amp;___from_store=default"}}">Home Style 2</a></li>\r\n		<li><a title="Home Style 3" href="{{store url="?___store=somaliland&amp;___from_store=default"}}">Home Style 3</a></li>\r\n		<li><a title="Layout Full Width" href="{{store url="?___store=default&amp;___from_store=belgium"}}">Layout Full Width</a></li>\r\n		<li><a title="Layout Boxed" href="{{store url="?___store=benin&amp;___from_store=default"}}">Layout Boxed</a></li>\r\n		<li><a title="Right to Left" href="{{store url="?___store=barbados&amp;___from_store=default"}}">RTL</a></li>\r\n	</ul>\r\n	\r\n	<ul class="item-home-store theme-color">\r\n		<li class="title-menu-home">Color Styles</li>\r\n		<li class="fern"><a title="Fern" href="{{store url="?___store=french&amp;___from_store=default"}}">Fern</a></li>\r\n		<li class="red"><a title="Red" href="{{store url="?___store=default&amp;___from_store=belgium"}}">Red</a></li>\r\n		<li class="blue"><a title="Blue" href="{{store url="?___store=german&amp;___from_store=default"}}">Blue</a></li>\r\n		<li class="orange"><a title="Orange" href="{{store url="?___store=argentina&amp;___from_store=default"}}">Orange</a></li>\r\n		<li class="green"><a title="Green" href="{{store url="?___store=bolivia&amp;___from_store=default"}}">Green</a></li>\r\n		<li class="purple"><a title="Red" href="{{store url="?___store=andorra&amp;___from_store=default"}}">Purple</a></li>\r\n	</ul>\r\n	\r\n	<ul class="item-home-store header-home">\r\n		<li class="title-menu-home">Headers</li>\r\n		<li><a title="Header Type 1" href="{{store url="?___store=default&amp;___from_store=belgium"}}">Header Type 1</a></li>\r\n		<li><a title="Header Type 2" href="{{store url="?___store=belgium&amp;___from_store=default"}}">Header Type 2</a></li>\r\n		<li><a title="Header Type 3" href="{{store url="?___store=somaliland&amp;___from_store=default"}}">Header Type 3</a></li>\r\n	</ul>\r\n	\r\n	<ul class="item-home-store detail-home">\r\n		<li class="title-menu-home">Product Detail Layouts</li>\r\n		<li><a title="Product Detail - Full" href="{{store url="dumas-kremas.html"}}">Product Detail - Full</a></li>\r\n		<li><a title="Product Detail - Left Sidebar" href="{{store url="dumas-kremas.html?detail_style=2"}}">Product Detail - Left Sidebar</a></li>\r\n		<li><a title="Product Detail - Right Sidebar" href="{{store url="dumas-kremas.html?detail_style=3"}}">Product Detail - Right Sidebar</a></li>\r\n	</ul>\r\n	\r\n	<div style="clear:both;">&nbsp;</div>\r\n	\r\n	\r\n	<ul class="item-home-store layout-home">\r\n		<li class="title-menu-home">About Us Layouts</li>\r\n		<li><a title="About Us Style 1" href="{{store url="about-us.html/?___store=default&amp;___from_store=argentina"}}">About Us Style 1</a></li>\r\n		<li><a title="About Us Style 2" href="{{store url="about-us.html/?___store=french&amp;___from_store=default"}}">About Us Style 2</a></li>\r\n		<li><a title="About Us Style 3" href="{{store url="about-us.html/?___store=german&amp;___from_store=default"}}">About Us Style 3</a></li>\r\n		<li><a title="About Us Style 4" href="{{store url="about-us.html/?___store=argentina&amp;___from_store=default"}}">About Us Style 4</a></li>\r\n	</ul>\r\n	\r\n	<ul class="item-home-store layout-home">\r\n		<li class="title-menu-home">Contact Us Layouts</li>\r\n		<li><a title="Contact Us Style 1" href="{{store url="contact-us.html/?___store=default&amp;___from_store=argentina"}}">Contact Us Style 1</a></li>\r\n		<li><a title="Contact Us Style 2" href="{{store url="contact-us.html/?___store=french&amp;___from_store=default"}}">Contact Us Style 2</a></li>\r\n		<li><a title="Contact Us Style 3" href="{{store url="contact-us.html/?___store=german&amp;___from_store=default"}}">Contact Us Style 3</a></li>\r\n		<li><a title="Contact Us Style 4" href="{{store url="contact-us.html/?___store=argentina&amp;___from_store=default"}}">Contact Us Style 4</a></li>\r\n	</ul>\r\n	\r\n	<ul class="item-home-store layout-home">\r\n		<li class="title-menu-home">404 Page Layout</li>\r\n		<li><a title="404 Page Style 1" href="{{store url="404page"}}">404 Page Style 1</a></li>\r\n	</ul>\r\n	\r\n	<style>\r\n		.home-menu-dropdown .item-home-store{\r\n			width:25%;\r\n		}\r\n	</style>\r\n</div>', '2015-06-24 03:15:59', '2015-06-24 03:15:59', 'home-item'),
(140, 'Simple Product', 1, '', 1, 1, 1, 116, 115, 2, 1, 6, 0, 0, '', '3', 3, 'product/959', '', '2015-06-24 02:54:29', '2015-06-24 02:54:29', ''),
(141, 'Grouped Product', 1, '', 1, 1, 1, 118, 117, 2, 1, 6, 0, 0, '', '3', 3, 'product/963', '', '2015-06-24 02:57:14', '2015-06-24 02:57:14', ''),
(142, 'Bundle Product', 1, '', 1, 1, 1, 120, 119, 2, 1, 6, 0, 0, '', '3', 3, 'product/969', '', '2015-06-24 02:57:49', '2015-06-24 02:57:49', ''),
(143, 'Virtual Product', 1, '', 1, 1, 1, 122, 121, 2, 1, 6, 0, 0, '', '3', 3, 'product/970', '', '2015-06-24 02:58:24', '2015-06-24 02:58:24', ''),
(144, 'Downloadable Product', 1, '', 1, 1, 1, 124, 123, 2, 1, 6, 0, 0, '', '3', 3, 'product/971', '', '2015-06-24 02:59:01', '2015-06-24 02:59:01', ''),
(145, 'Configurable Product', 1, '', 1, 1, 1, 126, 125, 2, 1, 6, 0, 0, '', '3', 3, 'product/978', '', '2015-06-24 02:59:37', '2015-06-24 02:59:37', '');
