<?php
// models/ChatbotModel.php
include_once dirname(__FILE__) . '/../ketnoi.php';

function remove_accents($str) {
    $accents_arr = array(
        'a'=>'[àáạảãâầấậẩẫăằắặẳẵ]',
        'e'=>'[èéẹẻẽêềếệểễ]',
        'i'=>'[ìíịỉĩ]',
        'o'=>'[òóọỏõôồốộổỗơờớợởỡ]',
        'u'=>'[ùúụủũưừứựửữ]',
        'y'=>'[ỳýỵỷỹ]',
        'd'=>'[đ]',
        'A'=>'[ÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴ]',
        'E'=>'[ÈÉẸẺẼÊỀẾỆỂỄ]',
        'I'=>'[ÌÍỊỈĨ]',
        'O'=>'[ÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠ]',
        'U'=>'[ÙÚỤỦŨƯỪỨỰỬỮ]',
        'Y'=>'[ỲÝỴỶỸ]',
        'D'=>'[Đ]'
    );
    foreach($accents_arr as $nonAccent=>$accent){
        $str = preg_replace('/'.$accent.'/u', $nonAccent, $str);
    }
    return $str;
}

// Hàm tính điểm tương đồng giữa hai chuỗi
function similarity_score($str1, $str2) {
    // Chuyển cả hai chuỗi thành mảng các từ
    $words1 = explode(' ', $str1);
    $words2 = explode(' ', $str2);
    
    // Đếm số từ trùng khớp
    $matches = 0;
    foreach ($words1 as $word1) {
        if (strlen($word1) < 2) continue; // Bỏ qua các từ quá ngắn
        
        foreach ($words2 as $word2) {
            if (strlen($word2) < 2) continue; // Bỏ qua các từ quá ngắn
            
            // Kiểm tra từ trùng khớp hoặc từ chứa trong từ khác
            if ($word1 == $word2 || strpos($word2, $word1) !== false || strpos($word1, $word2) !== false) {
                $matches++;
                break; // Tìm thấy một từ trùng khớp, chuyển sang từ tiếp theo
            }
        }
    }
    
    // Tính điểm dựa trên số từ trùng khớp và độ dài của chuỗi tìm kiếm
    $score = $matches / max(count($words1), 1);
    
    return $score;
}

class ChatbotModel {
    public static function getTourByName($name) {
        global $conn;
        $name = trim(mb_strtolower($name));
        $name_no_accent = remove_accents($name);
        $name_no_accent = preg_replace('/\s+/', ' ', $name_no_accent);
        
        if (empty($name_no_accent)) {
            return false;
        }

        // Lấy tất cả tour
        $sql = "SELECT * FROM tourdulich";
        $result = mysql_query($sql, $conn);
        
        $best_match = null;
        $best_score = 0;
        
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                // Chuẩn hóa tên tour
                $tour_name = mb_strtolower($row['TenTour']);
                $tour_name_no_accent = remove_accents($tour_name);
                $tour_name_no_accent = preg_replace('/\s+/', ' ', $tour_name_no_accent);
                
                // Kiểm tra trùng khớp chính xác
                if ($name_no_accent == $tour_name_no_accent) {
                    return $row; // Trả về ngay nếu trùng khớp chính xác
                }
                
                // Kiểm tra chứa chuỗi con
                if (strpos($tour_name_no_accent, $name_no_accent) !== false) {
                    $score = 0.8; // Điểm cao nếu tên tour chứa chuỗi tìm kiếm
                } else {
                    // Tính điểm tương đồng
                    $score = similarity_score($name_no_accent, $tour_name_no_accent);
                }
                
                // Cập nhật tour phù hợp nhất
                if ($score > $best_score) {
                    $best_score = $score;
                    $best_match = $row;
                }
            }
        }
        
        // Trả về tour phù hợp nhất nếu điểm đủ cao
        if ($best_score >= 0.3) { // Ngưỡng điểm tối thiểu
            return $best_match;
        }
        
        return false;
    }
    
    // Hàm tìm kiếm tour theo từ khóa (có thể mở rộng trong tương lai)
    public static function searchTours($keyword) {
        global $conn;
        $keyword = trim(mb_strtolower($keyword));
        $keyword_no_accent = remove_accents($keyword);
        $keyword_no_accent = preg_replace('/\s+/', ' ', $keyword_no_accent);
        
        if (empty($keyword_no_accent)) {
            return array();
        }
        
        // Lấy tất cả tour
        $sql = "SELECT * FROM tourdulich";
        $result = mysql_query($sql, $conn);
        
        $matches = array();
        
        if ($result && mysql_num_rows($result) > 0) {
            while ($row = mysql_fetch_assoc($result)) {
                // Chuẩn hóa tên tour và mô tả
                $tour_name = mb_strtolower($row['TenTour']);
                $tour_name_no_accent = remove_accents($tour_name);
                $tour_name_no_accent = preg_replace('/\s+/', ' ', $tour_name_no_accent);
                
                $tour_desc = '';
                if (isset($row['MoTa'])) {
                    $tour_desc = mb_strtolower($row['MoTa']);
                    $tour_desc_no_accent = remove_accents($tour_desc);
                    $tour_desc_no_accent = preg_replace('/\s+/', ' ', $tour_desc_no_accent);
                }
                
                // Tính điểm tương đồng cho tên tour
                $name_score = similarity_score($keyword_no_accent, $tour_name_no_accent);
                
                // Tính điểm tương đồng cho mô tả tour (nếu có)
                $desc_score = 0;
                if (!empty($tour_desc_no_accent)) {
                    $desc_score = similarity_score($keyword_no_accent, $tour_desc_no_accent) * 0.5; // Mô tả có trọng số thấp hơn
                }
                
                // Lấy điểm cao nhất
                $score = max($name_score, $desc_score);
                
                // Thêm vào danh sách nếu điểm đủ cao
                if ($score >= 0.3) {
                    $row['score'] = $score;
                    $matches[] = $row;
                }
            }
        }
        
        // Sắp xếp kết quả theo điểm giảm dần
        usort($matches, function($a, $b) {
            if ($b['score'] > $a['score']) return 1;
            if ($b['score'] < $a['score']) return -1;
            return 0;
        });
        
        return $matches;
    }
}
