<?php

return [
    'about_assets_title'           => 'Giới thiệu về Tài sản',
    'about_assets_text'            => 'Tài sản là các mục được theo dõi bằng số sê-ri hoặc thẻ nội dung. Chúng thường có giá trị cao hơn khi xác định một mục cụ thể.',
    'archived'  				=> 'Đã lưu trữ',
    'asset'  					=> 'Tài sản',
    'bulk_checkout'             => 'Checkout Tài sản',
    'bulk_checkin'              => 'Checkin Assets',
    'checkin'  					=> 'Checkin tài sản',
    'checkout'  				=> 'Tài sản thanh toán',
    'clone'  					=> 'Nhân đôi tài sản',
    'deployable'  				=> 'Cho phép cấp phát',
    'deleted'  					=> 'This asset has been deleted.',
    'edit'  					=> 'Sửa tài sản',
    'model_deleted'  			=> 'This Assets model has been deleted. You must restore the model before you can restore the Asset.',
    'requestable'               => 'Cho phép đề xuất',
    'requested'				    => 'Yêu cầu',
    'not_requestable'           => 'Not Requestable',
    'requestable_status_warning' => 'Không đổi trạng thái yêu cầu được',
    'restore'  					=> 'Phục hồi tài sản',
    'pending'  					=> 'Đang chờ',
    'undeployable'  			=> 'Không cho phép cấp phát',
    'view'  					=> 'Xem tài sản',
    'csv_error' => 'You have an error in your CSV file:',
    'import_text' => '
    <p>
    Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the Admin &gt; General Settings.
    </p>

    <p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p>

    <p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>
    ',
    'csv_import_match_f-l' => 'Try to match users by firstname.lastname (jane.smith) format',
    'csv_import_match_initial_last' => 'Try to match users by first initial last name (jsmith) format',
    'csv_import_match_first' => 'Try to match users by first name (jane) format',
    'csv_import_match_email' => 'Try to match users by email as username',
    'csv_import_match_username' => 'Try to match users by username',
    'error_messages' => 'Error messages:',
    'success_messages' => 'Thông báo thành công:',
    'alert_details' => 'Xem bên dưới để biết thêm chi tiết.',
    'custom_export' => 'Custom Export'
];