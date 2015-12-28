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
    'groups' => 'Danh sách nhóm',
    'add:group' => 'Thêm nhóm',
    'requests' => 'Yêu cầu kết bạn',

    'members' => 'Thành viên',
    'member:add:error' => 'Một vài thông tin thiếu sót.Vui lòng thử lại sau',
    'member:added' => 'Yêu cầu đã được chấp nhận!',

    'member:request:deleted' => 'Yêu cầu không được chấp nhận!',
    'member:request:delete:fail' => 'Không thể từ chối yêu cầu! Thử lại sau.',
    'membership:cancel:succes' => 'Yêu cầu thành viên đã hủy!',
    'membership:cancel:fail' => 'Không thể hủy yêu cầu thành viên! Thử lại sau.',

    'group:added' => 'Nhóm đã được tạo thành công!',
    'group:add:fail' => 'Không thể tạo nhóm. Thử lại sau',

    'memebership:sent' => 'Yêu cầu đã được gửi thành công!',
    'memebership:sent:fail' => 'Không thể gửi yêu cầu.Thử lại sau',

    'group:updated' => 'Thông tin nhóm đã được cập nhật!',
    'group:update:fail' => 'Không thể cập nhật thông tin nhóm.Thử lại sau',

    'group:name' => 'Tên nhóm',
    'group:desc' => 'Mô tả của nhóm',
    'privacy:group:public' => 'Mọi người có thể nhìn thấy bài viết của nhóm. Chỉ thành viên nhóm mới thấy được bài viết của nhóm.',
    'privacy:group:close' => 'Mọi người không thể tìm thấy nhóm này. Chỉ thành viên của nhóm mới có thể đăng và xem bài viết.',

    'group:memb:remove' => 'Xóa',
    'leave:group' => 'Rời khỏi nhóm',
    'join:group' => 'Tham gia nhóm',
    'total:members' => 'Tổng số thành viên',
    'group:members' => "Thành viên (%s)",
    'view:all' => 'Xem tất cả',
    'member:requests' => 'CÁC YÊU CẦU (%s)',
    'about:group' => 'Thông tin nhóm',
    'cancel:membership' => 'Thành viên nhóm hủy',

    'no:requests' => 'Không có yêu cầu',
    'approve' => 'Chấp thuận',
    'decline' => 'Từ chối',
    'search:groups' => 'Tìm kiếm nhóm',

    'close:group:notice' => 'Tham gia nhóm này để xem các bài viết, hình ảnh, và các bình luận.',
    'closed:group' => 'Nhóm đóng',
    'group:admin' => 'Admin',
	
	'title:access:private:group' => 'Bài viết của nhóm',

	// #186 group join request message var1 = user, var2 = name of group
	'ossn:notifications:group:joinrequest' => '%s đã gửi yêu cầu xin tham gia nhóm %s',
	'ossn:group:by' => 'Bởi:',
	
	'group:deleted' => 'Nhóm và nội dung bài viết trong nhóm đã xóa',
	'group:delete:fail' => 'Nhóm không thể bị xóa',	
);
ossn_register_languages('vi', $vi); 
