<?php
//  VÒNG LẶP SWITCH

                                $data =10;
                                switch($data)
                                {
                                    case 10:echo 'đây là số 10'; break;
                                    case 'ok':echo'day la ok';break;
                                    case'hello';echo 'day la hello';break;
                                    default:echo 'toi thuc thi nhe';
                                }
//require-include  gọi 1 file php từ ngoài vào để thực thi
include();//                   khi mà nó chạy n gặp lỗi nó in ra lỗi nhưng thực thi hết
include_once();
require();            //khi nó chạy n gặp lỗi sẽ in ra lỗi và dừng lại
require_once();
 ?>