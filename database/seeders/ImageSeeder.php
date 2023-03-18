<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'location_id' => '1',
                'image' => 'https://bloganchoi.com/wp-content/uploads/2022/07/du-lich-quang-tri-14.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://phongnhatourist.com/wp-content/uploads/2020/04/dia-dao-vinh-moc-5-1400x774.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://danviet.mediacdn.vn/upload/4-2015/images/2015-10-15/1444895799-dia-dao-vinh-moc3.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://danviet.mediacdn.vn/upload/4-2015/images/2015-10-15/1444895799-dia-dao-vinh-moc5.jpg',
            ],
            [
                'location_id' => '1',
                'image' => 'https://vnanet.vn/Data/Articles/2019/08/07/4009424/vna_potal_di_tich_quoc_gia_dac_biet_dia_dao_vinh_moc_va_he_thong_lang_ham_vinh_linh_105628490_stand.jpg',
            ],


            [
                'location_id' => '2',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/T%C6%B0%E1%BB%A3ng_%C4%91%C3%A0i_Giao_b%C6%B0u.JPG/640px-T%C6%B0%E1%BB%A3ng_%C4%91%C3%A0i_Giao_b%C6%B0u.JPG',
            ],
            [
                'location_id' => '2',
                'image' => 'https://d3.violet.vn/uploads/previews/document/0/232/583/0.Picture2.jpg.jpg',
            ],
            [
                'location_id' => '2',
                'image' => 'https://luhanhvietnam.com.vn/du-lich/vnt_upload/news/02_2020/dia-diem-du-lich-gio-linh-4.jpg',
            ],
            [
                'location_id' => '2',
                'image' => 'https://quangtritourism.com/wp-content/uploads/2022/04/doc-mieu-1.jpg',
            ],
            [
                'location_id' => '2',
                'image' => 'https://vietnamthoibao.org/wp-content/uploads/2021/09/co%CC%82ng-tru%CC%9Bo%CC%9B%CC%80ng-me%CC%82-linh-.jpg',
            ],
            


            //
            [
                'location_id' => '3',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/09/Th%C3%A0nh_c%E1%BB%95_Qu%E1%BA%A3ng_Tr%E1%BB%8B_4.jpg',
            ],
            [
                'location_id' => '3',
                'image' => 'https://phongnhaexplorer.com/wp-content/uploads/2019/12/thanh-co-quang-tri-2.jpg',
            ],
            [
                'location_id' => '3',
                'image' => 'https://vtv1.mediacdn.vn/thumb_w/650/2022/7/12/thanhcoquangtri1-1657560261886219439617-crop-16575602777281001530761.jpg',
            ],
            [
                'location_id' => '3',
                'image' => 'https://dbnd.quangngai.gov.vn/items/cms/3231.jpg',
            ],
            [
                'location_id' => '3',
                'image' => 'https://file1.dangcongsan.vn/data/0/images/2022/07/22/liendo/cc5cda70186ada34837b.jpg',
            ],

            //
            [
                'location_id' => '4',
                'image' => 'https://cdn.sgtiepthi.vn/wp-content/uploads/2022/08/Con-co-3.jpg',
            ],
            [
                'location_id' => '4',
                'image' => 'https://phongnhaexplorer.com/wp-content/uploads/du-lich-dao-con-co.jpg',
            ],
            [
                'location_id' => '4',
                'image' => 'https://cdn.vntrip.vn/cam-nang/wp-content/uploads/2017/09/toan-canh-dao-con-co.jpg',
            ],
            [
                'location_id' => '4',
                'image' => 'https://moitruongdulich.vn/mypicture/images/2020/DaoConCoAH.jpg',
            ],
            [
                'location_id' => '4',
                'image' => 'https://media.truyenhinhdulich.vn/upload/news/1963_hanh_trinh_kham_pha_dao_con_co_quang_tri.jpg',
            ],


            //
            [
                'location_id' => '5',
                'image' => 'https://phongnhaexplorer.com/wp-content/uploads/2020/01/cau-hien-luong-song-ben-hai.jpg',
            ],
            [
                'location_id' => '5',
                'image' => 'https://images.baodantoc.vn/uploads/2021/Th%C3%A1ng%207/Ng%C3%A0y_26/VI%E1%BA%BET%20B%C3%8AN%20C%E1%BA%A6U%20HI%E1%BB%80N%20L%C6%AF%C6%A0NG/3.jpg',
            ],
            [
                'location_id' => '5',
                'image' => 'https://phongnhaexplorer.com/wp-content/uploads/2020/01/cum-di-tich-lich-su-doi-bo-hien-luong-song-ben-hai.jpg',
            ],
            [
                'location_id' => '5',
                'image' => 'https://img.dantocmiennui.vn/t620/uploaded/ngotzz/2020_09_25/2223thang_7.jpg',
            ],
            [
                'location_id' => '5',
                'image' => 'https://image.nhandan.vn/w800/Files/Images/2022/04/30/z3379365077947_53486391ffafb8099-1651299714997.jpg',
            ],
        ]);
    }
}
