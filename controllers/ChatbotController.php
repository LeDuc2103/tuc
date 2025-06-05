<?php
// controllers/ChatbotController.php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once dirname(__FILE__) . '/../models/ChatbotModel.php';
header('Content-Type: application/json');

$question = isset($_POST['question']) ? trim($_POST['question']) : '';
$answer = 'Xin lỗi, mình chưa hiểu câu hỏi của bạn.';

if ($question !== '') {
    // Chuyển về chữ thường để so khớp tốt hơn
    $qLower = mb_strtolower($question, 'UTF-8');
    $tour = false;
    $tourName = '';
    $isAskingPrice = strpos($qLower, 'giá') !== false;
    $isAskingAvailability = strpos($qLower, 'còn chỗ') !== false || strpos($qLower, 'hết chỗ') !== false;

    // Nếu có từ "tour", lấy tên sau "tour"
    if (preg_match('/tour\s+([^\?\.]*)/iu', $qLower, $matches)) {
        $tourName = trim($matches[1]);
        // Loại bỏ các từ như "giá", "còn chỗ", "hết chỗ" khỏi tên tour nếu có
        $tourName = preg_replace('/(giá|còn chỗ|hết chỗ).*/iu', '', $tourName);
        $tour = ChatbotModel::getTourByName($tourName);
    }

    // Nếu không có từ "tour" hoặc không tìm thấy, thử lấy tên tour từ cuối câu hỏi
    if (!$tour) {
        // Lấy từ cuối câu hỏi (sau từ "giá", "còn chỗ", "hết chỗ" nếu có)
        if (preg_match('/giá\s+([^\?\.]*)/iu', $qLower, $matches) ||
            preg_match('/còn chỗ\s+([^\?\.]*)/iu', $qLower, $matches) ||
            preg_match('/hết chỗ\s+([^\?\.]*)/iu', $qLower, $matches)) {
            $tourName = trim($matches[1]);
            $tour = ChatbotModel::getTourByName($tourName);
        }
        // Nếu vẫn chưa tìm thấy, thử lấy từ cuối câu hỏi
        if (!$tour && preg_match('/([a-zA-Zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ\s]+)$/iu', $qLower, $matches)) {
            $tourName = trim($matches[1]);
            $tour = ChatbotModel::getTourByName($tourName);
        }
    }

    // Nếu tìm thấy tour cụ thể
    if ($tour) {
        // Định dạng trạng thái tour
        $trangthai = ($tour['TrangThai'] == 'concho' || $tour['TrangThai'] == '') ? 'Còn chỗ' : 
                    ($tour['TrangThai'] == 'dadat' ? 'Đã đặt hết' : 
                    ($tour['TrangThai'] == 'dahuy' ? 'Đã hủy' : $tour['TrangThai']));
        
        // Trả lời dựa trên loại câu hỏi
        if ($isAskingPrice) {
            $answer = 'Giá tour ' . $tour['TenTour'] . ' là ' . number_format($tour['Gia'],0,',','.') . ' VNĐ.';
        } elseif ($isAskingAvailability) {
            $answer = 'Tour ' . $tour['TenTour'] . ' hiện tại: ' . $trangthai . '.';
        } else {
            $answer = 'Tour ' . $tour['TenTour'] . ': Giá ' . number_format($tour['Gia'],0,',','.') . ' VNĐ, trạng thái: ' . $trangthai . '.';
        }
    } else {
        // Nếu không tìm thấy tour cụ thể, thử tìm kiếm rộng hơn
        $searchKeyword = $tourName;
        if (empty($searchKeyword)) {
            // Nếu không có tên tour cụ thể, sử dụng toàn bộ câu hỏi (loại bỏ các từ khóa)
            $searchKeyword = preg_replace('/(giá|còn chỗ|hết chỗ|tour)\s*/iu', '', $qLower);
        }
        
        $searchResults = ChatbotModel::searchTours($searchKeyword);
        
        if (!empty($searchResults)) {
            // Nếu tìm thấy nhiều kết quả
            if (count($searchResults) == 1) {
                // Nếu chỉ có 1 kết quả, xử lý như trường hợp tìm thấy tour cụ thể
                $tour = $searchResults[0];
                $trangthai = ($tour['TrangThai'] == 'concho' || $tour['TrangThai'] == '') ? 'Còn chỗ' : 
                            ($tour['TrangThai'] == 'dadat' ? 'Đã đặt hết' : 
                            ($tour['TrangThai'] == 'dahuy' ? 'Đã hủy' : $tour['TrangThai']));
                
                if ($isAskingPrice) {
                    $answer = 'Giá tour ' . $tour['TenTour'] . ' là ' . number_format($tour['Gia'],0,',','.') . ' VNĐ.';
                } elseif ($isAskingAvailability) {
                    $answer = 'Tour ' . $tour['TenTour'] . ' hiện tại: ' . $trangthai . '.';
                } else {
                    $answer = 'Tour ' . $tour['TenTour'] . ': Giá ' . number_format($tour['Gia'],0,',','.') . ' VNĐ, trạng thái: ' . $trangthai . '.';
                }
            } else {
                // Nếu có nhiều kết quả (tối đa 3 kết quả)
                $answer = 'Tôi tìm thấy một số tour phù hợp:';
                $count = 0;
                foreach ($searchResults as $tour) {
                    if ($count >= 3) break; // Giới hạn số lượng kết quả hiển thị
                    
                    $trangthai = ($tour['TrangThai'] == 'concho' || $tour['TrangThai'] == '') ? 'Còn chỗ' : 
                                ($tour['TrangThai'] == 'dadat' ? 'Đã đặt hết' : 
                                ($tour['TrangThai'] == 'dahuy' ? 'Đã hủy' : $tour['TrangThai']));
                    
                    $answer .= "\n- " . $tour['TenTour'] . ': Giá ' . number_format($tour['Gia'],0,',','.') . ' VNĐ, trạng thái: ' . $trangthai;
                    $count++;
                }
            }
        } else {
            $answer = 'Không tìm thấy tour phù hợp.';
        }
    }
}
echo $answer;
exit;
