<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => 'Địa Đạo Vĩnh Mốc',
            'description' => 'Địa đạo Vịnh Mốc (thôn Vịnh Mốc, xã Kim Thạch, huyện Vĩnh Linh, tỉnh Quảng Trị) là một công trình quân - dân sự trong Chiến tranh Việt Nam của phía Việt Nam Dân chủ Cộng hòa nhằm chống lại các cuộc tấn công của phía Việt Nam Cộng hòa và Hợp chúng quốc Hoa Kỳ. Hệ thống địa đạo tồn tại ở phía Bắc sông Bến Hải, cầu Hiền Lương trong suốt những năm 1965-1972.',
            'content' => 'Lịch sử
            Trong những năm 1960, chính quyền Việt Nam Cộng hòa của Ngô Đình Diệm không tôn trọng hiệp định Genève, 1954 và không tiến hành tổng tuyển cử như dự định. Cùng với việc tấn công vào các phong trào nổi dậy ở miền Nam, Mỹ đã ra sức khiêu khích, gây chiến với lực lượng Việt Nam Dân chủ Cộng hòa bảo vệ giới tuyến ở Vĩnh Linh. Năm 1965, Mỹ đã tạo ra sự kiện Vịnh Bắc Bộ để bắt đầu cuộc chiến tranh phá hoại ra miền Bắc bằng không lực, trong đó Vĩnh Linh là mục tiêu đánh phá hàng đầu.
            
            Trong suốt những năm 1965 - 1972, Vĩnh Linh liên tục bị đánh phá với tổng cộng hơn nửa triệu tấn mìn đạn các loại[1]. Tính bình quân, mỗi người dân ở đây đã phải gánh chịu 7 tấn bom đạn Mỹ.[1], Quá trình xây dựng
            Địa đạo đầu tiên xuất hiện ở Việt Nam từ năm 1947 tại vùng Phú Thọ Hòa (nay thuộc Tân Bình - Thành phố Hồ Chí Minh). Rồi sau đó, những năm 1961 - 1965, ở Củ Chi đã xuất hiện hệ thống địa đạo lan rộng khắp 5 xã. Vào cuối năm 1963, ông Trần Nam Trung từ Trung ương Cục Đảng Cộng sản Việt Nam ở miền Nam Việt Nam trên đường ra Bắc đã ghé thăm khu vực chiến sự ở xã Vĩnh Giang (Vĩnh Linh). Sau khi quan sát địa hình, địa chất ở nơi đây, ông gợi ý Vĩnh Linh nên đào địa đạo như ở Củ Chi. Với phương châm: "Một tấc không đi, một li không rời. Mỗi làng, xã là một pháo đài", thông qua chỉ thị của khu ủy Vĩnh Linh, đồn trưởng đồn công an vũ trang nhân dân 140 Lê Xuân Vy đã chỉ huy đơn vị và nhân dân địa phương nhanh chóng tiến hành đào địa đạo. Công trình được bắt đầu từ đầu năm 1965 và được hoàn thành vào ngày 18 tháng 2 năm 1966. Điều đặc biệt là vị chỉ huy công trình Lê Xuân Vy này (công trình sư) lúc bấy giờ học vấn chỉ vừa hết tiểu học, và dụng cụ hiện đại nhất trong tay ông là chiếc la bàn cũ kỹ[2]. Hiện nay ông là cựu trung tá ở độ tuổi 85 đang cư ngụ ở thành phố Đông Hà và bị mù do ảnh hưởng bởi vết thương trong chiến tranh. Cấu trúc : Để bảo đảm cho hàng trăm con người ăn, ở, sinh hoạt an toàn, tiện lợi, dọc hai bên đường hầm người ta xây dựng rất nhiều căn hộ, mỗi căn hộ đủ chỗ cho ba đến bốn người ở. Trong lòng địa đạo có ba giếng nước, một hội trường (với sức chứa 50 người), bệnh xá, nhà hộ sinh, trạm phẫu thuật, bếp Hoàng Cầm, kho gạo, trạm đặt máy điện thoại[3]...

            Hai bên trục đường chính cách nhau từ ba đến năm mét lại khoét lõm sâu vào thành một hầm nhỏ, dùng làm nơi sinh hoạt của một gia đình. Địa đạo được cấu tạo thành ba tầng. Tầng một sâu cách mặt đất từ 12 đến 15 m, là nơi chiến đấu và trú ẩn tạm thời[3].
            
            Tầng hai sâu 18 m là nơi sống và sinh hoạt của nhân dân, đóng trụ sở của Đảng ủy, UBND và Bộ Chỉ huy quân sự. Tầng ba sâu 22 m dùng làm kho chứa hậu cần cung cấp cho đảo Cồn Cỏ và phục vụ chiến đấu của quân dân Vịnh Mốc[3].'
        ]);
    }
}
