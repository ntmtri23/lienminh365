<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$vi = array(
	'com:ossn:invite' => 'Mời',			
	'com:ossn:invite:friends' => 'Mời bạn',
	'com:ossn:invite:friends:note' => 'Để mời bạn bè tham gia bạn trên mạng này, nhập địa chỉ email của họ và một tin nhắn ngắn gọn. Họ sẽ nhận được một email có chứa lời mời của bạn.',
	'com:ossn:invite:emails:note' => 'Địa chỉ email (Cách nhau bằng dấu ",")',
	'com:ossn:invite:emails:placeholder' => 'info@example.com, contact@example.com',
	'com:ossn:invite:message' => 'Tin nhắn',
		
    	'com:ossn:invite:mail:subject' => 'Lời mới tham gia %s',	
    	'com:ossn:invite:mail:message' => 'Bạn đã được mời tham gia %s của %s. Các thông báo:

%s

Để tham gia, truy cập đường dẫn sau:

%s

Thông tin liên kết: %s
',	
	'com:ossn:invite:mail:message:default' => 'Chào bạn,

Tôi muốn mời bạn tham gia mạng xã hội của tôi ở đây trên %s.

Thông tin liên kết : %s

Trân trọng.
%s',
	'com:ossn:invite:sent' => 'Lời mời của bạn đã được gửi đi. Bạn đã mời: %s.',
	'com:ossn:invite:wrong:emails' => 'Các địa chỉ email sau đây không hợp lệ: %s.',
	'com:ossn:invite:sent:failed' => 'Không thể mới các địa chỉ email sau: %s.',
	'com:ossn:invite:already:members' => 'Các địa chỉ email sau đã tham gia: %s',
	'com:ossn:invite:empty:emails' => 'Hãy thêm ít nhất 1 email',
);
ossn_register_languages('vi', $vi); 
